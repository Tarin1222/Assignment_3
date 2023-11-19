<?php 
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light"> Add user </a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sl no.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                $sql = "SELECT id, name, email, mobile, password FROM `crud`";
                $result = mysqli_query($conn, $sql);

                if ($result && mysqli_num_rows($result) > 0) {
                    $count = 1;
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>
                                <th scope="row">' . $count . '</th>
                                <td>' . (isset($row['name']) ? $row['name'] : '') . '</td>
                                <td>' . (isset($row['email']) ? $row['email'] : '') . '</td>
                                <td>' . (isset($row['mobile']) ? $row['mobile'] : '') . '</td>
                                <td>' . (isset($row['password']) ? $row['password'] : '') . '</td>
                                <td>';
                        // Buttons for each row with update and delete functionality
                        echo '<a href="edit.php?id=' . $row['id'] . '"><button class="btn btn-primary">Update</button></a> | ';
                        echo '<a href="delete.php?id=' . $row['id'] . '"><button class="btn btn-danger">Delete</button></a>';
                        echo '</td></tr>';
                        $count++;
                    }
                } else {
                    echo '<tr><td colspan="6">No records found</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
