@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
    <div class="container">
        <h1>Admin Dashboard</h1>
        <!-- Logout Button -->
        <form id="logoutForm" action="{{ route('auth.logout') }}" method="POST">
            @csrf <!-- Include CSRF token -->
            <button type="submit" class="btn btn-link">Logout</button>
        </form>
        <!-- Example: Display a list of users -->
        <div class="card">
            <div class="card-header">
                Users List
            </div>
            <div class="card-body">
                <ul id="userList">
                    @foreach($users as $user)
                        <li>{{ $user->email }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
