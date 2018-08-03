

    <?php

$servername = "";
$username = "";
$password = "";
$dbname = "t";

    $link = mysqli_connect($servername, $username, $password, $dbname);



    // Check connection

    if($link === false){

        die("ERROR: Could not connect. " . mysqli_connect_error());

    }



    // Escape user inputs for security

    $name = mysqli_real_escape_string($link, $_REQUEST['name']);

    $email = mysqli_real_escape_string($link, $_REQUEST['email']);

    $number = mysqli_real_escape_string($link, $_REQUEST['number']);
    $message = mysqli_real_escape_string($link, $_REQUEST['message']);


    // attempt insert query execution

    $sql = "INSERT INTO contact (name,email,phone,message) VALUES ('$name', '$email', '$number','$message')";

    if(mysqli_query($link, $sql)){

        echo "Records added successfully.";

    } else{

        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

    }



    // close connection

    mysqli_close($link);

    ?>


    <?php

$servername = "inr02.solidhosting.pro";
$username = "unquein_shr";
$password = "unQue123!";
$dbname = "unquein_contact";

    $conn =new mysqli("$servername"," $username", "$password", "$dbname");



    // Check connection

    if($conn->connect_error){

        die("ERROR: Could not connect. " . $conn->connect_error);

    }



    // Escape user inputs for security

    $name = $_POST['name'];

    $email =$_POST['email'];

    $number = $_POST['phone'];
    $message =$_POST['message'];


    // attempt insert query execution

    $sql = "INSERT INTO contact (name,email,phone,message) VALUES ('$name', '$email', '$number','$message')";

    if($conn->query($sql) === TRUE){
     //header("Location:https://www.unque.in");
        echo "message sent successfully.";

    } else{

       echo "Error: " . $sql . "<br>" . $conn->error;;

    }



    // close connection

    $conn->close();

    ?>

//insert.php
 <?php
$servername = "localhost";
$username = "unquein_shr";
$password = "unQue123!";
$dbname = "unquein_contact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO contact (name,email,phone,message) VALUES ('doe', 'doe@gmail.co', '9450330117','hi')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    header("Location:https://www.unque.in");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
