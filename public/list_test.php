<?php
$dbConn = mysqli_connect("site20.blog.oa.gg", "site20", "sbs123414",
"site20",3306) or die("DB CONNECTION ERROR");

$cateItemId = $_GET['cateItemId'];

$sql = "
SELECT `name`
FROM cateItem
WHERE id = {$cateItemId}
";

$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$cateItemName =$row['name'];

$spl = "
SELECT *
FROM article
WHERE cateItemId = {$cateItemId}
ORDER BY ID DESC
";

$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);
$row = mysqli_fetch_assoc($rs);
$row = mysqli_fetch_assoc($rs);

print_r($row);
echo "<br>";
exit;


//http://localhost:8022/list_test.php?cateItemId=1
//http://localhost:8022/list_test.php?cateItemId=2
//http://localhost:8022/list_test.php?cateItemId=3

?>
