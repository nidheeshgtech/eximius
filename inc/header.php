<?php
$assetPrefix = $assetPrefix ?? '';
$host = $_SERVER['HTTP_HOST'] ?? '';
$isLocalHost = str_contains($host, 'localhost') || str_contains($host, '127.0.0.1');
$routes = [
  'home' => $isLocalHost ? '/eximius/index.php' : '/',
  'about' => $isLocalHost ? '/eximius/about.php' : '/about',
  'opportunities' => $isLocalHost ? '/eximius/opportunities.php' : '/opportunities',
  'admissions' => $isLocalHost ? '/eximius/admissions.php' : '/admissions',
  'contact' => $isLocalHost ? '/eximius/contact.php' : '/contact',
];
$navItems = [
  ['label' => 'Home', 'href' => $routes['home']],
  ['label' => 'About', 'href' => $routes['about']],
  ['label' => 'Opportunities', 'href' => $routes['opportunities']],
  ['label' => 'Solutions', 'href' => $routes['home'] . '#'],
  ['label' => 'Media', 'href' => $routes['home'] . '#'],
  ['label' => 'Admissions', 'href' => $routes['admissions']],
];
?>
<header class="site-header" id="site-header">
  <div class="container site-header__inner">
    <a class="site-header__brand" href="<?= htmlspecialchars($routes['home'], ENT_QUOTES, 'UTF-8'); ?>"
      aria-label="Eximius home">
      <img class="site-header__logo"
        src="<?= htmlspecialchars($assetPrefix . 'assets/images/header-logo.svg', ENT_QUOTES, 'UTF-8'); ?>"
        alt="Eximius" width="246" height="56" />
    </a>

    <button class="site-header__toggle" type="button" aria-expanded="false" aria-controls="site-header-nav"
      aria-label="Open navigation menu">
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

      <a class="ui-arrow-cta site-header__cta" href="<?= htmlspecialchars($routes['contact'], ENT_QUOTES, 'UTF-8'); ?>">
        <span class="ui-arrow-cta__icon site-header__cta-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
            <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
          </svg>
        </span>
        <span class="ui-arrow-cta__label site-header__cta-label">Contact Us</span>
      </a>
    </nav>
  </div>
</header>