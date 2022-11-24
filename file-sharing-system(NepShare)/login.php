<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | NepShare</title>
 	
<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>
<style>
body {
      font-family: Arial;
      color: black !important;
   }
   .pane-container{
    display: flex;
    flex-direction: column;
    height: 85%;
    width: 100%;
   

   }
   .header-container{
    padding-left: 80px;
    margin-top:-5px;
    }   

    .heading{
    padding:20px;
    font-family: "GT Super WT","ui-serif","Georgia","Cambria","Times New Roman","Times","serif";
    color: #2a2b2e;
    font-size: 3rem;
    font-weight: 400;
    max-width: 80%;
   }
   .heading--strong{
    font-family: "GT Super WT","ui-serif","Georgia","Cambria","Times New Roman","Times","serif";
    color: #2a2b2e;
    font-weight: 900;
   }
   .sub-heading{
    font-family: Actief Grotesque,ui-sans-serif,system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;
    color: #2a2b2e;
    font-size: .875rem;
    font-weight: 400;
    margin-top: 0.75rem;
   }
   .left,.right {
      height: 100%;
      width: 50%;
      position: fixed;
      z-index: 1;
      top: 0;
      overflow-x: hidden;
      padding-top: 20px;
      flex:1;
   }
   .left {
      left: 0;
      background-color: #f5f7ff;
   }
   .right {
      right: 0;
      padding: 10px 0;
   }
   .centered {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
   }
   .centered img {
      width: 150px;
      border-radius: 50%;
   }
   .img-wrapper{
    align-items: center;
    display: flex;
    flex: 1;
    border-top-left-radius:20px;
	border-bottom-left-radius:20px;
    width: 100%;
   }
   .top-logo{
    width: 10%;
    padding-left: 20px;
    padding-top: 6px;
    margin-top: -14px;
    size: 10px 10px;
   }
   .container{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px;
}

.container .content h3{
    font-size: 30px;
    color: #333;
}

.container .content h3 span{
    background: crimson;
    color: #fff;
    border-radius: 5px;
    padding: 0 15px;
}

.container .content h1{
    font-size: 50px;
    color: #333;
}

.container .content h1 span{
    color: crimson;
}

.container .content p{
    font-size: 25px;
    margin-bottom: 20px;
}

.container .content .btn{
    display: inline-block;
    padding: 10px 30px;
    font-size: 20px;
    background: #333;
    color: #fff;
    margin: 0 5px;
    text-transform: capitalize;
}

.container .content .btn:hover{
    background: crimson;
}

.form-container{
    /*min-height: 100vh;*/
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
    padding-bottom: 60px; 
    /*background: #eee;  */
}

.form-container form{
    padding: 20px;
    border-radius: 5px;
    /*box-shadow:  0px 20px 20px #08010196;*/
    background: #fff;
    text-align: center;
    width: 400px;
}

.form-container form h3{
    font-size: 30px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color: #333;
}

.form-container form input, .form-container form select{
    width: 100%;
    padding: 10px 15px;
    font-size: 17px;
    margin: 8px 0px;
    background: #eee;
    border-radius: 55px;
}

.form-container form select option{
    background: #fff;
}

.form-container form .form-btn{
    background: rgb(25, 25, 25);
    color: #eee;
   /* text-transform: capitalize;*/
    font-size: 20px;
    cursor: pointer;
}

.form-container form .form-btn:hover{
    background: #060606;
    color: #eee;
}

.form-container form a {
    color: rgb(25, 25, 25);
    text-decoration: underline;
}

.form-container form .error-msg{
    margin: 10px 0;
    display: block;
    background: crimson;
    color: #fff;
    border-radius: 5px;
    font-size: 20px;
    padding: 10px;
}
*{
    font-family: "GT Super WT","ui-serif","Georgia","Cambria","Times New Roman","Times","serif";;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}
</style>
</head>

<body>
<div class="left">
<img class="top-logo" src="ne.jpg">
    <div class="pane-container" >
        <div class="header-container">
<h1 class="heading">The simplest way to share <span class ="heading--strong">big ideas</span></h1>
<h3 class="sub-heading" style="margin-top: -5px;
    padding-left: 21px;">Send files on your terms with NepShare</h3>
</div>
   <div class="pane-container" id="img-wrapper" style="padding-left:100px;padding-top: 50px;">
        <img class="img-wrapper" src="hye.jpg">
   </div>
</div>
</div>
<div class="right" >
<h1 class="heading--strong" style="text-align: center;padding-top:80px">NepShare</h1>
<div class="form-container">
  					<form id="login-form" >
						  <input type="email" name="email" required placeholder="Enter Your Email">
						  <input type="password" name="password" required placeholder="Enter Your Password">
						
			<input type="submit" name="submit" value="Log in with NepShare" class="form-btn">
            <p style="margin-top:15px">Don't have an account? <a href="register.php">Register Now</a></p>
  					</form>
  				</div>
  			</div>
  		</div>
  		</div>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  </div>
</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
	$('.number').on('input',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        $(this).val(val)
    })
</script>	
</html>