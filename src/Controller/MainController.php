<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Matiere;
use App\Entity\Note;
use App\Form\MatieresType;
use App\Form\NotesType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index( Request $request, EntityManagerInterface $entityManager)
    {
        $note = new Note();

        $matiereRepository = $this->getDoctrine()->getRepository(Matiere::class)->findAll();

        $noteRepository = $this->getDoctrine()->getRepository(Note::class)->findAll();

        $formNote = $this->createForm(NotesType::class, $note);
        $formNote->handleRequest($request);

        if($formNote->isSubmitted() && $formNote->isValid()){
            $note = $formNote->getData();

            $note->setDate(new \DateTime());

            $matiere = $this->getDoctrine()
                ->getRepository(Matiere::class)
                ->find($request->request->get('matiere'));

            $note->setMatiere($matiere);

            $entityManager->persist($note);
            $entityManager->flush();

            $this->redirectToRoute('index');
        }


        $note = 0;
        $coef = 0;
        $coefAll = 0;
        $somme = 0;
        $moyenne = 0;
        foreach ($noteRepository as $notes) {
            $note = $notes->getNote();
            $coef = $notes->getMatiere()->getCoefficient();
            $coefAll += $notes->getMatiere()->getCoefficient();
            $somme += $note * $coef;
            $moyenne = $somme / $coefAll;
        }

        return $this->render('main/index.html.twig', [
            'matieres' => $matiereRepository,
            'formNote' => $formNote->createView(),
            'notes' => $noteRepository,
            'moyenne' => $moyenne,
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

        $notes = $this->getDoctrine()->getRepository(Note::class)->findBy(["matiere" => $matiere]);

        foreach ($notes as $note) {
            $entityManager->remove($matiere);
        }
        $entityManager->remove($matiere);
        $entityManager->flush();



        return $this->redirectToRoute('matiere');
    }


}
