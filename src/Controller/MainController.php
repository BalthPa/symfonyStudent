<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Matiere;
use App\Entity\Note;
use App\Form\MatieresType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/matiere", name="matiere")
     */
    public function matiere(Request $request, EntityManagerInterface $entityManager)
    {
        $matiere = new Matiere();

        $matieresRepository = $this->getDoctrine()->getRepository(Matiere::class)->findAll();

        $formMatiere = $this->createForm(MatieresType::class, $matiere);
        $formMatiere->handleRequest($request);

        if($formMatiere->isSubmitted() && $formMatiere->isValid()){
            $matiere = $formMatiere->getData();

            $entityManager->persist($matiere);
            $entityManager->flush();

            $this->redirectToRoute('matiere');
        }

        return $this->render('main/matiere.html.twig', [
            'matieres' => $matieresRepository,
            'formMatiere' => $formMatiere->createView(),
        ]);
    }

    /**
     * @Route("/matiere/fiche/{id}", name="ficheMatiere")
     */
    public function fichematiere($id, Request $request, EntityManagerInterface $entityManager)
    {
        $matiere = $this->getDoctrine()->getRepository(Matiere::class)->find($id);

        $formMatiere = $this->createForm(MatieresType::class, $matiere);
        $formMatiere->handleRequest($request);

        if($formMatiere->isSubmitted() && $formMatiere->isValid()){
            $matiere = $formMatiere->getData();

            $entityManager->persist($matiere);
            $entityManager->flush();

            $this->redirectToRoute('matiere');
        }

        return $this->render('main/ficheMatiere.html.twig', [
            'matiere' => $matiere,
            'formMatiere' => $formMatiere->createView(),
        ]);
    }

    /**
     * @Route("/matiere/fiche/remove/{id}", name="removeMatiere")
     */
    public function removeMatiere($id, Request $request,EntityManagerInterface $entityManager)
    {
        $matiere = $this->getDoctrine()->getRepository(Matiere::class)->find($id);

        $entityManager->remove($matiere);
        $entityManager->flush();


        return $this->redirectToRoute('matiere');
    }


}
