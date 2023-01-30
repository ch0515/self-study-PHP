<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hidden 으로 입력된 데이터 처리하기</title>
</head>
<?php
    $userid = $_POST['userid'];
?>
<body>
    <ul>
        <li>관리자 아이디 : <?= $userid ?></li>
    </ul>
</body>
</html>