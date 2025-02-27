<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test</title>
</head>
<body>
    <form method="post">
        <p>1. რა მქვია?</p>
        <input type="radio" name="q1" value="nino"> ნინო
        <input type="radio" name="q1" value="lizi"> ლიზი
        <input type="radio" name="q1" value="keti"> ქეთი
        <input type="radio" name="q1" value="tako"> თაკო
        <br><br>

        <p>2. ra gvari var?</p>
        <input type="radio" name="q2" value="arveladze"> არველძე
        <input type="radio" name="q2" value="gavasheli"> გავაშელი
        <input type="radio" name="q2" value="keleptrishvili"> კელეპტრიშვილი
        <input type="radio" name="q2" value="gabunia"> გაბუნია
        <br><br>

        <p>3. რამდენი წლის ვარ?</p>
        <input type="radio" name="q3" value="19"> 19
        <input type="radio" name="q3" value="21"> 21
        <input type="radio" name="q3" value="18"> 18
        <input type="radio" name="q3" value="20"> 20
        <br><br>

        <p>4. რომელი ქალაქი მიყვარს ყველაზე მეტად??</p>
        <input type="text" name="q4" placeholder="Your answer">
        <br><br>

        <p>5. რა არის ჩემი საყვარელი საჭმელი?</p>
        <input type="text" name="q5" placeholder="Your answer">
        <br><br>

        <button type="submit">Submit</button>
    </form>
    <hr>

    <?php
    if ($_POST) {
        $correctAnswers = 0;

        if ($_POST['q1'] == 'lizi') $correctAnswers++;
        if ($_POST['q2'] == 'keleptrishvili') $correctAnswers++;
        if ($_POST['q3'] == '20') $correctAnswers++;

        if (strtolower(trim($_POST['q4'])) == 'თბილისი') $correctAnswers++;
        if (strtolower(trim($_POST['q5'])) == 'მჭადი') $correctAnswers++;

        echo "შენ მიიღე $correctAnswers ქულა!";
    }
    ?>
</body>
</html>
