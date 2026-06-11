(function () {
  const doc = document;
  const body = doc.body;
  const header = doc.querySelector('.site-header');
  const backdrop = doc.querySelector('[data-menu-backdrop]');
  const menuTriggers = Array.from(doc.querySelectorAll('[data-menu-item]'));
  const railTriggers = Array.from(doc.querySelectorAll('[data-rail-item]'));
  const dropdowns = Array.from(doc.querySelectorAll('[data-menu-dropdown]'));
  const drawerToggle = doc.querySelector('[data-mobile-toggle]');
  const drawer = doc.querySelector('[data-mobile-drawer]');
  const drawerClose = doc.querySelector('[data-mobile-close]');
  const revealItems = Array.from(doc.querySelectorAll('.reveal'));
  let activeMenu = null;

  const lockScroll = (locked) => {
    body.style.overflow = locked ? 'hidden' : '';
  };
  const showBackdrop = (visible) => backdrop && backdrop.classList.toggle('is-visible', visible);
  const closeMenu = () => {
    activeMenu = null;
    menuTriggers.forEach((trigger) => trigger.setAttribute('aria-expanded', 'false'));
    dropdowns.forEach((panel) => panel.hidden = true);
    showBackdrop(false);
    lockScroll(false);
  };
  const openMenu = (key) => {
    const trigger = menuTriggers.find((item) => item.dataset.menuItem === key);
    const panel = dropdowns.find((item) => item.dataset.menuDropdown === key);
    if (!trigger || !panel) return;
    if (activeMenu === key) return closeMenu();
    closeMenu();
    activeMenu = key;
    trigger.setAttribute('aria-expanded', 'true');
    panel.hidden = false;
    showBackdrop(true);
    lockScroll(true);
  };
  menuTriggers.forEach((trigger) => trigger.addEventListener('click', () => openMenu(trigger.dataset.menuItem)));
  railTriggers.forEach((trigger) => trigger.addEventListener('click', () => {
    const dropdown = trigger.closest('[data-menu-dropdown]');
    if (!dropdown) return;
    const key = trigger.dataset.railItem;
    trigger.closest('.menu-rail-buttons').querySelectorAll('[data-rail-item]').forEach((item) => {
      item.classList.toggle('is-active', item === trigger);
      item.setAttribute('aria-selected', item === trigger ? 'true' : 'false');
    });
    dropdown.querySelectorAll('[data-rail-content]').forEach((content) => {
      const active = content.dataset.railContent === key;
      content.classList.toggle('is-active', active);
      content.hidden = !active;
    });
  }));
  if (drawerToggle && drawer) {
    const closeDrawer = () => { drawer.hidden = true; drawerToggle.setAttribute('aria-expanded', 'false'); lockScroll(false); showBackdrop(false); };
    drawerToggle.addEventListener('click', () => {
      const isOpen = drawer.hidden === false;
      drawer.hidden = isOpen;
      drawerToggle.setAttribute('aria-expanded', String(!isOpen));
      lockScroll(!isOpen);
      showBackdrop(!isOpen);
    });
    drawerClose?.addEventListener('click', closeDrawer);
    backdrop?.addEventListener('click', closeDrawer);
  }
  backdrop?.addEventListener('click', closeMenu);
  doc.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeMenu();
      if (drawer && drawer.hidden === false) {
        drawer.hidden = true;
        drawerToggle?.setAttribute('aria-expanded', 'false');
      }
      lockScroll(false);
    }
  });
  doc.addEventListener('click', (event) => { if (!event.target.closest('.site-header')) closeMenu(); });
  const syncHeader = () => header && header.classList.toggle('is-scrolled', window.scrollY > 12);
  const reveal = () => {
    if (!('IntersectionObserver' in window)) return revealItems.forEach((item) => item.classList.add('is-visible'));
    const observer = new IntersectionObserver((entries) => entries.forEach((entry) => {
      if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
    }), { threshold: 0.16 });
    revealItems.forEach((item) => observer.observe(item));
  };
  syncHeader();
  reveal();
  window.addEventListener('scroll', syncHeader, { passive: true });
})();

