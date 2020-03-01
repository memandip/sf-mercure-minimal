<?php


namespace App\Service;


use Symfony\Component\Mercure\PublisherInterface;
use Symfony\Component\Mercure\Update;

class PublisherService
{
	
	public function __invoke(PublisherInterface $publisher)
	{
		$update = new Update(
			'my_topic',
			json_encode(['status' => 'true', 'message' => 'Mercure rocks'])
		);
		$publisher($update);
	}

}