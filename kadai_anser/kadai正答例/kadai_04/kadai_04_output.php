
<?php
// // 課題４正答例： 簡単な足し算クイズ（出力画面）  【締切日：7/7(木)】
?>


<?php require 'header.php'; ?>
<?php require 'kadai_nav.php'?>
<section id="kadai_04_ans">
<h2>「課題４」 簡単な足し算クイズ（出力画面）</h2>
<?php
    if (isset($_REQUEST['num1'])){
	$num1 = $_REQUEST['num1'];
	$num2 = $_REQUEST['num2'];
	$userAns = $_REQUEST['userAns'];

	$correctAns = $num1 + $num2;
	
	if ($userAns == $correctAns) {
	    $message = '正解です！';
	} else {
		$message = '間違いです！';
	}
	
	echo '<h3>解答</h3>';
	echo '<p>',$message,'</p>';
	echo '<p>問題：', $num1, '＋',$num2,'</p>';
	echo '<p>あなたの答え：',$userAns,'</p>';
	echo '<p>正しい答え：',$correctAns,'</p>';
    echo '<form action="kadai_04.php" method="post">';
    echo '<p><input type="submit" value="問題へ戻る"></p>';
    echo '</form>';

    } else {
        echo '<p>エラーが発生しました。もう一度解いて下さい。</p>' ;
        echo '<form action="kadai_04.php" method="post">';
        echo '<p><input type="submit" value="問題へ戻る"></p>';
        echo '</form>';
    }
?>
</section>
<?php require 'footer.php'; ?>