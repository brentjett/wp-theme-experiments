<!doctype html>
<html>
    <head>
        <?php wp_head() ?>
    </head>
    <body <?php body_class() ?>>

        <?php include $original_path ?>

        <wp-footer>
        <?php wp_footer() ?>
        </wp-footer>
    </body>
</html>
