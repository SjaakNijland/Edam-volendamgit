<?php /* Smarty version Smarty-3.1.18, created on 2017-02-01 12:19:13
         compiled from "views\edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31805891b1d64fc250-09069552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a2f77791ce204354e8b110a5ce8212db9cb8288' => 
    array (
      0 => 'views\\edit.tpl',
      1 => 1485947946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31805891b1d64fc250-09069552',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5891b1d665cb06_55100406',
  'variables' => 
  array (
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5891b1d665cb06_55100406')) {function content_5891b1d665cb06_55100406($_smarty_tpl) {?><form action="?action=update" method="post">
    <table>
        <tr>
            <td><input type="text" placeholder="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['phpro_user_id'];?>
" readonly></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Username" name="phpro_username" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['phpro_username'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Password" name="phpro_password" value="<?php echo $_smarty_tpl->tpl_vars['result']->value[0]['phpro_password'];?>
" readonly></td>
        </tr>
        <tr>
            <td><input type="submit" id="submit" name="submit_update" value="Submit"></td>
        </tr>
    </table>
    <a href="index.php?action=admin">Keer terug</a>

</form><?php }} ?>
