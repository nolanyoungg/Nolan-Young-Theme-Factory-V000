<?php
if (!defined('ABSPATH')) {
    exit;
}
$data = lumora_harbor_site_data();
?>
<section class="hero">
    <div class="section-inner hero__grid">
        <div class="hero__copy reveal">
            <span class="eyebrow"><?php esc_html_e('Waterfront hospitality', LH_THEME_SLUG); ?></span>
            <h1><?php esc_html_e('Refined harbor stays with a calm, cinematic rhythm.', LH_THEME_SLUG); ?></h1>
            <p><?php esc_html_e('Lumora Harbor Hotel blends guest-first service, local dining, intimate events, and seasonal wellness into a premium stay that feels personal rather than corporate.', LH_THEME_SLUG); ?></p>
            <div class="hero__actions">
                <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Book direct', LH_THEME_SLUG); ?></a>
                <a class="button button--secondary" href="<?php echo esc_url(home_url('/services/')); ?>"><?php esc_html_e('Explore rooms and suites', LH_THEME_SLUG); ?></a>
            </div>
        </div>
        <div class="hero__visual reveal">
            <div class="hero-card hero-card--main">
                <div class="hero-card__caption">
                    <strong><?php esc_html_e('Harbor sunrise suite balcony', LH_THEME_SLUG); ?></strong>
                    <span><?php esc_html_e('Warm light, private terrace air, and the kind of view that resets the pace of a weekend.', LH_THEME_SLUG); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="booking-bar">
    <div class="section-inner booking-bar__inner reveal">
        <label>
            <span><?php esc_html_e('Arrival', LH_THEME_SLUG); ?></span>
            <input type="date" value="<?php echo esc_attr(date('Y-m-d', strtotime('+14 days'))); ?>">
        </label>
        <label>
            <span><?php esc_html_e('Departure', LH_THEME_SLUG); ?></span>
            <input type="date" value="<?php echo esc_attr(date('Y-m-d', strtotime('+16 days'))); ?>">
        </label>
        <label>
            <span><?php esc_html_e('Guests', LH_THEME_SLUG); ?></span>
            <select>
                <option>2 guests</option>
                <option>3 guests</option>
                <option>4 guests</option>
            </select>
        </label>
        <label>
            <span><?php esc_html_e('Stay style', LH_THEME_SLUG); ?></span>
            <select>
                <option><?php esc_html_e('Terrace suite', LH_THEME_SLUG); ?></option>
                <option><?php esc_html_e('Harbor king room', LH_THEME_SLUG); ?></option>
                <option><?php esc_html_e('Family suite', LH_THEME_SLUG); ?></option>
            </select>
        </label>
        <a class="button button--primary" href="<?php echo esc_url(home_url('/contact/')); ?>"><?php esc_html_e('Check availability', LH_THEME_SLUG); ?></a>
    </div>
</section>
<section class="section section--soft">
    <div class="section-inner">
        <div class="stat-strip reveal">
            <?php foreach ($data['stats'] as $stat) : ?>
                <div class="stat">
                    <strong><?php echo esc_html($stat['value']); ?></strong>
                    <span><?php echo esc_html($stat['label']); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

