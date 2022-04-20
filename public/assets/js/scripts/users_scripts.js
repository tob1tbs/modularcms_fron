function UserLogin() {
	var form = $('#user_login')[0];
    var data = new FormData(form);

    $.ajax({
        dataType: 'json',
        url: "/users/ajax/login",
        type: "POST",
        data: data,
        enctype: 'multipart/form-data',
        processData: false,
        contentType: false,
        cache: false,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
           if(data['status'] == true) {
       			window.location.replace(data['redirect_url']);
           }
        }
    });
}