<?php /* Smarty version Smarty-3.1.19, created on 2017-03-23 10:35:48
         compiled from "/Applications/MAMP/htdocs/prestashop/admin835mourr4/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:799837058d396f41362f4-00408465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d998068047aaf84b165d5f1d96d0adba1f07670' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin835mourr4/themes/default/template/content.tpl',
      1 => 1482157020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '799837058d396f41362f4-00408465',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_58d396f41445a5_91088832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_58d396f41445a5_91088832')) {function content_58d396f41445a5_91088832($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
