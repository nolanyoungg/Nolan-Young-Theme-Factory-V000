<?php if (!defined('ABSPATH')) { exit; } ?>
<section class="hero section-home-hero" id="home-hero">
  <div>
    <p class="eyebrow">BrightPath Home Energy</p>
    <h1>Clear home energy guidance for comfort, savings, and smarter upgrades.</h1>
    <p class="section-lead">We start with the home itself. Then we map the right next step for drafts, bills, uneven rooms, and future electrification so you can invest with confidence.</p>
    <div class="button-row">
      <a class="button" href="<?php echo esc_url(home_url('/contact/')); ?>">Request a home energy assessment</a>
      <a class="card-link" href="<?php echo esc_url(home_url('/work/')); ?>">View comfort upgrade projects</a>
    </div>
    <div class="trust-bar" style="margin-top:22px">
      <div class="card"><strong>48 hr</strong><div class="small muted">response on assessment requests</div></div>
      <div class="card"><strong>320+</strong><div class="small muted">homes reviewed with written roadmaps</div></div>
      <div class="card"><strong>92%</strong><div class="small muted">of clients prioritize a clear next step</div></div>
      <div class="card"><strong>Local</strong><div class="small muted">neighborhood-focused service</div></div>
    </div>
  </div>
  <div class="hero__visual">
    <div class="panel-graphic" style="position:absolute;inset:22px">
      <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/home-energy-audit-dashboard.svg'); ?>" alt="Home energy audit dashboard illustration" style="position:absolute;inset:0;width:100%;height:100%;object-fit:cover;opacity:.92">
      <div style="position:absolute;left:18px;top:18px;right:18px;background:#fff;border-radius:20px;padding:16px;border:1px solid #d8e2d7">
        <div class="stat"><strong style="color:var(--brand)">74</strong><span class="small muted">comfort score</span></div>
        <div class="meter"><span></span></div>
      </div>
      <div style="position:absolute;left:18px;right:18px;bottom:18px;display:grid;gap:10px;grid-template-columns:1fr 1fr">
        <div class="card"><strong>Air leaks</strong><p class="small muted">Attic hatch, rim joist, and chase gaps</p></div>
        <div class="card"><strong>Priority</strong><p class="small muted">Seal first, insulate second, schedule third</p></div>
      </div>
    </div>
  </div>
</section>
