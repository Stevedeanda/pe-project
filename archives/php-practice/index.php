

<header style="font-size: 100px">

<?php 


$trail1 = 50;
$trail2 = 37;

echo $trail1 + $trail2;

?>

</header>

<section style="font-size: 30px">

<?php 

$bigBend = "Big Bend";

echo "Hello, lets go for a hike at " . $bigBend . ".";

?>

</section>

<section style="font-size: 30px">

<?php 

$bigBend = "Big Bend";
$coloradoBend = "Colorado Bend";

?>

<p>Hey, would you rather go hiking at <?php echo$bigBend?> or <?=$coloradoBend?>?</p>

</section>

<section style="font-size: 30px">

<?php 

$parks = ["Big Bend", "Colorado Bend", "Yosemite", "Arches", "Rocky Mountains"];

?>

<p>I think I want to go visit <?=$parks["2"]?> and <?=$parks["0"]?>.</p>

</section>

<section style="font-size: 30px">

<?php 

$parks = ["Big Bend", "Colorado Bend", "Yosemite", "Arches", "Rocky Mountains"];

?>

<p>I think I want to go visit <?=$parks["2"]?> and <?=$parks["0"]?>.</p>

</section>



<section>

	<?php 
	
	$min = 42;
	$max = 70;

	$height = 70;

	$message = "Eat more spinach.";

	if ($height >= $min && $height <= $max) {
		$message = "Ok, get on the ride.";
	}	elseif ($height > $max) {
		$message = "Too tall.";
	} 

	?>

	<h2><?=$message?></h2>
</section>




