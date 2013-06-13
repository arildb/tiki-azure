<?php /* Smarty version Smarty-3.1-DEV, created on 2013-05-02 13:42:15
         compiled from "/home/tiki/trunk/lib/test/core/Search/embedded.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6235218150aa549f366c53-00630998%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36cc4acb8b0299ade68d236815f429bf62e3e533' => 
    array (
      0 => '/home/tiki/trunk/lib/test/core/Search/embedded.tpl',
      1 => 1367087124,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6235218150aa549f366c53-00630998',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1-DEV',
  'unifunc' => 'content_50aa549f3a0553_27581532',
  'variables' => 
  array (
    'count' => 0,
    'results' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa549f3a0553_27581532')) {function content_50aa549f3a0553_27581532($_smarty_tpl) {?><table>
	<caption>Count: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['count']->value, ENT_QUOTES, 'UTF-8', true);?>
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
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['object_id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
			<td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['object_type'], ENT_QUOTES, 'UTF-8', true);?>
</td>
		</tr>
	<?php } ?>
</table>
<?php }} ?>