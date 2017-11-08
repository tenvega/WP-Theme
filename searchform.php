<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<div><label for="s" class="assistive-text"><?php _e( 'Search', 'twentyeleven' ); ?></label>
  <input type="text" class="field" name="s" id="s" placeholder="<?php the_search_query(); ?>" />
  <input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
</div>
</form>
