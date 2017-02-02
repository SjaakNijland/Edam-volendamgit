<?php /* Smarty version Smarty-3.1.18, created on 2017-02-01 11:56:23
         compiled from "views\edit2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251415891bed747d667-48548385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06a5019d5c793e4d0bc4e26bab6afdfa741b92f3' => 
    array (
      0 => 'views\\edit2.tpl',
      1 => 1485946256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '251415891bed747d667-48548385',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'result2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5891bed74ebcf1_24478717',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5891bed74ebcf1_24478717')) {function content_5891bed74ebcf1_24478717($_smarty_tpl) {?><form action="./model/update2.php" method="post">
    <table>
        <tr>
            <td><input type="text" placeholder="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['id'];?>
" readonly></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Voornaam" name="firstname" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['firstname'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Achternaam" name="secondname" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['secondname'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="telefoonnummer" name="number" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['number'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['email'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Naam organisatie" name="namebusiness" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['namebusiness'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="Website" name="website" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['website'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="categorie" name="catogories" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['catogories'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="text" placeholder="locatie" name="location" value="<?php echo $_smarty_tpl->tpl_vars['result2']->value[0]['location'];?>
" required></td>
        </tr>
        <tr>
            <td><input type="submit" id="submit" name="submit_update2" value="Submit"></td>
        </tr>
    </table>
    <a href="index.php?action=admin">Keer terug</a>

</form><?php }} ?>
