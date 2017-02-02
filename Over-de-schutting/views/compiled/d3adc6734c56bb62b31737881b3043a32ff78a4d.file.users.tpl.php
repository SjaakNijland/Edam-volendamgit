<?php /* Smarty version Smarty-3.1.18, created on 2017-02-01 12:03:34
         compiled from "views\users.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181705889aeab9a9e79-83864143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3adc6734c56bb62b31737881b3043a32ff78a4d' => 
    array (
      0 => 'views\\users.tpl',
      1 => 1485947010,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181705889aeab9a9e79-83864143',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5889aeaba07581_11171189',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889aeaba07581_11171189')) {function content_5889aeaba07581_11171189($_smarty_tpl) {?><table>

    <tr>
        <td>Username</td>

    </tr>
</table>
<hr>
<table>
    <?php  $_smarty_tpl->tpl_vars['oneItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['oneItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['result']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['oneItem']->key => $_smarty_tpl->tpl_vars['oneItem']->value) {
$_smarty_tpl->tpl_vars['oneItem']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phpro_user_id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phpro_username'];?>
</td>
            <td><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phpro_user_id'];?>
">edit</a> </td>
            <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['phpro_user_id'];?>
">delete</a> </td>
        </tr>
    <?php } ?>
</table>
<a href="index.php?action=admin">Keer terug</a><?php }} ?>
