<?php require_once('app/functions.php');?>
<?php require_once('app/html_header.php');?>
<?php $links = getJSON()?>

<ul class="link">

	<?php foreach ($links as $item):?>
		<li class="group-title"><h3><?=$item['category']?></h3></li>

		<?php foreach ($item['links'] as $link):?>
			<li><a href="<?=$link['url']?>" class="<?=($link['important']?'important':'')?>" rel="nofollow"><?=$link['label']?></a>
				<span><?=$link['description']?></span>
			</li>			
		<?php endforeach;?>

	<?php endforeach;?>

</ul>

<?php require_once('app/passwords.php');?>
<?php require_once('app/md5hasher.php');?>

<div class="copyright">LinkPal JSON. Another Sexy AF App from Tom. Copyright &copy; 2021</div>
<?php require_once('app/html_footer.php');?>