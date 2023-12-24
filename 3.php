<?php
$name1=$_REQUEST['name2'];
$email1=$_REQUEST['email2'];
$phone1=$_REQUEST['phone2'];
$massage1=$_REQUEST['massage'];

if (isset($_POST['check'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hotel";

    
    $conn = mysqli_connect($host, $user, $password, $db);
    @$conn= mysqli_connect($host,$user,$password,$db);
    $insert="insert into massages values('$name2','$email2','$phone2','$massage')";
    mysqli_query($conn,$insert);

    if($conn){
       
  
        $html_content = file_get_contents("index2.html");
        echo $html_content;

        }
}

?>