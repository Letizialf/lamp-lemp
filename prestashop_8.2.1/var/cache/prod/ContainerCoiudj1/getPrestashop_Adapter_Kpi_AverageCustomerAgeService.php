<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.kpi.average_customer_age' shared service.

return $this->services['prestashop.adapter.kpi.average_customer_age'] = new \PrestaShop\PrestaShop\Adapter\Kpi\AverageCustomerAgeKpi(($this->services['translator'] ?? $this->getTranslatorService()), ($this->services['prestashop.adapter.legacy.kpi_configuration'] ?? ($this->services['prestashop.adapter.legacy.kpi_configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration\KpiConfiguration())), ($this->services['PrestaShop\\PrestaShop\\Adapter\\LegacyContext'] ?? $this->getLegacyContextService())->getAdminLink("AdminStats", true, ["ajax" => 1, "action" => "getKpi", "kpi" => "avg_customer_age"]));
