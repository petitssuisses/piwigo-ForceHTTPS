<div class="titrePage">
  <h2>Force HTTPS</h2>
</div>
<fieldset>
<div style="text-align:left">
	<p>{'fhp_description'|@translate}</p>
	<p><b>{'fhp_force_https_warning'|translate}</b></p>
	<p><a href="{$TPL_TEST_URL}" onclick="window.open('{$TPL_TEST_URL}','popup','width=800,height=500,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">{'fhp_test_https_link'|@translate}</a></p>
</div>
</fieldset>

<form method="post" action="" class="properties">
	<fieldset>
		<legend>{'Global activation'|@translate}</legend>
		<table align="left" border="0">
			<tr valign="top">
				<td nowrap="nowrap" colspan="2"><input type="checkbox" name="fhp_use_https" id="fhp_use_https" value="{$force_https.fhp_use_https}" {if $force_https.fhp_use_https}checked="checked"{/if}></td>
				<td width="125" nowrap="nowrap"><label>{'Global HTTPS'|@translate}</label>
				<a class="icon-info-circled-1 showInfo" title="{'Force usage of HTTPS on this site'|@translate}"></a></td>
			</tr>
			<tr valign="top">
				<td nowrap="nowrap"></td>
				<td nowrap="nowrap"><input type="checkbox" id="fhp_use_sts" name="fhp_use_sts" value="{$force_https.fhp_use_sts}" {if !$force_https.fhp_use_https}disabled="true"{/if} {if $force_https.fhp_use_sts}checked="checked"{/if}></td>
				<td width="125" nowrap="nowrap"><label>{'fhp_activate_sts_label'|@translate}</label>
					<a class="icon-info-circled-1 showInfo" title="{'fhp_activate_sts_comment_short'|@translate}"></a></td>
			</tr>
			<tr valign="top">
				<td nowrap="nowrap"></td>
				<td nowrap="nowrap" colspan="2"></td>
			</tr>
			
		</table>
	</fieldset>
	<fieldset>
		<legend>{'Partial activation'|@translate}</legend>
		<table align="left" border="0">
			<tr valign="top">
				<td nowrap="nowrap"><input type="checkbox" name="fhp_use_partial_https_login" id="fhp_use_partial_https_login" value="{$force_https.fhp_use_partial_https_login}" {if $force_https.fhp_use_partial_https_login || $force_https.fhp_use_https}checked="checked"{/if} {if $force_https.fhp_use_https}disabled="true"{/if}></td>
				<td nowrap="nowrap"><label>{'Force HTTPS for identification'|@translate}</label>
				<a class="icon-info-circled-1 showInfo" title="{'HTTPS activated for identification, register and profile pages only'|@translate}"></a></td>
				
			</tr>
			<tr valign="top">
				<td nowrap="nowrap"><input type="checkbox" name="fhp_use_partial_https_admin" id="fhp_use_partial_https_admin" value="{$force_https.fhp_use_partial_https_admin}" {if $force_https.fhp_use_partial_https_admin || $force_https.fhp_use_https}checked="checked"{/if} {if $force_https.fhp_use_https}disabled="true"{/if}></td>
				<td nowrap="nowrap"><label>{'Force HTTPS for administration'|@translate}</label>
				<a class="icon-info-circled-1 showInfo" title="{'HTTPS activated for administration pages only'|@translate}"></a></td>
			</tr>
		</table>		
	</fieldset>
	
	<fieldset>
		<legend>{'Advanced options'|@translate}</legend>
		<table align="left">
			<tr valign="top">
				<td nowrap="nowwap">{'Strict-Transport-Security max-age'|@translate} <input type="number" size="20" maxlength="20" name="fhp_sts_maxage" id="fhp_sts_maxage" value="{$force_https.fhp_sts_maxage}" style="width: 80px;">&nbsp;{'seconds'|translate}
					<a class="icon-info-circled-1 showInfo" title="{'max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'|@translate}"></a></td>
			</tr>
			<tr valign="top">
				<td nowrap="nowwap">{'HTTP to HTTPS redirect code'|@translate} 
					<select class="categoryDropDown" id="fhp_redirect_code" name="fhp_redirect_code">
						<option value="301"{if $force_https.fhp_redirect_code == '301'} selected{/if}>{'301 (permanent)'|translate}</option>
						<option value="302"{if $force_https.fhp_redirect_code == '302'} selected{/if}>{'302 (temporary)'|translate}</option>
					</select>
					<a class="icon-info-circled-1 showInfo" title="{'301 permanent, 302 temporary'|@translate}"></a>
				</td>
			</tr>
			<tr valign="top">
				<td nowrap="nowwap"><input class="submit" type="submit" name="save_config" value="{'fhp_submit'|@translate}"></td>
			</tr>
		</table>			
	</fieldset>
</form>
{footer_script require='jquery'}{literal}
  function update_https_state() {
    if (jQuery('#fhp_use_https').prop('checked') == true) {
	  jQuery('#fhp_use_partial_https_login').prop('checked', true);
      jQuery('#fhp_use_partial_https_login').prop('disabled', true);
	  jQuery('#fhp_use_partial_https_admin').prop('checked', true);
      jQuery('#fhp_use_partial_https_admin').prop('disabled', true);
      jQuery('#fhp_use_sts').prop('disabled', false);
     // jQuery('#fhp_use_sts').prop('checked');
	 }
    else if (jQuery('#fhp_use_https').prop('checked') == false) {
      jQuery('#fhp_use_partial_https_login').prop('disabled', false);
      jQuery('#fhp_use_partial_https_login').removeAttr('checked');
      jQuery('#fhp_use_partial_https_admin').prop('disabled', false);
      jQuery('#fhp_use_partial_https_admin').removeAttr('checked');
      jQuery('#fhp_use_sts').prop('disabled', true);
	  jQuery('#fhp_use_sts').removeAttr('checked');
    }
  };
  
  jQuery('#fhp_use_https').change(function() {
    update_https_state();
  });
{/literal}{/footer_script}
