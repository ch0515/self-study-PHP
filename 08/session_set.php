<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>세션 시작하고 등록하기</title>
</head>
<body>
    <?php
        session_start();
        echo "세션이 시작되었습니다. <br>";

        $_SESSION['userid'] = "chaemin";
        $_SESSION['username'] = "황채민";
        echo "세션 등록 완료 <br>";

        echo $_SESSION['userid']."<br>";
        echo $_SESSION['username']."<br>";
    ?>
</body>
</html>