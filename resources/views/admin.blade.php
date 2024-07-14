@extends('layouts.app') <!-- Assuming you have a main layout file -->

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <!-- Example: Display a list of users -->
        <div class="card">
            <div class="card-header">
                Users List
            </div>
            <div class="card-body">
                <ul>
                    @foreach($users as $user)
                        <li>{{ $user->email }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
