<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'].'/perch/runtime.php'); ?>
<?php perch_layout('header'); ?>
<?php 
	
	if(!perch_get('s')){
		perch_content('Page'); 
		echo '<div class="text">
				<div class="restrict">
					';perch_blog_recent_posts(10); echo '
				</div>
			</div>';
	}else{
		echo '<div class="text">
				<div class="restrict">
					';perch_blog_post(perch_get('s')); echo '
				</div>
			</div>';
	}
	
?>
<?php perch_layout('footer'); ?>