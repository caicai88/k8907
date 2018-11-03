<?php
 header("content-type:text/html;charset=utf-8");

require"../mysql.func.php";
 $page = $_GET["page"] == null ? 1 :$_GET["page"];
 
 $start = ($page -1)*10;

//$link = mysqli_connect("127.0.0.1","root","root","k8907") or die("数据库链接失败");
$link = conn("127.0.0.1","root","root","k8907")

$row = select($link,"stus","*",null,null,"$start,10");

//mysqli_set_charset($link,"utf8");
//
//$sql = "select * from stus limit $start,10";
////echo $sql;
//$result = mysqli_query($link, $sql);
//
//$row = mysqli_fetch_all($result,MYSQL_ASSOC);
//
//mysqli_free_result($result);
// 
//mysqli_close($link);

if($row){
	echo json_encode($row);
}else{
	echo 0;
}
