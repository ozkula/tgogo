<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function index()
	{	
		$token = $this->ApiTicketFlight->getToken()->token;
		
		$data['token'] = $token;
		$data['ListAirport'] = $this->ApiTicketFlight->ListAirport($token)['all_airport']['airport'];
		
		$this->load->view('main',$data);
	}
	function SearchFlight()
	{	
		$post = $this->input->post();
		$departure = $post['departure'];
		$destination = $post['destination'];
		$datedepart = $post['datedepart'];

		$roundtrip = $post['roundtrip'];
		print_r($roundtrip);
		die();
		if ($roundtrip==1) {
			$datereturn = $datedepart;
		}else{
			$datereturn = $post['datereturn'];
		}
		// $adult = $post['adult'];
		// $child = $post['child'];
		// $infant = $post['infant'];
		$adult = '1';
		$child = '0';
		$infant = '0';
		
		$token = $this->ApiTicketFlight->getToken()->token;
		$data['ListAirport'] = $this->ApiTicketFlight->ListAirport($token)['all_airport']['airport'];
		$data['result'] = $this->ApiTicketFlight->SearchFlight($token,$departure,$destination,$datedepart,$datereturn,$adult,$child,$infant,$roundtrip);
		$this->load->view('main',$data);
	}
}
