<?php
include("connection.php");
?>

<html>
<title>AFFICHAGE</title>
<head><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="try.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body >
  <div class="mx-auto">
<h1>DATA</h1>
<form  method="POST" >
<table>
  <thead>
    <tr>
     <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Password</th>
      <th scope="col">Email</th>
      <th scope="col">Phonenumber</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
    $sql= "SELECT * from tableau1";
    $result=mysqli_query($conn,$sql);
     if($result){
        while($row=mysqli_fetch_assoc($result)){
        $id =$row["id"];
        $name =$row["fullname"];
        $password =$row["password1"];
        $email =$row["email"];
        $phonenumber =$row["phonenumber"];

        echo "
        <tbody>
    <tr>
      <th scope='row'>$id</th>
      <td>$name</td>
      <td>$password</td>
      <td>$email</td>
      <td>$phonenumber</td>
      <td><a href='update.php?idUpdated=$id' class='btn btn-primary btn-sm'>Update</a></td>
      <td><button type='submit' class='btn btn-danger  btn-sm'><a href='delete.php?idDeleted=$id'class='text-light'>Delete</a></button></td>
    </tr>";
    
        
       
     
    }}

     
     ?>
    

    
    

  </tbody>
  <button type='submit' class='btn btn-primary btn-sm'><a href='signup.php'class='text-light'>Add User</a></button>

</table>

</form>
</div>
</body>
</html>