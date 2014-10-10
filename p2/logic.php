<?php

//data drom index.html form via $_POST
//get number of words
if (isset($_POST['numberOfWords']) > 0){
    $numberOfWords = $_POST['numberOfWords'];
} else {
	//if numberOfWords not there then default
	$numberOfWords = 4;
}

//get number of numbers
if (isset($_POST['numberOfNumbers']) > 0){
	$numberOfNumbers = $_POST['numberOfNumbers'];
} else {
	//if numberOfNumbers not there then default
    $numberOfNumbers = 0;
}

//get number of symbols
if (isset($_POST['numberOfCharacters']) > 0){
    $numberOfCharacters = $_POST['numberOfCharacters'];
} else {
	// if numberOfCharacters not there then default
    $numberOfCharacters = 0;
}

//get if first letter of every word upperCase
if (isset($_POST['upperCase'])){
    $upperCase = true;  
}else {
    $upperCase = false; 
}

//declare variables
$answer = "";
$selwords_array = []; //wait
$symbols_array = ['!','@','$','%','^','&','*','(',')','~','-','_','+','='];
$numbers_array = [0,1,2,3,4,5,6,7,8,9];

//text file to array of words
if ($word_array = file('wordsEnglish.txt')) {
	//add random word array wordsEnglish.txt to $selwords_array
	for ($i = 0; $i < $numberOfWords; $i++) {
		$rand = rand(0, count($word_array) - 1);
		$one_word = $word_array[$rand];
		array_push($selwords_array, $one_word);
		//echo $one_word;
	}

	//scan words $selwords_array and/or Capitalize first letter of words
	if ($upperCase == true) {
		foreach($selwords_array as $index => $one_word) {
			$selwords_array[$index] = ucfirst($one_word);
		}
	}

	//add numbers
	for ($i = 0; $i < $numberOfNumbers; $i++) {
		$rand = rand(0, count($numbers_array) - 1);
		$one_number = (string)$numbers_array[$rand] . " ";
		$rand = rand(0, count($selwords_array) - 1);
		array_splice($selwords_array, $rand, 0, $one_number);
	}

	if ($numberOfCharacters == true) {
		$rand = rand(0, count($symbols_array) - 1);
		$one_symbol = $symbols_array[$rand] . " ";
		$rand = rand(0, count($selwords_array) - 1);
		array_splice($selwords_array, $rand, 0, $one_symbol);
		}

	//add symbols
	for ($i = 0; $i < $numberOfCharacters; $i++) {
		$rand = rand(0, count($symbols_array) - 1);
		$one_symbol = $symbols_array[$rand] . " ";
		$rand = rand(0, count($selwords_array) - 1);
		array_splice($selwords_array, $rand, 0, $one_symbol);
	}

	$answer = implode("", $selwords_array);
    //echo "<br/>" . $answer;

} else {
	//not able to complete?
	$answer = "We're sorry, we're unable to complete your request.  Please try again later.";
}


