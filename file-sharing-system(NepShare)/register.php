<?php
@include 'db_connect.php';

if(isset($_POST['submit'])){
	$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);   
	$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
	$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
	$address= mysqli_real_escape_string($conn, $_POST['address']);
	$contact = mysqli_real_escape_string($conn, $_POST['contact']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpass']);
    $type = $_POST['type'];

	$select = " SELECT * From users WHERE email = '$email' && password = '$password' && type = '$type' ";
	$result = mysqli_query($conn, $select);

	if(mysqli_num_rows($result) > 0){

        $error[] = 'User Already Exist!';
    }else{
        if($password != $cpassword){
            $error[] = 'Password not matched';
        }
        else{
            $insert = "INSERT INTO users(firstname,middlename,lastname,address,contact,email,password,type) VALUES('$firstname','$middlename','$lastname','$address','$contact','$email','$password','$type')";
            mysqli_query($conn, $insert);
            header('location:index.php?page=home');
        }
    }

};

?>
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
  <title>Register | NepShare</title>
 	
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
	padding-top:0;
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
        <form action="" method="post">
            <h3>Register Now!</h3>
            <?php
            if(isset($error)){
                foreach($error as $error){
                    echo '<span class="error-msg">'.$error.'</span>';
                };
            };
            ?>
        <div class = 'col-mid-6'>
            <input type="text" name="firstname" required placeholder="First name">
			<input type="text" name="middlename"  placeholder="Middle name">
			<input type="text" name="lastname" required placeholder="Last name">
			<input type="text" name="address" required placeholder="Address">
			<input type="text" name="contact" required placeholder="Contact">
            <input type="email" name="email" required placeholder="Enter Your Email">
            <input type="password" name="password" required placeholder="Enter Your Password">
            <input type="password" name="cpass" required placeholder="Enter Confirm Your">
            <select name="type">
			<option value="2" <?php echo isset($type) && $type == 2 ? 'selected' : '' ?>>User</option>
            </select>
            <input type="submit" name="submit" value="Create NepShare account" class="form-btn">
            <p>Already have an account? <a href="login.php">Login Now</a></p>
        </form>
        </div>
    </div>
		</div>
</body>
</html>