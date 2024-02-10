$(document).ready(function() {
  $('#myForm').submit(function(e) {
    e.preventDefault(); // Prevent the default form submission

    var formData = new FormData(this);

    $.ajax({
      type: 'POST',
      url: $(this).attr('action'),
      data: formData,
      processData: false,
      contentType: false,
      success: function(response) {
        if (response.success) {
          swal("Success!", "Data inserted successfully!", "success");
          $('#myForm')[0].reset(); // Reset the form
        } else {
          swal("Success!", "Data inserted successfully!", "success");
          $('#myForm')[0].reset(); // Reset the form
        }
      },
      
    });
  });
});
