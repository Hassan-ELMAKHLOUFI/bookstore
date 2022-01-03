<?php

namespace App\Controller;

use App\Form\RechercherLivreType;
use App\Form\RechercherParDateLivreType;
use App\Repository\GenreRepository;
use App\Repository\LivreRepository;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(LivreRepository $livreRepository,Request $request, PaginatorInterface $paginator): Response
    {
        $form=$this->createForm(RechercherLivreType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $livres=$livreRepository->findByTitre($request->request->get('rechercher_livre')['titre'],$request->request->get('rechercher_livre')['Du'],$request->request->get('rechercher_livre')['Jusquau']);
            $pagination = $paginator->paginate(
                $livres, /* query NOT result */
                $request->query->getInt('page', 1)/*page number*/,
                6/*limit per page*/
            );

            return $this->render('home/index.html.twig', [
                'livres' => $pagination,

                'search'=>$form->createView(),
            ]);
        }
        $livres=$livreRepository->findAll();
        $pagination = $paginator->paginate(
            $livres, /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            6/*limit per page*/
        );

        return $this->render('home/index.html.twig', [
            'livres' => $pagination,

            'search'=>$form->createView(),

        ]);
    }
}
