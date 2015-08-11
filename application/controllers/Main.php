<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function index()
	{	
		$token = $this->ApiTicketFlight->getToken()->token;
		$data['token'] = $token;
		$data['ListAirport'] = $this->ApiTicketFlight->ListAirport($token)->all_airport->airport;
		$data['result'] = $this->ApiTicketFlight->SearchFlight($token);
		$this->load->view('main',$data);
	}
}
