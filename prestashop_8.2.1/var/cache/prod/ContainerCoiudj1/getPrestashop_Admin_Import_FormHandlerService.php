<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.admin.import.form_handler' shared service.

return $this->services['prestashop.admin.import.form_handler'] = new \PrestaShopBundle\Form\Admin\Configure\AdvancedParameters\Import\ImportFormHandler(($this->services['prestashop.admin.import.form_builder'] ?? $this->load('getPrestashop_Admin_Import_FormBuilderService.php')), ($this->services['PrestaShop\\PrestaShop\\Core\\Hook\\HookDispatcher'] ?? $this->getHookDispatcherService()), ($this->services['prestashop.admin.import.form_data_provider'] ?? $this->load('getPrestashop_Admin_Import_FormDataProviderService.php')), 'Import');
