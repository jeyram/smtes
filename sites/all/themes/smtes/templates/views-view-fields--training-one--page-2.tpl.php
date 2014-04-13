<?php
// $Id: views-view-fields.tpl.php,v 1.6 2008/09/24 22:48:21 merlinofchaos Exp $
/**
 * @file views-view-fields.tpl.php
 *
 * @ingroup views_templates
 */
?>



<table id="table_view_list"><tbody>
	<tr>
		<td class="ftd"  colspan="2" style="color:#0066CC"><span style="margin-left:1em;"><?php print $fields['title']->content ?></span> </td>
	</tr>	
	<tr>
		<td><?php print $fields['field_imgtraining_fid']->content ?></td>
		<td class="ftd">
			<div style="padding 5px"><?php print $fields['body']->content ?></div>
			 <?php if ($fields['upload_fid']):?>
			 	<div style="float:right; font-size:12px; padding:3px 1em 5px 0; display:inline;">
			 	 <span><img src="http://smtes.com/sites/all/themes/smtes/mis_images/pdf.png" alt=""/></span>
				 <span><?php print $fields['upload_fid']->content ?></span>
				</div>
			<?php endif; ?>
		</td>
	</tr>
</tbody></table>