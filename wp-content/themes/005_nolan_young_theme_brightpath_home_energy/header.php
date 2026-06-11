<?php if (!defined('ABSPATH')) { exit; } ?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class('brightpath-site'); ?>>
<?php wp_body_open(); ?>
<div class="site-shell">
  <header class="site-header nolan-menu" data-nolan-menu>
    <div class="site-header__inner">
      <a class="brand" href="<?php echo esc_url(home_url('/')); ?>">
        <span class="brand__mark" aria-hidden="true">
          <svg viewBox="0 0 48 48" role="img" aria-label="">
            <path d="M24 4 8 14v20l16 10 16-10V14L24 4Z" fill="currentColor" opacity=".14"></path>
            <path d="M13 25c5-8 11-12 20-14-3 3-4 6-4 10 0 6 3 9 6 12-8 2-15 1-22-8Z" fill="currentColor"></path>
          </svg>
        </span>
        <span class="brand__text">
          <strong>BrightPath</strong>
          <span>Home Energy</span>
        </span>
      </a>
      <button class="nav-toggle" type="button" aria-controls="primary-nav" aria-expanded="false">
        Menu
      </button>
      <nav class="site-nav" id="primary-nav" aria-label="Primary">
        <button class="menu-trigger" type="button" data-menu-item="services" aria-controls="panel-services" aria-expanded="false">Services</button>
        <button class="menu-trigger" type="button" data-menu-item="about" aria-controls="panel-about" aria-expanded="false">About</button>
        <a class="nav-link" href="<?php echo esc_url(home_url('/work/')); ?>">Work</a>
        <button class="menu-trigger" type="button" data-menu-item="blog" aria-controls="panel-blog" aria-expanded="false">Blog</button>
      </nav>
      <a class="cta-button" href="<?php echo esc_url(home_url('/contact/')); ?>">Request Assessment</a>
    </div>
    <div class="menu-backdrop" data-menu-backdrop hidden></div>
    <div class="menu-panels" aria-hidden="true">
      <div class="menu-panel" data-menu-dropdown="services" id="panel-services" hidden>
        <div class="menu-rail" role="tablist" aria-label="Services">
          <button class="rail-item" data-rail-item="audits" role="tab" aria-controls="rail-audits" aria-selected="true">Home Energy Audits</button>
          <button class="rail-item" data-rail-item="insulation" role="tab" aria-controls="rail-insulation" aria-selected="false">Insulation &amp; Air Sealing</button>
          <button class="rail-item" data-rail-item="thermostat" role="tab" aria-controls="rail-thermostat" aria-selected="false">Smart Thermostat Setup</button>
          <button class="rail-item" data-rail-item="electrification" role="tab" aria-controls="rail-electrification" aria-selected="false">Electrification Planning</button>
          <button class="rail-item" data-rail-item="seasonal" role="tab" aria-controls="rail-seasonal" aria-selected="false">Seasonal Maintenance</button>
        </div>
        <section class="menu-rail-content is-active" data-rail-content="audits" id="rail-audits">
          <h2>Find the root causes first.</h2>
          <p>Room-by-room findings, priority fixes, and a practical upgrade map for comfort and savings.</p>
          <a href="<?php echo esc_url(home_url('/services/home-energy-audits/')); ?>">Explore audits</a>
        </section>
        <section class="menu-rail-content" data-rail-content="insulation" id="rail-insulation" hidden>
          <h2>Seal leaks and steady the home.</h2>
          <p>Target attic, rim joist, and envelope improvements with a sequence that keeps work sensible.</p>
          <a href="<?php echo esc_url(home_url('/services/insulation-air-sealing/')); ?>">Plan insulation work</a>
        </section>
        <section class="menu-rail-content" data-rail-content="thermostat" id="rail-thermostat" hidden>
          <h2>Comfort schedules that actually work.</h2>
          <p>Setup, tuning, and homeowner handoff without the usual thermostat confusion.</p>
          <a href="<?php echo esc_url(home_url('/services/smart-thermostat-setup/')); ?>">Set up a thermostat</a>
        </section>
        <section class="menu-rail-content" data-rail-content="electrification" id="rail-electrification" hidden>
          <h2>Map the next upgrade step.</h2>
          <p>Understand panel capacity, incentives, sequencing, and which project should happen first.</p>
          <a href="<?php echo esc_url(home_url('/services/electrification-planning/')); ?>">Build a roadmap</a>
        </section>
        <section class="menu-rail-content" data-rail-content="seasonal" id="rail-seasonal" hidden>
          <h2>Keep the home efficient year-round.</h2>
          <p>Seasonal checks, filter reminders, thermostat adjustments, and comfort upkeep.</p>
          <a href="<?php echo esc_url(home_url('/blog/seasonal-home-energy-checklist/')); ?>">See seasonal care</a>
        </section>
      </div>
      <div class="menu-panel" data-menu-dropdown="about" id="panel-about" hidden>
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>">Building science approach</a>
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>#standards">Local service standards</a>
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>#visit">What happens during a visit</a>
      </div>
      <div class="menu-panel" data-menu-dropdown="blog" id="panel-blog" hidden>
        <a href="<?php echo esc_url(home_url('/blog/how-to-prepare-for-a-home-energy-audit/')); ?>">How to prepare for an audit</a>
        <a href="<?php echo esc_url(home_url('/blog/why-one-room-is-always-hotter-or-colder/')); ?>">Why one room swings</a>
        <a href="<?php echo esc_url(home_url('/blog/smart-thermostat-schedules-that-actually-save-money/')); ?>">Thermostat schedules that save</a>
        <a href="<?php echo esc_url(home_url('/blog/electrification-planning-without-overspending/')); ?>">Electrification without overspending</a>
      </div>
    </div>
  </header>
  <main id="content" class="site-main">

