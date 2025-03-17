<?php
/* Smarty version 4.3.4, created on 2025-03-15 13:41:18
  from 'module:ps_customeraccountlinksps_customeraccountlinks.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67d5756ebeefc7_56406779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f9461127ce7396a601c2484841253ea5ba658f' => 
    array (
      0 => 'module:ps_customeraccountlinksps_customeraccountlinks.tpl',
      1 => 1738229700,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_67d5756ebeefc7_56406779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/app/var/cache/dev/smarty/compile/classiclayouts_layout_full_width_tpl/0d/5c/05/0d5c0554a4b6490c02944028546e848cfcdb1583_2.file.helpers.tpl.php',
    'uid' => '0d5c0554a4b6490c02944028546e848cfcdb1583',
    'call_name' => 'smarty_template_function_renderLogo_124571281267d5756b30d0e9_99520513',
  ),
));
?><!-- begin /app/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl -->
<div id="block_myaccount_infos" class="col-md-3 links wrapper">
  <p class="h3 myaccount-title hidden-sm-down">
    <a class="text-uppercase" href="https://localhost/index.php?controller=my-account" rel="nofollow">
      Su cuenta
    </a>
  </p>
  <div class="title clearfix hidden-md-up" data-target="#footer_account_list" data-toggle="collapse">
    <span class="h3">Su cuenta</span>
    <span class="float-xs-right">
      <span class="navbar-toggler collapse-icons">
        <i class="material-icons add">&#xE313;</i>
        <i class="material-icons remove">&#xE316;</i>
      </span>
    </span>
  </div>
  <ul class="account-list collapse" id="footer_account_list">
            <li><a href="https://localhost/index.php?controller=guest-tracking" title="Seguimiento del pedido" rel="nofollow">Seguimiento del pedido</a></li>
        <li><a href="https://localhost/index.php?controller=my-account" title="Acceda a su cuenta de cliente" rel="nofollow">Iniciar sesión</a></li>
        <li><a href="https://localhost/index.php?controller=registration" title="Crear una cuenta" rel="nofollow">Crear una cuenta</a></li>
        
<!-- begin module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- begin /app/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end /app/modules/blockwishlist/views/templates/hook/account/myaccount-block.tpl -->
<!-- end module:blockwishlist/views/templates/hook/account/myaccount-block.tpl -->

<!-- begin /app/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->
<li>
  <a href="//localhost/index.php?fc=module&module=ps_emailalerts&controller=account" title="Mis alertas">
    Mis alertas
  </a>
</li>

<!-- end /app/themes/classic/modules/ps_emailalerts/views/templates/hook/my-account-footer.tpl -->

       
	</ul>
</div>
<!-- end /app/themes/classic/modules/ps_customeraccountlinks/ps_customeraccountlinks.tpl --><?php }
}
