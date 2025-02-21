<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            margin-left: 200px;
            margin:auto;
        }
    </style>
</head>
<body>
        <form method="get">
            <input type="text" name="saxeli" placeholder="saxeli">
            <br><br>
            <input type="text" name="gvari" placeholder="gvari">
            <br><br>
            <input type="text" name="xelfasi" placeholder="xelfasi">
            <br><br>
            <input type="text" name="sashemosavlo" placeholder="sashemosavlo">
            <br><br>
            <button>gamotvla</button>
        </form>
        <hr><hr>
        <table border="1">
            <tr>
                <th>სახელი</th>
                <th>გვარი</th>
                <th>ხელფასი</th>
                <th>საშემოსავლო</th>
                <th>ხელზე ასაღები</th>
            </tr>
            <tr>
                <th><?=$_GET['saxeli']?></th>
                <th><?=$_GET['gvari']?></th>
                <th><?=$_GET['xelfasi']?></th>
                <th><?=$_GET['xelfasi']*$_GET['sashemosavlo']/100?></th>
                <th><?=$_GET['xelfasi']-$_GET['xelfasi']*$_GET['sashemosavlo']/100?></th>
            </tr>
        </table>
</body>
</html>