<?php
/* Smarty version 3.1.33, created on 2020-02-21 20:17:13
  from '/Users/jeanyvesfournet/Desktop/project/preprod_test/admin007/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e502cb9aa1af2_96524371',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '006ff7baa0f32798c1c069c550ad2293e8d43d6b' => 
    array (
      0 => '/Users/jeanyvesfournet/Desktop/project/preprod_test/admin007/themes/default/template/content.tpl',
      1 => 1582135341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e502cb9aa1af2_96524371 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
