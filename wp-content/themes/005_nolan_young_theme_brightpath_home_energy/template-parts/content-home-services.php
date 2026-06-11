<?php if (!defined('ABSPATH')) { exit; } ?>
<section class="section-card" id="home-services">
  <div class="section-inner">
    <p class="eyebrow">Services</p>
    <h2>Start with diagnosis, then move into the right project.</h2>
    <p class="section-lead">BrightPath focuses on the full home system so you can make a practical plan instead of guessing at the next upgrade.</p>
    <div class="grid-3">
      <article class="feature-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/home-energy-audit-dashboard.svg'); ?>" alt="" style="width:100%;border-radius:16px;margin-bottom:12px"><h3>Home Energy Audits</h3><p>Room-by-room findings, photo-backed notes, and a prioritized improvement map.</p><a href="<?php echo esc_url(home_url('/services/home-energy-audits/')); ?>">Schedule an assessment</a></article>
      <article class="feature-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/air-sealing-checklist-panel.svg'); ?>" alt="" style="width:100%;border-radius:16px;margin-bottom:12px"><h3>Insulation &amp; Air Sealing</h3><p>Reduce drafts, tighten the envelope, and stabilize comfort through the seasons.</p><a href="<?php echo esc_url(home_url('/services/insulation-air-sealing/')); ?>">Request an insulation plan</a></article>
      <article class="feature-card"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/solar-ready-electrical-panel.svg'); ?>" alt="" style="width:100%;border-radius:16px;margin-bottom:12px"><h3>Electrification Planning</h3><p>Map heat pumps, EV charging, solar readiness, and panel upgrades in the right order.</p><a href="<?php echo esc_url(home_url('/services/electrification-planning/')); ?>">Build a roadmap</a></article>
    </div>
  </div>
</section>
