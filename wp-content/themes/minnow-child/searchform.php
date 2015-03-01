<form method="get" id="searchform" class="search-form" caction="<?php bloginfo('url'); ?>">
  <div>
    <label class="screen-reader-text" for="s">' . _x( 'Search for:', 'label' ) . '</label>
    <input class="text" type="text" placeholder="Search" value="<?php if(trim(wp_specialchars($s,1))!='') echo trim(wp_specialchars($s,1));else echo ' ';?>" name="s" id="s" />
    <input type="submit" class="submit" name="Submit" value="GO" />
  </div>
</form>