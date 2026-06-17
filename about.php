<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Learn more about EXIMIUS leadership, vision, and program purpose." />
  <title>About EXIMIUS</title>

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
    $pageBannerTitle = 'ABOUT EXIMIUS';
    $pageBannerImage = 'assets/images/about_banner.webp';
    $pageBannerId = 'about-page-title';
    include __DIR__ . '/inc/inner-banner.php';
    ?>

    <section class="about-story" aria-labelledby="purpose-title">
      <div class="container">
        <article class="about-story__block revealme-group">
          <div class="about-story__header">
            <h2 class="about-story__label revealme" id="purpose-title">Purpose</h2>
            <p class="about-story__description revealme">
              To identify and elevate extraordinary STEM graduates with a structured program that fast-tracks their
              development into world-class leaders with deep technical and commercial expertise.
            </p>
          </div>

          <div class="about-story__image-wrap revealme">
            <img class="about-story__image" src="assets/images/exi_purpose_.webp"
              alt="Students collaborating around robotics equipment" />
          </div>
        </article>

        <article class="about-story__block revealme-group" aria-labelledby="mission-title">
          <div class="about-story__header">
            <h2 class="about-story__label revealme" id="mission-title">Mission</h2>
            <p class="about-story__description revealme">
              To provide a one-of-a-kind, blended technical and commercial program enriched with high-stakes work and
              world-class learning modules unavailable in any other academic or industrial setting.
            </p>
          </div>

          <div class="about-story__image-wrap revealme">
            <img class="about-story__image" src="assets/images/exi_mission.webp"
              alt="Students working on engineering prototypes in a lab" />
          </div>
        </article>
      </div>
    </section>

    <section class="where-section where-section--about" aria-labelledby="why-eximius-title">
      <div class="where-section__bg" style="background-image: url('assets/images/about_why_exi.webp');"
        aria-hidden="true"></div>
      <div class="where-section__overlay" aria-hidden="true"></div>

      <div class="container where-section__content">
        <div class="where-section__divider revealme" aria-hidden="true"></div>

        <div class="where-section__grid">
          <div class="where-section__intro revealme">
            <h2 class="where-section__title reveal-title" id="why-eximius-title">Why EXIMIUS?</h2>
          </div>

          <div class="where-section__body revealme-group">
            <p class="revealme">
              Unlike conventional graduate programs, EXIMIUS is architected as a transformational platform —
              immersive, demanding, and intentionally elite. Expectations are high. Fellows are expected to hit the
              ground running and to deliver significant impact and measurable economic value to the teams and projects
              they join.
            </p>
            <p class="revealme">
              The goals are clear. The opportunities are unlimited.
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="learning-architecture" aria-labelledby="learning-architecture-title">
      <div class="container">
        <div class="learning-architecture__layout">
          <div class="learning-architecture__heading">
            <h2 class="learning-architecture__title reveal-title" id="learning-architecture-title">Learning Architecture
            </h2>
          </div>

          <div class="learning-architecture__grid">
            <article class="learning-architecture__card revealme">
              <span class="learning-architecture__number">01</span>
              <h3 class="learning-architecture__card-title">Advanced Engineering Modules</h3>
              <p class="learning-architecture__card-text">Throughout the year, theoretical and practical training to
                extend readiness to perform.</p>
            </article>

            <article class="learning-architecture__card revealme">
              <span class="learning-architecture__number">02</span>
              <h3 class="learning-architecture__card-title">Executive Leadership Series</h3>
              <p class="learning-architecture__card-text">Yearlong curriculum to prepare Fellows for leadership today
                and tomorrow.</p>
            </article>

            <article class="learning-architecture__card revealme">
              <span class="learning-architecture__number">03</span>
              <h3 class="learning-architecture__card-title">Innovation Laboratories &amp; Design Sprints</h3>
              <p class="learning-architecture__card-text">Workshop drilling new skills for rapid, creative, iterative
                project development.</p>
            </article>

            <article class="learning-architecture__card revealme">
              <span class="learning-architecture__number">04</span>
              <h3 class="learning-architecture__card-title">Applied Industry Projects</h3>
              <p class="learning-architecture__card-text">Fellows leverage their expertise and newly gained skills to
                solve current engineering/technical challenges.</p>
            </article>
          </div>
        </div>
      </div>
    </section>

    <section class="specialists-showcase" aria-labelledby="specialists-title">
      <div class="container">
        <div class="specialists-showcase__grid">
          <article class="specialists-showcase__card revealme">
            <div class="specialists-showcase__media">
              <img src="assets/images/specialists.webp" alt="EXIMIUS specialists" />
              <div class="specialists-showcase__overlay"></div>
            </div>

            <div class="specialists-showcase__content">
              <div class="specialists-showcase__divider" aria-hidden="true"></div>
              <h2 class="specialists-showcase__title reveal-title" id="specialists-title">EXIMIUS Specialists</h2>
              <p class="specialists-showcase__text revealme">
                The current EXIMIUS cohort represents diverse areas of expertise, experiences, and backgrounds, while
                sharing a strong commitment to excellence and innovation.
              </p>
            </div>
          </article>

          <article class="specialists-showcase__card revealme">
            <div class="specialists-showcase__media">
              <img src="assets/images/alumni.webp" alt="EXIMIUS alumni" />
              <div class="specialists-showcase__overlay"></div>
            </div>

            <div class="specialists-showcase__content">
              <div class="specialists-showcase__divider" aria-hidden="true"></div>
              <h2 class="specialists-showcase__title reveal-title">EXIMIUS Alumni</h2>
              <p class="specialists-showcase__text revealme">
                The range of roles undertaken by EXIMIUS Alumni reflects not only their abilities but also the
                tremendous opportunities made available to them across EDGE Group operations.
              </p>
            </div>
          </article>
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

            <a class="ui-arrow-cta contact-section__cta" href="#">
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