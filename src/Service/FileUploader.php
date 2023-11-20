<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
	public function __construct(
		private string $targetDirectory,
		private string $picturePath,
		private string $profilePictureTargetDirectory,
		private string $profilePicturePath,
		private SluggerInterface $slugger,
	) {
	}

	public function upload(UploadedFile $file, string $type)
	{
		$originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
		$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
		$fileName = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

		try {
			if ($type == 'profile') {
				$file->move(
					$this->getProfilePictureTargetDirectory(),
					$fileName
				);
			} else {
				$file->move(
					$this->getTargetDirectory(),
					$fileName
				);
			}
		} catch (FileException $e) {
			/*
			|-----------------------------------
			| handle exception if something happens during file upload
			|-----------------------------------
		*/
		}
		if ($type == 'profile') {
			$directPath = $this->getProfilePicturePath() . $fileName;
		} else {
			$directPath = $this->getPicturePath() . $fileName;
		}

		return $directPath;
	}

	public function getTargetDirectory()
	{
		return $this->targetDirectory;
	}

	public function getPicturePath()
	{
		return $this->picturePath;
	}

	public function getProfilePictureTargetDirectory()
	{
		return $this->profilePictureTargetDirectory;
	}

	public function getProfilePicturePath()
	{
		return $this->profilePicturePath;
	}
}
