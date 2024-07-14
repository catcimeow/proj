// dashboard.js

// Function to fetch users data via AJAX
function fetchUsers() {
    $.ajax({
        url: '/api/admin/dashboard', // Replace with your API endpoint
        method: 'GET',
        success: function(response) {
            displayUsers(response.users); // Assuming API returns an object with 'users' key
        },
        error: function(xhr, status, error) {
            console.error('Error fetching users:', error);
        }
    });
}

// Function to display users in the dashboard
function displayUsers(users) {
    let userList = $('#userList'); // Assuming you have a <ul> element with id 'userList'
    userList.empty(); // Clear existing list
    users.forEach(function(user) {
        userList.append(`<li>${user.email}</li>`); // Display each user's email (adjust as per your data structure)
    });
}

// Document ready function
$(document).ready(function() {
    // Fetch users when the page loads
    fetchUsers();
});
