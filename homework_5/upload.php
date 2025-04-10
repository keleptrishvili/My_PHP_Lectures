<?php
$targetDir = 'storage/';
$targetFile = $targetDir . basename($_FILES['fileToUpload']['name']);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

if (file_exists($targetFile)) {
    echo 'ფაილი ამ სახელით უკვე არსებობს.';
    $uploadOk = 0;
}

if ($_FILES['fileToUpload']['size'] > 5 * 1024 * 1024) {
    echo 'ბოდიში, თქვენი ფაილი ძალიან დიდია.';
    $uploadOk = 0;
}

$allowedFormats = ['jpg', 'jpeg', 'png', 'pdf'];
if (!in_array($imageFileType, $allowedFormats)) {
    echo 'დაშვებულია მხოლოდ JPG, JPEG, PNG და PDF ფორმატის ფაილები.';
    $uploadOk = 0;
}

if ($_FILES['fileToUpload']['error'] !== UPLOAD_ERR_OK) {
    echo 'ფაილის ატვირთვისას მოხდა შეცდომა.';
    $uploadOk = 0;
}

if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetFile)) {
        echo 'ფაილი "' . htmlspecialchars(basename($_FILES['fileToUpload']['name'])) . '" წარმატებით აიტვირთა.';
    } else {
        echo 'ფაილის ატვირთვა ვერ მოხერხდა.';
    }
}

echo '<p><a href="index.php">უკან დაბრუნება</a></p>';
?>