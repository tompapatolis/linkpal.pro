<div class="gen-title">MD5 Hasher</div>
<form action="index.php" method="post">
	<?php if(isset($_POST['md5text'])):?>
		<input type="text" class="input-text wide" value="<?=md5($_POST['md5text']);?>" readonly>	
	<?php else:?>
		<input type="text" class="input-text wide" value="" placeholder="Enter Value" name="md5text">
		<input type="submit" class="button" value="Calculate">
	<?php endif;?>
</form>