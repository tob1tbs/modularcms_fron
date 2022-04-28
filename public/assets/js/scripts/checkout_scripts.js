function CheckoutSubmit() {
	var form = $('#checkout_form')[0];
    var data = new FormData(form);

    console.log(data);

    $.ajax({
        dataType: 'json',
        url: "/checkout/ajax/submit",
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
       			
           }
        }
    });
}