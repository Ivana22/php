<?php

// function pozdrav(){ // ne vrakja nishto
// 	echo "<br/>";
// 	echo "Zdravo";
// }


// pozdrav();
// function pozdrav2(){ // vrakja Zdravo
// 	return "Zdravo";
// }

// echo "<br/>";
// echo pozdrav2();

// echo "<br/>";
// function odzemanje(){
// 	$args = func_get_args();
// 	print_r($args);
// }
// odzemanje(12, 22, 65, 8787, 'csdcsd', false);

// echo "<br/>";

//  for($i = 0, $j = 50; $i > 30, $j > 0; $i++, $j--){
// 	echo "i: ".$i." j: ".$j."<br/>";
//  }
// echo "<br/>";
// $b = 55;
// $print = true;

// while($b < 127){
// 	if($b % 2 == 0){


// 		if($print == true){
// 			echo $b.'<br/>';
// 			$print = false;
// 		}else{
// 			$print = true;
// 		}


// 	}
// 	$b++;
// } 

// echo "<br/>";

// $kontinenti = array();
// $kontinenti[] = "Europe";
// $kontinenti[] = "Africa";
// $kontinenti[] = "Asia";
// $kontinenti[] = "North America";
// $kontinenti[] = "South America";
// $kontinenti[] = "Antartica";
// $kontinenti[] = "Australia";
// $c = count($kontinenti);
// // echo $c;
// for ($i=0; $i < $c; $i++) { 
// 	echo $kontinenti[$i].'<br/>';
// }


// $student['ime'] = 'Bojan';
// $student['prezime'] = 'Gavrovski';
// $student['prosek'] = 6.4;

// print_r($student);

// echo $student['prezime'];

// $studenti = array(
// 	array(
// 		'ime' => 'Bojan',
// 		'prezime' => 'Gavrovski',
// 		'prosek' => 6.4,
// 		array('Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko')
// 	),
// 	array(
// 		'ime' => 'Pero',
// 		'prezime' => 'Perovski',
// 		'prosek' => 8.2,
// 		array('Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko')
// 	),
// 	array(
// 		'ime' => 'Janko',
// 		'prezime' => 'Jankovski',
// 		'prosek' => 7.3,
// 		array('Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko','Fizika', 'Likovno', 'Muzicko')
// 	),
	
// );

// print_r($studenti);
// echo "<br/>";
// echo $studenti[1]['prezime'];

// print_r ($studenti[0]);
// echo "<br/>";
// echo $studenti[0]['ime'].','.$studenti[0]['prezime'].','.$studenti[0]['prosek'];
// echo "<br/>";
// echo $studenti[1]['ime'].','.$studenti[1]['prezime'].','.$studenti[1]['prosek'];
// echo "<br/>";
// echo $studenti[2]['ime'].','.$studenti[2]['prezime'].','.$studenti[2]['prosek'];
// echo "<br/>";

// $broj=count($studenti);
// $maxprosek=0;
// $minprosek = INF;
// $srprosek = 0;
// $maxknigi = 0;
// $maxprosekst;
// $minprosekst;
// $maxknigist;

// foreach($studenti as $student){
// //for ($i=0; $i < $broj; $i++) { 
// 	echo "<br/>";
// 	echo "<br/>";


// 	echo $student['ime'].','.$student['prezime'].','.$student['prosek'].'<br/>';
	
//     if($maxprosek < $student['prosek']){
//     	$maxprosek = $student['prosek'];
//     	$maxprosekst = $student['ime']    ." ".  $student['prezime']  ;
//    }

//    if($minprosek > $student['prosek']){
//    		$minprosek = $student['prosek'];
//    		$minprosekst = $student['ime']    ." ".  $student['prezime']  ;
//    }

//    	$srprosek = $srprosek + $student['prosek'];

     

// 	echo "=== Knigi: ";
// 	$brojknigi=count($student[0]);
	
	//for ($j=0; $j < $brojknigi; $j++){
	//	echo $studenti[$i][0][$j].', ';
	//}

// 	foreach($student[0] as $kniga){
// 		echo $kniga.', ';
// 		//echo "<br/>";
// 	}

// 	if($maxknigi<$brojknigi){
// 		$maxknigi=$brojknigi;
// 		$maxknigist = $student['ime'] ." ". $student['prezime'];
// 	}

// }
// echo "<br/>";
// echo "<br/>";
// echo "Studentot so maksimum knigi e: " .$maxknigist. " so broj na knigi: " .$maxknigi;

// echo "<br/>";
// echo "<br/>";

// echo "Maksimum prosek ima studentot: " . $maxprosekst . " so prosek: " .$maxprosek;
// echo "<br/>";
// echo "<br/>";

// echo "Minimum prosek ima studentot: " . $minprosekst . " so prosek: " .$minprosek;
// echo " Sumata na site proseci e: " . $srprosek;
// echo "<br/>";
// echo "<br/>";
// echo "Sreden na site studenti e " .$srprosek/$broj;

// $brojknigi=count($studenti[0][0]);
// for ($i=0; $i < $brojknigi; $i++){
// 	echo $studenti[0][0][$i].', ';
// }

// echo "<br/>";

// $niza = array(
// 	"A" => "eden",
// 	"B" => "dva",
// 	"C" => "tri",
// 	"D" => "chetiri",
// 	"E" => "pet",
// 	"F" => "shest",
// 	"G" => "sedum",
// 	"H" => "osum",
// 	"I" => "devet",
// 	"J" => "deset",
// );
// foreach($niza as $element){
// 	echo $element;
// 	echo "<br/>";
// }


$tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut nec augue auctor justo euismod semper quis quis nulla. In ut erat a felis dapibus malesuada in ut odio. Sed vitae ultricies arcu. In hac habitasse platea dictumst. In ante erat, interdum at massa et, condimentum bibendum sem. Praesent quis mauris augue. Aliquam tristique, erat eget iaculis efficitur, mauris tellus auctor urna, id porta eros tellus et risus. Pellentesque vitae lobortis tortor, sed tristique nisl. Fusce eget mi hendrerit, dictum mauris non, congue neque. Duis dapibus sem eget rhoncus volutpat. Morbi vitae sem nec mauris facilisis varius a vitae nisl. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed viverra euismod metus, sit amet facilisis erat dapibus at. Donec dignissim gravida sollicitudin.
Proin laoreet tincidunt diam at scelerisque. Nam ac feugiat augue. Nam luctus rutrum augue, quis molestie erat. Nulla eget diam eget lectus semper rhoncus. Donec turpis erat, tempus eu metus sodales, sagittis placerat sapien. Fusce venenatis dignissim purus, vel dapibus eros tempus pellentesque. Duis at aliquam tortor. Nam et mauris aliquam, mollis nibh et, ultrices neque. Curabitur mattis lorem sit amet massa aliquet consequat. Nullam a neque pharetra, cursus purus convallis, tempus ligula. Sed sagittis eleifend molestie.
Nam quis scelerisque justo. Maecenas bibendum nec nisi bibendum eleifend. Pellentesque tempor, lorem luctus hendrerit suscipit, risus eros elementum elit, sit amet efficitur nisi orci eget turpis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu elit vitae lacus bibendum dictum ut ac enim. Morbi vestibulum, justo fringilla cursus viverra, velit ex pellentesque risus, sit amet feugiat nibh lectus nec lectus. Praesent blandit nisl id orci sagittis varius. Integer nec erat et odio eleifend dignissim. Nulla viverra dignissim imperdiet. Fusce non congue purus. Nullam aliquam sit amet dolor ut viverra. Praesent vehicula volutpat porttitor. Nulla non justo et sapien laoreet efficitur eu ut dolor. Morbi augue mauris, aliquam convallis sapien sit amet, auctor aliquet purus. Nulla sed nunc luctus, blandit odio ut, interdum massa.
Aenean pellentesque nec dui non condimentum. Morbi dapibus sapien sed diam dapibus ullamcorper. Ut vitae lacinia tellus, ut vulputate nibh. Vestibulum nec massa vel nisi aliquam rhoncus. Proin sed molestie sapien. Phasellus maximus purus sit amet nulla lacinia pulvinar. Pellentesque semper vitae ipsum nec consequat. Curabitur facilisis mi quis mi mattis tristique. Donec sollicitudin metus felis, vel scelerisque lectus aliquam id. In hac habitasse platea dictumst. Nullam ac fermentum tellus. Quisque mi nulla, posuere rutrum tristique ut, scelerisque vitae ipsum. Aenean auctor est in scelerisque tempor. Donec luctus scelerisque posuere. Interdum et malesuada fames ac ante ipsum primis in faucibus.
Proin a fringilla orci... Sed ut leo arcu. Vestibulum dapibus sollicitudin risus quis semper. Sed dolor augue, fringilla nec urna et, mollis fringilla justo. In eleifend odio sed enim tincidunt volutpat. Etiam vitae luctus ex, sed sodales orci. Duis in tellus nec erat ullamcorper egestas quis ultrices erat. Phasellus vitae nunc lorem. Aliquam sed varius elit, vel laoreet felis. Sed a malesuada eros, ut dictum ante.";

$recenici = explode('. ', $tekst);
$recenici_count = 0;

$zborovi = explode(' ', $tekst);
$zborovi_count = 0;

foreach ($recenici as $r) {
	$recenici_count++;
}
foreach ($zborovi as $r) {
	$zborovi_count++;
}

foreach($recenici as $rec){
	echo $rec.'<br/>';
}
echo "<br/>";
echo "<br/>";
echo "Zborovi: ".$zborovi_count;
echo "<br/>";
echo "Recenici: ".$recenici_count;
echo "<br/>";
echo "<br/>";

$reverse = '';
for($i = count($recenici) - 1; $i >= 0; $i--){
	$reverse .= ' '.$recenici[$i].'.';
}
echo $reverse;
?>