<li class="content">
	<header>
		<h2><i class="fa fa-user"></i><?=escapeHTML($USER['ATTR']['FULLNAME'])?><span>#<?=$USER['ID']?></span></h2>
	</header>
	<article>
		<p><?=excerpt($USER['BODY']['HTML'])?></p>
	</article>
	<footer>
		<ul>
			<li><a href="<?=$USER['URL']?>" target="_blank" title="<?=$Language->text('select_user')?>"><i class="fa fa-external-link"></i></a></li>
			<li><a href="<?=Application::getAdminURL("user/update.php?id={$USER['ID']}")?>" title="<?=$Language->text('update_user')?>"><i class="fa fa-pencil-square-o"></i></a></li>
			<li><a href="<?=Application::getAdminURL("user/delete.php?id={$USER['ID']}")?>" title="<?=$Language->text('delete_user')?>"><i class="fa fa-trash-o"></i></a></li>
		</ul>
	</footer>
</li>