    <?php require "header.php" ?>
    <?php wp_nav_menu() ?>
    <h1><?php echo get_the_title() ?></h1>
    <p><?php echo get_the_content() ?></p>
    <?php wp_footer() ?>
    <?php require "footer.php" ?>
