<?php
$dbname="rinika";
$username="root";
$servername="localhost";
$password="";
$conn = mysqli_connect($servername,$username,$password,$dbname);
if($conn){
    $sid=$_GET['id'];
    $query= "SELECT * FROM student WHERE id ='$sid'";
    $query_run=mysqli_query($conn,$query);
    $data= mysqli_fetch_assoc($query_run);
}
?>

<form action="" method="post">
        <label for="name">Name: </label>
        <input type="text" name="name" id="" value='<?php echo $data["name"] ?>' required><br/><br/>
        <label for="phone">Phone Number: </label>
        <input type="text" name="phone" id="" placeholder="Enter Phone Number" value='<?php echo $data["phone"] ?>' required><br/><br/>
        <label>Email: </label>
        <input type="email" name="email" id="" value='<?php echo $data["email"] ?>'><br/><br/>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="datepick" value='<?php echo $data["dob"] ?>' required><br/><br/>
        <label for="address">Residential Address:</label><br/>
        <textarea name="address" id="" cols="50" rows="5"></textarea><br/><br/>
        <label for="country">Country: </label>
        <select name="country" id="">
            <option value="-1">Enter Country Name</option>
            <option value="1">India</option>
        </select>
        <label for="state">State: </label>
        <select name="state" id="">
            <option value="-1">State</option>
            <option value="1">3</option>
        </select>
        <label for="city">City: </label>
        <select name="city" id="">
            <option value="-1">City</option>
            <option value="1">t</option>
        </select>
        <br/><br/>
        <label for="pin">PIN Code: </label>
        <input type="text" name="pin" id="pin" required onkeyup="myZipcode();"><br/>
        <p id="pin-alert">&nbsp;</p>
        <br/>
        <label for="image"></label>
        <input type="file" name="image" id="">
        <input type="submit" name="edit" value="Edit">
        <input type="reset" value="Reset">
    </form>
    <script type="text/javascript">
        function myZipcode(){
            var str= document.getElementById("pin").value;
            var zipcodeAlert= document.getElementById("pin-alert");
            if(!(/^[0-9]{6}$/.test(str))){
                zipcodeAlert.style.display="block";
                zipcodeAlert.innerHTML="PIN code must be only 6 digits.";
                zipcodeFlag= false;
            }
            else{
                zipcodeAlert.style.display="none";
                zipcodeFlag=true;
            }
        }
        var date= new Date();
        var tdate= date.getDate();
        var month= date.getMonth() + 1;
        if(tdate <10){
            tdate = '0' + tdate;
        }
        if(month < 10){
            month = '0' + month;
        }
        var year= date.getUTCFullYear();
        var maxDate = year + "-" + month +"-" + tdate;
        document.getElementById("datepick").setAttribute('max',maxDate);
    </script>