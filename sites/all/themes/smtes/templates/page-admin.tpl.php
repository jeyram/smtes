
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language; ?>" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">

<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles ?>
  <?php print $scripts; ?>
</head>

<body class="<?php print $classes; ?>">

  <?php if ($primary_links): ?>
    <div id="skip-link"><a href="#main-menu"><?php print t('Jump to Navigation'); ?></a></div>
  <?php endif; ?>

<div id="header-wrapper"><div id="header"><div class="section clearfix">

      <?php if ($logo): ?>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo"><img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
      <?php endif; ?>

      <?php if ($site_name || $site_slogan): ?>
        <div id="name-and-slogan">
          <?php if ($site_name): ?>
            <?php if ($title): ?>
              <div id="site-name"><strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong></div>
            <?php else: /* Use h1 when the content title is empty */ ?>
              <h1 id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </h1>
            <?php endif; ?>
          <?php endif; ?>

          <?php if ($site_slogan): ?>
            <div id="site-slogan"><?php print $site_slogan; ?></div>
          <?php endif; ?>
        </div> <!-- /#name-and-slogan -->
      <?php endif; ?>

      <?php if ($search_box): ?>
        <div id="search-box"><?php print $search_box; ?></div>
      <?php endif; ?>

      <?php print $header; ?>

</div></div></div> <!--********** header-wrapper, header ****************-->

<div id="navegation-wrapper">
<?php if ($primary_links || $navigation): ?>
<div id="navigation"><div class="section clearfix">

          <div align="justify"><?php print theme(array('links__system_main_menu', 'links'), $primary_links,
            array(
              'id' => 'main-menu',
              'class' => 'links clearfix',
            ),
            array(
              'text' => t('Main menu'),
              'level' => 'h2',
              'class' => 'element-invisible',
            ));
          ?>
            
              <?php print $navigation; ?>
</div></div></div> 
<?php endif; ?> <!--********** navegacion-wrapper, navegacion ****************-->
</div>

<div id="page-wrapper-admin"><div id="page-admin">
   <div id="main-wrapper"><div id="main" class="clearfix<?php if ($primary_links || $navigation) { print ' with-navigation'; } ?>">

      <div id="content" class="column"><div class="section">

        <?php if ($mission): ?>
          <div id="mission"><?php print $mission; ?></div>
        <?php endif; ?>

        <?php print $highlight; ?>

	    <?php print $breadcrumb; ?>
        
		<?php print $messages; ?>
        
		<?php if ($tabs): ?>
          <div class="tabs"><?php print $tabs; ?></div>
        <?php endif; ?>
        
		<?php print $help; ?>

        <?php print $content_top; ?>

        <div id="content-area">
          <?php print $content; ?>
        </div>

        <?php print $content_bottom; ?>

        <?php if ($feed_icons): ?>
          <div class="feed-icons"><?php print $feed_icons; ?></div>
        <?php endif; ?>

      </div></div> <!-- /.section, /#content -->
   
      <div id="sidebars-wrapper" align="justify" >    
          <?php print $sidebar_first; ?>
          
          <?php print $sidebar_second; ?>
      </div>

    </div></div> <!-- /#main, /#main-wrapper -->
  </div></div> <!-- /#page, /#page-wrapper -->

<div id="footer-wrapper"> &nbsp;
	<?php if ($footer || $footer_message): ?>
	  <div id="footer"><div class="section">
			<?php if ($footer_message): ?>
			  <div id="footer-message"><?php print $footer_message; ?></div>
			<?php endif; ?>
	
			<?php print $footer; ?>
	  </div></div> <!-- /.section, /#footer -->
	<?php endif; ?>
	 
    <div id="closer-wrapper"> &nbsp;
	  <?php print $page_closure; ?>
	
	  <?php print $closure; ?>
	</div>
</div> 
 
</body>
</html>
