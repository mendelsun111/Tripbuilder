<?php
use Tests\TestCase;

class ApiUnitTests extends TestCase {

     public function testGetAirportLists(){
        $data = $this->get('/airports');
        $data -> assertStatus(200) -> assertJson([
            "Montreal" => "YUL",
            "Toronto" => "YYZ",
            "Vancouver" => "YVR",
            "Ottawa" => "YOW",
            "NewYork" => "NYC"
        ]);
     }
}