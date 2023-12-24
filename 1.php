<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$rooms = $_REQUEST['rooms'];
$check_in = $_REQUEST['check_in'];
$check_out = $_REQUEST['check_out'];
$adults = $_REQUEST['adults'];
$childs = $_REQUEST['childs'];

if (isset($_POST['check'])) {
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "hotel";

    
    $conn = mysqli_connect($host, $user, $password, $db);
    @$conn= mysqli_connect($host,$user,$password,$db);
    $insert="insert into reservation values('$name','$email','$phone','$rooms','$check_in','$check_out','$adults','$childs')";
    mysqli_query($conn,$insert);

    if($conn){
       
  
        echo("
        <html>
        <head>
            <style>
                body {
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    flex-direction: column;
                    height: 100vh;
                    background-image: url('images/gallery2.jpg'); 
                    background-size: cover;
                    background-position: center;
                    background-repeat: no-repeat;
                    margin: 0;
                    color: white;
                    font-family: 'Arial', sans-serif;
                    animation: fadeIn 1.5s ease;
                }
                h1 {
                    font-size: 36px;
                    margin-bottom: 20px;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
                }
                a {
                    text-decoration: none;
                    padding: 15px 30px;
                    background-color: #2ecc71;
                    color: white;
                    border-radius: 8px;
                    font-weight: bold;
                    transition: background-color 0.4s ease;
                }
                a:hover {
                    background-color: #27ae60;
                }

                @keyframes fadeIn {
                    from {
                        opacity: 0;
                    }
                    to {
                        opacity: 1;
                    }
                }
            </style>
        </head>
        <body>
            <h1>Your Registration is Done</h1>
            <a href='index.html'>Back to Home</a>
        </body>
        </html>
    ");

        }
}

?>