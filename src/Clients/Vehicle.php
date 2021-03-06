<?php
namespace DVLASearch\SDK\Clients;

use DVLASearch\SDK\Objects\Object;

class Vehicle extends Client {
	const TYPE = 'DvlaSearch';
	
	public function __construct(string $key = '')
	{
		parent::__construct($key, $this::TYPE);
	}
	
	public function get(string $plate): Object
	{
		return $this->query($plate);
	}
}