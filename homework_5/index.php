<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
<head>
    <title>Google Drive</title>
</head>
<body>
    <h1>Google Drive</h1>

    <h2>ფაილების სია</h2>
    <?php
    $storageDir = 'storage/';
    $files = scandir($storageDir);

    if (count($files) > 2) { 
        echo '<ul>';
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo '<li><a href="' . $storageDir . $file . '" download>' . $file . '</a></li>';
            }
        }
        echo '</ul>';
    } else {
        echo '<p>ჯერ არცერთი ფაილი არ არის ატვირთული.</p>';
    }
    ?>

    <h2>ფაილის ატვირთვა</h2>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="ფაილის ატვირთვა" name="submit">
    </form>
</body>
</html>