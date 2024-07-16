<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Registration Form</h1>
<form method="post">

    Select Name: <input type="text" name="name" value="">

    <br><br>
    Select Year: 
    <select name="eduyear" id="">
    <?php
    for ($i=1; $i <=4 ; $i++) { 
        echo "<option value=\"$i\">$i</option>";
    }
    
    ?>
    </select> <br><br>

    Select DOB: <br> <br>

    Select Year: 
    <select name="year" id="">
    <?php
    for ($i=1995; $i <=2005 ; $i++) { 
        echo "<option value=\"$i\">$i</option>";
    }
    
    ?>
    </select> 

    Select Month: 
    <select name="month" id="">
    <?php
    for ($i=1; $i <=12 ; $i++) { 
        echo "<option value=\"$i\">$i</option>";
    }
    
    ?>
    </select> 

    Select Date: 
    <select name="day" id="">
    <?php
    for ($i=1; $i <=31 ; $i++) { 
        echo "<option value=\"$i\">$i</option>";
    }
    
    ?>
    </select> <br><br>
    
    <input type="submit" name="submit" value="submit">



</form>

</body>
</html>
<?php

$localhost= "127.0.0.1";
$user="root";
$password="";
$db="registration_form";

$con=mysqli_connect($localhost,$user,$password,$db);

if(isset($_POST["submit"])) {

    $name=$_POST["name"];
    $eduyear=$_POST["eduyear"];
    $year=$_POST["year"];
    $month=$_POST["month"];
    $day=$_POST["day"];

    $sql="INSERT INTO student VALUES('$name','$eduyear','$year','$month','$day')";

    if($con->query($sql)===TRUE) {
        echo "Data saved";

    }
    else{
        echo "error";
    }

        // echo ("$name-$year-$month-$day");
}

?>