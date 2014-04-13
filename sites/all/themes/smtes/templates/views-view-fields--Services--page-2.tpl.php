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
		<td class="ftd" colspan="2" style="color:#0066CC"><span style="margin-left:.5em;"><?php print $fields['title']->content ?></span> </td>
	</tr>	
	<tr>
		<td><?php print $fields['field_img_service_fid']->content ?></td>
		<td class="ftd">
			<div style="padding 5px"><?php print $fields['body']->content ?></div>
		</td>
	</tr>
</tbody></table>