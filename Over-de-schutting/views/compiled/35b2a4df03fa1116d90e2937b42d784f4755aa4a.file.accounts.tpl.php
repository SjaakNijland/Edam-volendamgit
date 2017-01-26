<?php /* Smarty version Smarty-3.1.18, created on 2017-01-26 09:34:38
         compiled from "views\accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:58965889b49ec73d30-88464067%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b2a4df03fa1116d90e2937b42d784f4755aa4a' => 
    array (
      0 => 'views\\accounts.tpl',
      1 => 1485176262,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '58965889b49ec73d30-88464067',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result' => 0,
    'oneItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5889b49eced090_06753174',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889b49eced090_06753174')) {function content_5889b49eced090_06753174($_smarty_tpl) {?><div class="container">
<h1>Accounts</h1>
    <a href="?action=admin&cms_action=insert">Insert data</a><br>
    <p>Content:</p>
    <table>
        <tr>
            <td>id</td>

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
                <td><?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
</td>

                <td><a href="?action=admin&cms_action=edit&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">edit</a></td>
                <td><a href="?action=admin&cms_action=delete&id=<?php echo $_smarty_tpl->tpl_vars['oneItem']->value['id'];?>
">delete</a></td>
            </tr>

        <?php } ?>
    </table>
</div><?php }} ?>
