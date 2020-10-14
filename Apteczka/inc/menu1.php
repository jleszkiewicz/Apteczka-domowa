<div class="container">
 <div class="dropdown">
  <hr>
  <button class="btn btn-secondary dropdown-toggle" type="button" id="menu1Lista"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <?php echo $mn1Uprawnienie_jl ?>
    </button>

    <div class="dropdown-menu" aria-labelledby="menu1Lista">
     <a class="dropdown-item" href="index.php?operacja=101"><?php echo $mn1_1UprawWysw_jl ?></a>
     <a class="dropdown-item" href="index.php?operacja=102"><?php echo $mn1_2UprawEdit_jl ?></a>
     <a class="dropdown-item" href="index.php?operacja=103"><?php echo $mn1_3UprawDodaj_jl ?></a>
     <a class="dropdown-item" href="index.php?operacja=104"><?php echo $mn1_4UprawUsun_jl ?></a>
     </div>
     <hr>
     <div class="dropdown-menu" aria-labelledby="menu2Lista">
     <a class="dropdown-item" href="index.php?operacja=201"><?php echo "Wyświetl (50)" ?></a>
     <a class="dropdown-item" href="index.php?operacja=202"><?php echo "Wyszukaj" ?></a>
     <a class="dropdown-item" ><?php echo "--nieaktywne Dodaj" ?></a>
     <a class="dropdown-item" ><?php echo "--nieaktywne Usuń" ?></a>
     </div>
     <hr>
     </div>
     </div>
     <div class="btn-group">
     <button class="btn btn-secondary dropdown-toggle" type="button" id="menu3Lista"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   A p t e c z k a
    </button>

    <div class="dropdown-menu" aria-labelledby="menu3Lista">
     <a class="dropdown-item" href=""><?php echo "-- Wydaj lek" ?></a>
     <a class="dropdown-item" href=""><?php echo "-- Dodaj do apteczki (słownik wyszukaj)" ?></a>
     <a class="dropdown-item" href=""><?php echo "-- Historia leku" ?></a>
     <a class="dropdown-item" href=""><?php echo "-- Zawartość apteczki" ?></a>
     </div>
     <hr>
     </div>
     </div>
    