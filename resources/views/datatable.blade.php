<!-- resources/views/datatable.blade.php -->
@extends('layouts.app')

@section('title', 'User and Buyer Details')

@section('content')
    <h1 class="text-light">User and Buyer Details</h1>
    <table id="usersTable" class="display table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact</th>
                <th>Address</th>
                <th>Barangay</th>
                <th>City</th>
                <th>Landmark</th>
                <th>Role</th>
                <th>Active Status</th>
            </tr>
        </thead>
        <tbody>
            <!-- Table body will be populated by DataTables -->
        </tbody>
    </table>
@endsection

