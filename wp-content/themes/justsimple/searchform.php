<form role="search" method="get" id="searchform" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div>
		<input type="text" class="searchform" value="<?php echo get_search_query(); ?>" name="s" id="s" />
	    <input type="submit" id="searchsubmit" value="Search" />
		</div>
</form>		
