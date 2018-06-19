<?php
// add button scrolltop
add_action('wp_footer', 'ws24h_show_html_scroll_to_top');
function ws24h_show_html_scroll_to_top(){
	?>
	<!-- Scroll to top -->
	<style type='text/css'>
	#bttop{background: url('<?php echo get_template_directory_uri();?>/modules/gototop/images/to-top-arrow.png') no-repeat scroll 12px 17px transparent; text-align:center;padding:5px;position:fixed;bottom:25px;right:10px;cursor:pointer;display:none;color:#fff;font-size:11px;font-weight:900; width:40px; height:40px; z-index:1000;
        background-color: #f5c284;
    }
	#bttop:hover{
	   
       background-color: #822f66;
	}
	</style>
	<div id='bttop'>&nbsp;</div>
	<script type='text/javascript'>$(function(){$(window).scroll(function(){if($(this).scrollTop()!=0){$('#bttop').fadeIn();}else{$('#bttop').fadeOut();}});$('#bttop').click(function(){$('body,html').animate({scrollTop:0},800);});});</script>
	<!-- End Scroll to top -->
	<?php
	
}