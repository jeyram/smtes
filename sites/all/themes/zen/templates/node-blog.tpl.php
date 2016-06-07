
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix">
  
 <?php /*?> <?php print $user_picture; ?><?php */?>

<table><tbody style="border:0 none;"><tr>
  <td class="calendar">
  	  <div class="dateblock">
        <span class="month"><?php print $date_month ?><br /></span>
     	<span class="day"><?php print $date_day ?></span>
	  </div><!--//end dateblock-->
  </td>
  <td style="border-bottom:#CCCCCC 1px dotted;">
	  <?php if (!$page && $title): ?>
		<h2 class="title-blog"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
	  <?php endif; ?>
	
	  <?php if ($page&& $title):?>
		 <h2 class="title-blog"><?php print $title; ?></h2>
	  <?php endif; ?>
  </td>
</tr></tbody></table>

<?php /*?><div class="share_btn">
	<div class="addthis_toolbox addthis_default_style ">
		<a href="http://www.addthis.com/bookmark.php?v=250&amp;id=jeyram" class="addthis_button_compact">Share</a>
	</div>
</div><?php */?>
  
  <?php if ($unpublished): ?>
    <div class="unpublished"><?php print t('Unpublished'); ?></div>
  <?php endif; ?>

  <?php if ($display_submitted || $terms): ?>
    <div class="meta">
     <?php /*?> <?php if ($display_submitted): ?>
       <span class="submitted">
          <?php print $submitted; ?>
        </span>
      <?php endif; ?><?php */?>

      <?php if ($terms): ?>
        <div class="terms terms-inline"><?php print $terms; ?></div>
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <div class="content">
    <?php print $content; ?>
  </div>

  <?php /*?><?php print $links; ?><?php */?>
</div><!-- /.node -->