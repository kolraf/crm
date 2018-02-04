<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MealTypeForm;
use App\Entity\MealType;

class MealController extends Controller {

    public function addMealTypeAction(Request $request){
        $mealType = new MealType();
        $form = $this->createForm(MealTypeForm::class, $mealType);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($mealType);
            $em->flush();
        }

        return $this->render(
            'meal/mealType.html.twig',
            array('form' => $form->createView())
        );
    }

}