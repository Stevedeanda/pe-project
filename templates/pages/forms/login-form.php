<?php

$userData = [ 
	"betsy" => "Betsy",
	"steve" => "Steve",
	"andy" => "Andy",
	"derek" => "Derek",
	"john" => "John",
	"joshua" => "Joshua",
	"tara" => "Tara",
	"ned" => "Ned",
	"jesse" => "Jesse",
	"burooj" => "Burooj",
	"ivy" => "Ivy",
	"brian" => "Brian",
	"ben" => "Ben",
	"chanelle" => "Chanelle",
	"hjalmar" => "Hjalmar",
	"lilian" => "Lilian",
	];

$class = "visible";
$class1 = "hide";
$class2 = "hide";
$message = "Incorrect username or password";
$message1 = null;
$message2 = null;
$answer = "hide";

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
					$answer = "visible";
					$message1 = "For the username you entered <span>$id</span>. For the password you entered <span>$pw</span>";
					$message2 = "This is to show what you submitted, the text highlighted in orange is what you input.";
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

	<p class="regular-voice">Try login in. Your username is your first name only, all lowercase. Your password is your first name only. Make sure to capitalize the first letter in your name for your password. </p>
	<p class="<?=$class?> whisper-voice">Example: username-"steve" and password-"Steve".</p>

	<div>
		<label class="talking-voice">Username (first name)</label>
		<input class="regular-voice" type="text" name="id" required="required" minlength="3">
	</div>

	<div>
		<label class="talking-voice">Password</label>
		<input class="regular-voice" type="password" name="pw" required="required" minlength="3">
	</div>

	<button class="regular-voice" type="submit" name="submitted">
	Log in
	</button>
	
</form>

<output>
	<p class="<?=$class2?> regular-voice"><?=$message?></p>
	<p class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p class="<?=$answer?> regular-voice"><?=$message1?></p>
	<h1 class="exciting-voice <?=$class1?>">You are in!!!</h1>
</output>

