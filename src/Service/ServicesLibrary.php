<?php

namespace App\Service;

use App\Entity\Media;
use App\Entity\Trick;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormInterface;

class ServicesLibrary
{

	static public function modifyMainPicture(Trick $trick, FormInterface $form, FileUploader $fileUploader)
	{
		$mainPicture = $form->get('main_picture')->getData();
		$fileName = $fileUploader->upload($mainPicture, 'media');
		$trick->setMainPicture($fileName);
	}

	static public function modifyMediaCollection(Trick $trick, FormInterface $form, FileUploader $fileUploader, EntityManagerInterface $entityManagerInterface)
	{
		foreach ($form->get('medias')->getData() as $media) {
			$fileName = $fileUploader->upload($media, 'media');
			$media = new Media();
			$media->setPath($fileName);
			$media->setTrick($trick);
			/*
				|-----------------------------------
				| We find the extension to set the type
				|-----------------------------------
			*/
			$extension = pathinfo($fileName, PATHINFO_EXTENSION);
			if ($extension === 'mp4' || $extension === 'webm' || $extension === 'ogg') {
				$media->setType('video');
			} elseif ($extension === 'png' || $extension === 'jpg' || $extension === 'jpeg') {
				$media->setType('picture');
			} else {
				throw new \Exception('The file extension is not supported');
			}
			$entityManagerInterface->persist($media);
		}
	}

	static public function modifyVideoLinks(Trick $trick, FormInterface $form, EntityManagerInterface $entityManagerInterface)
	{
		$videoLinks = $form->get('embed_video_links')->getData();
		foreach ($videoLinks as $videoLink) {
			if (!empty($videoLink)) {
				$media = new Media();
				$media->setPath($videoLink);
				$media->setTrick($trick);
				$media->setType('video');
				$entityManagerInterface->persist($media);
			}
		}
	}
}
