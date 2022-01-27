<?php
$arr=["uname"=>"sumeetfartyal","pass"=>"123"];
$unameErr=$passErr=$success="";
if(isset($_POST['sub'])){
    $uname=$_POST['uname'];
    $pass=$_POST['pass'];
    if(empty($uname)){
        $unameErr="Please enter your user name";
    }else{
        if($uname!=$arr["uname"]){
            $unameErr="Invalid user name";
        }
    }
    if(empty($pass)){
        $passErr="Please enter your password";
    }else{
        if($pass!=$arr["pass"]){
            $passErr="Invalid password";
        }
    }
    if($unameErr=="" && $passErr==""){
        $success="Logged in Successfully!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
        <?php include("head.php");?>
        <link rel="stylesheet" href="css/signup.css">
        <title>Login</title>
</head>
<body>
    <?php include("nav.php");?>

    <section class="signup" >
        <form method="post" style="background-color: whitesmoke;">
            <span class="text-danger text-center"><h3><?php echo $success;?></h></span>
            <h3 style="color: #36454F;" class="m-3 text-center">LOG IN</h3>
            
            
            <hr style="border:1px solid gray;width: 90%;">

            <label for="Username"><b>Username</b></label><br>
            <input class="inputarea" type="text" name="uname" ><br>
            <span class="text-danger inputarea"><?php echo $unameErr;?></span><br>

            <label for="psw"><b>Password</b></label><br>
            <input class="inputarea" type="password" name="pass" ><br>
            <span class="text-danger inputarea"><?php echo $passErr;?></span><br>
            
            <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>
            
            <button type="submit" name="sub" class="signupbtn"><b>Log In</b></button>

            <p style="margin-left: 15px;font-size:small;font-weight:bold;text-align: center;">Don't have an account?<a style="color: #36454F;" href="SignUp.html">  Sign Up</a></p>
            <div>

            </div>
        </form>
    </section>

    <?php include("foot.php");?>
</body>
</html>