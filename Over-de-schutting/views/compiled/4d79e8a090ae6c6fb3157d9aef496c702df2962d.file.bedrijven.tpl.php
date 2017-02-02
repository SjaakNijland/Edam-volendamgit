<?php /* Smarty version Smarty-3.1.18, created on 2017-02-01 12:03:51
         compiled from "views\bedrijven.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27712588f13b64bdc84-28046483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d79e8a090ae6c6fb3157d9aef496c702df2962d' => 
    array (
      0 => 'views\\bedrijven.tpl',
      1 => 1485947029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27712588f13b64bdc84-28046483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_588f13b657c1f2_05137303',
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_588f13b657c1f2_05137303')) {function content_588f13b657c1f2_05137303($_smarty_tpl) {?><table>

    <tr>

        <td>Organisatie</td>


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

            <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['namebusiness'];?>
</td>

            <td><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a> </td>
            <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a> </td>
        </tr>
    <?php } ?>
</table>
<a href="index.php?action=admin">Keer terug</a><?php }} ?>
