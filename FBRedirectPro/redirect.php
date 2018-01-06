<script type="text/javascript">
	top.location.href = "<?php if( get_post_meta( $post->ID, 'redirect', true ) ) { echo get_post_meta( $post->ID, 'redirect', true  ); } ?>";
</script>
