<?php require_once('app/functions.php');?>
<?php require_once('app/html_header.php');?>
<?php $links = getJSON()?>

<div class="links">

	<?php foreach ($links as $item):?>
		<div class="category"><?=$item['category']?></div>

		<?php foreach ($item['links'] as $link):?>
			<a href="<?=$link['url']?>" class="<?=($link['important']?'important':'')?>" rel="nofollow">
				<div class="label"><?=$link['label']?></div>
				<div class="description"><?=$link['description']?></div>
			</a>
			
		<?php endforeach;?>
	<?php endforeach;?>

</div>

<?php require_once('app/passwords.php');?>
<?php require_once('app/md5hasher.php');?>

<div class="copyright">LinkPal JSON. Another Sexy AF App from Tom. Copyright &copy; 2021</div>
<?php require_once('app/html_footer.php');?>