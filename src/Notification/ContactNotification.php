<?php

 
namespace App\Notification;

use App\Entity\Informationsclients;
use App\Repository\InformationsclientsRepository;
use twig\Environment;
use Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle;





class ContactNotification
{

    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;


    public function __construct(\swift_Mailer $mailer, Environment $renderer)
    { }


    public function notify(Informationsclients $informationsclients)
    {

        $message = (new \Swift_Message('nouveau client finance-aids: ' . $informationsclients->getEmail()))
            ->setFrom('johnzounon@gmail.com')
            ->setTo('johnzounon@outlook.com')
            ->setReplyTo($informationsclients->getEmail())
            ->setBody($this->renderer->render('banque/clients.html.twig', [
                'Informationsclients' => $informationsclients
            ]), 'text/html');
        $this->mailer->send($message);
    }
}
