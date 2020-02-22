<?php

class Modolo extends Module
{
    public function __construct()
    {
        $this->name = 'Modolo';
        $this->description = 'Module de mise en route pour modifier le theme, l\'administration et la partie front du site.';
        $this->version = '1.0.0';
        $this->bootstrap = true;
        parent::__construct();
        $this->displayName = $this->l('Modolo');
    }

    public function install()
    {
        return
            parent::install()
            && $this->registerHook('displayHome')
            && $this->registerHook('displayAdminCatalogHeaderText')
            ;
    }

    public function uninstall()
    {
        return parent::uninstall();
    }

    public function hookDisplayHome()
    {
        return $this->display(__FILE__, 'views/templates/hook/home.twig');
    }

    public function hookHeader()
    {
        $this->context->controller->addCSS(array(
            $this->_path.'views/css/modolo.css'
        ));

        $this->context->controller->addJS(array(
            $this->_path.'views/js/modolo.js'
        ));
    }

    public function hookDisplayAdminCatalogHeaderText()
    {
        return $this->display(__FILE__, 'views/templates/hook/adminHeaderText.twig');
    }

    public function getContent()
    {
        $output = null;

        if(Tools::isSubmit('submit'.$this->name))
        {
            $modolo = strval(Tools::getValue('MODOLO'));

            if(!$modolo || empty($modolo) || !Validate::isGenericName($modolo))
            {
                $output .= $this->displayError($this->l('Invalid Configuration value'));
            }
            else
            {
                Configuration::updateValue('MODOLO', $modolo);
                $output .= $this->displayConfirmation($this->l('Settings updated'));
            }
        }
        return $output.$this->displayForm();
    }

    public function displayForm()
    {
        // Get default language
        $defaultLang = (int)Configuration::get('PS_LANG_DEFAULT');

        // Init Fields form array
        $fieldsForm[0]['form'] = [
            'legend' => [
                'title' => $this->l('Réglages'),
            ],
            'input' => [
                [
                    'type' => 'text',
                    'label' => $this->l('Ecrivez votre texte'),
                    'name' => 'MODOLO',
                    'size' => 20,
                    'required' => true
                ]
            ],
            'submit' => [
                'title' => $this->l('Save'),
                'class' => 'btn btn-default pull-right'
            ]
        ];

        $helper = new HelperForm();

        // Module, token and currentIndex
        $helper->module = $this;
        $helper->name_controller = $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        $helper->currentIndex = AdminController::$currentIndex.'&configure='.$this->name;

        // Language
        $helper->default_form_language = $defaultLang;
        $helper->allow_employee_form_lang = $defaultLang;

        // Title and toolbar
        $helper->title = $this->displayName;
        $helper->show_toolbar = true;        // false -> remove toolbar
        $helper->toolbar_scroll = true;      // yes - > Toolbar is always visible on the top of the screen.
        $helper->submit_action = 'submit'.$this->name;
        $helper->toolbar_btn = [
            'save' => [
                'desc' => $this->l('Save'),
                'href' => AdminController::$currentIndex.'&configure='.$this->name.'&save'.$this->name.
                    '&token='.Tools::getAdminTokenLite('AdminModules'),
            ],
            'back' => [
                'href' => AdminController::$currentIndex.'&token='.Tools::getAdminTokenLite('AdminModules'),
                'desc' => $this->l('Back to list')
            ]
        ];

        // Load current value
        $helper->fields_value['MODOLO'] = Configuration::get('MODOLO');

        return $helper->generateForm($fieldsForm);
    }


}