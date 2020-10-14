<?php
session_start();

if(!isset($_SESSION['zalogowany']))
header("Location: ./");

include "inc/nagl.php";
include "inc/baza.php";
include "inc/zapytania.php";

if(($mojePolaczenie_jl = polaczenie_jl()) == NULL){
    header("Location: ./");
}

if(!isset($_POST['kodOperacji_jl']) && !isset($_GET['kodOperacji_jl']))
header("Location: ./");

if(isset($_POST['kodOperacji_jl']))
$kodOperacji_jl = $_POST['kodOperacji_jl'];
else
$kodOperacji_jl = $_GET['kodOperacji_jl'];

$kodOperacji_jl = (int) $kodOperacji_jl;

switch ($kodOperacji_jl){
    case 1021:
        $szablon_jl = $mojePolaczenie_jl->prepare($UPRupdate_jl);
        $szablon_jl->bind_param("dsd", $val1_jl, $val2_jl, $val3_jl);
        $val1_jl = $_POST['kod'];
        $val2_jl = $_POST['aktor'];
        $val3_jl = $_POST['id'];
        $szablon_jl->execute();
        echo "Zmieniono " . $mojePolaczenie_jl->affected_rows . " rekord[y ów]<br>";
        $szablon_jl->close();
        echo '<a href="index.php?operacja=101">POWRÓT</a>';
    break;

    case 103:
        if(isset($_POST['kod']) && $_POST['aktor']){
            $szablon_jl = $mojePolaczenie_jl->prepare($UPRinsert_jl);
            $szablon_jl->bind_param("ds", $val1_jl;, $val2_jl);
            $val1_jl = $_POST['kod'];
            $val2_jl = $_POST['aktor'];
            $szablon_jl->execute();
        }
        echo "Dodano " . $mojePolaczenie_jl->affected_rows . " rekordów<br>";
        $szablon_jl->close();
        echo '<a href="index.php?operacja=101">POWRÓT</a>';
    break;

    case 104:
        $szablon_jl = $mojePolaczenie_jl->prepare($UPRdelete_jl);
        $szablon_jl->bind_param("d", $val1_jl);
        $val1_jl = $_GET['id'];
        $szablon_jl->execute();
        echo "Usunięto " . $mojePolaczenie_jl->affected_rows . " rekord[y ów]<br>";
        $szablon_jl->close();
        echo '<a href="index.php?operacja=101">POWRÓT</a>';
    break;
    default:
    header("Location: ./");
}

include "inc/stopka.php";
?>

