/*! Nolan Showcase Theme 01 */
(function () {
  const nav = document.querySelector('.site-nav');
  const toggle = document.querySelector('.nav-toggle');

  if (nav && toggle) {
    const setExpanded = (expanded) => {
      toggle.setAttribute('aria-expanded', String(expanded));
      nav.classList.toggle('is-open', expanded);
    };

    toggle.addEventListener('click', () => {
      const expanded = toggle.getAttribute('aria-expanded') === 'true';
      setExpanded(!expanded);
    });

    nav.addEventListener('click', (event) => {
      if (event.target instanceof HTMLAnchorElement && window.innerWidth < 860) {
        setExpanded(false);
      }
    });
  }

  const cards = document.querySelectorAll('.work-card, .service-card, .testimonial-card, .blog-card, .pillar-card, .process-step');
  if ('IntersectionObserver' in window) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });

    cards.forEach((card) => observer.observe(card));
  } else {
    cards.forEach((card) => card.classList.add('is-visible'));
  }

  const forms = document.querySelectorAll('.contact-form, .newsletter-form');
  forms.forEach((form) => {
    form.addEventListener('submit', () => {
      form.classList.add('is-submitting');
    });
  });
})();
