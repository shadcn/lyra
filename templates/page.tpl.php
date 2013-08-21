<?php

/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see template_process()
 * @see html.tpl.php
 */
?>
<div id="page">
  <div class="container">
    <div class="row-fluid">
      <div id="sidebar" class="span4">
        <?php if ($logo): ?>
          <h1 class="brand pull-right">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><?php print $site_name; ?></a>
          </h1>
        <?php endif; ?>
        <?php if ($site_slogan): ?>
          <h2 class="slogan pull-right"><?php print $site_slogan; ?></h2>
        <?php endif; ?>
        <?php if ($search_form): ?>
          <?php print $search_form; ?>
        <?php endif; ?>
        <?php if ($main_menu): ?>
          <nav id="main-menu" class="main-menu pull-right" role="navigation">
            <?php print render($main_menu); ?>
          </nav> <!-- /#main-menu -->
        <?php endif; ?>
      </div>
      <div id="main" class="span8">
        <a id="main-content"></a>
        <div id="page-header">
          <div class="container">
            <?php if ($messages): ?>
              <div id="messages">
                <div class="container">
                  <?php print $messages; ?>
                </div>
              </div>
            <?php endif; ?>
            <?php if ($title): ?>
              <div class="page-header">
                <h1 class="title"><?php print $title; ?></h1>
              </div>
            <?php endif; ?>
            <?php if ($tabs): ?>
              <div class="tabs">
                <?php print render($tabs); ?>
              </div>
            <?php endif; ?>
            <?php if ($action_links): ?>
              <ul class="nav nav-pills action-links">
                <?php print render($action_links); ?>
              </ul>
            <?php endif; ?>
          </div>
        </div>
        <div id="content">
          <?php print render($page['content']); ?>
        </div>
        <footer id="footer" class="footer" role="footer">
          <div class="container">
            <?php if ($copyright): ?>
              <small class="copyright pull-left"><?php print $copyright; ?></small>
            <?php endif; ?>
            <small class="pull-right"><a href="#"><?php print t('Back to Top'); ?></a></small>
          </div>
        </footer>
      </div>
    </div>
  </div>
</div>
