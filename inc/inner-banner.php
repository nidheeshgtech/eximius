<?php
$pageBannerTitle = $pageBannerTitle ?? '';
$pageBannerImage = $pageBannerImage ?? '';
$pageBannerId = $pageBannerId ?? 'inner-page-banner-title';
?>
<section class="inner-page-banner" aria-labelledby="<?= htmlspecialchars($pageBannerId, ENT_QUOTES, 'UTF-8'); ?>">
  <div class="inner-page-banner__media" aria-hidden="true">
    <div class="inner-page-banner__image"
      style="background-image: url('<?= htmlspecialchars($pageBannerImage, ENT_QUOTES, 'UTF-8'); ?>');"></div>
    <div class="inner-page-banner__overlay"></div>
  </div>

  <div class="container inner-page-banner__content">
    <div class="inner-page-banner__spacer"></div>
    <div class="inner-page-banner__copy">
      <h1 class="inner-page-banner__title reveal-title"
        id="<?= htmlspecialchars($pageBannerId, ENT_QUOTES, 'UTF-8'); ?>">
        <?= htmlspecialchars($pageBannerTitle, ENT_QUOTES, 'UTF-8'); ?>
      </h1>
    </div>
    <!-- <div class="inner-page-banner__divider" aria-hidden="true"></div> -->
  </div>
</section>