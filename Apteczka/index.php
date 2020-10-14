<?php
session_start();
include "inc/nagl.php";
include "inc/baza.php";
include "inc/zapytania.php";
?>
<div class="container">
<h2><?php echo $txtNazwaProjektu_jl; ?></h2>
</div>

<?php
include "inc/menu1.php";
?>

<div class="container">
<?php

$_SESSION['zalogowany'] = "a@b.c";

if(isset($_SESSION['zalogowany']) && isset($_GET['operacja'])){
  if(($mojePolaczenie_jl = polaczenie_jl()) == NULL){
      echo $_SESSION['bladPolaczenia_jl'];
  }
  $kodOperacji_jl = $_GET['operacja'];


  switch($kodOperacji_jl){
      case 101:
        if($wynik_jl = zapytanieDoBazy_jl($mojePolaczenie_jl, $UPRselect_jl)){
            include "inc/naglTabUprWysw.php";

            while($wiersz_jl = $wynik_jl ->fetch_assoc())
            printf("<tr><td>%d</td><td>%s</td></tr>", $wiersz_jl['id'], $wiersz_jl['kod'], $wiersz_jl['aktor']);
            echo "</tbody></table>";
            $mojePolaczenie_jl->close();
        }
        else 
        echo $txtBladZapytania_jl;
    break;

    case 102:
        if($wynik_jl = zapytanieDoBazy_jl($mojePolaczenie_jl, $UPRselect_jl)){
            include "inc/naglTabUprUsun.php";
            while($wiersz_jl = $wynik_jl->fetch_assoc())
            printf("<tr><td>%d</td><td>%d</td><td>%s</td><td><a href=\"index.php?id=%d&operacja=1021\">EDYCJA</a></td>",
            $wiersz_jl['id'], $wiersz_jl['kod'], $wiersz_jl['aktor'], $wiersz_jl['id']);
            echo "</tbody></table>";
            $mojePolaczenie_jl->close();

            //noiwfneoijwejpwdpkowe
        }
        else
        echo $txtBladZapytania_jl;
    break;

    case 1021:
        echo sprintf($UPRselect1_jl, $_GET['id']);
        if($wynik_jl = zapytanieDoBazy_jl($mojePolaczenie_jl, sprintf($UPRselect1_jl, $_GET['id']))){
            $wiersz_jl = $wynik_jl->fetch_assoc();
            include "forms/frmEdytujUprawnienia.php";
            $mojePolaczenie_jl->close();
        }
        else echo $txtBladZapytania_jl;
    break;

    case 103:
        include "forms/frmDodajUprawnienia.php";
    break;

    case 104:
        if($wynik_jl = zapytanieDoBazy_jl($mojePolaczenie_jl, $UPRselect_jl)){
        include "inc/naglTabUprUsun.php";
        while($wiersz_jl = $wynik_jl->fetch_assoc())
        printf("<tr><td>%d</td><td>%d</td><td>%s</td><td><a href=\"operacjeDB.php?id=%d&kodOperacji=104\">USUN</a></td>",
        $wiersz_jl['id'], $wiersz_jl['kod'], $wiersz_jl['aktor'], $wiersz_jl['id']);
        echo "</tbody></table>";
        $mojePolaczenie_jl->close();
  }
  else 
  echo $txtBladZapytania_jl;
break;

?>
</div>
<div class="container">
<?php
include "inc/stopka.php";

case 201:
if($wynik_jl = zapytanieDoBazy_jl($mojePolaczenie_jl, $SLEKselect_jl)){
    echo "<div class=\"alert alert-primary\" role=\"alert\">";
    echo "Tutaj do rozwiazania problem nawigacji (wyswietlenie kolejnych 50 rekordow i ustawienie";
    echo "</div>";
    include "inc/naglTabSlowLekWysw.php";

    while($wiersz_jl = $wynik_jl->fetch_assoc())
    printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>",
    $wiersz_jl['id'], $wiersz_jl['NazwaHandlowa'],
    $wiersz_jl['Postac'], $wiersz_jl['KodKreskowy']);
    echo "</tbody></table>";
    $mojePolaczenie_jl->close();
}
    else 
    echo $txtBladZapytania_jl;
    break;

case 202:
if(!isset($_POST['nazwaH']) && (!isset($_POST['kodKr'])))
include "forms/frmSzukajWslownikuLek.php";
else{
    $Llekwybor_jl = sprintf ($Llekwybor_jl, $_POST['nazwaH'], $_POST['kodKr'], $_POST['postac']);
    echo "Zapytanie" . $Llekwybor_jl . " ";
    if($wynik_jl = zapytanieDoBazy_jl($mojePolaczenie_jl, $Llekwybor_jl)){
        $wierszy_jl = $wynik_jl->num_rows;
        echo "<h5>Uzyskano $wierszy_jl wiersz(e y)</h5>";
        if($wierszy_jl <=25)
        include "inc/naglTabSlowLekWyswAkcja.php";
        else
        include "inc/naglTablSlowLekWysw.php";

        while($wiersz_jl = $wynik_jl->fetch_assoc()){
            $tabelaStrF_jl = " <tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>";
            if($wierszy_jl <= 25){
                $tabelaStrF_jl = "<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>";
                // echo $tabelaStrF_jl;
                printf($tabelaStrF_jl, $wiersz_jl['id'], $wiersz_jl['NazwaHandlowa'],
                $wiersz_jl['Postac'], $wiersz_jl['KodKreskowy'], "a href=\"\">" . "Dodaj do APT" . "</a>");
            }
            elseprintf($tabelStrF_jl, $wiersz_jl['id'], $wiersz_jl['NazwaHandlowa'], 
                $wiersz_jl['Postac'], $wiersz_jl['KodKreskowy']);

            }
            echo "</tbody></table>";
            $mojePolaczenie_jl->close();
        }
    }
break;
  }
  ?>