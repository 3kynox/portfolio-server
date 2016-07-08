<?php

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class AppKernel extends Kernel
{
    use MicroKernelTrait;

    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Dunglas\ApiBundle\DunglasApiBundle(),

            # Inactive Bundles (RTDocs: You have to update composer with enabled packages here to reactivate)
//            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
//            new Symfony\Bundle\MonologBundle\MonologBundle(),
//            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
//            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
//            new Symfony\Bundle\TwigBundle\TwigBundle(),
//            new Nelmio\ApiDocBundle\NelmioApiDocBundle(),
            new Nelmio\CorsBundle\NelmioCorsBundle(),
//            new FOS\HttpCacheBundle\FOSHttpCacheBundle(),

            new ContactBundle\ContactBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'), true)) {
            # Inactive Dev Bundles
//            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
//            $bundles[] = new Symfony\Bundle\DebugBundle\DebugBundle();
//            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
//            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
        }

        return $bundles;
    }

    protected function configureContainer(ContainerBuilder $c, LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        if (isset($this->bundles['WebProfilerBundle'])) {
            $routes->import('../config/routing_dev.yml');
        }

        $routes->import('../config/routing.yml');
    }
}
