<?php 
    $conn = mysqli_connect("localhost","root","","booking");

    if(!$conn) {
        echo "Connect DB failed!!!";
    }

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $location = $_POST['location'];

        $request = "INSERT INTO book_form(name, email, phone, address, location) VALUES ('$name', '$email', '$phone', '$address', '$location');";

        mysqli_query($conn, $request);

        header('Location: home.php');
    }
?>
