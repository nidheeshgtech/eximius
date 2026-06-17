<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Meet the EXIMIUS learning partners — BRIDGE, CAPADEV, and Bon Education — delivering world-class curricula and immersive learning." />
  <title>Learning Partners | EXIMIUS</title>

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
    $pageBannerTitle = 'LEARNING PARTNERS';
    $pageBannerImage = 'assets/images/learning-image.webp';
    $pageBannerId = 'learning-partners-page-title';
    include __DIR__ . '/inc/inner-banner.php';
    ?>

    <section class="learning-partners learning-partners--tabs" aria-labelledby="learning-partners-title">
      <div class="container">
        <p class="learning-partners__eyebrow reveal-words" id="learning-partners-title">( Learning Partners )</p>

        <div class="partner-tabs revealme" data-partner-tabs role="tablist" aria-label="Learning partners">
          <div class="partner-tabs__item">
            <button class="partner-tabs__tab is-active" type="button" role="tab" aria-selected="true"
              aria-expanded="true" id="partner-tab-bridge" aria-controls="partner-panel-bridge"
              data-partner-tab="bridge">
              <span class="partner-tabs__logo">
                <img src="assets/images/logo-bridge.svg" alt="BRIDGE" />
              </span>
              <span class="partner-tabs__chevron" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
            </button>

            <div class="partner-tabs__panel is-active" role="tabpanel" id="partner-panel-bridge"
              aria-labelledby="partner-tab-bridge" data-partner-panel="bridge">
              <div class="partner-tabs__body">
                <p>Abu Dhabi-based BRIDGE provides transformative training, capacity-building consulting, and
                  innovation platforms through curricula spanning Lean Management; Six Sigma; Industry 4.0; Data,
                  Analytics and IoT, and Agile Management.</p>
                <p>BRIDGE curricula combine theory, technology, experiential simulations, and hands-on practice in
                  fields such as additive manufacturing, advanced and nanomaterials, artificial intelligence,
                  collaborative robots, augmented and virtual reality, IoT architecture, sensing technologies, and
                  autonomous vehicles.</p>
              </div>

              <a class="ui-arrow-cta partner-tabs__cta" href="#">
                <span class="ui-arrow-cta__icon partner-tabs__cta-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                    <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  </svg>
                </span>
                <span class="ui-arrow-cta__label partner-tabs__cta-label">Learn more</span>
              </a>
            </div>
          </div>

          <div class="partner-tabs__item">
            <button class="partner-tabs__tab" type="button" role="tab" aria-selected="false"
              aria-expanded="false" id="partner-tab-capadev" aria-controls="partner-panel-capadev"
              data-partner-tab="capadev">
              <span class="partner-tabs__logo partner-tabs__logo--capadev">
                <img src="assets/images/logo-capadev.svg" alt="CAPADEV" />
              </span>
              <span class="partner-tabs__chevron" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
            </button>

            <div class="partner-tabs__panel" role="tabpanel" id="partner-panel-capadev" hidden
              aria-labelledby="partner-tab-capadev" data-partner-panel="capadev">
              <div class="partner-tabs__body">
                <p>CAPADEVE is a regional consultancy that designs, leads and mentors bespoke project-based learning
                  and delivery projects and real-world immersive learning simulations. The company’s project managers
                  are senior and partner-level consulting mentors, averaging more than 15 years of experience at
                  top-tier strategy consulting firms.</p>
                <p>The company’s operating model and toolkits have delivered projects with measurable ROI impact to
                  private, public and non-profit organisations.</p>
              </div>

              <a class="ui-arrow-cta partner-tabs__cta" href="#">
                <span class="ui-arrow-cta__icon partner-tabs__cta-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                    <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  </svg>
                </span>
                <span class="ui-arrow-cta__label partner-tabs__cta-label">Learn more</span>
              </a>
            </div>
          </div>

          <div class="partner-tabs__item">
            <button class="partner-tabs__tab" type="button" role="tab" aria-selected="false"
              aria-expanded="false" id="partner-tab-bon" aria-controls="partner-panel-bon" data-partner-tab="bon">
              <span class="partner-tabs__logo partner-tabs__logo--bon">
                <img src="assets/images/logo-bon.svg" alt="Bon Education" />
              </span>
              <span class="partner-tabs__chevron" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
            </button>

            <div class="partner-tabs__panel" role="tabpanel" id="partner-panel-bon" hidden
              aria-labelledby="partner-tab-bon" data-partner-panel="bon">
              <div class="partner-tabs__body">
                <p>Bon Education co-designs impact-driven programs with clients to create tailored educational
                  activities and learning experiences that empower participants to acquire knowledge through practical,
                  hands-on, real-world engagements that deliver measurable results.</p>
                <p>Bon Education has a deep understanding of the cultural, economic, and educational challenges and
                  opportunities in the region where it operates.</p>
              </div>

              <a class="ui-arrow-cta partner-tabs__cta" href="#">
                <span class="ui-arrow-cta__icon partner-tabs__cta-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                    <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  </svg>
                </span>
                <span class="ui-arrow-cta__label partner-tabs__cta-label">Learn more</span>
              </a>
            </div>
          </div>

          <div class="partner-tabs__item">
            <button class="partner-tabs__tab" type="button" role="tab" aria-selected="false"
              aria-expanded="false" id="partner-tab-beacon" aria-controls="partner-panel-beacon"
              data-partner-tab="beacon">
              <span class="partner-tabs__logo partner-tabs__logo--beacon">
                <img src="assets/images/logo-beacon-red.svg" alt="BEACON RED" />
              </span>
              <span class="partner-tabs__chevron" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M6 9L12 15L18 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                </svg>
              </span>
            </button>

            <div class="partner-tabs__panel" role="tabpanel" id="partner-panel-beacon" hidden
              aria-labelledby="partner-tab-beacon" data-partner-panel="beacon">
              <div class="partner-tabs__body">
                <p>BEACON RED delivers advanced cyber and security capabilities, combining offensive and defensive
                  expertise with mission-critical training to help organisations anticipate, withstand, and respond to
                  complex, evolving threats.</p>
                <p>Its specialists bring deep operational experience across threat intelligence, vulnerability research,
                  and resilience engineering, strengthening national capability in the digital domain.</p>
              </div>

              <a class="ui-arrow-cta partner-tabs__cta" href="#">
                <span class="ui-arrow-cta__icon partner-tabs__cta-icon" aria-hidden="true">
                  <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                    <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                  </svg>
                </span>
                <span class="ui-arrow-cta__label partner-tabs__cta-label">Learn more</span>
              </a>
            </div>
          </div>
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
