<div id="search-bar">

      <form role="search" class="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" >
            <input autocomplete="on" id="s" placeholder="Search for products" name="s" value="<?php echo get_search_query(); ?>" name="s" id="s" class="searchTerm" />
            <input type="submit" class="searchButton" value="&#xf002;" />
        </form>
        </div>
