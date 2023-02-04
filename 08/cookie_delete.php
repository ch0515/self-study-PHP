<?php
    setcookie("userid", "", time()-3600);
    setcookie("usdrname", "", time()-3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cookie 삭제하기</title>
</head>
<body>
    <?php
        echo "userid와 username 쿠기가 삭제되었습니다.";
    ?>
</body>
</html>