(function () {
  const header = document.querySelector('[data-nolan-menu]');
  if (!header) return;
  const triggers = Array.from(header.querySelectorAll('[data-menu-item]'));
  const panels = Array.from(header.querySelectorAll('[data-menu-dropdown]'));
  const railItems = Array.from(header.querySelectorAll('[data-rail-item]'));
  const railContent = Array.from(header.querySelectorAll('[data-rail-content]'));
  const backdrop = header.querySelector('[data-menu-backdrop]');
  const navToggle = header.querySelector('.nav-toggle');
  let activeKey = null;
  const closePanels = () => {
    activeKey = null;
    triggers.forEach(btn => btn.setAttribute('aria-expanded', 'false'));
    panels.forEach(panel => panel.hidden = true);
    if (backdrop) backdrop.hidden = true;
    document.body.classList.remove('menu-open');
  };
  const openPanel = key => {
    const trigger = header.querySelector(`[data-menu-item="${key}"]`);
    const panel = header.querySelector(`[data-menu-dropdown="${key}"]`);
    if (!trigger || !panel) return;
    if (activeKey === key) { closePanels(); return; }
    closePanels();
    activeKey = key;
    trigger.setAttribute('aria-expanded', 'true');
    panel.hidden = false;
    if (backdrop) backdrop.hidden = false;
    document.body.classList.add('menu-open');
  };
  triggers.forEach(btn => {
    btn.addEventListener('click', () => openPanel(btn.dataset.menuItem));
    btn.addEventListener('mouseenter', () => openPanel(btn.dataset.menuItem));
    btn.addEventListener('focus', () => openPanel(btn.dataset.menuItem));
  });
  if (backdrop) backdrop.addEventListener('click', closePanels);
  document.addEventListener('keydown', e => { if (e.key === 'Escape') closePanels(); });
  document.addEventListener('click', e => { if (!header.contains(e.target)) closePanels(); });
  railItems.forEach(btn => {
    const key = btn.dataset.railItem;
    const content = header.querySelector(`[data-rail-content="${key}"]`);
    if (!content) return;
    const activate = () => {
      railItems.forEach(item => item.classList.toggle('is-active', item === btn));
      railContent.forEach(section => section.hidden = section !== content);
      content.hidden = false;
    };
    btn.addEventListener('mouseenter', activate);
    btn.addEventListener('focus', activate);
    btn.addEventListener('click', activate);
  });
  if (navToggle) navToggle.addEventListener('click', () => {
    const expanded = navToggle.getAttribute('aria-expanded') === 'true';
    navToggle.setAttribute('aria-expanded', String(!expanded));
    header.classList.toggle('is-open', !expanded);
  });
})();

