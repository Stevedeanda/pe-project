<?php

$userData = [ 
	"betsy" => "secrets",
	"steve" => "houston",
	"andy" => "austin",
	"derek" => "los angeles",
	"john" => "seattle",
	"joshua" => "joshua",
	"tara" => "tara",
	"ned" => "ned",
	"jesse" => "los angeles",
	"burooj" => "toronto",
	"ivy" => "los angeles",
	"brian" => "brian",
	];

$class = "visible";
$class1 = "hide";
$class2 = "hide";
$message = "Incorrect username or password";

// echo $userData["id"];

if (isset($_POST["submitted"])) {
	if ($_POST["id"] != "") {
		$id = $_POST["id"];
		if (array_key_exists($id, $userData) == $id){
			if (isset($_POST["pw"])) {
			$pw = $_POST["pw"];
				if ($userData[$id] == $pw) {
					$class = "hide";
					$class1 = "visible";
				} else {
					$class2 = "tryagain";
				}
			}
		}
	}
}



?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST" class="<?=$class?>">

	<h1 class="exciting-voice">Log in</h1>

	<p class="regular-voice">Try to log in</p>
	<p class="whisper-voice">If you are new, try "steve" for username and "houston" for the password.</p>

	<div class="<?=$class?>">
		<label>Username (first name)</label>
		<input type="text" name="id" placeholder="lower-case only" required="required">
	</div>

	<div class="<?=$class?>">
		<label>Password</label>
		<input type="password" name="pw" placeholder="hint:your city or name" required="required">
	</div>

	<button class="<?=$class?>" type="submit" name="submitted">
	Log in
	</button>

		<p class="regular-voice <?=$class2?>"><?=$message?></p>
	
		
		<h1 class="exciting-voice <?=$class1?>">You are in!!!</h1>

	
</form>
