<?php
$UPRinsert_jl = "INSERT INTO uprawnienia (kod,aktor) VALUES (?, ?)";
$UPRselect_jl = "SELECT * FROM uprawnienia ORDER BY kod";
$UPRselect1_jl = "SELECT * FROM uprawnienia WHERE id = %d ORDER BY kod";
$UPRupdate_jl = "UPDATE uprawnienia SET kod = ?, aktor = ? WHERE id = ?";
$UPRdelete_jl = "DELETE FROM uprawnienia WHERE id = ?";

$SLEKselect_jl = "SELECT id, NazwaHandlowa, Postac, KodKreskowy FROM 'ListaLekow' LIMIT 50 OFFSET 0";
$LlEKwybor_jl = "SELECT id, NazwaHandlowa, Postac, KodKreskowy FROM 'ListaLekow' ";
$Llekwybor_jl .= "WHERE NazwaHandlowa LIKE '%%%s%%' AND KodKreskowy LIKE '%%%s%%' ";
$Llekwybor_jl .="AND Postac LIKE '%%%s%%' ";
$Llekwybor_jl .="ORDER BY NazwaHandlowa LIMIT 50 OFFSET 0";
?>