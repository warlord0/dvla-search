<?php
namespace DVLASearch\SDK\Objects;

use DVLASearch\SDK\Clients\Tyres as TyresClient;
use DVLASearch\SDK\Clients\Vehicle as VehicleClient;

class Mot implements Object {
	private $key = '';
	public $plate = '';

	public function __construct($data, string $key, string $plate) {
		$this->key = $key;
		$this->plate = $plate;
		
		if($data) {
			foreach($data as $key => $value) {
				$this->{$key} = $value;
			}
		}
	}
	
	public function tyres(): Tyres {
		$client = new TyresClient($this->key);
		return $client->get($this->plate);
	}

	public function vehicle(): Vehicle {
		$client = new VehicleClient($this->key);
		return $client->get($this->plate);
	}
}