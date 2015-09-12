<?php

// Pocz�tek definicji klasy Koszyk - definiuj�cej koszyk sklepowy
class Koszyk
{

// Definicja zmiennej - tablicy asocjacyjnej zawieraj�cej numery artyku��w i
// ich ilo��
var $artykuly;

// Metoda dodaj�ca podan� ilo�� artyku��w do koszyka

   function dodaj($numer, $ilosc)
   {

      $this->artykuly["$numer"] += $ilosc;
   }

// Metoda usuwaj�ca podan� ilo�� artyku��w z koszyka

   function usun($numer, $ilosc)
   {

      if($this->artykuly["$numer"]>$ilosc)

         $this->artykuly["$numer"]-=$ilosc;

      else

         $this->artykuly["$numer"]=0;

   }

// Metoda wy�wietlaj�ca zawarto�� koszyka

   function wyswietl()
   {

      while(list($k, $v) = each($this->artykuly))
         if($v>0)
            echo "Artykul nr $k - $v sztuk<br>";

   }

}

// Przyk�ad wykorzystania

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
