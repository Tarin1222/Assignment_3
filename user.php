


<?php
/*include 'connect.php'; 
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];




if (isset($_POST['submit'])) {
    if (isset($_POST['name'], $_POST['email'], $_POST['mobile'], $_POST['password'])) {
        // Access $_POST values
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $password = $_POST['password'];

        // Your database insertion code here...
    } else {
        echo "Please fill in all the fields";
    }
}
}


$sql = "INSERT INTO `crud` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Data inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
    

</head>
<title>Crud</title>
<body>
    <div class="container my-5">

        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>

          
        </form>
    </div>
    <div class="container">

<form method="post">
    <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="Enter your email" name="email">
    </div>

    
</form>
</div>
<div class="container">

<form method="post">
    <div class="form-group">
        <label>Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile">
    </div>

    
</form>
</div>
<div class="container">

<form method="post">
    <div class="form-group">
        <label>Password</label>
        <input type="text" class="form-control" placeholder="Enter your password" name="password">
    </div>

    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>





</body>

</html>*/


include 'connect.php'; 

if(isset($_POST['submit'])){
    // Check if all fields are set and not empty
    if (isset($_POST['name'], $_POST['email'], $_POST['mobile'], $_POST['password']) && !empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['mobile']) && !empty($_POST['password'])) {

        // Retrieve form values
        $name=$_POST['name'];
        $email=$_POST['email'];
        $mobile=$_POST['mobile'];
        $password=$_POST['password'];

        // Insert data into database
        $sql = "INSERT INTO `crud` (name, email, mobile, password) VALUES ('$name', '$email', '$mobile', '$password')";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            //echo "Data inserted successfully";
            header('location:display.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        echo "Please fill in all the fields";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
    <link rel="stylesheet" href="style.css">
    <title>Crud</title>
</head>
<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email">
            </div>
            
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile">
            </div>
            
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>
</html>
