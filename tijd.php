<?php
$timeHours = date("G")+1;//+1 because it otherwise doesn't display good on my client
$dateTime = date($timeHours.":i");

if($timeHours >= 6 && $timeHours < 12){
    $timeOfDay = "morgen";
}elseif($timeHours >= 12 && $timeHours < 18){
    $timeOfDay = "middag";
}elseif($timeHours >= 18 && $timeHours < 24){
    $timeOfDay = "avond";
}else{
    $timeOfDay = "nacht";
}
?>

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
<body id=<?php echo"$timeOfDay"?>>
    <div class="container">
        <p>Goede <?php echo"$timeOfDay"?> </p>
        <p>Het is nu <?php echo"$dateTime"?></p>
    </div>
</body>
</html>