<?php
/**
 * Created by PhpStorm.
 * User: Bassem
 */

namespace Odoo\ClientBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;

class OdooServiceExtension extends Extension
{

    public function load(array $configs, ContainerBuilder $container)
    {
        $load= new XmlFileLoader($container,new FileLocator(__DIR__ . '/../Resources/config'));
        $load->load('services.xml');
        $configuration = $this->getConfiguration($configs, $container);
        $config = $this->processConfiguration($configuration, $configs);

    }
    public function getAlias()
    {
        return 'app_controller_form';
    }
}
