<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Media;

use App\Entity\Trick;
use App\Form\CommentType;
use App\Form\AddTrickType;

use App\Form\EditTrickType;

use App\Service\FileUploader;
use App\Service\ServicesLibrary;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class TrickController extends AbstractController
{
	#[Route('/trick/{slug}', name: 'app_trick')]
	public function index(Trick $trick, Request $request, EntityManagerInterface $entityManagerInterface, PaginatorInterface $paginator): Response
	{
		$medias = $trick->getMedia();
		$comments = $trick->getComments();

		foreach ($comments as $comment) {
			$user = $entityManagerInterface->getRepository(User::class)->find($comment->getUser());
			if ($entityManagerInterface->getRepository(User::class)->findOneBy(['id' => $user->getId()]) === null) {
				$newUser = new User();
				$newUser->setUsername('Deleted user');
				$newUser->setProfilePicture('/build/images/user_profile/default_profile_picture.fb6d3bd5.png');
				$comment->setUser($newUser);
			};
		}

		$pagination = $paginator->paginate(
			$comments,
			$request->query->getInt('page', 1),
			10
		);

		$form = $this->createForm(CommentType::class);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			$comment = $form->getData();
			$comment->setCreatedAt(new \DateTimeImmutable());
			$comment->setTrick($trick);
			$comment->setUser($this->getUser());

			$entityManagerInterface->persist($comment);
			$entityManagerInterface->flush();

			return $this->redirectToRoute('app_trick', ['slug' => $trick->getSlug()]);
		}

		return $this->render('trick/trick.html.twig', [
			'controller_name' => 'TrickController',
			'trick' => $trick,
			'medias' => $medias,
			'comments' => $pagination,
			'form' => $form->createView(),
		]);
	}



	#[Route('/trick/category/{slug}', name: 'app_trick_category')]
	public function category(string $slug, EntityManagerInterface $manager): Response
	{
		/*
			|-----------------------------------
			| We get all the tricks of the category
			|-----------------------------------
		*/
		$tricks = $manager->getRepository(Trick::class)->findBy(['category' => $slug]);

		return $this->render('trick/category/trick_category.html.twig', [
			'controller_name' => 'TrickController',
			'tricks' => $tricks,
			'category' => $slug,
		]);
	}



	#[Route('/new/trick', name: 'app_trick_new')]
	public function new(Request $request, EntityManagerInterface $entityManagerInterface, FileUploader $fileUploader): Response
	{
		// we check if the user is connected
		if (!$this->getUser()) {
			$this->addFlash('danger', 'You must be connected to add a trick');
			return $this->redirectToRoute('app_signin');
		}

		$trick = new Trick();

		$form = $this->createForm(AddTrickType::class, $trick);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			/*
                |-----------------------------------
                | We check if the name of this trick already exists in the database
                |-----------------------------------
            */
			$trickName = $form->get('name')->getData();
			$trickExists = $entityManagerInterface->getRepository(Trick::class)->findOneBy(['name' => $trickName]);
			if ($trickExists) {
				$this->addFlash('danger', 'This trick already exists');
				return $this->redirectToRoute('app_trick_new');
			}

			/*
                |-----------------------------------
                | We take care of the main_picture
                |-----------------------------------
            */
			if (!empty($form->get('main_picture')->getData())) {
				ServicesLibrary::modifyMainPicture($trick, $form, $fileUploader);
			} else {
				$this->addFlash('danger', 'You must add a main picture');
				return $this->redirectToRoute('app_trick_new');
			}
			/*
			|-----------------------------------
			| Then we deal with the medias collection
			|-----------------------------------
		    */
			if (!empty($form->get('medias')->getData())) {
				ServicesLibrary::modifyMediaCollection($trick, $form, $fileUploader, $entityManagerInterface);
			}
			/*
                |-----------------------------------
                | And we check if there are video links, if so, we loop through the array and  add the value to the database.
                |-----------------------------------
            */
			ServicesLibrary::modifyVideoLinks($trick, $form, $entityManagerInterface);

			$trick->setCreatedAt(new \DateTimeImmutable());
			$trick->setUser($this->getUser());
			$trick = $form->getData();

			$entityManagerInterface->persist($trick);
			$entityManagerInterface->flush();

			/*
            |---------------------------------------------
            | We check if the new trick has been added
            |---------------------------------------------
            */
			$trickExists = $entityManagerInterface->getRepository(Trick::class)->findOneBy(['name' => $trickName]);
			if ($trickExists) {
				$this->addFlash('success', 'The trick has been added');
				return $this->redirectToRoute('app_trick', ['slug' => $trick->getSlug()]);
			} else {
				$this->addFlash('danger', 'The trick has not been added');
				return $this->redirectToRoute('app_trick_new');
			}
		}

		return $this->render('trick/add/add_trick.html.twig', [
			'form' => $form->createView(),
		]);
	}



	#[Route('/trick/{slug}/edit', name: 'app_trick_edit')]
	public function edit(Trick $trick, Request $request, EntityManagerInterface $entityManagerInterface, FileUploader $fileUploader): Response
	{
		// we check if the user is connected and if he is the author of the trick or if he is an admin
		if (!$this->getUser() || ($this->getUser() !== $trick->getUser() && !$this->isGranted('ROLE_ADMIN'))) {
			$this->addFlash('danger', 'Please register or signin');
			return $this->redirectToRoute('app_signin');
		}

		$medias = $trick->getMedia();

		$form = $this->createForm(EditTrickType::class, $trick);
		$form->handleRequest($request);

		if ($form->isSubmitted() && $form->isValid()) {
			if (!empty($form->get('name')->getData())) {
				$trick->setName($form->get('name')->getData());
			}
			if (!empty($form->get('description')->getData())) {
				$trick->setDescription($form->get('description')->getData());
			}
			if (!empty($form->get('category')->getData())) {
				$trick->setCategory($form->get('category')->getData());
			}
			/*
                |-----------------------------------
                | We take care of the main_picture if it has been changed
                |-----------------------------------
            */
			if (!empty($form->get('main_picture')->getData())) {
				ServicesLibrary::modifyMainPicture($trick, $form, $fileUploader);
			}
			/*
                |-----------------------------------
                | Then we deal with the multiple files of the medias collection
                |-----------------------------------
            */
			if (!empty($form->get('medias')->getData())) {
				ServicesLibrary::modifyMediaCollection($trick, $form, $fileUploader, $entityManagerInterface);
			}
			/*
                |-----------------------------------
                | And we check if there are video links, if so, we loop through the array and  add the value to the database.
                |-----------------------------------
            */
			ServicesLibrary::modifyVideoLinks($trick, $form, $entityManagerInterface);

			$trick->setModifiedAt(new \DateTimeImmutable());

			$entityManagerInterface->persist($trick);
			$entityManagerInterface->flush();

			return $this->redirectToRoute('app_trick', ['slug' => $trick->getSlug()]);
		}

		return $this->render('trick/edit/edit_trick.html.twig', [
			'form' => $form->createView(),
			'trick' => $trick,
			'medias' => $medias,
		]);
	}



	#[Route('/trick/{slug}/delete', name: 'app_trick_delete')]
	public function delete(Trick $trick, EntityManagerInterface $entityManagerInterface): Response
	{
		// we check if the user is connected and if he is the author of the trick or if he is an admin
		if (!$this->getUser() || ($this->getUser() !== $trick->getUser() && !$this->isGranted('ROLE_ADMIN'))) {
			$this->addFlash('danger', 'Please register or signin');
			return $this->redirectToRoute('app_signin');
		}

		$trickName = $trick->getName();

		$entityManagerInterface->remove($trick);
		$entityManagerInterface->flush();

		// We check if the tricks has been deleted
		$trickExists = $entityManagerInterface->getRepository(Trick::class)->findOneBy(['name' => $trickName]);
		if (!$trickExists) {
			$this->addFlash('success', 'The trick has been deleted');
			return $this->redirectToRoute('app_home', ['_fragment' => 'tricks']);
		} else {
			$this->addFlash('danger', 'The trick has not been deleted');
			return $this->redirectToRoute('app_trick', ['slug' => $trick->getSlug()]);
		}
		return $this->redirectToRoute('app_home', ['_fragment' => 'tricks']);
	}



	#[Route('/trick/{slug}/delete/media/{media_id}', name: 'app_trick_delete_media')]
	public function deleteMedia(Trick $trick, int $media_id, EntityManagerInterface $entityManagerInterface): Response
	{
		// we check if the user is connected and if he is the author of the trick or if he is an admin
		if (!$this->getUser() || ($this->getUser() !== $trick->getUser() && !$this->isGranted('ROLE_ADMIN'))) {
			$this->addFlash('danger', 'Please register or signin');
			return $this->redirectToRoute('app_signin');
		}
		/*
			|-----------------------------------
			| We Get the media based on the id passed through the url
			|-----------------------------------
		*/
		$media = $entityManagerInterface->getRepository(Media::class)->find($media_id);

		$entityManagerInterface->remove($media);
		$entityManagerInterface->flush();

		// we check if the media has been deleted.
		$mediaExists = $entityManagerInterface->getRepository(Media::class)->find($media_id);
		if (!$mediaExists) {
			$this->addFlash('success', 'The media has been deleted');
			return $this->redirectToRoute('app_trick_edit', ['slug' => $trick->getSlug()]);
		} else {
			$this->addFlash('danger', 'The media has not been deleted');
			return $this->redirectToRoute('app_trick_edit', ['slug' => $trick->getSlug()]);
		}

		return $this->redirectToRoute('app_trick_edit', ['slug' => $trick->getSlug()]);
	}
}
