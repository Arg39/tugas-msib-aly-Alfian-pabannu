<?php

class civitas {
    protected $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

class Mahasiswa extends civitas {
    protected $NIM;

    public function __construct($nama, $NIM) {
        parent::__construct($nama);
        $this->NIM = $NIM;
    }

    public function getNIM() {
        return $this->NIM;
    }
}

class DosenWali extends civitas {
    protected $kampus;

    public function __construct($nama, $kampus) {
        parent::__construct($nama);
        $this->kampus = $kampus;
    }

    public function getKampus() {
        return $this->kampus;
    }
}

class MataKuliah {
    protected $kode;
    protected $nama;

    public function __construct($kode, $nama) {
        $this->kode = $kode;
        $this->nama = $nama;
    }

    public function getKode() {
        return $this->kode;
    }

    public function getNama() {
        return $this->nama;
    }
}

class MataKuliahWajib extends MataKuliah {
    protected $sks;

    public function __construct($kode, $nama, $sks) {
        parent::__construct($kode, $nama);
        $this->sks = $sks;
    }

    public function getSKS() {
        return $this->sks;
    }
}

class MataKuliahPilihan extends MataKuliah {
    protected $sks;
    protected $prasyarat;

    public function __construct($kode, $nama, $sks, $prasyarat) {
        parent::__construct($kode, $nama);
        $this->prasyarat = $prasyarat;
        $this->sks = $sks;
    }

    public function getPrasyarat() {
        return $this->prasyarat;
    }
    public function getSKS() {
        return $this->sks;
    }
}

$user = new Mahasiswa("Alfian Pabannu", "10211011");

$list_matakuliah = array(
    new MataKuliahWajib("MKW001", "Matematika Dasar", 3),
    new MataKuliahWajib("MKW002", "Bahasa Inggris", 2),
    new MataKuliahWajib("MKW003", "Pemrograman Dasar", 4),
    new MataKuliahPilihan("MKP001", "Pemrograman Web",3, "Pemrograman Dasar"),
    new MataKuliahPilihan("MKP002", "Basis Data", 2, "Pemrograman Dasar"),
    new MataKuliahPilihan("MKP003", "Jaringan Komputer", 4, "Pemrograman Dasar")
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir Registrasi Semester</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Formulir Rencana Studi Institut Teknologi kalimantan</h1>
        <form id="form_frs" action="submit_frs.php" method="POST">
            <label for="nama">Nama: <?php echo $user->getNama() ?></label>
            <label for="nim">NIM: <?php echo $user->getNIM() ?></label>
            
            <h2>Pilihan Mata Kuliah:</h2>
            <table class="matakuliah">
                <tr>
                    <th>Kode</th>
                    <th>Nama Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Ambil</th>
                </tr>
                <?php foreach ($list_matakuliah as $matakuliah): ?>
                <tr>
                    <td>
                    <?php echo $matakuliah->getKode(); ?>
                    </td>
                    <td>
                    <?php echo $matakuliah->getNama(); ?>
                    </td>
                    <td>
                    <?php echo $matakuliah->getSKS(); ?>
                    </td>
                    <td><input type="checkbox" id="matkul1" name="matkul[]" value="Matematika Dasar"></td>
                </tr>
                <?php endforeach; ?>
            </table>

            <input class="btn-submit" type="submit" value="Submit">
        </form>
    </div>
</body>
<script>
    var form = document.getElementById('form_frs');
    
    form.addEventListener('submit', function(event) {
        event.preventDefault(); 
        
        var checkboxes = document.querySelectorAll('input[type="checkbox"]:checked');
        
        if (checkboxes.length === 0) {
            alert('Anda belum memilih mata kuliah!');
        } else {
            var pesan = 'Anda telah memilih mata kuliah:\n';
            checkboxes.forEach(function(checkbox) {
                
                
                var nama_matkul = checkbox.closest('tr').querySelector('td:nth-child(2)').innerText;
                
                pesan +=  nama_matkul + '\n';
            });
            alert(pesan);
            
            form.submit();
        }
    });
</script>
</html>

