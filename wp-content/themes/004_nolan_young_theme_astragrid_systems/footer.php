</main>
<footer class="site-footer">
  <section class="footer-cta">
    <div><p class="eyebrow">A cleaner operating layer</p><h2>Turn manual work into a measurable system.</h2></div>
    <a class="button light" href="<?php echo esc_url(home_url('/contact/')); ?>">Plan a systems sprint</a>
  </section>
  <div class="footer-grid">
    <div><a class="brand footer-brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_template_directory_uri() . '/assets/icons/astragrid-mark.svg'); ?>" alt="" width="38" height="38"><span>AstraGrid Systems</span></a><p>AI automation, dashboards, internal tools, and data infrastructure for operators who need dependable clarity.</p></div>
    <nav aria-label="Footer services"><h2>Services</h2><a href="<?php echo esc_url(home_url('/services/')); ?>">AI Workflow Automation</a><a href="<?php echo esc_url(home_url('/services/')); ?>">Custom Dashboards</a><a href="<?php echo esc_url(home_url('/services/')); ?>">Internal Tools</a></nav>
    <nav aria-label="Footer company"><h2>Company</h2><a href="<?php echo esc_url(home_url('/about-us/')); ?>">About Us</a><a href="<?php echo esc_url(home_url('/work/')); ?>">Work</a><a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a></nav>
    <nav aria-label="Footer resources"><h2>Resources</h2><a href="<?php echo esc_url(home_url('/blog/')); ?>">Automation Readiness</a><a href="<?php echo esc_url(home_url('/blog/')); ?>">Dashboard Planning</a><a href="<?php echo esc_url(home_url('/blog/')); ?>">Data Cleanup</a></nav>
    <form class="mini-form" action="<?php echo esc_url(home_url('/contact/')); ?>" method="get"><h2>Mini inquiry</h2><label for="footer-email">Email</label><input id="footer-email" name="email" type="email"><label for="footer-need">What needs fixing?</label><textarea id="footer-need" name="need" rows="3"></textarea><button class="button" type="submit">Start the brief</button></form>
  </div>
  <div class="footer-bottom"><span>&copy; <?php echo esc_html(date_i18n('Y')); ?> AstraGrid Systems.</span><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy</a></div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
