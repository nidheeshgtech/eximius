<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Meet the EXIMIUS Specialists — a diverse cohort sharing a strong commitment to excellence and innovation." />
  <title>EXIMIUS Specialists</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;1,9..40,400&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" href="assets/vendor/css/lenis.css" />
  <link rel="stylesheet" href="assets/vendor/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
  <?php include __DIR__ . '/inc/header.php'; ?>

  <main id="main-content">
    <?php
    $pageBannerTitle = 'EXIMIUS SPECIALISTS';
    $pageBannerImage = 'assets/images/specialists-image.webp';
    $pageBannerId = 'specialists-page-title';
    include __DIR__ . '/inc/inner-banner.php';
    ?>

    <section class="people" aria-labelledby="specialists-title">
      <div class="container">
        <h2 class="visually-hidden" id="specialists-title">EXIMIUS Specialists</h2>

        <div class="people__grid">
          <?php
          $specialists = [
            'profile-01.jpg',
            'profile-02.jpg',
            'profile-03.jpg',
            'profile-04.jpg',
            'profile-05.jpg',
            'profile-06.jpg',
            'profile-07.jpg',
            'profile-08.jpg',
          ];
          foreach ($specialists as $img): ?>
            <article class="person-card revealme">
              <div class="person-card__media">
                <img src="assets/images/<?= htmlspecialchars($img, ENT_QUOTES, 'UTF-8'); ?>"
                  alt="EXIMIUS specialist" loading="lazy" />
              </div>
              <div class="person-card__info">
                <div class="person-card__heading">
                  <p class="person-card__role">Area of Expertise</p>
                  <p class="person-card__name">Name of the specialist</p>
                </div>
                <p class="person-card__meta">EXIMIUS placement</p>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </div>
    </section>

    <section class="contact-section" aria-labelledby="contact-title">
      <div class="container">
        <div class="contact-section__panel revealme">
          <div class="contact-section__grid">
            <div class="contact-section__intro">
              <p class="contact-section__eyebrow reveal-words">( Contact Us )</p>

              <div class="contact-section__copy">
                <h3 class="contact-section__title reveal-title" id="contact-title">Have a question or want to get in
                  touch?</h3>
                <p class="reveal-words">Fill out the form below and our team will get back to you shortly.</p>
              </div>
            </div>

            <a class="ui-arrow-cta contact-section__cta" href="<?php echo $isLocalHost ? '/eximius/contact.php' : '/contact'; ?>">
              <span class="ui-arrow-cta__icon contact-section__cta-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
              <span class="ui-arrow-cta__label">Contact Us</span>
            </a>
          </div>
        </div>
      </div>
    </section>
  </main>

  <?php include __DIR__ . '/inc/footer.php'; ?>

  <script src="assets/vendor/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.7/dist/ScrollTrigger.min.js"></script>
  <script src="assets/vendor/js/swiper-bundle.min.js"></script>
  <script src="assets/vendor/js/lenis.min.js"></script>
  <script src="assets/js/main.js" defer></script>
</body>

</html>
