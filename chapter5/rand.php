<?php require "../header.php" ?>

<?php
echo "<p>getrandmax --> ", getrandmax(), "</p>";
echo "<p>rand(1,6)  --> ", rand(1,6), "</p>";
echo "<p><img src='item", rand(0,2), ".png'></p>";
echo '<p>偶数のみ rand(1, 5) * 2 --> ', rand(1, 5) * 2, '</p>';
echo '<p>偶数のみ rand(1, 50) * 2 --> ', rand(1, 50) * 2, '</p>';
echo '<p>奇数のみ rand(1, 5) * 2 - 1 --> ', rand(1, 5) * 2 - 1, '</p>';
echo '<p>奇数のみ rand(0, 4) * 2 + 1 --> ', rand(0, 4) * 2 + 1, '</p>';
?>

<?php require "../footer.php" ?>