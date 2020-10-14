<form action="operacjeDB.php" method="post">
<?php echo $lblIdFrmDU_jl; ?>
<input type="text" name="id" value="<?php echo $wiersz_jl['id']; ?>" readonly><br>
<?php echo $lblKodFrmDU_jl; ?>
<input type="text" name="kod" value="<?php echo $wiersz_jl['kod']; ?>" required><br>
<?php echo $lblAktorFrmDU_jl; ?>
<input type = "text" name="aktor" value="<?php echo $wiersz_jl['aktor']; ?>" required><br>
<input type = "hidden" name="kodOperacji" value="1021">
<input type = "submit" value="<?php echo $btFrmDU_jl; ?>">
</form>