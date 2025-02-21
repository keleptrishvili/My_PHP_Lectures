<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $students = ['name1' => rand(0,100),'name2' => rand(0,100),
        'name3' => rand(0,100),'name4' => rand(0,100),'name5' => rand(0,100)];
        echo "<pre>";
        print_r($students);
        echo "</pre>";
        $sum = 0;
        $max_point = 0; 
        foreach ($students as $student => $grade) {
            echo "<div> student : $student , grade : $grade </div>";
            $sum += $grade;
            if($max_point < $grade) $max_point = $grade;
        }

        echo "<h1>$sum</h1>";
        $avarage = $sum / count($students);
        echo "<h1>$avarage</h1>";
        echo "<h1>". $sum / count($students)."</h1>";
        echo "<h1>$max_point</h1>";

        foreach ($students as $student => $grade) {
            if($grade >= $sum/count($students))
            echo "<div> student : $student , grade : $grade </div>";
        }

        
        ?>
    
</body>
</html>