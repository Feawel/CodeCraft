<?php

use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new Symfony\Bundle\FrameworkBundle\FrameworkBundle(),
            new Symfony\Bundle\SecurityBundle\SecurityBundle(),
            new Symfony\Bundle\TwigBundle\TwigBundle(),
            new Symfony\Bundle\MonologBundle\MonologBundle(),
            new Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle(),
            new Symfony\Bundle\AsseticBundle\AsseticBundle(),
            new Doctrine\Bundle\DoctrineBundle\DoctrineBundle(),
            new Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle(),
        	//new Bc\Bundle\BootstrapBundle\BcBootstrapBundle(),
        	new Stof\DoctrineExtensionsBundle\StofDoctrineExtensionsBundle(),
        	new FOS\UserBundle\FOSUserBundle(),
        	new Sonata\BlockBundle\SonataBlockBundle(),
        	new Sonata\jQueryBundle\SonatajQueryBundle(),
        	new Knp\Bundle\MenuBundle\KnpMenuBundle(),
        	new Sonata\DoctrineORMAdminBundle\SonataDoctrineORMAdminBundle(),
        	new Sonata\AdminBundle\SonataAdminBundle(),
        	new Sonata\CoreBundle\SonataCoreBundle(),
        	new Sonata\MediaBundle\SonataMediaBundle(),
        	new Sonata\EasyExtendsBundle\SonataEasyExtendsBundle(),
        	new Sonata\SeoBundle\SonataSeoBundle(),
        	new Application\Sonata\MediaBundle\ApplicationSonataMediaBundle(),
        	new CoreSphere\ConsoleBundle\CoreSphereConsoleBundle(),
            new SdA\WelcomeBundle\SdAWelcomeBundle(),
        	new Stfalcon\Bundle\TinymceBundle\StfalconTinymceBundle(),
            new SdA\UserBundle\SdAUserBundle(),
        );

        if (in_array($this->getEnvironment(), array('dev', 'test'))) {
            $bundles[] = new Symfony\Bundle\WebProfilerBundle\WebProfilerBundle();
            $bundles[] = new Sensio\Bundle\DistributionBundle\SensioDistributionBundle();
            $bundles[] = new Sensio\Bundle\GeneratorBundle\SensioGeneratorBundle();
            $bundles[] = new Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle();
        }

        return $bundles;
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load(__DIR__.'/config/config_'.$this->getEnvironment().'.yml');
    }
    
    public function init()
    {
    	date_default_timezone_set( 'Europe/Paris' );
    	parent::init();
    }
}
