<?php

$email = "@";
$fName = $lName = $message = "";
$errfName = $errlName = $errEmail = $errMessage = "";
$thanksMessage = "";
$addClass_success = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    
    //echo "name: " .$fName. " " .$lName. "; email: " .$email. ".";    
    
    //First Name
    if(empty($_POST["fName"])){
        $errfName = "Musíš zadať meno";
    } 
    else {
        $fName = $_POST["fName"];
        if (!preg_match("/^[a-zA-Z\s\pL]+$/u",$fName)){       //pL - special letters
            $errfName = "Nesprávny formát";
        }
    }
    //Last Name
    if(empty($_POST["lName"])){
        $errlName = "Musíš zadať priezvisko";
    }
    else {
        $lName = $_POST["lName"];
        if (!preg_match("/^[a-zA-Z\s\pL]+$/u",$lName)){
            $errlName = "Nesprávny formát";
        }
    }
    //Email
    if(empty($_POST["email"])){
        $errEmail = "Musíš zadať Email";
    }
    else{
        $email = $_POST["email"];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errEmail = "Nesprávny formát";
        }        
    }
    //Message
    if(empty($_POST["message"])){
        $errMessage = "Zadaj správu";
    }
    else{
        $message = $_POST["message"];
        if(trim($message, " .") == ""){
            $errMessage = "Správa musí obsahovať text!";
            $message = trim($message, " .");
        }
    }
    
    
    //Send data to email
    if( $errfName == "" && $errlName == "" && $errEmail == "" && $errMessage == ""){
        //echo "<script>alert('Email sent!')</script>";
        
        $reciever = "ivo.sefcik@gmail.com";
        $subject = "Email from Ivansefcik.net";
        $header = "From: " .$email;

        $emailMessage .= "Name: " .$fName. " " .$lName. " \n";
        $emailMessage .= "Email: " .$email. " \n\n";
        $emailMessage .= "Message: \n" .$message. " \n";

        mail($reciever, $subject, $emailMessage, $header);   
        
        //clear data
        $fName = $lName = $message = "";
        $email = "@";
        
        //thank you
        $thanksMessage = "<p>Ďakujem Vám za správu!<br>Email bol úspešne odoslaný.</p>"; 
        $addClass_success = "success";        
    }
}
?>
