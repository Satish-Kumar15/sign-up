<?php
include("configg.php");
?>

<html>
<head>
<title>Reg</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<link rel="stylesheet" href="sty.css">


</head>
<body>
<div class="container">
<form method="post" name="form">
  <div class="form-group">
    <h4 class="display-4 text-center">Register</h4><hr><br>
   
  <div class="form-group">
    <label for="exampleInputPassword1">Full Name</label>
    <input type="name" class="form-control" id="exampleInputName" placeholder="Enter full name" name="name"  required>
    <span id="name" class="text-danger font-weight:bold"></span>
  </div>
  <div>
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required >


    <span id="mail" class="text-danger font-weight:bold"></span>
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter password" name="password"  required>
    <span id="pass" class="text-danger font-weight:bold"></span>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Confirm Password" name="confirm"  required>
    <span id="con" class="text-danger font-weight:bold"></span>
  </div>
 

   
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="number" class="form-control" id="exampleInputPhone" placeholder="Enter phone number" name="phone" required>
       
    <span id="phn" class="text-danger font-weight:bold"></span>
  </div>
 

  <button type="submit" class="btn btn-primary" name="submit">Register</button>
  </div>
</form>
<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $confirm=$_POST['confirm'];
   $phone=$_POST['phone'];


   $res=mysqli_query($mysqli,"INSERT into data values('$name','$email','$password','$confirm','$phone')");
   if($res)
   {
    echo "success";
   }
   else
   {
    echo "failed";
   }
}
?>
</body>
</html>