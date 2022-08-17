<?php
$dbname="rinika";
$username="root";
$servername="localhost";
$password="";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    if($_POST['show']){
        $query = "SELECT * FROM student";
        $query_run= mysqli_query($conn,$query);
        // if($query_run->num_rows >0){
        //     while($row = $query_run->fetch_assoc()) {
        //         echo "$row['name']";
        //         // echo "$row['phone']";
        //         // echo "$row['email']";
        //         // echo "$row['dob']";
        //         // echo "$row['address']";
        //         // echo "$row['country']";
        //         // echo "$row['city']";
        //         // echo "$row['state']";
        //         // echo "$row['pin']";
        //         // echo "$row['image']";
        //     }
        // }
        // if (mysqli_num_rows($query_run) > 0) {
        //     // OUTPUT DATA OF EACH ROW
        //     while($row = mysqli_fetch_assoc($query_run)) {
        //         echo "Name: " . $row["name"]
        //             . "Phone Number: "  . $row["phone"]
        //             . "Email: "  . $row["email"]
        //             . "Date of Birth: "  . $row["dob"]
        //             // . "Address: "  . $row["dob"]
        //             // . "Country: "  . $row["country"]
        //             // . "City: "  . $row["city"]
        //             // . "State: "  . $row["state"]     
        //         . "<br>";
        //     }
        // } else {
        //     echo "0 results";
        // }
    }
    // echo $query_run->name;
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Students</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <table class="table">
    <thead>
        <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Address</th>
        <th>Country</th>
        <th>City</th>
        <th>State</th>
        <th>PIN</th>
        <th>Profile Picture</th>
        <th>Edit</th>
        <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php
            while($row = mysqli_fetch_assoc($query_run)){
        ?>
        <tr>
        <th><?php echo($row["id"]) ?></th>
        <td><?php echo($row["name"]) ?></td>
        <td><?php echo($row["phone"]) ?></td>
        <td><?php echo($row["email"]) ?></td>
        <td><?php echo($row["dob"]) ?></td>
        <td><?php echo($row["address"]) ?></td>
        <td><?php echo($row["country"]) ?></td>
        <td><?php echo($row["city"]) ?></td>
        <td><?php echo($row["state"]) ?></td>
        <td><?php echo($row["pin"]) ?></td>
        <td><?php echo($row["image"]) ?></td>
        <td><a href='edit.php?id=<?php echo $row["id"];?>'>Edit</a></td>
        <td><a href='delete.php?id=<?php echo $row["id"];?>'>Delete</a></td>
        </tr>
        <?php
            }
        ?>
    </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>