<?php
if(isset($_POST["submit"]))
{
    $a=$_POST['uname'];
    $b=$_POST['cname'];
    $c=$_POST['cslogan'];
    $d=$_POST['email'];
	$e=$_POST['pnum'];
	$f=$_POST['cy'];
	$g=$_POST['cat'];
	$h=$_POST['uuname'];
	$j=$_POST['pass'];
    $conn=new mysqli("localhost","root","","order");
    if ($conn->connect_error){
        die("Connection failed:" .$conn->connect_error);
        }
        $sql="select caid from category where caname='$caname'";
        $res= mysqli_query($conn,$sql);
        echo '$res';
        $sql = "Insert into lists values('$a','$b','$c','$d','$e','$f','1','$h','$j')";

if($conn->query($sql)== TRUE){
    echo "New record added sucessfully";

}
else
{
    echo "Error:" .$sql."<br>".$conn->error;
}
$conn->close();
}

?>