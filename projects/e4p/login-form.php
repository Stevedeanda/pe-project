<?php include("style.php"); ?>


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

<form method="POST" class="<?=$class?>">

	<div class="<?=$class?>">
		<label>Username</label>
		<input type="text" name="id" placeholder="lower-case only" required="required">
	</div>

	<div class="<?=$class?>">
		<label>Password</label>
		<input type="password" name="pw" placeholder="hint:your city or name" required="required">
	</div>

	<button class="<?=$class?>" type="submit" name="submitted">
	Log in
	</button>

	<p class="<?=$class2?>"><?=$message?></p>
	
</form>

<section class="<?=$class1?>">
	
	<h1>You are in!!!</h1>

</section>












