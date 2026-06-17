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
  'leadership' => $isLocalHost ? '/eximius/leadership.php' : '/leadership',
  'learning_journey' => $isLocalHost ? '/eximius/learning-journey.php' : '/learning-journey',
  'learning_partners' => $isLocalHost ? '/eximius/learning-partners.php' : '/learning-partners',
  'specialists' => $isLocalHost ? '/eximius/specialists.php' : '/specialists',
  'alumni' => $isLocalHost ? '/eximius/alumni.php' : '/alumni',
];
$navItems = [
  ['label' => 'Home', 'href' => $routes['home']],
  [
    'label' => 'About',
    'href' => $routes['about'],
    'children' => [
      ['label' => 'EXIMIUS Leadership', 'href' => $routes['leadership']],
      ['label' => 'Learning Journey', 'href' => $routes['learning_journey']],
      ['label' => 'Learning Partners', 'href' => $routes['learning_partners']],
      ['label' => 'EXIMIUS Specialists', 'href' => $routes['specialists']],
      ['label' => 'EXIMIUS Alumni', 'href' => $routes['alumni']],
    ],
  ],
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
        <?php foreach ($navItems as $item):
          $hasChildren = !empty($item['children']); ?>
          <li class="site-header__item<?= $hasChildren ? ' site-header__item--has-children' : ''; ?>">
            <a class="site-header__link" href="<?= htmlspecialchars($item['href'], ENT_QUOTES, 'UTF-8'); ?>">
              <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?>
            </a>
            <?php if ($hasChildren): ?>
              <button class="site-header__submenu-toggle" type="button" aria-expanded="false"
                aria-label="Toggle <?= htmlspecialchars($item['label'], ENT_QUOTES, 'UTF-8'); ?> submenu"
                data-submenu-toggle>
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </button>
              <div class="site-header__submenu">
                <ul class="site-header__submenu-list">
                  <?php foreach ($item['children'] as $child): ?>
                    <li class="site-header__subitem">
                      <a class="site-header__sublink"
                        href="<?= htmlspecialchars($child['href'], ENT_QUOTES, 'UTF-8'); ?>">
                        <?= htmlspecialchars($child['label'], ENT_QUOTES, 'UTF-8'); ?>
                      </a>
                    </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>
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

      <button class="site-header__theme-toggle" id="theme-toggle" type="button"
        aria-label="Switch to dark theme">
        <svg class="site-header__theme-icon site-header__theme-icon--sun" aria-hidden="true"
          viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
          <circle cx="12" cy="12" r="4" stroke="currentColor" stroke-width="1.8"/>
          <path d="M12 2v2M12 20v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M2 12h2M20 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"
            stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
        </svg>
        <svg class="site-header__theme-icon site-header__theme-icon--moon" aria-hidden="true"
          viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" width="20" height="20">
          <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"
            stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
    </nav>
  </div>
</header>