<?php
$check_in = $_REQUEST['check_in1'];
$check_out = $_REQUEST['check_out1'];
$adults = $_REQUEST['adults1'];
$childs = $_REQUEST['childs1'];
$rooms = $_REQUEST['rooms1'];
if (isset($_POST['check'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hotel";

    
    $conn = mysqli_connect($host, $user, $password, $db);
    @$conn= mysqli_connect($host,$user,$password,$db);
    $insert="insert into availability values('$check_in','$check_out','$adults','$childs','$rooms')";
    mysqli_query($conn,$insert);

    if($conn){
       
  
        $html_content = file_get_contents("index2.html");
        echo $html_content;

        }
}

?>