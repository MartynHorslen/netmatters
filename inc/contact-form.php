<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];

    //Check if contact-form was the form that was submitted.
    if (isset($_POST['contact-btn'])){
        echo "form submitted";
    }
    
}
?>