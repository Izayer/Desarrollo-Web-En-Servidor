$( document ).ready(function() {
$('#myForm').validator().on('submit', function (e) {
  if (e.isDefaultPrevented()) {
    // handle the invalid form...
  } else {
    // everything looks good!
    //$("#myForm").submit(function(e) {

    var url = "/mailer.php"; // the script where you handle the form input.

    $.ajax({
           type: "POST",
           url: url,
           data: $("#myForm").serialize(), // serializes the form's elements.
           
           success: function(data)
           {
               //alert(data); // show response from the php script.
               document.getElementById("ok").removeAttribute("hidden");
           },
           error: function(data)
           {
               //alert(data); // show response from the php script.
               document.getElementById("error").removeAttribute("hidden");
           }
           
         });

    e.preventDefault();
    // avoid to execute the actual submit of the form.
//});
  }
})
    
});