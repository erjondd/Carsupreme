<?php
$footer_title = get_field("footer_title", 'options');
$footer_content = get_field("footer_content", 'options');
$footer_menu_label_1 = get_field("footer_menu_label_1", 'options');
$footer_menu_label_2 = get_field("footer_menu_label_2", 'options');
$footer_menu_label_3 = get_field("footer_menu_label_3", 'options');
$footer_menu_label_4 = get_field("footer_menu_label_4", 'options');

?>


<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h3><?= $footer_title ?></h3>
                <p><?= $footer_content ?></p>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-3">
                        <h4><?= $footer_menu_label_1 ?></h4>
                        <div class="footer-menu">
                            <?php
                            echo wp_nav_menu(array(
                                'menu' => 'Footer Menu',
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4><?= $footer_menu_label_2 ?></h4>
                        <div class="footer-menu">
                            <?php
                            echo wp_nav_menu(array(
                                'menu' => 'Footer Menu',
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4><?= $footer_menu_label_3 ?></h4>
                        <div class="footer-menu">
                            <?php
                            echo wp_nav_menu(array(
                                'menu' => 'Footer Menu',
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4><?= $footer_menu_label_4 ?></h4>
                        <div class="footer-menu">
                            <?php
                            echo wp_nav_menu(array(
                                'menu' => 'Footer Menu',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</html>