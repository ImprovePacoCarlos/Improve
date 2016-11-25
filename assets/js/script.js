	/*
Author: Pradeep Khodke
URL: http://www.codingcage.com/
*/

$('document').ready(function()
{ 
     /* validation */
	 $("#login-form").validate({
      rules:
	  {
			password: {
			required: true,
			},
			user_email: {
            required: true,
            email: true
            },
	   },
       messages:
	   {
            password:{
                      required: "porfavor ingrese su contraseña"
                     },
            user_email: "porfavor ingrese su correo electronico o nombre de usuario",
       },
	   submitHandler: submitForm	
       });  
	   /* validation */
	   
	   /* login submit */
	   function submitForm()
	   {		
			var data = $("#login-form").serialize();
				
			$.ajax({
				
			type : 'POST',
			url  : '../Improve/Application/controllers/login.php',
			data : data,
			beforeSend: function()
			{	
				$("#error").fadeOut();
				$("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; enviando ...');
			},
			success :  function(response)
			   {						
					if(response=="ok"){
									
						$("#btn-login").html('<img src="../Improve_mvc/assets/img/ajax-loader.gif" /> &nbsp; Entrando ...');
						setTimeout(' window.location.href = "../Improve/Application/views/admin.php"; ',3000);

					}else if(response=="ven"){

						$("#btn-login").html('<img src="../Improve_mvc/assets/img/ajax-loader.gif" /> &nbsp; Entrando ...');
						setTimeout(' window.location.href = "../Improve/Application/views/admin.php"; ',3000);
					}

					else{
									
						$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
											$("#btn-login").html('<span class="glyphicon glyphicon-log-in"></span> &nbsp; Entrar');
									});
					}
			  }
			});
				return false;
		}
	   /* login submit */
});