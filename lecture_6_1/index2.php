<?php
    include "folder_file.php"

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 6</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <form method="post">
            <input type="text" name="dir_name"> - <button name="cr_dir">Create a Folder</button>
            <span class="error"><?=$error_fold?></span>
            <br><br>
            <input type="text" name="f_name"> - <button name="cr_file">Create a File</button>
            <span class="error"><?=$error_file?></span>
        </form>
    </header>
    <main>
        <table>
            <tr>
                <th>status</th>
                <th>size(bytes)</th>
                <th>name</th>
                <th>action</th>
            </tr>
            <?php
                for ($i=2; $i < count($content); $i++) { 
                    
            ?>

            <tr>
                <td>
                    <?php
                    
                    ?>

                </td>
                <td></td>
                <td><?=$content[$i]?></td>
                <td></td>
            </tr>
            <?php
                }
            ?>
        </table>
    </main>

</body>
</html>
