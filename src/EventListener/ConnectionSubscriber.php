<?php

namespace App\EventListener;

use Symfony\Component\Security\Http\Event\LogoutEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class LogoutSubscriber extends AbstractController implements EventSubscriberInterface
{
	public function __construct(
		private UrlGeneratorInterface $urlGenerator
	) {
	}

	public static function getSubscribedEvents(): array
	{
		return [LogoutEvent::class => 'onLogout', InteractiveLoginEvent::class => 'onLogin'];
	}

	public function onLogout(LogoutEvent $event): void
	{
		$this->addFlash('success', 'You\'re logged out');
	}

	// On login, we inform the user if it success.
	public function onLogin(InteractiveLoginEvent $event): void
	{
		$this->addFlash('success', 'You\'re logged in');
	}
}
