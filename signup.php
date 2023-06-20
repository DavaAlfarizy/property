<?php 
require 'func.php' ;
if(isset($_POST["submit"])){
  
$user = $_POST['email'];
$pass = $_POST['pass'];
$pass2 = $_POST['conpass'];

$sql = "SELECT * FROM account WHERE email = '$user'";

$result = mysqli_query($server, $sql);


if (mysqli_num_rows($result) > 0) {
    echo "<script> alert('username already used.')</script>";
    die;
}
if ($pass == $pass2) {
    $connect = mysqli_connect("localhost", "root", "", "db_project");
    mysqli_query($server, "INSERT INTO account VALUES ('','$user','$pass')");
    echo "<script> 
    alert('Register succescfull !')
    document.location.href='login.php';
    </script>";

} else {
    echo "<script> alert('password1 dan password2 berbeda')</script>";
}

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to your account</title>
</head>
<style>


  .form_container {
  width: fit-content;
  height: fit-content;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 15px;
  padding: 50px 40px 20px 40px;
  background-color: #ffffff;
  box-shadow: 0px 106px 42px rgba(0, 0, 0, 0.01),
    0px 59px 36px rgba(0, 0, 0, 0.05), 0px 26px 26px rgba(0, 0, 0, 0.09),
    0px 7px 15px rgba(0, 0, 0, 0.1), 0px 0px 0px rgba(0, 0, 0, 0.1);
  border-radius: 11px;
  font-family: "Inter", sans-serif;
  margin-left: 550px;
  margin-top: 50px;
}

.logo {
  box-sizing: border-box;
  width: 80px;
  height: 80px;
  background: linear-gradient(180deg, rgba(248, 248, 248, 0) 50%, #F8F8F888 100%);
  border: 1px solid #F7F7F8;
  filter: drop-shadow(0px 0.5px 0.5px #EFEFEF) drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  border-radius: 11px;
}

.title_container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.title {
  margin: 0;
  font-size: 1.25rem;
  font-weight: 700;
  color: #212121;
}

.subtitle {
  font-size: 0.725rem;
  max-width: 80%;
  text-align: center;
  line-height: 1.1rem;
  color: #8B8E98
}

.input_container {
  width: 100%;
  height: fit-content;
  position: relative;
  display: flex;
  flex-direction: column;
  gap: 5px;
}

.iconv {
  width: 20px;
  position: absolute;
  z-index: 99;
  left: 12px;
  bottom: 9px;
}

.input_label {
  font-size: 0.75rem;
  color: #8B8E98;
  font-weight: 600;
}

.input_field {
  width: auto;
  height: 40px;
  padding: 0 0 0 40px;
  border-radius: 7px;
  outline: none;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  transition: all 0.3s cubic-bezier(0.15, 0.83, 0.66, 1);
}

.input_field:focus {
  border: 1px solid transparent;
  box-shadow: 0px 0px 0px 2px #242424;
  background-color: transparent;
}

.sign-in_btn {
  width: 100%;
  height: 40px;
  border: 0;
  background: #115DFC;
  border-radius: 7px;
  outline: none;
  color: #ffffff;
  cursor: pointer;
}

.sign-in_ggl {
  width: 100%;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: #ffffff;
  border-radius: 7px;
  outline: none;
  color: #242424;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  cursor: pointer;
}

.sign-in_apl {
  width: 100%;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  background: #212121;
  border-radius: 7px;
  outline: none;
  color: #ffffff;
  border: 1px solid #e5e5e5;
  filter: drop-shadow(0px 1px 0px #efefef)
    drop-shadow(0px 1px 0.5px rgba(239, 239, 239, 0.5));
  cursor: pointer;
}

.separator {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 30px;
  color: #8B8E98;
}

.separator .line {
  display: block;
  width: 100%;
  height: 1px;
  border: 0;
  background-color: #e8e8e8;
}

.note {
  font-size: 0.75rem;
  color: #8B8E98;
  text-decoration: underline;
}
.hv-acc{
  font-size: 15px;
  color: #8B8E98;
}
  

</style>
<body>
  <form class="form_container" action="#" method="post">
    <img class="logo" src="img/Real Estate Logo Design Vector Template Logo Template.jpg" width="100px">
    <div class="title_container">
      <p class="title">Create new account</p>
      <span class="subtitle">Get started with our app, just create an account and enjoy the experience.</span>
    </div>
    <br>
    <div class="input_container">
      <label class="input_label" for="email_field">Email</label>
      <i class="fa-solid fa-envelope"></i>
      <input placeholder=" name@mail.com" title="Inpit title" name="email" type="text" class="input_field" id="email_field">
    </div>
    <div class="input_container">
      <label class="input_label" for="password_field">Password</label>
      <input placeholder="Password" title="Inpit title" name="pass" type="password" class="input_field" id="password_field">
    </div>
    <div class="input_container">
      <input placeholder="Confirm Password" title="Inpit title" name="conpass" type="password" class="input_field" id="password_field">
    </div>
    <button title="Sign In" type="submit" name = "submit" class="sign-in_btn">
      <span>Sign up</span>
    </button>
    <h6 class="hv-acc">Already have account? <a href="login.php">Login</a></h6>
  
    <div class="separator">
      <hr class="line">
      <span>Or</span>
      <hr class="line">
    </div>
    <button title="Sign In" type="submit" class="sign-in_ggl">
        </clipPath>
      </svg>
      <span>Sign In with Google</span>
    </button>
    <button title="Sign In" type="submit" class="sign-in_apl">
      <span>Sign In with Apple</span>
    </button>
    <p class="note">Terms of use &amp; Conditions</p>
  </form>
  <button>
    <a href="index.html">Go Back</a>
  </button>
  
</body>
</html>