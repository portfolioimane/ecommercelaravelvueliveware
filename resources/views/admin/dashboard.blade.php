<!-- resources/views/admin/dashboard.blade.php -->
@extends('admin.layouts.admin')

@section('content')
    <h1 class="mb-4">Admin Dashboard</h1>

    <div class="container">
        <div class="row">
            <!-- Card 1 -->
            <div class="col-md-4">
                <div class="card card-primary">
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        <p class="card-text display-4">150</p>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="col-md-4">
                <div class="card card-success">
                    <div class="card-body">
                        <h5 class="card-title">Total Sales</h5>
                        <p class="card-text display-4">$45,000</p>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="col-md-4">
                <div class="card card-info">
                    <div class="card-body">
                        <h5 class="card-title">Total Orders</h5>
                        <p class="card-text display-4">560</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Card 4 -->
            <div class="col-md-6">
                <div class="card card-warning">
                    <div class="card-body">
                        <h5 class="card-title">Recent Orders</h5>
                        <p class="card-text">10 new orders</p>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="col-md-6">
                <div class="card card-danger">
                    <div class="card-body">
                        <h5 class="card-title">Customer Feedback</h5>
                        <p class="card-text">3 new reviews</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    .card {
        border-radius: 0.5rem;
        margin-bottom: 1.5rem;
        overflow: hidden;
        transition: box-shadow 0.3s ease;
        color: #fff;
    }

    .card-body {
        padding: 1.5rem;
    }

    .card-title {
        font-size: 1.25rem;
        font-weight: 600;
        margin-bottom: 0.5rem;
    }

    .card-text {
        font-size: 2rem;
        font-weight: 400;
    }

    .card-primary {
        background-color: #007bff; /* Blue */
    }

    .card-success {
        background-color: #28a745; /* Green */
    }

    .card-info {
        background-color: #17a2b8; /* Teal */
    }

    .card-warning {
        background-color: #ffc107; /* Yellow */
        color: #212529; /* Darker text color for readability */
    }

    .card-danger {
        background-color: #dc3545; /* Red */
    }

    .card:hover {
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    }

    @media (max-width: 768px) {
        .card-text {
            font-size: 1.5rem;
        }
    }
</style>
