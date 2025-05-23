<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bootstrap Site</title>
    
  <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css">
   
</head>
<body>
<div class="container">
    <button class="btn btn-primary my-5"><a href="user.php" class="text-white text-decoration-none">Add User</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">S.N.</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Password</th>
      <th scope="col">Operation</th>
    </tr>  
  </thead>

  <tbody>

<?php
$sql="select *from `crud`";
$result=mysqli_query($con,$sql);
if($result){
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    // $row=mysqli_fetch_assoc($result);
    // echo $row['name'];
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $name=$row['name'];
        $email=$row['email'];
        $phone=$row['phone'];
        $password=$row['password'];
        echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$name.'</td>
      <td>'.$email.'</td>
      <td>'.$phone.'</td>
      <td>'.$password.'</td>
      <td>
    <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light text-decoration-none">Update</a></button>
    <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button>
    </td>
    </tr>';
    }
}

?>

  </tbody>
</table>

</div>
</body>
</html>