//exo 1
<?php
$x = 10;
$y = 20;
echo $x + $y;
?>

//exo 2
<?php
$x = 10;
echo 2*$x;
?>

//exo 3
<?php
$x = rand(1,5);
echo $x."<br>";
if ($x==1) {
	echo "hello";
}
else if ($x==2) {
	echo "salut";
}
else {
	echo "Yo";
}
?>

//exo 4
<?php
$note = rand(0,20);
echo $note."<br>";
if ($note<=10) {
	echo "Bof";
}
if (($note>10) && ($note<=12)) {
	echo "Passable";
}
if (($note>12) && ($note<=14)) {
	echo "Assez-bien";
}
if (($note>14) && ($note<=16)) {
	echo "Bien";
}
if ($note>16) {
	echo "Très-bien";
}
?>

//exo 5
<?php
$age = 21;
echo $age < 23 ? "oui" : "non";
?>

//exo 6
<?php
function tax($salary) {
	return $salary<1000 ? $salary*0.10 : $salary*0.25;
}

echo tax(1000);
?>

//exo 7
<?php
// boucle while
$somme = 0 ;
$x = 1 ;
while ($x <= 100) {
	$somme += $x;
	$x++;
}

echo "Voila la somme des 100 premiers entiers : " .$somme. '<br>';
?>

<?php
//boucle for
$somme = 0;
for ($x = 1 ; $x <= 100 ; $x++) {
 	$somme += $x;
}

echo "Voila la somme des 100 premiers entiers : " .$somme. '<br>';
?>

//exo 8
<?php
for ($i = 1; $i < 100; $i++) {
    if ($i % 3 === 0) {
        echo 'Fizz<br>';
    } if ($i % 5 === 0) {
        echo 'Buzz<br>';
    } if ($i % 15 === 0) {
        echo 'FizzzzzBuzz<br>';
    } else {
        echo $i . '<br>';
    }
}
?>

//exo 9
<?php
function tree($lines) {
$lines = 10;
	for($i=1; $i<$lines; $i++) {
		if($i <= ($lines/2)) {
		echo str_repeat('a', $i)."<br>";
		}
		else {
		echo str_repeat('a', ($lines-$i))."<br>";
		}
    }
}
?>

//exo 10
<?php
$user = [
    "firstname" => "nicolas",
    "lastname" => "denoyer",
    "age" => "21",
    "job" => "chomeur",
];

foreach ($user as $key => $value) {
    echo $key.":".$value."<br>";
}
?>

//exo 11
<?php
$numbers = [];

echo"1er tab :";
	for($i=0;$i<100;$i++){
		$numbers[$i] = rand(10, 1000);
		echo $numbers[$i]."-";
	}

echo "<br/>";

//algo de tri
echo "tab trier :";

	for($i=0; $i<100-1; $i++) {
		for($j=0; $j<(100-1-$i); $j++) {
			if ($numbers[$j] > $numbers[$j+1] ) {
				$temp = $numbers[$j+1];
				$numbers[$j+1] = $numbers[$j];
				$numbers[$j] = $temp;
			}
		}
	}

for($i=0;$i<100;$i++){
echo $numbers[$i]."-";
}
?>