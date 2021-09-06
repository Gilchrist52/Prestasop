{**
* 2019-2020 MDWeb
*
*  @author    MDWeb
*  @copyright 2019-2020 MDWeb
*  @license   Commercial
*}
<div class="content-wrap panel">
    <form id="configuration_form" class="defaultForm form-horizontal weglot" method="post" enctype="multipart/form-data" novalidate="">
        <div class="form-group mdc_form_group">
            <div class='mdc_container'>
                <div class='mdc_left_block'>
                    <label class="control-label col-lg-1 mdc_label">
                        {l s="Clé API" mod="weglot"}
                    </label>
                    <div class="col-sm-7 col-md-5 col-lg-5">
                        <div class="form-group mdc_form_group">
                            <div class='col-sm-11'>
                                <input type="text" name="api_key" value="{$api_key|escape:'html_all':'utf-8'}">
                                <p>{l s='Sign up to [1]Weglot[/1] to get your API key' tags=['<a href="https://dashboard.weglot.com/register-prestashop" target="_blank">'] mod='weglot'}</p>
                            </div>
                        </div>
                    </div>
                    <div class="mdc_button_position">
                        <button type="submit" value="1" id="configuration_form_submit_btn" name="submitWeglotConfigure" class="button mdc_outline_button">
                            {l s='Save' mod='weglot'}
                        </button>   
                    </div>                     
                </div>
                <div class='mdc_right_block'>
                    <span class='mdc_title'>{l s='Manage my translations' mod='weglot'}</span>
                    <span class='mdc_text'>{l s='To edit your translations and your integration of Weglot, go to your Weglot dashboard' mod='weglot'}</span>
                    <a href="https://dashboard.weglot.com" target="_blank" class="mdc_button">
                        {l s='Edit my translations' mod='weglot'}
                    </a>
                </div>
            </div>
        </div>
    </form>
</div>