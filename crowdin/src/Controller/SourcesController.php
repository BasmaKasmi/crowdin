<?php

namespace App\Controller;

use App\Entity\Sources;
use App\Entity\Project;
use App\Form\SourcesType;
use App\Repository\SourcesRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/sources')]
class SourcesController extends AbstractController
{
    #[Route('/{id}', name: 'app_sources_index', methods: ['GET'])]
    public function index(Project $project, SourcesRepository $sourcesRepository): Response
    {
        return $this->render('sources/index.html.twig', [
            'sources' => $sourcesRepository->findBy(['idProject' => $project]),
            'idProject' => $project->getId(),
        ]);
    }

    #[Route('/{id}/new', name: 'app_sources_new', methods: ['GET', 'POST'])]
    public function new(Project $project, Request $request, EntityManagerInterface $entityManager): Response
    {
        $source = new Sources();
        $form = $this->createForm(SourcesType::class, $source);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $source->setIdProject($project);
            $entityManager->persist($source);
            $entityManager->flush();

            return $this->redirectToRoute('app_sources_index', ['id'=> $project->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sources/new.html.twig', [
            'source' => $source,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sources_show', methods: ['GET'])]
    public function show(Sources $source): Response
    {
        return $this->render('sources/show.html.twig', [
            'source' => $source,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_sources_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Sources $source, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(SourcesType::class, $source);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_sources_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('sources/edit.html.twig', [
            'source' => $source,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_sources_delete', methods: ['POST'])]
    public function delete(Request $request, Sources $source, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$source->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($source);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_sources_index', [], Response::HTTP_SEE_OTHER);
    }
}
