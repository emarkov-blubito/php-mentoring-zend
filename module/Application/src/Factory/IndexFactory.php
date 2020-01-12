<?php


namespace Application\Factory;
//use Zend\ServiceManager\ServiceLocatorInterface;
use Interop\Container\ContainerInterface;
use Application\Controller\IndexController;
use Zend\Db\Adapter\Adapter;

class IndexFactory
{
    //public function __invoke(ContainerInterface $container)
    public function __invoke(ContainerInterface $container, $requestedName)
    {
        //return new IndexController($container->get('Zend\Db\Adapter\Adapter'));
        return new IndexController($container->get('Doctrine\ORM\EntityManager'));
    }
}