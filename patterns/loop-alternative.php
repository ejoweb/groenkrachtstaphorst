<?php
/**
 * Title: Loop - alternative
 * Slug: gks/loop-alternative
 * Categories: featured
 */
?>
<!-- wp:query {"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"displayLayout":{"type":"list"},"layout":{"type":"default"}} -->
<div class="wp-block-query">

	<!-- wp:post-template -->
		<!-- wp:post-featured-image {"isLink":true,"height":"240px"} /-->

		<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"var:preset|spacing|50"}}},"layout":{"type":"default"}} -->
		<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--50)"><!-- wp:post-date {"fontSize":"small"} /-->

		<!-- wp:post-title {"isLink":true} /--></div>
		<!-- /wp:group -->

		<!-- wp:post-excerpt {"moreText":"Lees verder"} /-->

		<!-- wp:separator {"className":"is-style-wide"} -->
		<hr class="wp-block-separator has-alpha-channel-opacity is-style-wide"/>
		<!-- /wp:separator -->

	<!-- /wp:post-template -->

	<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"space-between"}} -->

		<!-- wp:query-pagination-previous /-->
		<!-- wp:query-pagination-numbers /-->
		<!-- wp:query-pagination-next /-->

	<!-- /wp:query-pagination -->

	<!-- wp:query-no-results -->

		<!-- wp:paragraph {"placeholder":"Voeg tekst of blokken toe die worden getoond wanneer de query geen resultaten oplevert."} -->
		<p></p>
		<!-- /wp:paragraph -->

	<!-- /wp:query-no-results -->

</div>
<!-- /wp:query -->