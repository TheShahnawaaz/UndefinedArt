<!-- <?php

$name = $_REQUEST['name'];
$number = $_REQUEST['Number'];
$email = $_REQUEST['email'];
$City = $_REQUEST['City'];
$Add = $_REQUEST['message'];

if (empty($name) || empty($number) ||empty($email) || empty($City) || empty($Add))
{
    echo "Please Fill All The Fields!!";
}
else
{
    mail("kraza9798@gmail.com", "Data", $name $number $email $City $Add , "From: $name <$email>");
    echo "<script type='text/javascript'>alert('Your Message Sent Successfully!!');
    window.history.log(-1);
    </script>";
}
?> -->

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['Name'];
    $number = $_POST['Number'];
    $email = $_POST['Email'];
    $category = $_POST['Category'];
    $city = $_POST['City'];
    $zipPostalCode = $_POST['ZipPostalCode'];
    $message = $_POST['Message'];

    if (empty($name) || empty($number) || empty($email) || empty($category) || empty($city) || empty($zipPostalCode) || empty($message)) {
        echo "Please Fill All The Fields!!";
    } else {
        $to = "your_email@example.com"; // Replace with your email address
        $subject = "Form Submission";
        $body = "Name: $name\nNumber: $number\nEmail: $email\nCategory: $category\nCity: $city\nZip/Postal Code: $zipPostalCode\nMessage: $message";

        if (mail($to, $subject, $body, "From: $name <$email>")) {
            echo "<script type='text/javascript'>alert('Your Message Sent Successfully!!'); window.history.back();</script>";
        } else {
            echo "Sorry, there was an error sending your message.";
        }
    }
}
?>
