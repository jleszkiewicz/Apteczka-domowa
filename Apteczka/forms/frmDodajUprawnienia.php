<form action="operacjeDB.php" method="post">
<?php echo $lblKodFrmDU_jl; ?>
<input type="text" name="kod" placeholder="<?php echo $plhKodFrmDU_jl; ?>" required><br>
<?php echo $lblAktorFrmDU_jl; ?>
<input type = "text" name="aktor" placeholder="<?php echo $plhAktorFrmDU_jl; ?>" required><br>
<input type = "hidden" name="kodOperacji" value="103">
<input type = "submit" value="<?php echo $btFrmDU_jl; ?>">
</form>
