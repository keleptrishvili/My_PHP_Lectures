<?php
    $error = " ";
    if(isset($_POST['email']) && empty($_POST['email'])){
        $error .= "Email is required";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form class="form-1" method="post">

        <input type="text" placeholder="email" name="email" required> -
        <span class="<?=$error?>">*</span>
        <br><br>
        <input type="text" placeholder="user" name="user" required> -*
        <br><br>
        <input type="radio" name="age">15-20 <input type="radio" name="age">21-30
        <input type="radio" name="age">30-40<input type="radio" name="age">41-50<br>
        
        <input type="radio" id="age26_30" name="age" value="26-30">
        <label for="age26_30">26-30</label><br><br>
        <button name="sign_up">sign up</button>
        <div>
            <?php
            if(isset($_POST['sign_up'])){
                $email = $_POST['email']; 
                $user = $_POST['user'];
                $age = $_POST['age']; 
                echo "<h3>$email $user $age</h3>";

            }
            
            
            
            ?>
        </div>
    </form>
</body>
</html>
