<?php

namespace App\Controller;

use App\Entity\Quizz;
use App\Form\QuizzType;
use App\Repository\QuestionRepository;
use App\Repository\QuizzRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/quizz")
 */
class QuizzController extends AbstractController
{

    /**
     * @Route("/new", name="quizz_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $quizz = new Quizz();
        $form = $this->createForm(QuizzType::class, $quizz);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($quizz);
            $entityManager->flush();

            return $this->redirectToRoute('quizz_index');
        }

        return $this->render('quizz/new.html.twig', [
            'quizz' => $quizz,
            'form' => $form->createView(),
        ]);
    }



    /**
     * @isGranted("ROLE_USER")
     * @Route("/home", name="home", methods={"GET"})
     */
    public function quizzHomepage(){

        return $this->render('quizz/home.html.twig', [
            'controller_name' => 'QuizzController',
        ]);
    }

    /**
     * @isGranted("ROLE_USER")
     * @Route("/start", name="start", methods={"GET","POST"})
     */
    public function startTheQuizz(QuestionRepository $questionRepository){

        return $this->render('quizz/start.html.twig', [
            'questions' => $questionRepository->findRandomQuestions(),
        ]);
    }

}
