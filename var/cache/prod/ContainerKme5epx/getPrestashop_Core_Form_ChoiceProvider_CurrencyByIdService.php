<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.form.choice_provider.currency_by_id' shared service.

return $this->services['prestashop.core.form.choice_provider.currency_by_id'] = new \PrestaShop\PrestaShop\Core\Form\ChoiceProvider\CurrencyByIdChoiceProvider(${($_ = isset($this->services['prestashop.adapter.data_provider.currency']) ? $this->services['prestashop.adapter.data_provider.currency'] : $this->getPrestashop_Adapter_DataProvider_CurrencyService()) && false ?: '_'});