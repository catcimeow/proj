function showError(field,message)
{
    if(!message){
        $("#" + field)
        .addClass("is-valid")
        .removeClass("is-invalid")
        .siblings(".invalid-feedback")
        .text("")
    } else {
        $("#" + field)
        .addClass("is-invalid")
        .removeClass("is-valid")
        .siblings(".invalid-feedback")
        .text(message);
    }
}

function removeValidationClasses(form){
    $(form).each(function(){
        $(form).find(':input').removeClass("is-valid is-invalid");
    })
}

function showMessage(type, message){
    return <div class="alert alert-${type} alert-dismissible fade show" role="alert">
  <strong>${message}</strong> You should check in on some of those fields below.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>;
}

function logout() {
    $.ajax({
        url: '/api/logout',  // Adjust the URL if needed
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')  // Ensure CSRF token is sent
        },
        success: function (response) {
            console.log('Logged out successfully');
            window.location.href = '/login';  // Redirect to login page or desired route
        },
        error: function (xhr, status, error) {
            console.error('Error logging out:', error);
        }
    });
}

