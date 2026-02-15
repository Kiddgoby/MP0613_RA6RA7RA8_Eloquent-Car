@extends('admin.layouts.master')

@section('title', "Voir location")

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Rental details</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('admin.rent.index') }}">Rentals</a></li>
            <li class="breadcrumb-item active">{{ $rent->id }}</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Here you can see all the cars in our parking.
            </div>
        </div>-->
        <div class="mb-4">
            <div class="card">
                <div class="card-header">
                    <h4>Rental #{{ $rent->id }}</h4>
                </div>
                <div class="card-body">
                    Under development...    
                </div>
            </div>

        </div>
    </div>
</main>
@endsection