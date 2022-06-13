<?php 
$success = $name = $email = $telephone = $subject = $message = "";
$marketing = 0;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors = [];
    

    //Check if contact-form was the form that was submitted and all fields were set.
    if (isset($_POST['contact-btn'])){
        if(!isset($_POST['full_name']) || $_POST['full_name'] == ""){
            $errors['name'] = "The name field is required.";
        }
        if(!isset($_POST['email']) || $_POST['email'] == ""){
            $errors['email'] = "The telephone field is required.";
        }
        if(!isset($_POST['telephone']) || $_POST['telephone'] == ""){
            $errors['telephone'] = "The email field is required.";
        }
        if(!isset($_POST['subject']) || $_POST['subject'] == ""){
            $errors['subject'] = "The subject field is required.";
        }
        if(!isset($_POST['message']) || $_POST['message'] == ""){
            $errors['message'] = "The message field is required.";
        }
        //filter the inputs and validate with regex.
        $name = trim(htmlspecialchars($_POST['full_name']));
        $email = trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
        $telephone = trim(htmlspecialchars($_POST['telephone']));
        $subject = trim(htmlspecialchars($_POST['subject']));
        $message = trim(htmlspecialchars($_POST['message']));
        if(!empty($_POST['marketing-info'])){
            $marketing = 1;
        } else {
            $marketing = 0;
        }
        //Regex Validation
        if(!preg_match("/^[a-zA-Z- ]{2,35}$/", $name) && !isset($errors['name'])){
            $errors[] = "Name does meet required format.";
        }

        if(!preg_match("/[a-z0-9!#$%&'*+\/=?^_`\"{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9]{2}(?:[a-z0-9-]*[a-z0-9])?/", $email) && !isset($errors['email'])){
            $errors[] = "Email does meet required format.";
        }
        
        if(!preg_match("/^(?:0|\+?44)(?:\d\s?){9,10}$/", $telephone) && !isset($errors['telephone'])){
            $errors[] = "Telephone does meet required format.";
        }
        
        if(!preg_match("/[A-Za-z0-9\W]{4,100}/", $subject) && !isset($errors['subject'])){
            $errors[] = "Subject does meet required format.";
        }
        
        if(!preg_match("/^[A-Za-z0-9\W]+/", $message) && !isset($errors['message'])){
            $errors[] = "Message does meet required format.";
        }
            
        if(empty($errors)){
            //Add to database
            include 'connection.php';
            $query = "INSERT INTO contact (`name`, `email`, telephone, `subject`, `message`, marketing) VALUES (?, ?, ?, ?, ?, ?)"; 
            $stmt = $db->prepare($query);
            $stmt->bindParam(1, $name, PDO::PARAM_STR);
            $stmt->bindParam(2, $email, PDO::PARAM_STR);
            $stmt->bindParam(3, $telephone, PDO::PARAM_STR);
            $stmt->bindParam(4, $subject, PDO::PARAM_STR);
            $stmt->bindParam(5, $message, PDO::PARAM_STR);
            $stmt->bindParam(6, $marketing, PDO::PARAM_INT);

            $result = $stmt->execute();

            if ($db->lastInsertId() == 0){
                $errors[] = "There was an error sending your messages. Please try again.";
            } else {
                $success = "Your message has been sent.";
            }
        }
    }

}
?>