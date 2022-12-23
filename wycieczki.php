<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" type="text/css" href="styl3.css"/>
</head>
<body>
    <div id="baner">
    <h1> BIURO PODRÓŻY </h1>
    </div>
     
      <div id="lewy">
       <h2> KONTAKT </h2>
       <a href="biuro@wycieczki.pl"> Napisz do nas </a>
       <p> telefon: 555666777 </p>
      </div>

         <div id="srodkowy">
         <h2> Galeria </h2>
<?php
//utworzenie zmiennych 
$server = "localhost";
$user = "root";
$passwd = "";
$dbname = "egzamin3";

$conn = mysqli_connect($server,$user,$passwd,$dbname);
//sprawdzenie polaczenia 
/*
if (!$conn){
    die ("fatal error". mysqli_error($conn));
} echo "jest okej";
*/

$zapytanie = "SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC";

$sql = mysqli_query($conn,$zapytanie);

while ($wynik = mysqli_fetch_row($sql)){
    echo "<img src='$wynik[0]'  alt='$wynik[1]'/>";
}
?>
         </div>  
           
           <div id="prawy"> 
           <h2> PROMOCJE </h2>
           <table>
            <tr>
                <td> Jesień</td>
                <td> Grupa 4+ </td>
                <td> Grupa 10+ </td>
            </tr>
            <tr>
                <td> 5% </td>
                <td> 10% </td>
                <td> 15% </td>
            </tr>
           </table>
           </div>

              <div id="dane">
               <h2> LISTA WYCIECZEK </h2>
<?php

$zapytanie2 = "SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna = '1'";
$sql2 = mysqli_query($conn,$zapytanie2);

while ($wynik2 = mysqli_fetch_row($sql2)){
    echo $wynik2[0] . " " . $wynik2[1] . " ". $wynik2[2] . "," . "cena:" ." " . $wynik2[3] ."<br>";
    
}

mysqli_close($conn);

?>
              </div>

                 <div id="stopka">
                 <p> Stronę wykonał: 000000000 </p>
                 </div>



</body>
</html>