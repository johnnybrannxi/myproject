<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use App\Entity\Informationscoupons;
use App\Entity\Informationsneosurf;
use App\Entity\Informationspcs;
use App\Entity\Informationscashlib;
use App\Entity\Informationstoneofirst;
use App\Entity\Informationsrecharge;

use App\Repository\InformationscouponsRepository;
use App\Repository\InformationsneosurfRepository;
use App\Repository\InformationspcsRepository;
use App\Repository\InformationscashlibRepository;
use App\Repository\InformationstoneofirstRepository;
use App\Repository\InformationsrechargeRepository;

use Symfony\Component\Asset\Package;
use Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy;


class AdminController extends AbstractController
{
    /**
     * @Route("/administration", name="accueil-admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

     /**
     * @Route("/administration/transcash", name="admin-transcash")
     */
    public function admintranscash(){

        $repo = $this->getDoctrine ()->getRepository(Informationscoupons::class);
        
        $informationscoupons = $repo->findAll();

        return $this->render('admin/admin-transcash.html.twig', [
            'controller_name' => 'AdminController',
            'Informationscoupons' => $informationscoupons
        ]);

    }


    /**
     * @Route("/administration/neosurf", name="admin-neosurf")
     */
    public function adminneosurf(){

        $repo = $this->getDoctrine ()->getRepository(Informationsneosurf::class);
        
        $informationsneosurf = $repo->findAll();

        return $this->render('admin/admin-neosurf.html.twig', [
            'controller_name' => 'AdminController',
            'Informationsneosurf' => $informationsneosurf
        ]);

    }

    /**
     * @Route("/administration/pcs", name="admin-pcs")
     */
    public function adminpcs(){

        $repo = $this->getDoctrine ()->getRepository(Informationspcs::class);
        
        $informationspcs = $repo->findAll();

        return $this->render('admin/admin-pcs.html.twig', [
            'controller_name' => 'AdminController',
            'Informationspcs' => $informationspcs
        ]);

    }

    /**
     * @Route("/administration/cashlib", name="admin-cashlib")
     */
    public function admincashlib(){

        $repo = $this->getDoctrine ()->getRepository(Informationscashlib::class);
        
        $informationscashlib = $repo->findAll();

        return $this->render('admin/admin-cashlib.html.twig', [
            'controller_name' => 'AdminController',
            'Informationscashlib' => $informationscashlib
        ]);

    }

    /**
     * @Route("/administration/toneofirst", name="admin-toneofirst")
     */
    public function admintoneofirst(){

        $repo = $this->getDoctrine ()->getRepository(Informationstoneofirst::class);
        
        $informationstoneofirst = $repo->findAll();

        return $this->render('admin/admin-toneofirst.html.twig', [
            'controller_name' => 'AdminController',
            'Informationstoneofirst' => $informationstoneofirst
        ]);

    }


    /**
     * @Route("/administration/cartes-bancaires", name="admin-recharges")
     */
    public function adminrecharges(){

        $repo = $this->getDoctrine ()->getRepository(Informationsrecharge::class);
        
        $informationsrecharges = $repo->findAll();

        return $this->render('admin/admin-recharge.html.twig', [
            'controller_name' => 'AdminController',
            'Informationsrecharges' => $informationsrecharges
        ]);

    }

   
}
