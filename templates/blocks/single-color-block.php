<?php 

$color_blocks = $args['color_blocks'];
$bg_color = $color_blocks['bg_color'];
$content = $color_blocks['content']; 

?>

<section class="single-color-block">
    <div class="container">
        <div class="single-color-block__inner" style="background-color: <?php echo $bg_color; ?>">
            <?php echo $content; ?>
        </div>
    </div>
</section>