<?php
/* Smarty version 3.1.39, created on 2021-09-06 10:51:27
  from 'C:\wamp64\www\Prestasop\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6135d68fe979b4_68559703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5225ae227e125d9572eabb81b4f1cb91cb655243' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestasop\\themes\\classic\\templates\\page.tpl',
      1 => 1629295266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6135d68fe979b4_68559703 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20030916046135d68fe26af9_55162127', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_3656996506135d68fe2b1c1_58925279 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_19157760156135d68fe28a14_66595241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3656996506135d68fe2b1c1_58925279', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_4303208296135d68fe89431_01392887 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_15354559456135d68fe8c093_87778981 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16615774306135d68fe87259_13789789 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4303208296135d68fe89431_01392887', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15354559456135d68fe8c093_87778981', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11340691026135d68fe926e6_58854549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7514153066135d68fe90929_11908689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11340691026135d68fe926e6_58854549', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_20030916046135d68fe26af9_55162127 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_20030916046135d68fe26af9_55162127',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_19157760156135d68fe28a14_66595241',
  ),
  'page_title' => 
  array (
    0 => 'Block_3656996506135d68fe2b1c1_58925279',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_16615774306135d68fe87259_13789789',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_4303208296135d68fe89431_01392887',
  ),
  'page_content' => 
  array (
    0 => 'Block_15354559456135d68fe8c093_87778981',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7514153066135d68fe90929_11908689',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11340691026135d68fe926e6_58854549',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19157760156135d68fe28a14_66595241', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16615774306135d68fe87259_13789789', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7514153066135d68fe90929_11908689', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
