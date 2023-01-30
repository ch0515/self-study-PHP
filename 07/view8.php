<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>파일 업로드 처리하기</title>
</head>
<body>
<?php
    $file_dir = "C:/Bitnami/wampstack-8.1.4-0/apache2/htdocs/혼자 공부하는 php/07/data/";
    $file_path = $file_dir.$_FILES['upload']['name'];
    if(move_uploaded_file($_FILES['upload']['tmp_name'], $file_path)){
        $img_path = "data/".$_FILES['upload']['name'];
?>
<ul>
    <li><img src="<?= $img_path ?>" alt=""></li>
    <li><?= $_POST['comment']?></li>
</ul>
<?php
    }
    else{
        echo "파일 업로드 오류가 발생했습니다!!!";
    }
?>
</body>
</html>