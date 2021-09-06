<?php
/* Smarty version 3.1.39, created on 2021-09-06 10:43:09
  from 'C:\wamp64\www\Prestasop\modules\weglot\views\templates\admin\configure.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6135d49d184272_53592494',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '99bb0a4d908e8840c77767916a17a41c837ba1fc' => 
    array (
      0 => 'C:\\wamp64\\www\\Prestasop\\modules\\weglot\\views\\templates\\admin\\configure.tpl',
      1 => 1630917628,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6135d49d184272_53592494 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="content-wrap panel">
    <form id="configuration_form" class="defaultForm form-horizontal weglot" method="post" enctype="multipart/form-data" novalidate="">
        <div class="form-group mdc_form_group">
            <div class='mdc_container'>
                <div class='mdc_left_block'>
                    <label class="control-label col-lg-1 mdc_label">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Clé API",'mod'=>"weglot"),$_smarty_tpl ) );?>

                    </label>
                    <div class="col-sm-7 col-md-5 col-lg-5">
                        <div class="form-group mdc_form_group">
                            <div class='col-sm-11'>
                                <input type="text" name="api_key" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['api_key']->value,'html_all','utf-8' ));?>
">
                                <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up to [1]Weglot[/1] to get your API key','tags'=>array('<a href="https://dashboard.weglot.com/register-prestashop" target="_blank">'),'mod'=>'weglot'),$_smarty_tpl ) );?>
</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc_button_position">
                        <button type="submit" value="1" id="configuration_form_submit_btn" name="submitWeglotConfigure" class="button mdc_outline_button">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'weglot'),$_smarty_tpl ) );?>

                        </button>   
                    </div>                     
                </div>
                <div class='mdc_right_block'>
                    <span class='mdc_title'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Manage my translations','mod'=>'weglot'),$_smarty_tpl ) );?>
</span>
                    <span class='mdc_text'><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'To edit your translations and your integration of Weglot, go to your Weglot dashboard','mod'=>'weglot'),$_smarty_tpl ) );?>
</span>
                    <a href="https://dashboard.weglot.com" target="_blank" class="mdc_button">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit my translations','mod'=>'weglot'),$_smarty_tpl ) );?>

                    </a>
                </div>
            </div>
        </div>
    </form>
</div><?php }
}
