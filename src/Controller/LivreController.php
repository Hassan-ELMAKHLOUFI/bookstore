<?php

namespace App\Controller;

use App\Entity\Livre;
use App\Form\LivreType;
use App\Form\RechercherLivreType;
use App\Repository\LivreRepository;
use Cassandra\Date;
use Knp\Component\Pager\PaginatorInterface;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateIntervalType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\SubmitButton;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/livre")
 */
class LivreController extends AbstractController
{
    /**
     * @Route("/", name="livre_index", methods={"GET","POST"})
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

            return $this->render('livre/index.html.twig', [
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

        return $this->render('livre/index.html.twig', [
            'livres' => $pagination,

            'search'=>$form->createView(),

        ]);
    }

    /**
     * @Route("/new", name="livre_new", methods={"GET", "POST"})
     */
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $livre = new Livre();
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($livre);
            $entityManager->flush();

            return $this->redirectToRoute('livre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('livre/new.html.twig', [
            'livre' => $livre,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="livre_show", methods={"GET"})
     */
    public function show(Livre $livre): Response
    {
        return $this->render('livre/show.html.twig', [
            'livre' => $livre,
            'auteurs' =>$livre->getAuteurs(),
            'genres'=>$livre->getGenres()
        ]);
    }

    /**
     * @Route("/{id}/edit", name="livre_edit", methods={"GET", "POST"})
     */
    public function edit(Request $request, Livre $livre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(LivreType::class, $livre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('livre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('livre/edit.html.twig', [
            'livre' => $livre,
            'form' => $form,
        ]);
    }

    /**
     * @Route("/{id}", name="livre_delete", methods={"POST"})
     */
    public function delete(Request $request, Livre $livre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $livre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($livre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('livre_index', [], Response::HTTP_SEE_OTHER);
    }

//    public function search(Request $request, LivreRepository $livreRepository)
//    {
//        $form = $this->createFormBuilder(null)
//            ->setAction($this->generateUrl('handlesearch/handle'))
//            ->add('query',TextType::class)
//            ->add('search',SubmitType::class)->getForm();
//        return $this->render('livre/searchBar.html.twig',['form'=>$form->createView()]);
//    }

    public function searchByDate(Request $request, LivreRepository $livreRepository)
    {
        $form = $this->createFormBuilder(null)
           // ->setAction($this->generateUrl('handlesearch/handle'))

            ->add('end', DateIntervalType::class, [
                'years' => array_combine(range(1960, 2021), range(1960, 2021)),
            ])
            ->add('search',SubmitType::class)->getForm();
        return $this->render('livre/searchBar.html.twig',['form'=>$form->createView()]);
    }


    /**
     * @Route ("/handlesearch/handle", name="handlesearch/handle")
     */
    public  function handleSearch (Request  $request,LivreRepository $livreRepository){
       // dump($request->request); die;
        return $this->render('livre/index.html.twig', [
            'livres' => $livreRepository->findByTitre($request->request->get('form')['query']),
        ]);
    }
}
