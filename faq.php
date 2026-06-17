<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="Frequently asked questions about the EDGE EXIMIUS programme — eligibility, structure, career outcomes, and how to apply." />
  <title>FAQs | EXIMIUS</title>

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
    $pageBannerTitle = 'FREQUENTLY ASKED QUESTIONS';
    $pageBannerTitleBreakAfter = 2;
    $pageBannerImage = 'assets/images/faq-image.webp';
    $pageBannerId = 'faq-page-title';
    include __DIR__ . '/inc/inner-banner.php';
    ?>

    <section class="faq" aria-labelledby="faq-title">
      <div class="container">
        <div class="faq__layout">
          <h2 class="faq__title reveal-title" id="faq-title">Everything You Need to Know</h2>

          <p class="faq__intro revealme">Everything you need to know about the EDGE EXIMIUS programme — from
            eligibility and structure to career outcomes and how to apply.</p>

          <div class="faq__list revealme" data-faq>
            <?php
            $faqs = [
              [
                'q' => 'What is EDGE EXIMIUS?',
                'a' => "EDGE EXIMIUS is a 12-month global graduate programme launched by EDGE Group, Abu Dhabi's advanced technology and defence conglomerate. It is designed to identify and develop high-potential graduates into future innovators and leaders within the defence and high-tech industries.",
              ],
              [
                'q' => 'Who is EDGE Group?',
                'a' => 'EDGE Group is one of the world’s leading advanced technology and defence groups, established in Abu Dhabi to develop sovereign capability across air, land, sea, cyber, and space domains.',
              ],
              [
                'q' => 'Who can apply for EDGE EXIMIUS?',
                'a' => 'The programme welcomes exceptional STEM graduates who combine strong technical ability with commercial curiosity and the ambition to operate in high-stakes environments.',
              ],
              [
                'q' => 'What does the 12-month programme involve?',
                'a' => 'Fellows progress through structured phases combining technical foundation, applied project delivery, and strategic deployment, supported by world-class learning modules and mentorship.',
              ],
              [
                'q' => 'Is EDGE EXIMIUS a global programme?',
                'a' => 'Yes. EXIMIUS draws talent from around the world and provides exposure to international standards, partners, and projects across EDGE Group operations.',
              ],
              [
                'q' => 'What sectors does the programme focus on?',
                'a' => 'The programme spans EDGE Group’s clusters, including platforms and systems, missiles and weapons, space and cyber technologies, and technology and innovation.',
              ],
              [
                'q' => 'Will I receive a salary or stipend during the programme?',
                'a' => 'Fellows are supported throughout the programme. Full compensation details are shared with candidates during the admissions process.',
              ],
              [
                'q' => 'What happens after the programme ends?',
                'a' => 'High-performing Fellows progress into impactful roles across EDGE Group, continuing their development as engineers and leaders within the organisation.',
              ],
              [
                'q' => 'How do I apply?',
                'a' => 'Applications are submitted online through the EXIMIUS admissions process. Shortlisted candidates progress through assessment and interview stages.',
              ],
              [
                'q' => 'What makes EDGE EXIMIUS different from other graduate programmes?',
                'a' => 'EXIMIUS is intentionally elite and transformational — blending deep technical training with commercial intelligence and real, high-stakes project work unavailable in conventional graduate schemes.',
              ],
            ];

            foreach ($faqs as $i => $faq):
              $open = $i === 0;
              $panelId = 'faq-panel-' . $i;
              $btnId = 'faq-q-' . $i;
              ?>
              <article class="faq-item<?= $open ? ' is-open' : ''; ?>">
                <button class="faq-item__toggle" type="button" id="<?= $btnId; ?>"
                  aria-expanded="<?= $open ? 'true' : 'false'; ?>" aria-controls="<?= $panelId; ?>">
                  <span class="faq-item__question"><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?></span>
                  <span class="faq-item__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7 12H17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                      <path d="M12 7L17 12L12 17" stroke="currentColor" stroke-width="1.8" stroke-linecap="square" />
                    </svg>
                  </span>
                </button>

                <div class="faq-item__panel" id="<?= $panelId; ?>" role="region" aria-labelledby="<?= $btnId; ?>">
                  <div class="faq-item__panel-inner">
                    <div class="faq-item__answer">
                      <p><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?></p>
                    </div>
                  </div>
                </div>
              </article>
            <?php endforeach; ?>
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
