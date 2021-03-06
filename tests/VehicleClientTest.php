<?php
use PHPUnit\Framework\TestCase;

use DVLASearch\SDK\Clients\Vehicle;

class VehicleClientTest extends TestCase
{
    public function testReturnsDummyData()
    {
        $client = new Vehicle();
        $result = $client->get('mt09nks');
        $this->assertFalse(isset($result->error));
    }

    public function testMotRelationship()
    {
        $client = new Vehicle();
        $result = $client->get('mt09nks');
        $this->assertFalse(isset($result->mot()->error));
    }

    public function testTyreRelationship()
    {
        $client = new Vehicle();
        $result = $client->get('mt09nks');
        $this->assertFalse(isset($result->tyres()->error));
    }
}