<!DOCTYPE  html>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>work16-1</title>
    </head>
    <body>
        <div>入力内容の取得</div>
        <form method="get" action="work16-02.php">
            <input type="text" name="display_text">
             <br>
            <input type="checkbox" name="choice[]" value="選択肢01"> 選択肢01　
            <input type="checkbox" name="choice[]" value="選択肢02"> 選択肢02
            <input type="checkbox" name="choice[]" value="選択肢03"> 選択肢03
            <input type="submit" value="送信">
        </form>
    </body>
</html>