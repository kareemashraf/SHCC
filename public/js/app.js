
Manipulate();

/**
 * a simple jQuery method to call Ajax to use the API
 * Manipulate the image and add the filters then store the new created image
 */
function Manipulate() {

    $(".store-image").on('click', function() {
        var filename = $('.filename').val();
        $.ajax({
            type: 'POST',
            url: "api/create",
            data: {
                'filename': filename
            },
            async: false,
            success: function(data) {
                if (data.code == 404) {
                    $('.alert').addClass('alert-danger');
                    $('.alert-danger ul').html(data.message);
                } else {
                    location.reload();
                }
            },
            error: function(data) {
                $('.alert').addClass('alert-danger');
                $('.alert-danger ul').html("Invalid URL");
            }
        });
    });
}