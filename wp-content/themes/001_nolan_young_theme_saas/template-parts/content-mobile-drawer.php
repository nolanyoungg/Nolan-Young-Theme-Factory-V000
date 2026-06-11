<?php ?>
<aside class="mobile-drawer" id="mobile-drawer" data-mobile-drawer aria-hidden="true" hidden>
  <div class="mobile-drawer-head"><strong>SignalForge Systems</strong><button type="button" data-mobile-close>Close</button></div>
  <nav aria-label="Mobile navigation">
    <button class="accordion-trigger" type="button" aria-controls="mobile-services" aria-expanded="false">Services</button><div id="mobile-services" class="accordion-panel" hidden><a href="<?php echo esc_url(home_url('/services/')); ?>">AI Workflow Automation</a><a href="<?php echo esc_url(home_url('/services/')); ?>">Custom Dashboards</a><a href="<?php echo esc_url(home_url('/services/')); ?>">Internal Tools</a><a href="<?php echo esc_url(home_url('/services/')); ?>">Reporting Systems</a></div>
    <button class="accordion-trigger" type="button" aria-controls="mobile-about" aria-expanded="false">About Us</button><div id="mobile-about" class="accordion-panel" hidden><a href="<?php echo esc_url(home_url('/about-us/')); ?>">Engineering Approach</a><a href="<?php echo esc_url(home_url('/about-us/')); ?>">How We Scope Work</a><a href="<?php echo esc_url(home_url('/about-us/')); ?>">Support Standards</a></div>
    <a href="<?php echo esc_url(home_url('/work/')); ?>">Work</a><button class="accordion-trigger" type="button" aria-controls="mobile-blog" aria-expanded="false">Blog</button><div id="mobile-blog" class="accordion-panel" hidden><a href="<?php echo esc_url(home_url('/blog/')); ?>">Automation Readiness Checklist</a><a href="<?php echo esc_url(home_url('/blog/')); ?>">Dashboard Planning Guide</a><a href="<?php echo esc_url(home_url('/blog/')); ?>">AI Chatbot Use Cases</a></div>
    <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a><a class="button" href="<?php echo esc_url(home_url('/contact/')); ?>">Contact Us</a>
  </nav>
</aside>
