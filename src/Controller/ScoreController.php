<?php

namespace App\Controller;

use App\Entity\Score;
use App\Form\ScoreType;
use App\Repository\ScoreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/score")
 */
class ScoreController extends AbstractController
{
    /**
     * @Route("/", name="score_index", methods={"GET"})
     */
    public function index(ScoreRepository $scoreRepository): Response
    {
        return $this->render('score/index.html.twig', [
            'scores' => $scoreRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="score_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $score = new Score();
        $form = $this->createForm(ScoreType::class, $score);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($score);
            $entityManager->flush();

            return $this->redirectToRoute('score_index');
        }

        return $this->render('score/new.html.twig', [
            'score' => $score,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="score_show", methods={"GET"})
     */
    public function show(Score $score): Response
    {
        return $this->render('score/show.html.twig', [
            'score' => $score,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="score_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Score $score): Response
    {
        $form = $this->createForm(ScoreType::class, $score);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('score_index');
        }

        return $this->render('score/edit.html.twig', [
            'score' => $score,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="score_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Score $score): Response
    {
        if ($this->isCsrfTokenValid('delete'.$score->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($score);
            $entityManager->flush();
        }

        return $this->redirectToRoute('score_index');
    }
}
