<?php require_once('app/functions.php');?>
<?php require_once('app/html_header.php');?>
<?php $files = getCategories();?>

<ul class="link">

	<?php foreach ($files as $file):?>
		<li class="group-title"><h3><?=getTitle($file)?></h3></li>
		<?php $links = getLinks($file);?>
		
		<?php foreach ($links as $link):?>
			<li><a href="<?=$link['url']?>" class="<?=$link['class']?>"><?=$link['title']?></a>
				<span><?=$link['desc']?></span>
			</li>
		<?php endforeach;?>

	<?php endforeach;?>

</ul>

<?php require_once('app/passwords.php');?>
<?php require_once('app/md5hasher.php');?>

<div class="copyright">LinkPal Pro. Another Sexy AF App from Tom. Copyright &copy; 2020-2040</div>
<?php require_once('app/html_footer.php');?>