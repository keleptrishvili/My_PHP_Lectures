<?php 
    include 'questions.php';
    // echo "<pre>";
    // print_r($questions);
    // echo "</pre>";
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecturer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Lecturer</h1>
    <form method="post" action="questions.php">
    <table>
            <td colspan="4">
                student: <?=$_POST['firstname']." ".$_POST['lastname']?>
            </td>
            <tr>
                <th>Questions</th>
                <th>Answers</th>
                <th>Max Point</th>
                <th>Point</th>
            </tr>
            <?php
                for($i=0; $i<count($questions);$i++){
            ?>
            <tr>
                <td><?=$questions[$i]['question']?></td>
                <td><?=$_POST["answer"][$i]?></td>
                <td><input type="text" name="answer"></td>
                <td><?=$questions[$i]['maxpoint']?> </td>

            </tr>
            <?php
                }
            ?>
            <tr>
            <td colspan="4">
                Lecturer: 
                <input type="text" placeholder="name">
                <input type="text" placeholder="lastname">
                <button>send</button>
            </td>
            </tr>
        </table>
    </form>

    
</body>
</html>