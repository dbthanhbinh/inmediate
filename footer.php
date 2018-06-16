	
	<script src="<?= get_template_directory_uri() ?>/js/jquery.js" type="text/javascript" ></script>

	<!-- faq -->
	<?php if(is_page( 'faq' )): ?>
	<script src="<?= get_template_directory_uri() ?>/js/faq.js" type="text/javascript" ></script>
	<?php endif ?>
	
	<?php wp_footer(); ?>
	</body>
</html>