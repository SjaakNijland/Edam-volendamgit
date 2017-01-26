<?php /* Smarty version Smarty-3.1.18, created on 2017-01-26 09:16:46
         compiled from "views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:83175889b06e8a59e4-98696314%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b5bb9c8dbb5a30ba85abdf06c50b421f44e4b5' => 
    array (
      0 => 'views\\login.tpl',
      1 => 1484823800,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '83175889b06e8a59e4-98696314',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5889b06e966704_94308867',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889b06e966704_94308867')) {function content_5889b06e966704_94308867($_smarty_tpl) {?><html>


<div class="container">


<h2>Login Here</h2>
<form action="?action=login_submit" method="post">
    <fieldset>
        <p>
            <label for="phpro_username">Username</label>
            <input type="text" id="phpro_username" name="phpro_username" value="" maxlength="20" />
        </p>
        <p>
            <label for="phpro_password">Password</label>
            <input type="text" id="phpro_password" name="phpro_password" value="" maxlength="20" />
        </p>
        <p>
          <input type="submit" value="→ Login" />
        </p>
    </fieldset>
</form>
</div>


</html><?php }} ?>
