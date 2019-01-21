<?php 
include_once "config.php";
//load form pertama
if(isset($_GET['question'])){
    $query = $db->query("SELECT * FROM questions WHERE id = '" .$_GET['question']. "'")->fetch();
    $choice = $db->query("SELECT * FROM multiple_choice WHERE question_id = '" .$_GET['question']. "'");
} 


 ?>
<div class="row justify-content-center">
    <div class="col-md-3">
        <img src="img/<?= $query['image'] ?>" alt="<?= $query['image'] ?>" id="img" class="img-fluid">
    </div>
</div>
<br>
<form action="#" id="formAnswer">
    <div class="row justify-content-center">
        <div class="col-md-3" style="text-align: center">
            <input type="hidden" name="question_id" id="question_id" value="<?= $_GET['question'] ?>">
            <b id="question">Angka berapakah gambar diatas?</b>
            <ul>
            	<?php $no=1; foreach ($choice as $key): ?>
            		<li><input type="radio" value="<?= $key['value'] ?>" name="answer" id="answer<?= $no++ ?>"> 
                        <span id="span<?= $no++ ?>"><?= $key['value'] ?></span></li>
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
</form>

<script>
    
    $('#formAnswer').submit(function(e){
        e.preventDefault();
        if($('input[name=answer]:checked', '#formAnswer').val() != undefined){
            $.ajax({
                type: 'POST',
                url: 'user_answer.php',
                dataType: 'json',
                data: $(this).serialize(),
                success: function(data){
                    console.log(data);
                    $('input[name="answer"]').prop('checked', false);
                    $('#question_id').val(data.id);
                    $('#img').attr("src", 'img/'+ data.image);
                    //angka looping nya aneh, setiap kebawah dia bertambah 1, cek inspek element radio buttonnya
                    $('#answer1').val(data[4]);
                    $('#span2').html(data[4]);
                    $('#answer3').val(data[5]);
                    $('#span4').html(data[5]);
                    $('#answer5').val(data[6]);
                    $('#span6').html(data[6]);
                    $('#answer7').val(data[7]);
                    $('#span8').html(data[7]);
                    
                },
                error : function(){
                    window.location.href = "result.php";
                }
            });
        } else {
            alert("pilih jawaban");
        }
        
    });
</script>