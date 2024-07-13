// resources/js/datatable.js

$(document).ready(function() {
    $('#usersTable').DataTable({
        processing: true,
        serverSide: false,
        ajax: {
            url: '/users',
            dataSrc: 'data'
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
