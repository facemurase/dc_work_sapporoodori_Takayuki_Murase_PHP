<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>算術演算子</title>
</head>
<body>
    <?php
        $num;
        //加算
        $num = 1 + 2;	//3
        print '<p>1 + 2 = '.$num.'</p>';
        //減算
        $num = 3 - 2;	//1
        print '<p>3 - 2 = '.$num. '</p>';
        //乗算
        $num = 3 * 4;	//12
        print '<p>3 * 4= '.$num. '</p>';
        //除算
        $num = 6 / 2;	//3
        print '<p>6 / 2 = '.$num.'</p>';
        //剰余
        $num = 5 % 4;	//1
        print '<p>5 % 4 = '.$num.'</p>';
    ?>
</body>
</html>
