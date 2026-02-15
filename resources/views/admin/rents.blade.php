@extends('admin.layouts.master')

@section('title', 'Rentals')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Rental list</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item active">Rentals</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Here you can see all the cars in our parking.
            </div>
        </div>-->
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif
        <div class="mb-4">
            <div>
                <a class="btn btn-primary m-3 disabled" href="{{ route('admin.rent.index') }}" role="button">Add</a>
            </div>
            <div table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Total cost</th>
                            <th>Payment status</th>
                            <th>Payment method</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($rents as $rent)
                        <tr>
                            <td>{{ $rent->id }}</td>
                            <td>{{ $rent->start_date}}</td>
                            <td>{{ $rent->end_date }}</td>
                            <td>{{ $rent->total_cost }} Euros</td>
                            <td>{{ $rent->payement_status }}</td>
                            <td>{{ $rent->payement_method }}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Options
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('admin.rent.show', ['id' => $rent->id]) }}">View</a></li>
                                        <li><a class="dropdown-item disabled" href="{{ route('admin.rent.edit', ['id' => $rent->id]) }}">Edit</a></li>
                                        <li><button type="button" class="dropdown-item" onclick="if(confirm('Are you sure you want to delete this rental?')) { document.getElementById('delete-form').submit(); }">Delete</button>
                                            <form id="delete-form" action="{{ route('admin.rent.destroy', ['id' => $rent->id]) }}" method="POST" style="display: none;">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $rents->links() }}
            </div>
        </div>
    </div>
</main>
@endsection