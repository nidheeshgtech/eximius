<?php
$assetPrefix = $assetPrefix ?? '';
require_once __DIR__ . '/components.php';
$navItems = [
  ['label' => 'Home', 'href' => '#'],
  ['label' => 'About', 'href' => '#'],
  ['label' => 'Opportunities', 'href' => '#'],
  ['label' => 'Solutions', 'href' => '#'],
  ['label' => 'Media', 'href' => '#'],
  ['label' => 'Admissions', 'href' => '#'],
];
?>
<header class="site-header" id="site-header">
  <div class="container site-header__inner">
    <a class="site-header__brand" href="/" aria-label="Eximius home">
      <img class="site-header__logo"
        src="<?= htmlspecialchars($assetPrefix . 'assets/images/header-logo.svg', ENT_QUOTES, 'UTF-8'); ?>"
        alt="Eximius" width="246" height="56" />
    </a>

    <button
      class="site-header__toggle"
      type="button"
      aria-expanded="false"
      aria-controls="site-header-nav"
      aria-label="Open navigation menu"
    >
      <span class="site-header__toggle-line"></span>
      <span class="site-header__toggle-line"></span>
      <span class="site-header__toggle-line"></span>
    </button>

    <nav class="site-header__nav" id="site-header-nav" aria-label="Primary">
      <ul class="site-header__menu">
        <?php foreach ($navItems as $item): ?>
          <li class="site-header__item">
            <a class="site-header__link" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8'); ?>">
              <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>

      <?php render_arrow_cta([
        'href' => '#',
        'label' => 'Contact Us',
        'class' => 'site-header__cta',
        'icon_class' => 'site-header__cta-icon',
        'label_class' => 'site-header__cta-label',
      ]); ?>
    </nav>
  </div>
</header>
