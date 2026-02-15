@extends('admin.layouts.master')

@section('title', 'Users')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">User list</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('admin.home') }}">Home</a></li>
            <li class="breadcrumb-item active">Users</li>
        </ol>
        <!-- <div class="card mb-4">
            <div class="card-body">
                Here you can see all the cars in our parking.
            </div>
        </div>-->
        <div class="mb-4">
            <div>
                <a class="btn btn-primary m-3 disabled" href="#" role="button" >Add</a>
            </div>
            <div table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Date of birth</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name.' '.$user->last_name }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->date_of_birth }}</td>
                            <td>
                                <div class="dropdown open">
                                    <button class="btn btn-primary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Options
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('admin.user.show', ['id' => $user->id]) }}">View</a></li>
                                        <li><a class="dropdown-item" href="{{ route('admin.user.edit', ['id' => $user->id]) }}">Edit</a></li>
                                        <li><a class="dropdown-item" href="#">Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $users->links() }}
            </div>
        </div>
    </div>
</main>
@endsection