<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0
 */

?>
<div class="row">
    <div class="large-12 columns">
        <nav class="top-bar" data-topbar role="navigation">
            <section class="left">   
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </section>
            <section class="right">
            <?php foundationpress_top_bar_l(); ?>
            <?php foundationpress_top_bar_r(); ?>
            </section>
        </nav>
    </div>
</div>