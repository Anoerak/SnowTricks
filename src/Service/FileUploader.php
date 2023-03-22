<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\String\Slugger\SluggerInterface;

class FileUploader
{
	public function __construct(
		private $targetDirectory,
		private $picturePath,
		private SluggerInterface $slugger,
	) {
	}

	public function upload(UploadedFile $file)
	{
		$originalFilename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
		$safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
		$fileName = $safeFilename . '-' . uniqid() . '.' . $file->guessExtension();

		try {
			$file->move(
				$this->getTargetDirectory(),
				$fileName
			);
		} catch (FileException $e) {
			// ... handle exception if something happens during file upload
		}

		$directPath = $this->getPicturePath() . $fileName;

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
}
