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

@push('scripts')
<script>
$(document).ready(function() {
    $('#usersTable').DataTable({
        processing: true,
        serverSide: false,
        ajax: {
            url: '/api/users', // Ensure this URL matches the API route
            dataSrc: ''
        },
        columns: [
            { data: 'fname', title: 'First Name' },
            { data: 'lname', title: 'Last Name' },
            { data: 'contact', title: 'Contact' },
            { data: 'address', title: 'Address' },
            { data: 'barangay', title: 'Barangay' },
            { data: 'city', title: 'City' },
            { data: 'landmark', title: 'Landmark' },
            { 
                data: 'is_admin',
                title: 'Role',
                render: function(data) {
                    return data ? 'Admin' : 'User';
                }
            },
            { 
                data: 'is_activated',
                title: 'Active Status',
                render: function(data) {
                    return data ? 'Active' : 'Deactivated';
                }
            }
        ]
    });
});
</script>
@endpush