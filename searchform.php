<?php
/**
 * @package WordPress
 * @subpackage Adapt Theme
 */
?>
<form method="get" id="searchbar" action="<?php echo home_url( '/' ); ?>" role="search">
	<label for="search">Rechercher</label>
	<input type="text" size="16" name="s" value="Rechercher" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" id="search" />
	<input type="submit" id="searchbt" value="Ok" />
</form>