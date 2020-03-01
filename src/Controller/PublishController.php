<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;
use Symfony\Component\Routing\Annotation\Route;

class PublishController extends AbstractController
{

	/**
	 * @param PublisherInterface $publisher
	 * @param $request Request
	 * @return Response
	 *
	 * @Route("/publish/{topic}", name="publish_topic")
	 */
	public function publishAction(Request $request,PublisherInterface $publisher): Response
	{
		$currentTime = date('Y-m-d H:i:s');
		$update = new Update(
			$request->get('topic'),
			json_encode(['status' => 'true', 'message' => 'Mercure rocks at '.$currentTime])
		);

		$publisher($update);

		return new Response('Published');
	}

}
