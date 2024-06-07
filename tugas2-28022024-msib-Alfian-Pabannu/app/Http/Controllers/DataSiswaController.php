<?php

namespace App\Http\Controllers;

use App\Models\data_siswa;
use App\Models\kriteria;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Maatwebsite\Excel\Facades\Excel;

class DataSiswaController extends Controller
{
    public function index()
    {
        $dataEkonomi = data_siswa::pluck('ekonomi')->toArray();
        $dataKeaktifan = data_siswa::pluck('keaktifan')->toArray();
        $dataPrestasi = data_siswa::pluck('prestasi')->toArray();
        $totalData = data_siswa::count();
        // dd($dataEkonomi);
        return view('dashboard',[
            'page' => 'dashboard',
            'dataEkonomi' => $dataEkonomi,
            'dataKeaktifan' => $dataKeaktifan,
            'dataPrestasi' => $dataPrestasi,
            'totalData' => $totalData,
        ]);
    }
    public function create(Request $request)
    {
        data_siswa::create([
            'nama' => $request['nama'],
            'nis' => $request['nis'],
            'us' => $request['us'],
            'un' => $request['un'],
            'ekonomi' => $request['ekonomi'],
            'keaktifan' => $request['keaktifan'],
            'prestasi' => $request['prestasi'],
        ]);
        return redirect('/pendaftaran');
    }

    public function showpendaftar()
    {   
        App::setLocale('id');

        // Mengambil semua data siswa
        $data = data_siswa::all();
        $tanggal = [];
        foreach ($data as $siswa) {
            // Mengubah format created_at menjadi hanya tanggal (hari, tanggal-bulan-tahun)
            $tanggal[] = Carbon::parse($siswa->created_at)->translatedFormat('l, d F Y');
        }

        return view('pendaftar', [
            'page' => 'data-pendaftar',
            'data' => $data,
            'tanggal' => $tanggal,
        ]);
    }

    public function showahp()
    {
        $kriteria = kriteria::all();
        $perbandingan = $this->getMatrixPerbandingan($kriteria);
        $perbandingan_normalisasi = $this->getMatrixPerbandinganNormalisasi($perbandingan);
        $bobot_kriteria = $this->getBobotKriteria($perbandingan_normalisasi);
        $konsistensi_matrix = $this->getKonsistensiMatrix($perbandingan, $bobot_kriteria);
        return view('ahp',[
            'page' => 'decision',
            'kriteria' => $kriteria,
            'perbandingan' => $perbandingan,
            'perbandingan_normalisasi' => $perbandingan_normalisasi,
            'bobot_kriteria' => $bobot_kriteria,
            'konsistensi_matrix' => $konsistensi_matrix,
        ]);
    }
    
    public function showrank()
    {
        
        $data = $this->getRank();
        
        return view('rank',[
            'data' => $data,
            'page' => 'rank'
        ]);
    }
    
    public function tableToExcel ()
    {
        $data = $this->getRank();
        return view('beasiswa', [
            'data' => $data,
        ]);
    }

    // public function export()
    // {
        
    //     return Excel::download(new 'beasiswa', 'beasiswa.xlsx');
    // }

    private function getRankSiswa($dataSiswa, $dataKriteria) {
        $result = [];
        foreach ($dataSiswa as $siswa) {
            $nilai = 0;
            foreach ($siswa['data'] as $index => $nilaiSiswa) {
                $nilai += $nilaiSiswa * $dataKriteria[$index]['data'];
            }
            $result[] = ['nama' => $siswa['nama'], 'hasil' => $nilai];
        }
    
        usort($result, function($a, $b) {
            return $b['hasil'] <=> $a['hasil'];
        });
    
        return $result;
    }
    
    private function getRank() {
        $kriteria = kriteria::all();
        $perbandingan = $this->getMatrixPerbandingan($kriteria);
        $perbandingan_normalisasi = $this->getMatrixPerbandinganNormalisasi($perbandingan);
        $bobot_kriteria = $this->getBobotKriteria($perbandingan_normalisasi);
    
        $data_siswa = data_siswa::all();
        $matrix_siswa = $this->getMatrixSiswa($data_siswa);
        $matrix_siswa = $this->getMatrixPerbandinganNormalisasi($matrix_siswa);
        array_pop($matrix_siswa);
        // dd($matrix_siswa);
        
        $hasilPerhitungan = $this->getRankSiswa($matrix_siswa, $bobot_kriteria);
    
        return $hasilPerhitungan;
    }
    
    private function getMatrixSiswa($data_siswa) {
        $data = [];
        $akademik = 0;
        $ekonomi = 0;
        $keaktifan = 0;
        $prestasi = 0;
        foreach($data_siswa as $baris1 => $item1){
            $data[$baris1]['nama'] = $item1->nama;
            $akademik_siswa = ($item1->us + $item1->un) / 20;
            $ekonomi_siswa = $item1->ekonomi;
            $keaktifan_siswa = $item1->keaktifan;
            $prestasi_siswa = $item1->prestasi;
    
            $data[$baris1]['data'][] = $akademik_siswa;
            $data[$baris1]['data'][] = $ekonomi_siswa;
            $data[$baris1]['data'][] = $keaktifan_siswa;
            $data[$baris1]['data'][] = $prestasi_siswa;
            
            $akademik += $akademik_siswa;
            $ekonomi += $ekonomi_siswa;
            $keaktifan += $keaktifan_siswa;
            $prestasi += $prestasi_siswa;
        }
        $data[] = [
            "nama" => 'Total',
            "data" => [$akademik, $ekonomi, $keaktifan, $prestasi],
        ];
        
        return $data;
    }
    
    private function getMatrixPerbandingan($kriteria) {
        $data = [];
        $total = [];
        foreach ($kriteria as $k1_key => $k1) {
            $data[$k1_key]['kriteria'] = $k1->kriteria;
            foreach ($kriteria as $k2_key => $k2) {
                $kecocokan = $k1->nilai / $k2->nilai;
                $data[$k1_key]['data'][] = $kecocokan;
                $total[$k2_key] = array_key_exists($k2_key, $total) ? $total[$k2_key] + $kecocokan : $kecocokan;
            }
        }
        $data[] = [
            "nama" => 'Total',
            "data" => $total
        ];
        return array_values($data);
    }
    
    private function getMatrixPerbandinganNormalisasi($matrix_perbandingan) {
        foreach ($matrix_perbandingan as $mp_key => $mp) {
            foreach ($mp['data'] as $key => $data) {
                $matrix_perbandingan[$mp_key]["data"][$key] = $data / $matrix_perbandingan[array_key_last($matrix_perbandingan)]['data'][$key];
            }
        }
    
        return $matrix_perbandingan;
    }
    
    private function getBobotKriteria($perbandingan_normalisasi) {
        foreach ($perbandingan_normalisasi as $p_n_key => $p_n) {
            $avg = 0;
            foreach ($p_n['data'] as $key => $data) {
                $avg += $data;
            }
            $avg = $avg / count($p_n['data']);
            $perbandingan_normalisasi[$p_n_key]['data'] = $avg;
        }
    
        return $perbandingan_normalisasi;
    }
    
    private function getKonsistensiMatrix($perbandingan, $bobot_kriteria) {
        $ax = [];
        foreach ($perbandingan as $p_key => $p_d) {
            foreach ($p_d['data'] as $key => $data) {
                $ax[$p_key][] = $bobot_kriteria[$key]['data'] * $data;
            }
            $ax[$p_key] = array_sum($ax[$p_key]);
        }
        $ax_x = [];
        foreach ($bobot_kriteria as $b_key => $bobot) {
            $ax_x[$b_key] = $ax[$b_key] / $bobot['data'];
        }
        array_pop($ax_x);
        $lam_ax_x = array_sum($ax_x) / count($ax_x);
        $ci = ($lam_ax_x - count($ax_x)) / (count($ax_x) - 1);
    
        return [$ax, $ax_x, $lam_ax_x, $ci];
    }
    
}
