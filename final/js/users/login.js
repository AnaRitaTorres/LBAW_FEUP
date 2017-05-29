$(document).ready(function () {

$('#submitLogin').click(function(event){

  var username = $('#username1').val();
  var password = $('#password1').val();
  
  $.ajax({
        type: "POST",
        url: "../../api/users/login.php",
        data:{
          username : username,
          password : password
        },
         success: function(result){

          if(result === "notok"){
              $('.error').show();
          }
          else{
              $('.error').hide();
              window.location = "../../index.php";
          }
        }

    });
    return false;

});
});
