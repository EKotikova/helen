<?require_once("config/config.php");
if ($_GET):
    $query = "SELECT*FROM tovars WHERE id=".$_GET['id'];
    $res = $db->query($query);
    $row = $res->fetch();
    $dir = 'media/uploads/'.$row[4];
	echo  $dir;
    if(isset($dir)):
        unlink($dir);
    endif;
    $delete = "DELETE FROM tovars WHERE id=".$_GET['id'];
    $db->exec($delete);
else : echo "her";
endif;?>
<script>
 document.location.href='cabinet.php';
 </script>