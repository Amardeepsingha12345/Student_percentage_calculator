<?php
$name = $_POST['name'];
$reg = $_POST['reg'];
$phone = $_POST['phone'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];

echo"student name is: $name";
echo"<br>";
echo"student registration no is: $reg";
echo"<br>";
echo"student phone no is: $phone";
echo"<br>";
echo"sub1 mark: $sub1";
echo"<br>";
echo"sub2 mark: $sub2";
echo"<br>";
echo"sub3 mark: $sub3";
echo"<br>";
echo"sub4 mark: $sub4";
echo"<br>";
echo"sub5 mark: $sub5";
echo"<br>";

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
echo"student total mark is : $total";
echo"<br>";

$avarage =  $total/5;
echo"percentace of marks: $avarage%"; 


$servername="localhost";
$username="root";
$password="Kamolesh123@";
$database="db9";
$conn=new mysqli($servername,$username,$password,$database);
if($conn->connect_error)
{
 die("connection failed".$conn-> connect_error);
}
else
{
if ($conn->query("insert into saha1(name, reg, phone, sub1, sub2, sub3, sub4, sub5, total, percentage)values('$name', '$reg', '$phone', $sub1, $sub2, $sub3, $sub4, $sub5, $total, $avarage);"))
{
}
else
echo"error caught";
}
?>
