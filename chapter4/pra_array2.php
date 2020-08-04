<?php require "../header.php"; ?>

<h1>配列の繰り返しの組み合わせ</h1>
<?php
$num = [10,20,30,40];

echo '<h2>添え字を指定して出力</h2>';
echo '<p>', $num[0], '</p>';
echo '<p>', $num[1], '</p>';
echo '<p>', $num[2], '</p>';
echo '<p>', $num[3], '</p>';

echo '<h2>for文と組み合わせて出力</h2>';
for($i=0; $i<4; $i++){
    echo '<p>', $num[$i], '</p>';
}

echo '<h2>foreach(配列 as 仮の変数)と組み合わせて出力</h2>';
foreach($num as $n){
    echo '<p>', $n, '</p>';
}

echo '<h2>foreach(配列 as 仮の添え字 => 仮の変数)と組み合わせて出力</h2>';
foreach($num as $key => $value){
    echo '<p>index : ', $key, '   value : ', $value, '</p>';
}

$score = [
    "上原" => 10,
    "砂川" => 20,
    "玉木" => 39,
    "知念" => 40
];

echo '<h2>配列の添え字に文字列を使用した連想配列で、foreach(配列 as 仮の添え字 => 仮の変数)と組み合わせて出力</h2>';
foreach($score as $key => $value){
    echo '<p>index : ', $key, '   value : ', $value, '</p>';
}
?>

<?php require "../footer.php"; ?>