<?php

namespace App\Controller;

use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\MealTypeForm;
use App\Entity\MealType;

class MealController extends BaseController {

    public function setContainer(ContainerInterface $container = null)
    {
        parent::setContainer($container);
    }

    public function addMealTypeAction(Request $request){
        $mealType = new MealType();
        $form = $this->createForm(MealTypeForm::class, $mealType);

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->em->persist($mealType);
            $this->em->flush();
        }

        return $this->render(
            'meal/mealType.html.twig',
            array('form' => $form->createView())
        );
    }

}