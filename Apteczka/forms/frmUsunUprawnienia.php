<form action="operacjeDB.php" method="post">
<?php 
echo 
$btFrmPytanieUU_jl . $_GET['id'] . "dla aktora: " . $_GET['aktor'];
?>
<input type="hidden" name="kodOperacji" value="105">
<input type = "hidden" name="id" value="<?php $_GET['id'] ?>">
<input type = "reset" value="<?php echo $btFrmClear_jl; ?>">
<input type = "submit" value="<?php echo $btFrmUU_jl; ?>">
</form>
