{{-- resources/views/landing.blade.php --}}
@extends('layouts.app')

@section('content')
    <h2 class="page-title">Club Comparison Overview</h2>

    <div class="table-container">
        <canvas id="clubComparisonChart" width="100%" height="60"></canvas>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const ctx = document.getElementById('clubComparisonChart').getContext('2d');
            const chartData = @json($chartData);

            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: chartData.labels,
                    datasets: chartData.datasets,
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            stacked: false
                        },
                        y: {
                            beginAtZero: true,
                            title: {
                                display: true,
                                text: chartData.unit
                            },
                            stacked: false
                        }
                    }
                }

            });
        });
    </script>
@endsection
