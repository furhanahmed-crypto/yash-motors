<?php if (!empty($page_heading)) { ?>
<section class="page-banner" aria-labelledby="page-banner-heading">
    <div class="container">
        <?php if (!empty($page_eyebrow)) { ?>
        <span class="eyebrow-premium eyebrow-premium--light"><?php echo htmlspecialchars($page_eyebrow); ?></span>
        <?php } ?>
        <h1 id="page-banner-heading"><?php echo htmlspecialchars($page_heading); ?></h1>
        <?php if (!empty($page_intro)) { ?>
        <p class="page-banner-intro"><?php echo htmlspecialchars($page_intro); ?></p>
        <?php } ?>
    </div>
</section>
<?php } ?>
