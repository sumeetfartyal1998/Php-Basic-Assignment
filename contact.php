<?php 
error_reporting(0);
//define variables
$errfname=$errlname=$errfeedback=$erremail=$errcnumber="";

if(isset($_POST['sub'])){
    $fname=input_field($_POST['fname']);
    $lname=input_field($_POST['lname']);
    $feedback=input_field($_POST['feedback']);
    $cnum=input_field($_POST['cnumber']);
    $email=input_field($_POST['email']);
    
    // validate fname
    if(empty($fname)){
       $errfname = "is-invalid";
    }
    else{
      if(!(preg_match("/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i",$fname))){
        $errfname = "is-invalid";
      }
      else{
        $errfname = "is-valid";
      }
        
    }

    // validate lname
    if(empty($lname)){
        $errlname = "is-invalid";
    }
    else{
      if(!(preg_match("/^(?=.{1,50}$)[a-z]+(?:['_.\s][a-z]+)*$/i",$lname))){
        $errlname = "is-invalid";
      }
      else{
        $errlname = "is-valid";
      }
    }



    // validate feedback
    if(empty($feedback)){
        $errfeedback = "is-invalid";
    }
    else{
        $errfeedback = "is-valid";
      }

    // validate Contact Number

    if(empty($cnum)){
      $errcnumber = "is-invalid";
    }
    else{
      if(!(preg_match("/^[6-9][0-9]{9}+$/",$cnum))){
        $errcnumber = "is-invalid";
      }
      else{
        $errcnumber = "is-valid";
      }
    }

    // validate Email

    if(empty($email)){
      $erremail = "is-invalid";
    }
    else{
      if(!(preg_match("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/",$email))){
        $erremail = "is-invalid";
      }
      else{
        $erremail = "is-valid";
      }
    }

  }

function input_field($data){
    $data=trim($data);
    $data=stripslashes($data);
    $data=htmlspecialchars($data);
    return $data;
}

?>

<!doctype html>
<html lang="en">
<head>
    <?php include("head.php");?>
    <link rel="stylesheet" href="css/contact1.css">
    <title>Contact Us</title> 
</head>
<body class="bgimage" >
    <?php include("nav.php");?>
    <main class="d-flex justify-content-center">
        <form method="post" class="mt-4 p-4" >
            <label for="fname"  class="label" >First Name</label>
            <input class="info" type="text"  name="fname"  placeholder="Enter your name" >
            <span class="text-danger"><?php echo $errfname?></span><br>
        
            <label for="lname" class="label">Last Name</label>
            <input class="info" type="text" name="lname"  placeholder="Enter your last name">
            <span id="err2"><?php echo $errlname?></span> <br>
            
            
            <label for="phone" class="label">Phone Number</label>
            <input class="info" type="text" name="cnumber"  placeholder="Enter your phone number">
            <span id="err3"><?php echo $errcnumber?></span><br>

            <label for="email" class="label">Email ID</label>
            <input class="info" type="email" name="email"  placeholder="Enter your email id">
            <span id="err4"><?php echo $erremail?></span>
 
            <label for="message" class="label">Write your message</label>
            <textarea type="text" class="info" rows='5' placeholder="Write your query" name="feedback"></textarea>
            <span id="err5"><?php echo $errfeedback?></span>

            
            <button type="submit" class="btn btn-danger" name="sub">Submit</button>
        </form>
    </main>

    <?php include("foot.php");?>
</body>
</html>