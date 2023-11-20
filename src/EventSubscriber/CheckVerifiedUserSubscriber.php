<?php

namespace App\EventSubscriber;

use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;
use Symfony\Component\Security\Http\Event\CheckPassportEvent;

class CheckVerifiedUserSubscriber implements EventSubscriberInterface
{
	public function onCheckPassport(CheckPassportEvent $event): void
	{
		$passport = $event->getPassport();

		$user = $passport->getUser();
		if (!$user instanceof User) {
			throw new \Exception('Unexpected user type');
		}
		if (!$user->getIsVerified()) {
			throw new CustomUserMessageAuthenticationException(
				'Please verify your account before logging in.'
			);
		}
	}
	public static function getSubscribedEvents(): array
	{
		return [
			CheckPassportEvent::class => ['onCheckPassport', -10],
		];
	}
}
