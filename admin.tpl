<div class="titrePage">
  <h2>Force HTTPS</h2>
</div>
<fieldset>
<div style="text-align:left">
	<p>{'fhp_description'|@translate}</p>
</div>
</fieldset>

<form method="post" action="" class="properties">
	<fieldset>
		{if $force_https.fhp_autocheck=="N/A"}
		<legend>{'Manual Verification'|@translate}</legend>
			<table align="left">
				<tr>
					<td colspan="2"><font color="red">{'Plugin could not automatically verify your host SSL/HTTPS compatibility. Please manually check that HTTPS navigation is available using the following button. Do NOT activate HTTPS if page within the popup can not be loaded successfully.'|@translate}</font></td>
					<td><input class="submit" type="button" name="" value="{'Check'|@translate}" onclick="window.open('{$TPL_TEST_URL}','popup','width=800,height=500,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false"></td>
				</tr>
				<tr>
					<td width="10"><input type="checkbox" name="fhp_manual_confirm" id="fhp_manual_confirm" value="{$force_https.fhp_manual_confirm}" {if $force_https.fhp_manual_confirm}checked="checked"{/if}></td>
					<td colspan="2" nowrap="nowrap">{'I have proceeded to the manual check'|@translate}</td>
				</tr>
			</table>
		{/if}
		{if $force_https.fhp_autocheck=="HTTP"}
		<legend>{'HTTPS unavailable'|@translate}</legend>
		<font color="red">{'Your hosting server does not support HTTPS, a SSL certificate is required. Plugin activation is disabled.'|@translate}</font>
		{/if}
		{if $force_https.fhp_autocheck=="HTTPS"}
		<legend>{'HTTPS available'|@translate}</legend>
		{'Your hosting server does support HTTPS.'|@translate}
		{/if}
	</fieldset>
	<fieldset>
		<legend>{'Global activation'|@translate}</legend>
		<table align="left">
			<tr valign="top">
				<td nowrap="nowrap" colspan="2"><input type="checkbox" name="fhp_use_https" id="fhp_use_https" value="{$force_https.fhp_use_https}" {if $force_https.fhp_use_https}checked="checked"{/if} {if $force_https.fhp_autocheck === 'HTTP'}disabled="true"{/if}></td>
				<td nowrap="nowrap"><label>{'Global HTTPS'|@translate}</label>
				<a class="icon-info-circled-1" title="{'Force usage of HTTPS on this site'|@translate}"></a></td>
			</tr>
			<tr valign="top">
				<td nowrap="nowrap"></td>
				<td nowrap="nowrap"><input type="checkbox" id="fhp_use_sts" name="fhp_use_sts" value="{$force_https.fhp_use_sts}" {if !$force_https.fhp_use_https}disabled="true"{/if} {if $force_https.fhp_use_sts}checked="checked"{/if}></td>
				<td nowrap="nowrap"><label>{'fhp_activate_sts_label'|@translate}</label>
					<a class="icon-info-circled-1" title="{'fhp_activate_sts_comment_short'|@translate}"></a></td>
			</tr>
			<tr valign="top">
				<td nowrap="nowrap"></td>
				<td nowrap="nowrap" colspan="2"></td>
			</tr>
			
		</table>
	</fieldset>
	<fieldset>
		<legend>{'Partial activation'|@translate}</legend>
		<table align="left">
			<tr valign="top">
				<td nowrap="nowrap"><input type="checkbox" name="fhp_use_partial_https_login" id="fhp_use_partial_https_login" value="{$force_https.fhp_use_partial_https_login}" {if $force_https.fhp_use_partial_https_login || $force_https.fhp_use_https}checked="checked"{/if} {if $force_https.fhp_use_https || $force_https.fhp_autocheck === 'HTTP'}disabled="true"{/if}></td>
				<td nowrap="nowrap"><label>{'Force HTTPS for identification'|@translate}</label>
					<a class="icon-info-circled-1" title="{'HTTPS activated for identification, register and profile pages only'|@translate}"></a>
				</td>
				<td rowspan="2" nowrap="nowrap" valign="middle">
					<input type="checkbox" name="fhp_use_partial_http_other" id="fhp_use_partial_http_other" value="{$force_https.fhp_use_partial_http_other}" {if $force_https.fhp_use_partial_http_other}checked="checked"{/if} {if (!$force_https.fhp_use_partial_https_login && !$force_https.fhp_use_partial_https_admin) || $force_https.fhp_autocheck === 'HTTP'}disabled="true"{/if}>
				</td>
				<td rowspan="2" nowrap="nowrap" valign="middle">
					<label>{'Force HTTP navigation on unprotected pages'|@translate}</label>
					<a class="icon-info-circled-1" title="{'Warning, do not activate if you have HTTPS forced through a vhost or .htaccess configuration'|@translate}"></a>
				</td>
				
			</tr>
			<tr valign="top">
				<td nowrap="nowrap"><input type="checkbox" name="fhp_use_partial_https_admin" id="fhp_use_partial_https_admin" value="{$force_https.fhp_use_partial_https_admin}" {if $force_https.fhp_use_partial_https_admin || $force_https.fhp_use_https}checked="checked"{/if} {if $force_https.fhp_use_https || $force_https.fhp_autocheck === 'HTTP'}disabled="true"{/if}></td>
				<td nowrap="nowrap"><label>{'Force HTTPS for administration'|@translate}</label>
				<a class="icon-info-circled-1" title="{'HTTPS activated for administration pages only'|@translate}"></a></td>
				<td></td>
			</tr>
		</table>		
	</fieldset>
	
	<fieldset>
		<legend>{'Advanced options'|@translate}</legend>
		<table align="left">
			<tr valign="top">
				<td nowrap="nowwap">{'Strict-Transport-Security max-age'|@translate} <input type="number" size="20" maxlength="20" name="fhp_sts_maxage" id="fhp_sts_maxage" value="{$force_https.fhp_sts_maxage}" style="width: 80px;">&nbsp;{'seconds'|translate}
					<a class="icon-info-circled-1" title="{'max-age must be set to a minimum of six months (15768000), but longer periods such as two years (63072000) are recommended'|@translate}"></a>
				</td>
			</tr>
			<tr valign="top">
				<td nowrap="nowwap">{'HTTP to HTTPS redirect code'|@translate} 
					<select class="categoryDropDown" id="fhp_redirect_code" name="fhp_redirect_code">
						<option value="301"{if $force_https.fhp_redirect_code == '301'} selected{/if}>{'301 (permanent)'|translate}</option>
						<option value="302"{if $force_https.fhp_redirect_code == '302'} selected{/if}>{'302 (temporary)'|translate}</option>
					</select>
					<a class="icon-info-circled-1" title="{'301 permanent, 302 temporary'|@translate}"></a>
				</td>
			</tr>
			<tr valign="top">
				<td nowrap="nowwap"><input class="submit" type="submit" id="save_config" name="save_config" value="{'fhp_submit'|@translate}" {if ($force_https.fhp_autocheck === 'HTTP' || ($force_https.fhp_autocheck === 'N/A' && !$force_https.fhp_manual_confirm))}disabled="true"{/if}></td>
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
      jQuery('#fhp_use_partial_http_other').prop('disabled', true);
      jQuery('#fhp_use_partial_http_other').prop('checked', false);
	 }
    else if (jQuery('#fhp_use_https').prop('checked') == false) {
      jQuery('#fhp_use_partial_https_login').prop('disabled', false);
      jQuery('#fhp_use_partial_https_login').removeAttr('checked');
      jQuery('#fhp_use_partial_https_admin').prop('disabled', false);
      jQuery('#fhp_use_partial_https_admin').removeAttr('checked');
      jQuery('#fhp_use_sts').prop('disabled', true);
	  jQuery('#fhp_use_sts').removeAttr('checked');
	  jQuery('#fhp_use_partial_http_other').prop('disabled', true);
    }
  };
  
  function update_use_partial_http_other() {
  	if ((jQuery('#fhp_use_partial_https_login').prop('checked') == true) || (jQuery('#fhp_use_partial_https_admin').prop('checked') == true))  {
  		jQuery('#fhp_use_partial_http_other').prop('disabled', false);
  	} else {
  		jQuery('#fhp_use_partial_http_other').prop('disabled', true);
      	jQuery('#fhp_use_partial_http_other').prop('checked', false);
    }
  };
  
  function update_fhp_manual_confirm() {
  	if (jQuery('#fhp_manual_confirm').prop('checked') == true) {
  		jQuery('#save_config').prop('disabled', false);
  	} else {
  		jQuery('#save_config').prop('disabled', true);
  	}
  };
  
  jQuery('#fhp_use_https').change(function() {
    update_https_state();
  });
  
  jQuery('#fhp_use_partial_https_login').change(function() {
    update_use_partial_http_other();
  });
  
  jQuery('#fhp_use_partial_https_admin').change(function() {
    update_use_partial_http_other();
  });
  
  jQuery('#fhp_manual_confirm').change(function() {
    update_fhp_manual_confirm();
  });
{/literal}{/footer_script}
