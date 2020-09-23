<?php
include "../part/head_head.php";
?>
<?php
include "../part/head.php";

$dbHost = "site20.blog.oa.gg";
$dbPort = 3306;
$dbId = "site2";
$dbPw = "sbs123414";
$dbName = 'site2';

$dbConn = mysqli_connect("blog.arinzzang.com", "sbsst", "sbs123414", "blog", 3306) or die("DB CONNECTION ERROR");

if ( isset($_GET['cateItemId'])== false){
     $_GET['cateItemId'] = 2;
}
$cateItemId = $_GET['cateItemId'];

$sql="
SELECT *
FROM article
WHERE cateItemId = '{$cateItemId}'
ORDER BY id ASC
";

$rs = mysqli_query($dbConn, $sql);
$rows = [];
while (true){
  $row = mysqli_fetch_assoc($rs);
  if ($row == null ){
    break;
  }
  $rows[] = $row;
}

?>

<link rel="stylesheet" href="/resource/list.css">
<script src="/resource/list.js"></script>

<?php if ( empty($rows) ) { ?>
<div class="con">
    게시물이 존재하지 않습니다.
</div>
<?php } else { ?>

<div class="box-1 con">
  <div>
    <img src="/resource/img/notice.png" width="200" alt="">
    <img src="/resource/img/notice.png" width="200" alt="">
  </div>
  <div>
    <section class="grid">
      <?php foreach ($rows as $row){?>
      <div class="item">
        <a href="detail.php?id=<?=$row['id']?>">
          <div class="img-box">
            <img src="<?=$row['thumbImgUrl']?>" alt="">
          </div>
          <h1 class="title"><?=$row['title']?></h1>
        </a>
        <h2 class="review">
          <span>REVIEW</span>
          <span><?=$row['regDate']?></span>
        </h2>
        <div class="txt-box"><?=$row['summary']?></div>
        <a href="detail.php?id=<?=$row['id']?>" class="more">more</a>
      </div>
      <?php } ?>
    </section>
  </div>
</div>
<?php } ?>

<?php
include "../part/foot.php"
 ?>