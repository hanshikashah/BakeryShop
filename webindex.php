<?php
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password)

if(!con)
{
    die("connection to this database failed due to".mysqli_connect_());
}
//echo "Success connecting to the database"

$name=$_POST['name']
$lastname=$_POST['lastname']
$country=$_POST['country']
$subject=$_POST['subject']
$sql="INSERT INTO"INSERT INTO `data`.`data` (`first name`, `last name`, `country`, `subject`) VALUES ('$name', '$lastname', '$country', '$subject');
echo $sql;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
</head>
<body>
    <div class="container">This is my website. 
        <?php 
        echo "<br>";
        $variable1= 34;
        $variable2=67;
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";
// arthmetic operator
        echo $variable1+$variable2;
//assignment operator
        $newvar=$variable1;
        $newvar +=1;
        echo "<br>";
        echo "new var value:";
        echo $newvar;
        echo "<br>";
//comparison operator
 //echo comp= $variable1==$variable2;
echo var_dump($variable1==$variable2);
echo "<br>";

// inc/dec operator
echo $variable1++;
echo "<br>";
echo $variable1 ;
echo "<br>";
echo ++$variable1;
echo "<br>";
echo $variable1;

//logical operator
//and(&&) , or(||) , xor , !
$variable1= (true)and(true);
echo "<br>";
echo "Data Types";
echo "<br>";
$var=1;
echo var_dump($var)


?>

         <?php
         echo "<br>";
echo "Hey! this is printed using php";
//secret algorithm ?>
    </div>
</body>
</html>




<?php
if(isset($_POST['name' ])){
$server="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection to this database failed due to".mysqli_connect_());
}
//echo "Success connecting to the database"

$name=mysql_real_escape_string($_POST['name'])
$lastname=mysql_real_escape_string($_POST['last name'])
$country=mysql_real_escape_string($_POST['country'])
$subject=mysql_real_escape_string($_POST['subject'])
$sql="INSERT INTO" `bakery`.`bakery` (`first name`, `last name`, `country`, `subject`) VALUES ('$name', '$lastname', '$country', '$subject');
echo $sql;
if($con->query($sql)==true)
{
    echo "successfully inserted."
}
else
{
    echo "Error:$sql <br> $con->error";
}
$con->close();
?>
}