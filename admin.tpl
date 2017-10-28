<div class="titrePage">
  <h2>Force HTTPS plugin</h2>
</div>
<fieldset>
<div style="text-align:left">
	<p><b>{'fhp_about'|@translate}</b></p>
	<p>{'fhp_description'|@translate}</p>
</div>
</fieldset>

<form method="post" action="" class="properties">
	<fieldset>
		<legend>{'fhp_security_group'|@translate}</legend>
		<table align="left">
			<tr valign="top">
				<td colspan="4">
					<label>{'fhp_force_https_warning'|@translate}</label><br/>
					<a href="{$TPL_TEST_URL}" onclick="window.open('{$TPL_TEST_URL}','popup','width=800,height=500,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0'); return false">{'fhp_test_https_link'|@translate}</a>
				</td>
			</tr>
			<tr>
				<td colspan="4"></td>
			</tr>
			<tr valign="top">
				<td width="125" nowrap="nowrap"><label>{'fhp_force_https_label'|@translate} : </label></td>
				<td nowrap="nowrap">{html_radios name='fhp_use_https' values='true,false'|@explode output='Yes,No'|@explode|translate selected=$TPL_USE_HTTPS}</td>
				<td>&nbsp;</td>
				<td><label>{'fhp_force_https_comment'|@translate}</label>
				</td>
			</tr>
		</table>		
	</fieldset>
	<fieldset>
		<legend>{'fhp_options_group'|@translate}</legend>
		<table align="left">
			<tr valign="top">
				<td width="125" nowrap="nowrap"><label>{'fhp_activate_sts_label'|@translate} : </td>
				<td nowrap="nowrap">{html_radios name='fhp_use_sts' values='true,false'|@explode output='Yes,No'|@explode|translate selected=$TPL_USE_STS}</td>
				<td>&nbsp;</td>
				<td><label>{'fhp_activate_sts_comment'|@translate}</label></td>
			</tr>
			<tr>
				<td colspan="4"></td>
			</tr>
		</table>		
	</fieldset>
	<fieldset>
		<input class="submit" type="submit" value="{'fhp_submit'|@translate}" name="submit"/>
	</fieldset>
</form>
