<?php 
	$path = dirname(dirname(dirname(__FILE__)));
	include_once($path.'/header/header.php');
	echo get_header($path,'Add Question');
?>

<div class="container">
	<form action="../app/add_question.php" method="post">
		<label for="question">Your Question</label>
		<input type="text" class="form-control" id="question" name="question" required placeholder="Enter Question">
		<hr/>
		<div class="options_header">
			<div class="col-xs-4">
				<label class="control-label" for="option">Options</label>
			</div>
			<div class="col-xs-7">
				
			</div>
			<div class="col-xs-1">
				<button type = "button" class = "btn btn-success addButton">add</button>
			</div>
		</div>
		<ol class="input_options">
			<div class="col-xs-8">
			  <label for="ex1">Option 1</label>
			  <input class="form-control" id="ex1" name="option1" type="text" required placeholder="Option1">
			</div>
			<div class="col-xs-4"></div>
		</ol>
		<hr/>
		<input type="hidden" id="hide" name="count" value="1">
		<div class="submit">
			<input type="submit" value="Submit" class="btn btn-success">
		</div>
	</form>	
</div>
</body>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script type="text/javascript">
	$(document).ready(function () {
		var counter = 1
		$(".addButton").click(function() {
			if(counter == 4){
				alert("We suggest you to add maximum of 4 options");
			}else{
				counter++;
				var nextOne = '<div class="col-xs-8"><label for="ex'+counter+'">Option '+counter+'</label><input class="form-control" id="ex'+counter+'" name="option'+counter+'" type="text" required placeholder="Option'+counter+'"></div><div class="col-xs-4"></div>';
				$(".input_options").append(nextOne);
			}
			$('#hide').val(counter);
		});
	});
</script>