<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	


<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

// for($i=1; $i < 21; $i++) {
// 	$note_individuelle= $_POST["reponse". $i]; //affiche chaque note de 1 à 7 de chaqu'une des 20 questions
// 	var_dump($note_individuelle);
// 	$array = array($note_individuelle); // transformer chaque élément en array
// 	print_r($array);
// 	print_r(count($array));
// 	$array_merge = array_merge($array); // l'intention est de fusionner chaque éléments en un array mais ça ne fonctionne pas
// 	print_r($array_merge);
// 	$total = array_sum($array_merge); // L'intention est d'avoir la somme de tous les éléments de l'array, mais ça ne fonctionne pas, mais à la place, j'ai un retour à la case départ avec une liste de toutes les réponses individuellement...
// 	echo $total;
// }

if(isset($_POST["envoi"])) { 
$sum = $_POST["reponse1"] + $_POST["reponse2"]+ $_POST["reponse3"]+ $_POST["reponse4"]+ $_POST["reponse5"]+ $_POST["reponse6"]+ $_POST["reponse7"]+ $_POST["reponse8"]+ $_POST["reponse9"]+ $_POST["reponse10"]+ $_POST["reponse11"]+ $_POST["reponse12"]+ $_POST["reponse13"] + $_POST["reponse14"]+ $_POST["reponse15"] + $_POST["reponse16"] + $_POST["reponse17"]+ $_POST["reponse18"]+ $_POST["reponse19"] + $_POST["reponse20"];

}



?>


	<?php 
	if(isset($_POST["envoi"])) { 
		echo "<script>window.scrollBy(0,10000);</script>";
		echo "Votre résultat au test de nomophobie est de <strong>" . $sum . "</strong> points !";

	}
		?>
	<p> Pour savoir si vous êtes nomophobes, évaluez votre résultat. Nous vous rappellons que la note la plus basse est de <strong> 20 </strong> points et la plus élevée est de <strong> 140 </strong> points</p>

</body>
</html>
