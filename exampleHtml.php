<?php
/**
 * This comment block is used just to make IDE suggestions to work
 * @var $this \Ip\View
 */
?>

<?php echo $this->subview('_header.php')->render(); ?>

<div class="singleColumn">
    <div role="main" class="main">
        <?php echo $this->subview('sampleContent/exampleContent.php')->render(); ?>
    </div>
</div>

<?php echo $this->subview('_footer.php')->render(); ?>