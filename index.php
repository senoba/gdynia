<?php

// Pocz¹tek definicji klasy Koszyk - definiuj¹cej koszyk sklepowy
class Koszyk
{

// Definicja zmiennej - tablicy asocjacyjnej zawieraj¹cej numery artyku³ów i
// ich iloœæ
var $artykuly;

// Metoda dodaj¹ca podan¹ iloœæ artyku³ów do koszyka

   function dodaj($numer, $ilosc)
   {

      $this->artykuly["$numer"] += $ilosc;
   }

// Metoda usuwaj¹ca podan¹ iloœæ artyku³ów z koszyka

   function usun($numer, $ilosc)
   {

      if($this->artykuly["$numer"]>$ilosc)

         $this->artykuly["$numer"]-=$ilosc;

      else

         $this->artykuly["$numer"]=0;

   }

// Metoda wyœwietlaj¹ca zawartoœæ koszyka

   function wyswietl()
   {

      while(list($k, $v) = each($this->artykuly))
         if($v>0)
            echo "Artykul nr $k - $v sztuk<br>";

   }

}

// Przyk³ad wykorzystania

$koszyk = new Koszyk;
$koszyk->dodaj('20', 2);
$koszyk->dodaj('12', 4);
$koszyk->dodaj('20', 5);
$koszyk->usun('12', 4);
$koszyk->wyswietl();

$nowy_koszyk = new Koszyk;
$nowy_koszyk->dodaj('102', 100);
$nowy_koszyk->dodaj('10', 50);
$nowy_koszyk->usun('102', 20);
$nowy_koszyk->wyswietl();

?>
