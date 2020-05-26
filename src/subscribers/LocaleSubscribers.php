<?php
namespace App\Subscribers;

use Symfony\Component\EventDispatcher\EvenetSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;

class LocaleSubscribers implements EvenetSubscriberInterface
{
    private $defaultLocale;

    public function __construct(string $defaultLocale = "en") {

        $this->defaultLocale = $defaultLocale;

    }

    public function onKernelRequest(GetResponseEvent $event)
    {

        $request = $event->getRequest();
        if (!$request->hasPreviousSession()){

            return;

        }

        if ($locale = $require->attributes->get('_locale')) {

            $request->getSession()->set('_locale', $locale);

            }
        else {

            $request->setLocale($request->getSession()->get('_locale', $this->defaultLocale));

        }    

    }

    public static function getSubscribedEvents()
    {

        return [

            KernelEvents::REQUEST => ['onKerbelRequest', 17]
        ];

    }



}

?>