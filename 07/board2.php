<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>링크 시 GET 방식으로 데이터 전달하기</title>
</head>
<body>
    <?php
        $table1 = "free";
        $table2 = "qna";
    ?>
        <h3>자유게시판</h3>
        <a href="board_view.php?table=<?=$table1?>&type=list"> 목록보기</a>
        <br>
        <a href="board_view.php?table=<?=$table1?>&type=write"> 글쓰기</a>

        <h3>질의 응답 게시판</h3>
        <a href="board_view.php?table=<?=$table2?>&type=list"> 목록보기</a>
        <a href="board_view.php?table=<?=$table2?>&type=write"> 글쓰기</a>
</body>
</html>