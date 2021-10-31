<div class="w3-container w3-card w3-white w3-round w3-margin"><br>
	<img src="avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
	<span class="w3-right w3-opacity"><?php echo $data[3] ?></span>
	<?php echo '<a href="check_profile.php?email='.$data[5].'">'.$data[4].'</a>' ?><br>
	<hr class="w3-clear">
	<p><?php echo $data[2] ?></p>
	<button type="button" class="w3-button w3-theme-d1 w3-margin-bottom" onclick="document.getElementById('id01').style.display='block'" style="border-radius:25px 25px;"><i class="fa fa-thumbs-up"></i>  Donate</button>
	<button type="button" class="w3-button w3-theme-d2 w3-margin-bottom" style="border-radius:25px 25px;"><i class="fa fa-comment"></i>  Comment</button>
</div>
