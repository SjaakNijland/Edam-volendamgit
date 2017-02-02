<?php /* Smarty version Smarty-3.1.18, created on 2017-01-30 10:19:37
         compiled from "views\userPanel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:242225889af7d7e9a06-81767627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f9a3e0a6258c85a2dfbeb3078a68f262d6ce43' => 
    array (
      0 => 'views\\userPanel.tpl',
      1 => 1485420055,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242225889af7d7e9a06-81767627',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_5889af7d80f093_17177862',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5889af7d80f093_17177862')) {function content_5889af7d80f093_17177862($_smarty_tpl) {?><section id="user-panel">
    <div  class="user">
       <a href="?action=users"><span class="tooltip" title="Account bekijken"></span></a>
    </div>
    <div class="edit">
        <span class="tooltip" title="Pagina bewerken"></span>
    </div>
    <div class="calender">
        <span class="tooltip" title="Evenement toevoegen"></span>
    </div>
    <div class="log-out">
       <a href="?action=logout"> <span class="tooltip" title="Uitloggen"></span></a>
    </div>
</section><?php }} ?>
