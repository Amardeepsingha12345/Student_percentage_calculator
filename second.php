<?php
$name = $_POST['name'];
$reg = $_POST['reg'];
$section = $_POST['section'];
$sub1 = $_POST['sub1'];
$sub2 = $_POST['sub2'];
$sub3 = $_POST['sub3'];
$sub4 = $_POST['sub4'];
$sub5 = $_POST['sub5'];

echo"student name is: $name";
echo"<br>";
echo"student registration no is: $reg";
echo"<br>";
echo"student phone no is: $section";
echo"<br>";
echo"subject1 mark: $sub1";
echo"<br>";
echo"subject2 mark: $sub2";
echo"<br>";
echo"subject3 mark: $sub3";
echo"<br>";
echo"subject4 mark: $sub4";
echo"<br>";
echo"subject5 mark: $sub5";
echo"<br>";

$total = $sub1 + $sub2 + $sub3 + $sub4 + $sub5;
echo"student total marks is : $total";
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
if ($conn->query("insert into amar(name, reg, section, sub1, sub2, sub3, sub4, sub5, total, percentage)values('$name', '$reg', '$section', $sub1, $sub2, $sub3, $sub4, $sub5, $total, $avarage);"))
{
}
else
echo"error caught";
}
?>
