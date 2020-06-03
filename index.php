<?php
$text = @$_POST['text'];

$lastword = mb_substr($text, -1);

// echo $lastword;
$word = [
    "りんご", "ごりら", "らっぱ",
    "ぱんつ", "つみき", "きつね", "ねこ",
    "こま", "まくら", "らくだ", "だるま", "まめ",
    "めだか", "かめも", "もうふ", "ふくろ",
    "ろーそく", "くるま", "まいく", "くすり"
];

for ($i = 0; $i < count($word); $i++) {
    $firstword = mb_substr($word[$i], 0, 1);
    // echo $firstword;
    if ($lastword == $firstword) {
        @$answer = $word[$i];
        break;
    }
}

?>

<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
</head>

<body>
    <form method='post'>
        <input type="text" name="text">
        <input type="submit" value="送信">
        <p><?php
            echo "入力:" . $text;
            ?></p>
        <p><?php
            echo "答え:" . @$answer;
            ?></p>
    </form>
</body>

</html>