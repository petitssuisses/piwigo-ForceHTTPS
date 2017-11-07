{if ($force_https_theme=='bootstrap_darkroom')}
<li class="nav-item dropdown" id="identificationDropdown">
	<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{if isset($USERNAME)}<i class="fa fa-user"></i> {$USERNAME}{else}{'Login'|@translate}{/if}</a>
	    <div class="dropdown-menu dropdown-menu-right" role="menu">
	{strip}
	    {if isset($USERNAME)}
	        <div class="dropdown-header">{'Hello'|@translate} {$USERNAME}!</div>
	        <div class="dropdown-divider"></div>
	    {/if}
		{if isset($U_LOGIN)}
			<a class="dropdown-item" href="{$U_LOGIN}" title="{'Login'|@translate}" rel="nofollow">{'Login'|@translate}</a>
		{/if}
		{if isset($U_REGISTER)}
			<a class="dropdown-item" href="{$U_REGISTER}" title="{'Create a new account'|@translate}" rel="nofollow">{'Register'|@translate}</a>
		{/if}
		{if isset($U_LOGOUT)}
			<a class="dropdown-item" href="{$U_LOGOUT}">{'Logout'|@translate}</a>
		{/if}
		{if isset($U_PROFILE)}
			<a class="dropdown-item" href="{$U_PROFILE}" title="{'customize the appareance of the gallery'|@translate}">{'Customize'|@translate}</a>
		{/if}
		{if isset($U_ADMIN)}
			<a class="dropdown-item" href="{$U_ADMIN}" title="{'available for administrators only'|@translate}">{'Administration'|@translate}</a>
		{/if}
		{/strip}
	</div>
</li>
{else if ($force_https_theme=='bootstrapdefault')}
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">{'Identification'|@translate} <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
	{strip}
	    {if isset($USERNAME)}
	        <li><a href="#">{'Hello'|@translate} {$USERNAME}!</a></li>
        	<li class="divider"></li>
	    {/if}
		{if isset($U_REGISTER)}
	    	<li><a href="{$U_REGISTER}" title="{'Create a new account'|@translate}" rel="nofollow">{'Register'|@translate}</a></li>
		{/if}
		{if isset($U_LOGIN)}
	    	<li><a href="{$U_LOGIN}" rel="nofollow">{'Login'|@translate}</a></li>
		{/if}
		{if isset($U_LOGOUT)}
	    	<li><a href="{$U_LOGOUT}">{'Logout'|@translate}</a></li>
		{/if}
		{if isset($U_PROFILE)}
	    	<li><a href="{$U_PROFILE}" title="{'customize the appareance of the gallery'|@translate}">{'Customize'|@translate}</a></li>
		{/if}
		{if isset($U_ADMIN)}
	    	<li><a href="{$U_ADMIN}" title="{'available for administrators only'|@translate}">{'Administration'|@translate}</a></li>
		{/if}
		{/strip}
    </ul>
</li>
{else}
<dt>{'Identification'|@translate}</dt>
<dd>
{strip}
	<ul>
	{if isset($U_LOGIN)}
	<li><a href="{$force_https_menu_url}" rel="nofollow">{'Login'|@translate}</a></li>
	{/if}
	{if isset($U_LOGOUT)}
	<li><a href="{$U_LOGOUT}">{'Logout'|@translate}</a></li>
	{/if}
	{if isset($U_PROFILE)}
	<li><a href="{$U_PROFILE}" title="{'customize the appareance of the gallery'|@translate}">{'Customize'|@translate}</a></li>
	{/if}
	{if isset($U_ADMIN)}
	<li><a href="{$U_ADMIN}" title="{'available for administrators only'|@translate}">{'Administration'|@translate}</a></li>
	{/if}
	</ul>
{/strip}
</dd>

{/if}
