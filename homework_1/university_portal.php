<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin-left: 200px;
            margin: auto;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="text" name="saxeli" placeholder="saxeli">
        <br><br>
        <input type="text" name="gvari" placeholder="gvari">
        <br><br>
        <input type="text" name="kusri" placeholder="kursi">
        <br><br>
        <input type="text" name="semestri" placeholder="semestri">
        <br><br>
        <input type="text" name="sasw_kursi" placeholder="saswavlo kursi">
        <br><br>
        <input type="text" name="mig_nishani" placeholder="migebuli nishani">
        <br><br>
        <input type="text" name="l_name" placeholder="leqtoris saxeli">
        <br><br>
        <input type="text" name="l_lname" placeholder="leqtoris gvari">
        <br><br>
        <input type="text" name="d_name" placeholder="dekanis saxeli">
        <br><br>
        <input type="text" name="d_lname" placeholder="dekanis gvari">
        <br><br>
        <button>Submit</button>
    </form>
    <hr><hr>
    
    <?php
    if ($_POST) {
        $grade = $_POST['mig_nishani'];
        $letter = '';
        
        if ($grade >= 91) $letter = "A";
        if ($grade >= 81 && $grade <= 90) $letter = "B";
        if ($grade >= 71 && $grade <= 80) $letter = "C";
        if ($grade >= 61 && $grade <= 70) $letter = "D";
        if ($grade >= 51 && $grade <= 60) $letter = "E";
        if ($grade <= 50) $letter = "F";
    ?>
    <table border="1">
        <tr>
            <th>სახელი</th>
            <th>გვარი</th>
            <th>კურსი</th>
            <th>სემესტრი</th>
            <th>სასწავლო კურსი</th>
            <th>ნიშანი</th>
            <th>შეფასება</th>
            <th>ლექტორი</th>
            <th>დეკანი</th>
        </tr>
        <tr>
            <td><?=$_POST['saxeli']?></td>
            <td><?=$_POST['gvari']?></td>
            <td><?=$_POST['kusri']?></td>
            <td><?=$_POST['semestri']?></td>
            <td><?=$_POST['sasw_kursi']?></td>
            <td><?=$_POST['mig_nishani']?></td>
            <td><?=$letter?></td>
            <td><?=$_POST['l_name']?> <?=$_POST['l_lname']?></td>
            <td><?=$_POST['d_name']?> <?=$_POST['d_lname']?></td>
        </tr>
    </table>
    <?php
    }
    ?>
</body>
</html>