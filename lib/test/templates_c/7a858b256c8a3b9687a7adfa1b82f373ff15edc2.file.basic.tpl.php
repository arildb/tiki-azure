<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-02 13:42:15
         compiled from "/home/tiki/trunk/lib/test/core/Search/basic.tpl" */ ?>
<?php /*%%SmartyHeaderCode:132451193150aa549f2b6be9-89720101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a858b256c8a3b9687a7adfa1b82f373ff15edc2' => 
    array (
      0 => '/home/tiki/trunk/lib/test/core/Search/basic.tpl',
      1 => 1367087124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '132451193150aa549f2b6be9-89720101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50aa549f33bd03_37576799',
  'variables' => 
  array (
    'foo' => 0,
    'count' => 0,
    'results' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa549f33bd03_37576799')) {function content_50aa549f33bd03_37576799($_smarty_tpl) {?>
<table>
	<caption><?php echo (($tmp = @$_smarty_tpl->tpl_vars['foo']->value['bar'])===null||$tmp==='' ? 'Count' : $tmp);?>
: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8', true);?>
</caption>
	<tr>
		<th>Object</th>
		<th>Type</th>
	</tr>
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['results']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['object_id'];?>
</td>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['object_type'], ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
	<?php } ?>
</table>
<?php }} ?>