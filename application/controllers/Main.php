<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function index()
	{	
		$token = $this->ApiTicketFlight->getToken()->token;
		$ipAdd = $this->Linkresponse->getRealIp();
		
		$data['token'] = $token;
		$data['ListAirport'] = $this->ApiTicketFlight->ListAirport($token)['all_airport']['airport'];
		$data['result_search'] = FALSE;
		$data['your_ip'] = $this->ApiTicketFlight->getNearestAirport($token,$ipAdd);
		$this->load->view('main',$data);
	}
	
}
