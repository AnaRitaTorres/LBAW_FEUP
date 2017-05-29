$(document).ready(function(){

$('#submitRegister').click(function(){

  var name = $('#name').val();
  var surname = $('#surname').val();
  var username = $('#username').val();
  var password = $('#password').val();
  var date = $('#date').val();
  var gender = $('#gender').val();
  var email = $('#email').val();
  var phone = $('#phone').val();
  var repeat = $('#repeat').val();


   $.ajax({
        type: "POST",
        url: "../../api/users/register.php",
        data:{
          name : name,
          surname : surname,
          username : username,
          password : password,
          date : date,
          gender : gender,
          email : email,
          phone : phone,
          repeat : repeat
        },
         success: function(result){

					
			if(result.indexOf("pnot") != -1){
			   $('#passwordError').show(); 
			  
			}
			if(result.indexOf("anot") != -1){
				$('#ageError').show(); 
						
			}
			if(result.indexOf("unot") != -1){
				 $('#usernameError').show(); 
				 
			}
			if(result.indexOf("empty") != -1){
				  $('.error').show();
				  
			}
			if(result.indexOf("notok") != -1){
				  $('.error').show();
				  
			}
            if(result.indexOf("success") != -1){
				$('.field_error').hide();
				$('.error').hide();
                window.location = "../../index.php";
            }
         }

    });

    return false;

});

});
