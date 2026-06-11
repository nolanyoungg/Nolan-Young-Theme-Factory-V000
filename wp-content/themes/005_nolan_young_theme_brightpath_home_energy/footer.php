<?php if (!defined('ABSPATH')) { exit; } ?>
  </main>
  <footer class="site-footer">
    <div class="site-footer__grid">
      <div>
        <strong>BrightPath Home Energy</strong>
        <p>Home energy assessments, comfort upgrades, and practical electrification planning for homeowners who want clarity before they spend.</p>
      </div>
      <div>
        <h2>Explore</h2>
        <a href="<?php echo esc_url(home_url('/services/')); ?>">Services</a>
        <a href="<?php echo esc_url(home_url('/about-us/')); ?>">About</a>
        <a href="<?php echo esc_url(home_url('/work/')); ?>">Work</a>
        <a href="<?php echo esc_url(home_url('/blog/')); ?>">Blog</a>
      </div>
      <div>
        <h2>Contact</h2>
        <p><a href="tel:+15551234567">(555) 123-4567</a><br><a href="mailto:hello@brightpathhomeenergy.com">hello@brightpathhomeenergy.com</a></p>
        <a class="footer-cta" href="<?php echo esc_url(home_url('/contact/')); ?>">Request Assessment</a>
      </div>
    </div>
    <div class="site-footer__bottom">
      <p>&copy; <?php echo esc_html(date('Y')); ?> BrightPath Home Energy.</p>
      <div><a href="<?php echo esc_url(home_url('/privacy-policy/')); ?>">Privacy</a> <a href="<?php echo esc_url(home_url('/terms/')); ?>">Terms</a></div>
    </div>
  </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>

