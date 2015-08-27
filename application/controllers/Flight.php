<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight extends CI_Controller {
	
	function ChoseFlight()
	{	
		$url = $this->uri->segment(3);
		$explodeurl = explode("T", $url);
		$token = $explodeurl[0];
		$datedepart = $explodeurl[1];
		$flight_id = $explodeurl[2];
		$data['detail_flight'] = $this->ApiTicketFlight->getDepartFlightData($token,$flight_id,$datedepart);
		$this->load->view('searchResult/flight/flight_detail',$data);
	}
	
}
