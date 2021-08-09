<?php
$name=$_POST["name"];
$email=$_POST["email"];
$post=$_POST["subject"];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo '<script>alert("Invalid email format")</script>';
}
if(isset($_POST['sendmessage'])){

$to="chaudharybhabishya@gmail.com";
$subject="Message from bhabishya portfilio";
$header="From:bhabishyaportfilio@gmail.com" . "\r\n" ."CC:2018009446.bhabishya@gmail.com";
$message="Name:".$name. "\r\n" .
"Email:".$email. "\r\n" .
"Message is".$post;

$to1=$email;
$subject1="Message Received Sucessfully";
$header1="From:bhabishyaportfilio@gmail.com";
$message1="Dear,". "\r\n" .$name. "\r\n" .
"Your message is received sucessfully I will try to contact you as soon as possible". "\r\n" .
"Thank You!";
mail($to1,$subject1,$message1,$header1);

if(mail($to,$subject,$message,$header)){
    echo '<script>alert("Message sent sucessfully")</script>';
}else{
    echo '<script>alert("Sorry,Failed to send message")</script>';

}
}

?>