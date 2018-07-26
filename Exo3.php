<?php
for ($i=0; $i<=10; $i++) {
    echo $i . "<br>";
}
//1

$premiere = 0;
$deuxieme = 30;
while ($premiere <= 20) {
    echo $premiere * $deuxieme . "<br>";
    $premiere++;
}
//2

$premiere = 100;
$deuxieme = 50;
while ($premiere >= 10) {
    echo $premiere * $deuxieme . "<br>";
    $premiere--;
}
//3


$prem = 1;
while ($prem <= 10) {
echo $prem . "<br>";
$prem += $prem/2;
}
//4

for ($i=1 ; $i<=15 ; $i++){
echo "<br>" . $i . " On y arrive presque";
}
//5

for ($i=20; $i>=0 ; $i--) {
    echo "<br>" . $i . " C'est presque bon";
}
//6

for ($i=1; $i<=100; $i+= +15) {
    echo "<br>" . $i . " On tient le bon bout";
}
//7

for ($i=200; $i>=0; $i+= -12) {
    echo "<br>" . $i . " Enfin !!";
}
//8

