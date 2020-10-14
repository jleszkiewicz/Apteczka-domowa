<?php
 function polaczenie_jl(){
     global $txtBladPolaczenia_jl;
     $serwerDB_jl = "mysql.agh.edu.pl";
     $login_jl = "jleszkie";
     $haslo_jl = "gwRNapquUu06CSXw";
     $baza_jl = "jleszkie";

     if(isset($_SESSION['bladPolaczenia_jl'])) unset($_SESSION['bladPolaczenia_jl']);
     $polaczenie_jl = @new mysqli($serwerDB_jl, $login_jl, $haslo_jl, $baza_jl);

     if($polaczenie_jl->connect_errno != 0){
        $_SESSION['bladPolaczenia_jl'] = $txtBladPolaczenia_jl . $polaczenie_jl->connect_error();
        return NULL;
     }
     else{
         $polaczenie_jl->set_charset("utf8");
         return $polaczenie_jl;
     }
 }

 function zapytanieDoBazy_jl($polaczenie_jl, $zapytanie_jl){
     if ($rezultat_jl = $polaczenie_jl->query($zapytanie_jl))
      return $rezultat_jl;
     else
     return NULL;
 }
 ?>