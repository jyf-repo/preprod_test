<?php
/* Smarty version 3.1.33, created on 2020-02-19 19:11:35
  from '/Users/jeanyvesfournet/Desktop/project/preprod_test/admin007/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e4d7a57721845_19559487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0e8146ec61358d580c33860d2922138ecf940c8a' => 
    array (
      0 => '/Users/jeanyvesfournet/Desktop/project/preprod_test/admin007/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1582135346,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4d7a57721845_19559487 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
