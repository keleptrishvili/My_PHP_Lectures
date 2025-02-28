<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form method="post">
        <table border="1">
                <tr>
                <th>Questions</th>
                <th>answers</th>
                <th>max points</th>
                </tr>
                
                <tr>
                <td>1. რომელი ქალაქი მიყვარს ყველაზე მეტად??</td>
                <td><input type="text" name="q1" placeholder="Your answer"></td>
                <td>8</td>
                </tr>

                <tr>
                <td>2. რომელი ქალაქი მიყვარს ყველაზე მეტად??</td>
                <td><input type="text" name="q1" placeholder="Your answer"></td>
                <td>8</td>
                </tr>

                <tr>
                <td>3. რომელი ქალაქი მიყვარს ყველაზე მეტად??</td>
                <td><input type="text" name="q1" placeholder="Your answer"></td>
                <td>8</td>
                </tr>

                <tr>
                <td>4. რომელი ქალაქი მიყვარს ყველაზე მეტად??</td>
                <td><input type="text" name="q1" placeholder="Your answer"></td>
                <td>8</td>
                </tr>

                <tr>
                <td>4. რომელი ქალაქი მიყვარს ყველაზე მეტად??</td>
                <td><input type="text" name="q1" placeholder="Your answer"></td>
                <td>8</td>
                </tr>

        </table>
                <button type="submit">Submit</button>

    </form>

    <?php
    if ($_POST) {
        $correctAnswers = 0;

        if (strtolower(trim($_POST['q4'])) == 'თბილისი') $correctAnswers++;
        if (strtolower(trim($_POST['q5'])) == 'მჭადი') $correctAnswers++;

        echo "შენ მიიღე $correctAnswers ქულა!";
    }
    ?>
</body>
</html>
