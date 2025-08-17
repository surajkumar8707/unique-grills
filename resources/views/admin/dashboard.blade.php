@extends('admin.layout.app')
@section('title', 'Dashboard Page')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row g-6">
            {{-- Categories --}}
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('admin.categories.index') }}" class="text-decoration-none text-dark">
                    <div class="card card-border-shadow-primary h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-primary">
                                        <i class="icon-base bx bxs-category icon-lg"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0">{{ $dashboard_data['categories'] }}</h4>
                            </div>
                            <p class="mb-0">
                                <span class="text-heading fw-medium">Categories</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Products --}}
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('admin.product.index') }}" class="text-decoration-none text-dark">
                    <div class="card card-border-shadow-success h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-success">
                                        <i class="icon-base bx bxs-box icon-lg"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0">{{ $dashboard_data['products'] }}</h4>
                            </div>
                            <p class="mb-0">
                                <span class="text-heading fw-medium">Products</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Contacts --}}
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('admin.contacts') }}" class="text-decoration-none text-dark">
                    <div class="card card-border-shadow-warning h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-warning">
                                        <i class="icon-base bx bxs-contact icon-lg"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0">{{ $dashboard_data['contacts'] }}</h4>
                            </div>
                            <p class="mb-0">
                                <span class="text-heading fw-medium">Contacts</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>

            {{-- Home Page Carousel --}}
            <div class="col-lg-3 col-sm-6">
                <a href="{{ route('admin.home-page-carousel.index') }}" class="text-decoration-none text-dark">
                    <div class="card card-border-shadow-info h-100">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-2">
                                <div class="avatar me-4">
                                    <span class="avatar-initial rounded bg-label-info">
                                        <i class="icon-base bx bx-carousel icon-lg"></i>
                                    </span>
                                </div>
                                <h4 class="mb-0">{{ $dashboard_data['carousels'] }}</h4>
                            </div>
                            <p class="mb-0">
                                <span class="text-heading fw-medium">Home Page Carousel</span>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        {{-- Chart --}}
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Products by Category</h5>
                <canvas id="categoryProductChart" height="100"></canvas>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('categoryProductChart').getContext('2d');

        const labels = {!! json_encode(@$dashboard_data['category_chart_product_count']['labels']) !!};
        const data = {!! json_encode(@$dashboard_data['category_chart_product_count']['data']) !!};

        // Generate different colors for each bar
        const backgroundColors = [
            'rgba(255, 99, 132, 0.6)',
            'rgba(54, 162, 235, 0.6)',
            'rgba(255, 206, 86, 0.6)',
            'rgba(75, 192, 192, 0.6)',
            'rgba(153, 102, 255, 0.6)',
            'rgba(255, 159, 64, 0.6)',
            'rgba(199, 199, 199, 0.6)',
            'rgba(100, 255, 218, 0.6)',
            'rgba(255, 140, 0, 0.6)',
            'rgba(120, 120, 255, 0.6)'
        ];

        const borderColors = backgroundColors.map(color => color.replace('0.6', '1'));

        const categoryProductChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Total Products',
                    data: data,
                    backgroundColor: backgroundColors.slice(0, data.length),
                    borderColor: borderColors.slice(0, data.length),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            precision: 0
                        }
                    }
                }
            }
        });
    </script>
@endpush
