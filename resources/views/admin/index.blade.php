@extends('admin.layouts.master')

@section('title', 'Home')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Home</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Home</li>
        </ol>
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="card bg-light text-white mb-4">
                    <div class="card-body text-dark">Number of cars</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-dark fs-4" href="#">{{ $carsCount }}</p>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-light text-white mb-4">
                    <div class="card-body text-dark">Number of users</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-dark fs-4" href="#">{{ $usersCount }}</p>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="card bg-light text-white mb-4">
                    <div class="card-body text-dark">Number of ongoing rentals</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <p class="text-dark fs-4" href="#">{{ $ongoingRentalsCount }}</p>
                        <div class="small"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</main>
@endsection