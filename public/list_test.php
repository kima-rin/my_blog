<?php
$dbConn=mysqli_connect("site2.blog.oa.gg", "site2", "sbs123414","site2", 3306) or die("DB CONNECTION ERROR");

$cateItemId = $_GET['cateItemId'];

$sql="
SELECT * 
FROM cateItem 
WHERE id = {$cateItemId}
";
$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemIdName = $row['name'];

$sql="
SELECT *
FROM article
WHERE cateItemId = {$cateItemId}
ORDER BY ID DESC
";
print_r($sql);
exit;
//http://localhost:8023/list_test.php?cateItemId=2
?>
