<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tijd</title>
    <link href="tijd.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Coming+Soon&display=swap" rel="stylesheet">
</head>
<body id="<?=$status?>">
    <div class="container">
    <?php
        $time = date("H:i");
        $tijd;
        if($time > "5:59" && $time < "12:00"){
            $tijd = "Goede morgen! </br>";
            $status = "morgen";
        }else if($time > "11:59" && $time < "18:00"){
            $tijd = "Goede middag! </br>";
            $status = "middag";
        }else if($time > "17:59" && $time < "00:00"){
            $tijd = "Goede avond! </br>";
            $status = "avond";
        }else if($time > "23:59" && $time < "06:00"){
            $tijd = "Goede nacht! </br>";
            $status = "nacht";
        }
        echo "$tijd";
        echo "De tijd is nu $time";
    ?>
    </div>
</body>
</html>