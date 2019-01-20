<?php 
include_once "config.php";

$query = $db->query("SELECT * FROM questions WHERE id = '" .$_GET['question']. "'")->fetch();
$choice = $db->query("SELECT * FROM multiple_choice WHERE question_id = '" .$_GET['question']. "'");

 ?>
<div class="row justify-content-center">
    <div class="col-md-3">
        <img src="img/<?= $query['image'] ?>" alt="<?= $query['image'] ?>" class="img-fluid">
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-3" style="text-align: center">
        <b id="question">Angka berapakah gambar diatas?</b>
        <ul>
        	<?php foreach ($choice as $key): ?>
        		<li><input type="radio" value="<?= $key['value'] ?>" name="answer"> <?= $key['value'] ?></li>
        	<?php endforeach ?>
            
        </li>
    </div>
</div>
<br>
<div class="row justify-content-center">
    <div class="col-md-3" style="text-align: center">
        <input type="submit" value="Next" class="btn btn-primary" id="btnNext">
    </div>
</div>