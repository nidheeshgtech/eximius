// main.js

// ── Lenis smooth scroll ────────────────────────────────────
const lenis = new Lenis({
  duration: 1.3,
  easing: function (t) { return Math.min(1, 1.001 - Math.pow(2, -10 * t)); },
  smoothWheel: true,
  wheelMultiplier: 1,
  touchMultiplier: 1.5,
});

if (typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined') {
  window.gsap.registerPlugin(window.ScrollTrigger);
  lenis.on('scroll', window.ScrollTrigger.update);
  window.gsap.ticker.add(function (time) {
    lenis.raf(time * 1000);
  });
  window.gsap.ticker.lagSmoothing(0);
} else {
  function lenisRaf(time) {
    lenis.raf(time);
    requestAnimationFrame(lenisRaf);
  }
  requestAnimationFrame(lenisRaf);
}

// ── Page setup ────────────────────────────────────────────
document.addEventListener('DOMContentLoaded', () => {
  const hasGsapScroll = typeof window.gsap !== 'undefined' && typeof window.ScrollTrigger !== 'undefined';
  const siteHeader = document.querySelector('.site-header');
  const navToggle = document.querySelector('.site-header__toggle');
  const bannerSlider = document.querySelector('.js-banner-slider');
  const videoFrame = document.querySelector('.video-showcase');
  const videoToggle = document.querySelector('.video-showcase__play');
  const videoToggleLabel = document.querySelector('.video-showcase__play-label');
  const videoIframe = document.querySelector('.video-showcase__iframe');
  const bannerImages = document.querySelectorAll('.banner__image');
  const videoMedia = document.querySelector('.video-showcase__media');
  const aboutImage = document.querySelector('.about-section__image');
  const whereBackground = document.querySelector('.where-section__bg');
  const admissionsBackground = document.querySelector('.admissions-section__bg');
  const opportunitiesCards = document.querySelectorAll('.opportunities-section__card');
  const revealItems = document.querySelectorAll('.revealme');
  const revealGroups = document.querySelectorAll('.revealme-group');
  const revealTitles = document.querySelectorAll('.reveal-title');
  const revealWords = document.querySelectorAll('.reveal-words');
  const revealTexts = document.querySelectorAll('.reveal-text');

  if (hasGsapScroll && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const { gsap, ScrollTrigger } = window;

    bannerImages.forEach((image) => {
      gsap.to(image, {
        yPercent: 8,
        scale: 1.12,
        ease: 'none',
        scrollTrigger: {
          trigger: '.banner',
          start: 'top top',
          end: 'bottom top',
          scrub: 1.1,
        },
      });
    });

    if (videoMedia) {
      gsap.fromTo(videoMedia, {
        yPercent: -4,
        scale: 1.03,
      }, {
        yPercent: 4,
        scale: 1.08,
        ease: 'none',
        scrollTrigger: {
          trigger: '.video-showcase',
          start: 'top bottom',
          end: 'bottom top',
          scrub: 1.15,
        },
      });
    }

    if (aboutImage) {
      gsap.fromTo(aboutImage, {
        yPercent: -16,
        scale: 1.18,
      }, {
        yPercent: 16,
        scale: 1.28,
        ease: 'none',
        scrollTrigger: {
          trigger: '.about-section',
          start: 'top 96%',
          end: 'bottom 4%',
          scrub: 2.6,
        },
      });
    }

    if (whereBackground) {
      gsap.fromTo(whereBackground, {
        yPercent: -16,
        scale: 1.18,
      }, {
        yPercent: 16,
        scale: 1.28,
        ease: 'none',
        scrollTrigger: {
          trigger: '.where-section',
          start: 'top 96%',
          end: 'bottom 4%',
          scrub: 2.6,
        },
      });
    }

    if (admissionsBackground) {
      gsap.fromTo(admissionsBackground, {
        yPercent: -16,
        scale: 1.18,
      }, {
        yPercent: 16,
        scale: 1.28,
        ease: 'none',
        scrollTrigger: {
          trigger: '.admissions-section',
          start: 'top 96%',
          end: 'bottom 4%',
          scrub: 2.6,
        },
      });
    }

    if (opportunitiesCards.length) {
      gsap.from(opportunitiesCards, {
        y: 28,
        opacity: 0,
        duration: 1,
        ease: 'power3.out',
        stagger: 0.08,
        scrollTrigger: {
          trigger: '.opportunities-section__grid',
          start: 'top 78%',
          once: true,
        },
      });
    }

    ScrollTrigger.refresh();
  }

  revealTitles.forEach((title) => {
    const text = (title.textContent || '').trim();

    if (!text || title.dataset.splitReady === 'true') {
      return;
    }

    const words = text.split(/\s+/);
    title.dataset.splitReady = 'true';
    title.setAttribute('aria-label', text);
    title.textContent = '';

    words.forEach((word, index) => {
      const wordSpan = document.createElement('span');
      wordSpan.className = 'reveal-title__word';
      wordSpan.textContent = word;
      wordSpan.style.transitionDelay = `${index * 130}ms`;
      title.appendChild(wordSpan);

      if (index < words.length - 1) {
        const space = document.createElement('span');
        space.className = 'reveal-title__space';
        space.setAttribute('aria-hidden', 'true');
        space.textContent = ' ';
        title.appendChild(space);
      }
    });
  });

  revealWords.forEach((textBlock) => {
    const text = (textBlock.textContent || '').trim();

    if (!text || textBlock.dataset.splitReady === 'true') {
      return;
    }

    const words = text.split(/\s+/);
    textBlock.dataset.splitReady = 'true';
    textBlock.setAttribute('aria-label', text);
    textBlock.textContent = '';

    words.forEach((word, index) => {
      const wordSpan = document.createElement('span');
      wordSpan.className = 'reveal-words__word';
      wordSpan.textContent = word;
      wordSpan.style.transitionDelay = `${index * 55}ms`;
      textBlock.appendChild(wordSpan);

      if (index < words.length - 1) {
        const space = document.createElement('span');
        space.className = 'reveal-words__space';
        space.setAttribute('aria-hidden', 'true');
        space.textContent = ' ';
        textBlock.appendChild(space);
      }
    });
  });

  if (siteHeader && navToggle) {
    const navLinks = siteHeader.querySelectorAll('.site-header__link, .site-header__cta');

    navToggle.addEventListener('click', () => {
      const isOpen = siteHeader.classList.toggle('is-open');
      navToggle.setAttribute('aria-expanded', String(isOpen));
      navToggle.setAttribute('aria-label', isOpen ? 'Close navigation menu' : 'Open navigation menu');
    });

    navLinks.forEach((link) => {
      link.addEventListener('click', () => {
        siteHeader.classList.remove('is-open');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Open navigation menu');
      });
    });

    window.addEventListener('resize', () => {
      if (window.innerWidth > 1199.98) {
        siteHeader.classList.remove('is-open');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Open navigation menu');
      }
    });
  }

  if (bannerSlider && typeof Swiper !== 'undefined') {
    new Swiper(bannerSlider, {
      effect: 'fade',
      loop: false,
      speed: 1200,
      allowTouchMove: true,
      grabCursor: true,
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: false,
      },
      fadeEffect: {
        crossFade: true,
      },
    });
  }

  if (videoFrame && videoToggle && videoToggleLabel && videoIframe) {
    let isVideoPlaying = true;
    const vimeoOrigin = 'https://player.vimeo.com';

    const setVideoButtonState = (playing) => {
      isVideoPlaying = playing;
      videoFrame.classList.toggle('is-paused', !playing);
      videoToggle.setAttribute('aria-pressed', String(playing));
      videoToggle.setAttribute('aria-label', playing ? 'Pause video' : 'Play video');
      videoToggleLabel.textContent = playing ? 'Pause video' : 'Play video';
    };

    const sendVimeoCommand = (method) => {
      if (!videoIframe.contentWindow) {
        return;
      }

      videoIframe.contentWindow.postMessage(
        JSON.stringify({
          method,
        }),
        vimeoOrigin
      );
    };

    setVideoButtonState(true);

    videoToggle.addEventListener('click', () => {
      if (isVideoPlaying) {
        sendVimeoCommand('pause');
        setVideoButtonState(false);
      } else {
        sendVimeoCommand('play');
        setVideoButtonState(true);
      }
    });
  }

  if (revealItems.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const revealObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.18,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealItems.forEach((item) => {
        if (!item.closest('.revealme-group')) {
          revealObserver.observe(item);
        }
      });
    } else {
      revealItems.forEach((item) => {
        item.classList.add('is-visible');
      });
    }
  }

  if (revealGroups.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const groupObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              const groupItems = entry.target.querySelectorAll('.revealme');

              groupItems.forEach((item, index) => {
                item.style.transitionDelay = `${index * 120}ms`;
                item.classList.add('is-visible');
              });

              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.18,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealGroups.forEach((group) => {
        groupObserver.observe(group);
      });
    } else {
      revealGroups.forEach((group) => {
        group.querySelectorAll('.revealme').forEach((item) => {
          item.classList.add('is-visible');
        });
      });
    }
  }

  if (revealTitles.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const titleObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.28,
          rootMargin: '0px 0px -10% 0px',
        }
      );

      revealTitles.forEach((title) => {
        titleObserver.observe(title);
      });
    } else {
      revealTitles.forEach((title) => {
        title.classList.add('is-visible');
      });
    }
  }

  if (revealTexts.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const textObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.22,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealTexts.forEach((item, index) => {
        item.style.transitionDelay = `${Math.min(index % 6, 5) * 70}ms`;
        textObserver.observe(item);
      });
    } else {
      revealTexts.forEach((item) => {
        item.classList.add('is-visible');
      });
    }
  }

  if (revealWords.length) {
    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const wordsObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add('is-visible');
              observer.unobserve(entry.target);
            }
          });
        },
        {
          threshold: 0.24,
          rootMargin: '0px 0px -8% 0px',
        }
      );

      revealWords.forEach((item) => {
        wordsObserver.observe(item);
      });
    } else {
      revealWords.forEach((item) => {
        item.classList.add('is-visible');
      });
    }
  }
});
