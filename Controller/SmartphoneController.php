<?php

namespace App\Controller;

use App\Entity\Smartphone;
use App\Form\SmartphoneType;
use App\Repository\SmartphoneRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class SmartphoneController extends AbstractController
{
    #[Route('/smartphone', name: 'app_smartphone')]
    public function index(SmartphoneRepository $smartphoneRepository): Response
    {


    $smartphones = $smartphoneRepository->findAll();
        return $this->render('smartphone/index.html.twig', [
            'smartphones' => $smartphones,
        ]);
    }

      #[Route('/smartphone/{id}', name: 'app_view_smartphone')]
    public function view(SmartphoneRepository $smartphoneRepository, int $id): Response
    {


    $smartphone = $smartphoneRepository->find($id);
        return $this->render('smartphone/view.html.twig', [
            'smartphone' => $smartphone,
        ]);
    }

     #[Route('/smartphone-add', name: 'app_add_smartphone')]
    public function add(Request $request, EntityManagerInterface $entityManager): Response
{
    $form = $this->createForm(SmartphoneType::class);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $smartphone = $form->getData();
        $entityManager->persist($smartphone);
        $entityManager->flush();

        $this->addFlash('success', 'The smartphone has been added successfully!');

        return $this->redirectToRoute('app_smartphone');
    }

    return $this->render('smartphone/add.html.twig', [
        'form' => $form
    ]);
}


#[Route('/smartphone-update/{id}', name: 'app_update_smartphone')]
    public function update(Request $request, EntityManagerInterface $entityManager, int $id): Response
{
    $smartphone = $entityManager->getRepository(Smartphone::class)->find($id);
    $form = $this->createForm(SmartphoneType::class, $smartphone);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $smartphone = $form->getData();
        $entityManager->persist($smartphone);
        $entityManager->flush();

        $this->addFlash('success', 'The smartphone has been updated successfully!');

        return $this->redirectToRoute('app_smartphone');
    }

    return $this->render('smartphone/update.html.twig', [
        'form' => $form
    ]);
}

#[Route('/smartphone-delete/{id}', name: 'app_delete_smartphone')]
public function delete(EntityManagerInterface $entityManager, int $id): Response {
     
    $smartphone = $entityManager->getRepository(Smartphone::class)->find($id);
    $entityManager->remove($smartphone);
    $entityManager->flush();
    $this->addFlash('danger', 'Smartphone is gewist');
    return $this->redirectToRoute('app_smartphone');
}

}
