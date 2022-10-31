<?php

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
?>