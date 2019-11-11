<?php
echo "<br>Ime: " . $_POST["ime"] . "<br><br>";

echo "<br>Prezime: " . $_POST["prezime"] . "<br><br>";

echo "<br>Godina rodenja: " . $_POST["god"] . "<br><br>";

echo "Spol: <br>";
foreach ($_POST["spol"] as $selectedOption)
    echo $selectedOption . "<br>";