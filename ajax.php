<?
require_once('config/config.php');

$qury="SELECT * FROM tovars WHERE id=".$_POST['id'];
$res = $db->query($qury);
$rows = $res->fetch();
echo "<img src='media/uploads/".$rows['picher']."' width='100' />"; 
?>