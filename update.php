<?php

include 'connect.php';
$id=$_GET['updateid'];
$sql="select * from `crud` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$phone=$row['phone'];
$password=$row['password'];


if(isset($_POST['submit'])){
  $name=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];

  $sql="update `crud` set id='$id', name='$name', email='$email', phone='$phone', password='$password' where id=$id";
  $result=mysqli_query($con,$sql);

  if($result){
    // echo "Updated successfully";
    header('location:display.php');
  }else{
    die(mysqli_error($con));
  }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
  <h2 class="mb-4">User Form</h2>
  <form action="" method="post">
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control" /*id="name"*/ name="name" placeholder="Enter your name" 
     required value=<?php echo $name; ?>>
    </div>
    
    <div class="mb-3">
      <label for="email" class="form-label">Email</label>
      <input type="email" class="form-control" /*id="email"*/ name="email" placeholder="Enter your email" 
     required value=<?php echo $email; ?>>
    </div>

    <div class="mb-3">
      <label for="phone" class="form-label">Phone</label>
      <input type="tel" class="form-control" /*id="phone"*/ name="phone" placeholder="Enter your phone number" 
     required value=<?php echo $phone; ?>>
    </div>

    <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="password" class="form-control" /*id="password"*/ name="password" placeholder="Enter your password" 
     required value=<?php echo $password; ?>>
    </div>

    <!-- <div class="mb-3">
      <label for="password" class="form-label">Password</label>
      <input type="text" class="form-control" /*id="password"*/ name="password" placeholder="Enter your password" value="1234" required>
    </div> -->

    <button type="submit" class="btn btn-primary" name="submit">Update</button>
  </form>
</div>

</body>
</html>
