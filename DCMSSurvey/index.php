<?php 
	$path = "";
	include_once($path.'header/header.php');
	echo get_header($path,'Welcome');
 ?>
	<div class="container">
		<h1 class="center">One Survey</h1>
		<p class="center">A simple survey to make your life in better way, We will bring a better life by attending this survey</p>	
		<hr/>
		<div class="progressBar">
			<div class="progress">
				<div class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:10%">
				</div>
			</div>
		</div>
		<div class="jumbotron">
			<div>
				<form action="view/process.php" method="GET">
					<h3>Question, this is a big question with random options</h3>
					<div class="options">
						<input type="radio" name="option" value="1" required> OPtion 1
		                <br/>
		                <input type="radio" name="option" value="2"> OPtion 2
		                <br/>
		                <input type="radio" name="option" value="3"> OPtion 3
		                <br/>
		                <input type="radio" name="option" value="4"> OPtion 4
		                <br/>
					</div>
					<div class="submit">
	                	<input type="submit" value="Submit" class="btn btn-success">
	                </div>
				</form>
			</div>
		</div>
	</div>