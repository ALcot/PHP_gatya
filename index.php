<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ガチャシュミレーター</title>
</head>
<body>
    
<?php


/*
    ★5　0.6%
    ★4　キャラ2.55%
    ★4　武器2.55%
    ★3　武器94.3%
*/

for ($i = 1; $i <= 10; $i++) {
    $data = rand(1, 1000);

    //echo $data;
    echo"<p>(".$data.")".$i."回目:";

    if ($data <= 6) {
        echo "★★★★★";
    } elseif ($data <= 51) {
        echo "★★★★";
    } else {
        echo "★★★";
    }

    echo "</p>";
}
?>

</body>
</html>