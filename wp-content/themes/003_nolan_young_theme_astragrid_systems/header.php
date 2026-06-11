<?php
/** Header for AstraGrid Systems. */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#main-content"><?php esc_html_e( 'Skip to content', 'astragrid-systems' ); ?></a>
<div class="menu-backdrop" data-menu-backdrop hidden></div>
<header class="site-header" data-site-header>
	<div class="header-inner">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-label="<?php esc_attr_e( 'AstraGrid Systems home', 'astragrid-systems' ); ?>">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/icons/astragrid-mark.svg' ); ?>" alt="" width="42" height="42">
			<span>AstraGrid Systems</span>
		</a>
		<nav class="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'astragrid-systems' ); ?>">
			<button class="nav-trigger" type="button" data-menu-item="services" aria-controls="nolan-menu-services" aria-expanded="false">Services</button>
			<button class="nav-trigger" type="button" data-menu-item="about" aria-controls="nolan-menu-about" aria-expanded="false">About Us</button>
			<a class="nav-link" href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Work</a>
			<button class="nav-trigger" type="button" data-menu-item="blog" aria-controls="nolan-menu-blog" aria-expanded="false">Blog</button>
		</nav>
		<a class="header-cta" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact Us</a>
		<button class="mobile-open" type="button" data-mobile-open aria-controls="mobile-drawer" aria-expanded="false">Menu</button>
	</div>
	<div class="mega-panel" id="nolan-menu-services" data-menu-dropdown="services" hidden aria-hidden="true">
		<div class="mega-panel__inner">
			<div class="mega-panel__rail">
				<button type="button" class="rail-button is-active" data-rail-item="automation">AI Workflow Automation</button>
				<button type="button" class="rail-button" data-rail-item="dashboards">Custom Dashboards</button>
				<button type="button" class="rail-button" data-rail-item="tools">Internal Tools</button>
				<button type="button" class="rail-button" data-rail-item="crm">CRM & Data Cleanup</button>
				<button type="button" class="rail-button" data-rail-item="wordpress">WordPress Integrations</button>
				<button type="button" class="rail-button" data-rail-item="reporting">Reporting Systems</button>
			</div>
			<div class="mega-panel__content">
				<section class="rail-content" data-rail-content="automation">
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">Services</p>
							<h3>AI Workflow Automation</h3>
							<p>Route requests, approvals, reminders, and exceptions into one visible system.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/service/ai-workflow-automation/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card">
							<h4>What it changes</h4>
							<p>Route requests, approvals, reminders, and exceptions into one visible system.</p>
							<ul>
								<li>Sharper handoffs</li>
								<li>Better visibility</li>
								<li>Cleaner reporting</li>
							</ul>
						</div>
						<div class="panel-card">
							<h4>Typical outputs</h4>
							<p>Intake flow, dashboard layout, process notes, and implementation scope.</p>
							<p>Includes intake maps, source audits, and post-launch documentation.</p>
						</div>
					</div>
				</section>
				<section class="rail-content" data-rail-content="dashboards" hidden>
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">Services</p>
							<h3>Custom Dashboards</h3>
							<p>Give leaders the right numbers with clean hierarchy and trustworthy sources.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/service/custom-dashboards/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card">
							<h4>What it changes</h4>
							<p>Give leaders the right numbers with clean hierarchy and trustworthy sources.</p>
							<ul>
								<li>Sharper handoffs</li>
								<li>Better visibility</li>
								<li>Cleaner reporting</li>
							</ul>
						</div>
						<div class="panel-card">
							<h4>Typical outputs</h4>
							<p>Intake flow, dashboard layout, process notes, and implementation scope.</p>
							<p>Includes intake maps, source audits, and post-launch documentation.</p>
						</div>
					</div>
				</section>
				<section class="rail-content" data-rail-content="tools" hidden>
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">Services</p>
							<h3>Internal Tools</h3>
							<p>Build compact apps for intake, QA, handoffs, and tracking.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/service/internal-tools/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card">
							<h4>What it changes</h4>
							<p>Build compact apps for intake, QA, handoffs, and tracking.</p>
							<ul>
								<li>Sharper handoffs</li>
								<li>Better visibility</li>
								<li>Cleaner reporting</li>
							</ul>
						</div>
						<div class="panel-card">
							<h4>Typical outputs</h4>
							<p>Intake flow, dashboard layout, process notes, and implementation scope.</p>
							<p>Includes intake maps, source audits, and post-launch documentation.</p>
						</div>
					</div>
				</section>
				<section class="rail-content" data-rail-content="crm" hidden>
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">Services</p>
							<h3>CRM & Data Cleanup</h3>
							<p>Repair duplicate records, stale fields, and broken lifecycle stages.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/service/crm-data-cleanup/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card">
							<h4>What it changes</h4>
							<p>Repair duplicate records, stale fields, and broken lifecycle stages.</p>
							<ul>
								<li>Sharper handoffs</li>
								<li>Better visibility</li>
								<li>Cleaner reporting</li>
							</ul>
						</div>
						<div class="panel-card">
							<h4>Typical outputs</h4>
							<p>Intake flow, dashboard layout, process notes, and implementation scope.</p>
							<p>Includes intake maps, source audits, and post-launch documentation.</p>
						</div>
					</div>
				</section>
				<section class="rail-content" data-rail-content="wordpress" hidden>
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">Services</p>
							<h3>WordPress Integrations</h3>
							<p>Connect the website to the systems your team already uses.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/service/wordpress-integrations/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card">
							<h4>What it changes</h4>
							<p>Connect the website to the systems your team already uses.</p>
							<ul>
								<li>Sharper handoffs</li>
								<li>Better visibility</li>
								<li>Cleaner reporting</li>
							</ul>
						</div>
						<div class="panel-card">
							<h4>Typical outputs</h4>
							<p>Intake flow, dashboard layout, process notes, and implementation scope.</p>
							<p>Includes intake maps, source audits, and post-launch documentation.</p>
						</div>
					</div>
				</section>
				<section class="rail-content" data-rail-content="reporting" hidden>
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">Services</p>
							<h3>Reporting Systems</h3>
							<p>Automate weekly reporting so the story stays stable every cycle.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/service/reporting-systems/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card">
							<h4>What it changes</h4>
							<p>Automate weekly reporting so the story stays stable every cycle.</p>
							<ul>
								<li>Sharper handoffs</li>
								<li>Better visibility</li>
								<li>Cleaner reporting</li>
							</ul>
						</div>
						<div class="panel-card">
							<h4>Typical outputs</h4>
							<p>Intake flow, dashboard layout, process notes, and implementation scope.</p>
							<p>Includes intake maps, source audits, and post-launch documentation.</p>
						</div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="mega-panel" id="nolan-menu-about" data-menu-dropdown="about" hidden aria-hidden="true">
		<div class="mega-panel__inner">
			<div class="mega-panel__rail">
				<button type="button" class="rail-button is-active" data-rail-item="approach">Engineering Approach</button>
				<button type="button" class="rail-button" data-rail-item="scope">How We Scope Work</button>
				<button type="button" class="rail-button" data-rail-item="support">Support Standards</button>
			</div>
			<div class="mega-panel__content">
				<section class="rail-content" data-rail-content="approach">
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">About Us</p>
							<h3>Engineering Approach</h3>
							<p>Small releases, stable naming, and a bias for tools the team can run.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card"><h4>What it changes</h4><p>Small releases, stable naming, and a bias for tools the team can run.</p></div>
						<div class="panel-card"><h4>Support posture</h4><p>The support path is designed for operations teams, not developers alone.</p></div>
					</div>
				</section>
				<section class="rail-content" data-rail-content="scope" hidden>
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">About Us</p>
							<h3>How We Scope Work</h3>
							<p>We start with process maps, edge cases, and the data that causes rework.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card"><h4>What it changes</h4><p>We start with process maps, edge cases, and the data that causes rework.</p></div>
						<div class="panel-card"><h4>Support posture</h4><p>The support path is designed for operations teams, not developers alone.</p></div>
					</div>
				</section>
				<section class="rail-content" data-rail-content="support" hidden>
					<div class="rail-content__top">
						<div>
							<p class="eyebrow">About Us</p>
							<h3>Support Standards</h3>
							<p>Documentation, care windows, and a clear maintenance path.</p>
						</div>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">Open page</a>
					</div>
					<div class="panel-grid">
						<div class="panel-card"><h4>What it changes</h4><p>Documentation, care windows, and a clear maintenance path.</p></div>
						<div class="panel-card"><h4>Support posture</h4><p>The support path is designed for operations teams, not developers alone.</p></div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<div class="mega-panel" id="nolan-menu-blog" data-menu-dropdown="blog" hidden aria-hidden="true">
		<div class="mega-panel__inner">
			<div class="mega-panel__rail">
				<button type="button" class="rail-button is-active" data-rail-item="blog-0">Automation Readiness Checklist</button>
				<button type="button" class="rail-button" data-rail-item="blog-1">Dashboard Planning Guide</button>
				<button type="button" class="rail-button" data-rail-item="blog-2">AI Chatbot Use Cases</button>
				<button type="button" class="rail-button" data-rail-item="blog-3">Data Cleanup Before Reporting</button>
			</div>
			<div class="mega-panel__content">
				<div class="blog-card-grid">
					<article class="blog-card" data-rail-content="blog-0">
						<span class="tag">Resource</span>
						<h4>Automation Readiness Checklist</h4>
						<p>A practical way to see which processes are ready for automation and which still need cleanup.</p>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a>
					</article>
					<article class="blog-card" data-rail-content="blog-1" hidden>
						<span class="tag">Resource</span>
						<h4>Dashboard Planning Guide</h4>
						<p>A decision-first approach to metrics, filters, drill-downs, and reliable executive reporting.</p>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a>
					</article>
					<article class="blog-card" data-rail-content="blog-2" hidden>
						<span class="tag">Resource</span>
						<h4>AI Chatbot Use Cases</h4>
						<p>Where chat assistants help operations, and where a proper workflow still needs a human.</p>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a>
					</article>
					<article class="blog-card" data-rail-content="blog-3" hidden>
						<span class="tag">Resource</span>
						<h4>Data Cleanup Before Reporting</h4>
						<p>Why cleanup is the fastest route to trustworthy numbers and less weekly debate.</p>
						<a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a>
					</article>
				</div>
			</div>
		</div>
	</div>
	<aside class="mobile-drawer" id="mobile-drawer" data-mobile-drawer hidden aria-hidden="true">
		<div class="drawer-shell">
			<div class="drawer-top">
				<div>
					<p class="eyebrow">AstraGrid Systems</p>
					<h2>Mobile navigation</h2>
				</div>
				<button class="drawer-close" type="button" data-mobile-close aria-label="<?php esc_attr_e( 'Close menu', 'astragrid-systems' ); ?>">Close</button>
			</div>
			<div class="drawer-links">
				<a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services <span>Automation, tools, dashboards</span></a>
				<a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us <span>Engineering, scope, support</span></a>
				<a href="<?php echo esc_url( home_url( '/work/' ) ); ?>">Work <span>Projects and systems</span></a>
				<a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog <span>Resources and guides</span></a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact <span>Start a brief</span></a>
				<a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="drawer-cta">Contact Us</a>
			</div>
			<section class="drawer-accordion">
				<button class="drawer-trigger" type="button" data-accordion-trigger aria-controls="drawer-services" aria-expanded="false">Services <span>Open</span></button>
				<div class="drawer-panel" id="drawer-services" hidden>
					<div class="panel-grid">
						<div class="panel-card"><h4>AI Workflow Automation</h4><p>Map approvals, handoffs, reminders, and reporting into one calm operating flow that saves time without hiding decisions.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/service/ai-workflow-automation/' ) ); ?>">Detail</a></div>
						<div class="panel-card"><h4>Custom Dashboards</h4><p>Turn scattered numbers into a decision console with clean KPI hierarchy, source trust, and fast drill-down paths.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/service/custom-dashboards/' ) ); ?>">Detail</a></div>
						<div class="panel-card"><h4>Internal Tools</h4><p>Replace brittle spreadsheets with compact internal tools for intake, tracking, QA, and team visibility.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/service/internal-tools/' ) ); ?>">Detail</a></div>
						<div class="panel-card"><h4>CRM & Data Cleanup</h4><p>Repair duplicate records, stale stages, and broken field logic so reporting and automation stop drifting.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/service/crm-data-cleanup/' ) ); ?>">Detail</a></div>
						<div class="panel-card"><h4>WordPress Integrations</h4><p>Connect websites, forms, and content workflows to the systems your team actually uses every day.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/service/wordpress-integrations/' ) ); ?>">Detail</a></div>
						<div class="panel-card"><h4>Reporting Systems</h4><p>Automate recurring reports and executive summaries so leaders see the same story every week.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/service/reporting-systems/' ) ); ?>">Detail</a></div>
					</div>
				</div>
			</section>
			<section class="drawer-accordion">
				<button class="drawer-trigger" type="button" data-accordion-trigger aria-controls="drawer-about" aria-expanded="false">About Us <span>Open</span></button>
				<div class="drawer-panel" id="drawer-about" hidden>
					<div class="panel-grid">
						<div class="panel-card"><h4>Engineering Approach</h4><p>Small releases, explicit owners, and visible data contracts keep the work usable after launch.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">Read more</a></div>
						<div class="panel-card"><h4>How We Scope Work</h4><p>We start with process maps, edge cases, and the data that breaks decisions, not vague feature lists.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">Read more</a></div>
						<div class="panel-card"><h4>Support Standards</h4><p>Maintenance is documented, measured, and designed for the operations team that inherits the system.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">Read more</a></div>
					</div>
				</div>
			</section>
			<section class="drawer-accordion">
				<button class="drawer-trigger" type="button" data-accordion-trigger aria-controls="drawer-blog" aria-expanded="false">Blog <span>Open</span></button>
				<div class="drawer-panel" id="drawer-blog" hidden>
					<div class="blog-card-grid">
						<article class="blog-card"><span class="tag">Resource</span><h4>Automation Readiness Checklist</h4><p>A practical way to see which processes are ready for automation and which still need cleanup.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a></article>
						<article class="blog-card"><span class="tag">Resource</span><h4>Dashboard Planning Guide</h4><p>A decision-first approach to metrics, filters, drill-downs, and reliable executive reporting.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a></article>
						<article class="blog-card"><span class="tag">Resource</span><h4>AI Chatbot Use Cases</h4><p>Where chat assistants help operations, and where a proper workflow still needs a human.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a></article>
						<article class="blog-card"><span class="tag">Resource</span><h4>Data Cleanup Before Reporting</h4><p>Why cleanup is the fastest route to trustworthy numbers and less weekly debate.</p><a class="button-secondary" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Read more</a></article>
					</div>
				</div>
			</section>
		</div>
	</aside>
</header>
