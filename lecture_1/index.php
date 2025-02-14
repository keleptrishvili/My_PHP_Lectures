<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php lecture</title>
</head>
<body>
    <div style="width: 50%; margin: auto; border: solid; padding:20px;">
    <h1>lecture 1</h1>
    <?php
        echo "<hr><hr><hr>";
        $full_info = ['name' => "lizi", 'age' => 25, 'city' => "tbilisi",
                    'education' => ["GAU", "157 skola", "123 bagi"]];
        
        foreach ($full_info as $key => $value) {
            echo "<p>$key</p>"; 
        }
        echo "<hr><hr><hr>";
        echo "hello PHP";
        $name = "lizi";
        $age = 20 ; 
        echo "<h2>სახელი : $name; ასაკი: $age</h2>";
        $info = ["lizi", 20, 3.8, true, "Gau"];
        echo "<h2>სახელი: $info[0]; უნივერსიტეტი: $info[4]</h2>";
        echo"<hr>";
        for ($i = 0; $i < count($info); $i++) {
            echo "<p>" . $info[$i] . "</p>"; 
        }
        echo"<hr>";

        echo "<p>" . $info[0] . "</p>"; 
        echo "<p>" . $info[1] . "</p>"; 
        echo "<p>" . $info[2] . "</p>";
        echo "<p>" . $info[3] . "</p>"; 
        echo "<p>" . $info[4] . "</p>"; 

        echo"<hr>";
        
        foreach ($info as $element) {
            echo "<p>$element</p>";
        }
        echo"<hr>";

    
    ?>
    <hr>end of source code<hr>
    </div>
</body>
</html>