<?php require "../header.php"; ?>
<div class="clearfix">
    <div class="th0" style="float:left;">ばんごー</div>
    <div class="th1" style="float:left; margin-left:20px;">なめ</div>
    <div class="th1" style="float:left; margin-left:20px;">かかく</div>
</div>
<div class="clearfix">
    <form action="edit3.php" method="post">
    <input type="hidden" name="command" value="insert">
    <div class="td0" style="float:left;"></div>
    <div class="td1" style="float:left; margin-left:20px;"><input type="text" name="name" id=""></div>
    <div class="td1" style="float:left; margin-left:20px;"><input type="text" name="price" id=""></div>
    <div class="td2" style="float:left; margin-left:20px;"><input type="submit" value="☆追☆加☆"></div>
    </form>
</div>

<?php require "../footer.php"; ?>