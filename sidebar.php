<?php
/*
Template Name: TtskchTheme
*/
global $tchConfig;
?>

<aside class="site-aside">
    <div class="inner">
        <div class="block">
            <form method="get" action="<?php bloginfo('url'); ?>">
                <input type="search" id="search" name="s" placeholder="<?php echo $tchConfig['str_search']; ?>" />
            </form>
        </div>
        <ul class="icons">
            <?php get_template_part('includes/icons'); ?>
        </ul>
        <hr class="with-no-margin margin-bottom"/>

        <?php if (is_active_sidebar('sidebar-1')): ?>
            <?php dynamic_sidebar('sidebar-1'); ?>
        <?php endif; ?>
    </div>
</aside>
