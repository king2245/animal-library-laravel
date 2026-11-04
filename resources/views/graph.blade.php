
@extends('layouts.app')

@section('content')

    <h2>Animal Statistics</h2>

    <p>Number of animals by species in our database.</p>

    <div style="width: 100%; max-width: 850px; margin: 30px auto;">
        <canvas id="animalChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const labels = @json($labels);
        const values = @json($values);

        const ctx = document.getElementById('animalChart');

        new Chart(ctx, {
            type: 'bar',

            data: {
                labels: labels,

                datasets: [{
                    label: 'Number of animals',
                    data: values,
                    backgroundColor: '#285943',
                    borderColor: '#1e4433',
                    borderWidth: 1
                }]
            },

            options: {
                responsive: true,

                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        },
                        title: {
                            display: true,
                            text: 'Number of animals'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Species'
                        }
                    }
                }
            }
        });
    </script>

@endsection
