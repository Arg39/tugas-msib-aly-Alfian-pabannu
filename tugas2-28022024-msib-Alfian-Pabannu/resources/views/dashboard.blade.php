@extends('components.sidebar')

@section('container-sidebar')
    <div class=" px-20">
        <h1
            class="flex justify-center mb-4 text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white uppercase">
            Total Pendaftar <span class="text-blue-600 dark:text-blue-500 mx-2"> {{ $totalData }} </span> Siswa.
        </h1>


        <div class="flex flex-row justify-center px-20 py-8 gap-16">
            <div class="flex flex-col items-center">
                <h3 class="font-semibold text-xl mb-4">Ekonomi</h3>
                <div class="max-w-72">
                    <canvas id="ekonomiChart"></canvas>
                </div>
                <div class="mt-4" id="ekonomiPercentageList"></div>
            </div>

            <div class="flex flex-col items-center">
                <h3 class="font-semibold text-xl mb-4">Keaktifan</h3>
                <div class="max-w-72">
                    <canvas id="keaktifanChart"></canvas>
                </div>
                <div class="mt-4" id="keaktifanPercentageList"></div>
            </div>

            <div class="flex flex-col items-center">
                <h3 class="font-semibold text-xl mb-4">Prestasi</h3>
                <div class="max-w-72">
                    <canvas id="prestasiChart"></canvas>
                </div>
                <div class="mt-4" id="prestasiPercentageList"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk membuat diagram donat
            function createDonutChart(ctx, data, labelMapping, containerId) {
                var counts = data.reduce((acc, item) => {
                    acc[item] = (acc[item] || 0) + 1;
                    return acc;
                }, {});

                var labels = Object.keys(counts);
                var values = Object.values(counts);

                new Chart(ctx, {
                    type: 'doughnut',
                    data: {
                        labels: labels.map(label => labelMapping[label]),
                        datasets: [{
                            data: values,
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(context) {
                                        var total = context.dataset.data.reduce((a, b) => a + b, 0);
                                        var value = context.raw;
                                        var percentage = ((value / total) * 100).toFixed(2);
                                        return `${labelMapping[context.label]}: ${value} (${percentage}%)`;
                                    }
                                }
                            }
                        },
                        legend: {
                            display: false
                        }
                    }
                });

                var totalValues = values.reduce((a, b) => a + b, 0);
                var percentageList = document.getElementById(containerId);
                labels.forEach((label, index) => {
                    var percentage = ((values[index] / totalValues) * 100).toFixed(2);
                    var p = document.createElement('p');
                    p.textContent = `${labelMapping[label]}: ${values[index]} (${percentage}%)`;
                    percentageList.appendChild(p);
                });
            }

            // Data Ekonomi
            var ctxEkonomi = document.getElementById('ekonomiChart').getContext('2d');
            var dataEkonomi = @json($dataEkonomi);
            var labelMappingEkonomi = {
                1: 'Di atas 5 juta',
                2: '1 - 5 juta',
                3: '3 - 5 juta',
                4: '500 ribu - 5 juta',
                5: 'Di bawah 500 ribu'
            };
            createDonutChart(ctxEkonomi, dataEkonomi, labelMappingEkonomi, 'ekonomiPercentageList');

            // Data Keaktifan
            var ctxKeaktifan = document.getElementById('keaktifanChart').getContext('2d');
            var dataKeaktifan = @json($dataKeaktifan);
            var labelMappingKeaktifan = {
                1: 'Aktif',
                2: 'Cukup Aktif',
                3: 'Kurang Aktif',
                4: 'Tidak Aktif'
            };
            createDonutChart(ctxKeaktifan, dataKeaktifan, labelMappingKeaktifan, 'keaktifanPercentageList');

            // Data Prestasi
            var ctxPrestasi = document.getElementById('prestasiChart').getContext('2d');
            var dataPrestasi = @json($dataPrestasi);
            var labelMappingPrestasi = {
                1: 'Sangat Baik',
                2: 'Baik',
                3: 'Cukup',
                4: 'Kurang'
            };
            createDonutChart(ctxPrestasi, dataPrestasi, labelMappingPrestasi, 'prestasiPercentageList');
        });
    </script>
@endsection
