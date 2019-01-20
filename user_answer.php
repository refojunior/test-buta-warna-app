<?php 
include "config.php";

// echo $_POST['question_id']. "<br>";
$user =  $_SESSION['userData']['id'];
// echo $_POST['answer'];

//cek benar atau salah
$cek = $db->query("SELECT * FROM questions WHERE id = '". $_POST['question_id']. "' AND answer = '" . $_POST['answer']. "'");
if($cek->rowCount() <> 0){
	$result = "true";
} else {
	$result = "false";
}

//$insert = $db->query("INSERT INTO answers VALUES ('', '".$_POST['question_id']."', '".$user."', '".$_POST['answer']."', '$result')");

//return soal baru yang belum pernah dijawab
$arr = '';
$ans = $db->query("SELECT * FROM answers WHERE user_id = '$user'");
foreach($ans as $data) {
	$arr .= "'".$data['question_id'] ."', ";
}
$answered = rtrim($arr,", ");

$not_answered = $db->query("SELECT * FROM questions  WHERE id NOT IN ($answered) ");
$rand = [];
foreach($not_answered as $not){
	array_push($rand, $not['id']);
}

$quest = $rand[array_rand($rand)];

//select question

//select multiple choice

 ?>