<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 연습</title>
</head>
<body>
    <?php 
        date_default_timezone_set("Asia/Seoul"); // 한국시간으로 설정
        echo date('Y-m-d H:i:s');
    ?>
</body>
</html>