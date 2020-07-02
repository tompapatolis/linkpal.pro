<h3 class="darker-title">Passwords</h3>
<div class="passbox">
	<input type="text" class="input-text" value="<?=passgen(8,false)?>" readonly title="8 Character">
	<input type="text" class="input-text" value="<?=passgen(15,false)?>" readonly title="15 Character">
	<input type="text" class="input-text" value="<?=passgen(20,false)?>" readonly title="20 Character">
	<input type="text" class="input-text" value="<?=passgen(30,false)?>" readonly title="30 Character">
	<input type="text" class="input-text" value="<?=passgen(8,true)?>" readonly title="8 Character Strong">
	<input type="text" class="input-text" value="<?=passgen(15,true)?>" readonly title="15 Character Strong">
	<input type="text" class="input-text" value="<?=passgen(20,true)?>" readonly title="20 Character Strong">
	<input type="text" class="input-text" value="<?=passgen(30,true)?>" readonly title="30 Character Strong">
</div>