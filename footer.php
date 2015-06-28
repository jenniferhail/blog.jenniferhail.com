<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package jenhail
 */
?>

	</div><!-- #main -->

</div><!-- #page -->
<footer id="footer" role="contentinfo" class="row">
	<div id="copyright" class="container">
		&copy; <?php echo date( 'Y' ); echo '&nbsp;'; echo bloginfo( 'name' ); ?><br>
		Site by <a href="http://bypine.co" target="_blank" rel="nofollow">Pine</a> &amp;
		<a href="http://www.jenniferhail.com" target="_blank" rel="nofollow">Jennifer Hail</a>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>
</body>
</html>