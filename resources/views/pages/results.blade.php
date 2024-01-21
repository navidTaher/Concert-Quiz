<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-bold text-3xl text-black leading-tight">
            {{ __('Results') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900 space-y-2">
                    <div>
                        <canvas id="myChart" width="400" height="250"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex justify-center items-center absolute bottom-0 left-0 right-0 pb-6">
        <a href="{{ route('prize') }}">
            <x-primary-button>
                Choose Your Prize
            </x-primary-button>
        </a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['John', 'Jane', 'Rocky'],
                datasets: [{
                    backgroundColor: ['#77D689', '#049C6C', '#6100CA'], // Specify colors here
                    label: '# of Answers',
                    data: [6, 5, 3],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</x-guest-layout>
