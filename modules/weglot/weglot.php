<?php
/**
 * 2019-2020 MDWeb
 *
 *  @author    MDWeb
 *  @copyright 2019-2020 MDWeb
 *  @license   Commercial
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once(_PS_MODULE_DIR_ . 'weglot/classes/APIWeglot.php');

class Weglot extends Module
{
    /**
     * List of hookss
     *
     * @var array
     */
    private $hooks = [
        'header',
        'actionAdminControllerSetMedia'
    ];

    /**
     * @inheritDoc
     */
    public function __construct()
    {
        $this->name = 'weglot';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'Weglot';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->module_key = '13b1e60a5855cd454b70be977a5d8a20';

        parent::__construct();

        $this->displayName = $this->l('Translate Your Store - Weglot');

        $this->description = $this->l(
            'Translate your PrestaShop store into multiple languages in minutes with Weglot.'
        );

        $unstallContent = 'This action deletes the JavaScript script inserted by Weglot.';
        $unstallContent .= ' Attention: If you want to stop your Weglot subscription, go to your Weglot dashboard.';
        $unstallContent .= ' If you have any questions, please contact our team: support@weglot.com';
        $this->confirmUninstall = $this->l($unstallContent);
    }

    /**
     * @inheritDoc
     */
    public function install()
    {
        if (parent::install() && $this->registerHook($this->hooks)) {
            return true;
        }

        return false;
    }

    /**
     * @inheritDoc
     */
    public function getContent()
    {
        $msg = null;

        if (Tools::getValue('submitWeglotConfigure')) {
            $APIKey = Tools::getValue('api_key');

            $api = new APIWeglot($APIKey);
            if ($api->run('ENDPOINT')) {
                Configuration::updateValue('MD_WEGLOT_API_KEY', $APIKey);
                $msg = $this->displayConfirmation($this->l('API key saved'));
            } else {
                $msg = $this->displayError($this->l('Incorrect API key'));
            }
        }
        $this->context->smarty->assign(
            [
                'api_key' => Configuration::get('MD_WEGLOT_API_KEY')
            ]
        );
        $template = _PS_MODULE_DIR_ . $this->name . '/views/templates/admin/configure.tpl';

        return $msg . $this->context->smarty->fetch($template);
    }

    /**
     * @inheritDoc
     */
    public function hookHeader($params)
    {
        Media::addJsDef(
            [
                'weglotKey' => Configuration::get('MD_WEGLOT_API_KEY')
            ]
        );

        if (version_compare(_PS_VERSION_, '1.7', '>=')) {
            $this->context->controller->registerJavascript(
                $this->name . '-weglot',
                APIWeglot::getWeglotCDNScript(),
                [
                    'server' => 'remote'
                ]
            );
        } else {
            $this->context->controller->addJS(APIWeglot::getWeglotCDNScript());
        }
        $this->context->controller->addJS(
            dirname(__FILE__) . '/views/js/front-weglot.js'
        );
    }

    /**
     * @inheritDoc
     */
    public function hookActionAdminControllerSetMedia($params)
    {
        if (Tools::getIsset('controller') && Tools::getValue('controller') == 'AdminModules') {
            if (Tools::getIsset('configure') && Tools::getValue('configure') == 'weglot') {
                $this->context->controller->addCSS($this->_path . 'views/css/back.css');
            }
        }
    }
}
