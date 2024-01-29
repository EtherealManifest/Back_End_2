<?php 
$success = true;
if(isset($_GET['first']) && isset($_GET['last']) && isset($_GET['age'])){
    $firstName = filter_input(INPUT_GET, 'first', FILTER_SANITIZE_SPECIAL_CHARS);
    $lastName = filter_input(INPUT_GET, 'last', FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_GET, 'age', FILTER_SANITIZE_SPECIAL_CHARS);

    $fullname = $firstName . ' '. $lastName;

    $num_days = $age * 365;

    $message = "I am old enough to vote in the United States";

    if($age < 18){
        $message = "I am not old enough to vote in the United States";
    }

} else {
    $message = "It seems that you have missed some information, try again";
    $success = false;
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getting Data</title>
    <link rel="stylesheet" href="./css/main.css">
</head>
<body>
    <h1>
        <?php
        if($success == true){
            echo "Hello, My name is " . $fullname . "<br>";
            echo $message . "<br>";
            echo "My Days Are: ". $num_days . "<br>";
            echo "Today, the Day is " . date("D, M d, Y") . "<br>";
        }
        else{
            echo $message;
        }
        ?>
    </h1>
</body>
</html>