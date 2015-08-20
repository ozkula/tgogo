<?php 
/**
* 
*/
define('secretKey','9ca7d1bf686ff399d4a172d4136cd802');
define('link','http://api-sandbox.tiket.com/');
define('xml','&output=xml');
define('json','&output=json');

class ApiTicketFlight extends CI_Model
{
		function getToken(){
			$link = link."apiv1/payexpress?method=getToken&secretkey=".secretKey.json;
			$html = $this->Linkresponse->getContentJson($link);
			return $html;
		}
		function SearchFlight($token,$departure,$destination,$datedepart,$datereturn,$adult,$child,$infant,$roundtrip){
			$departure = $this->input->post('departure');
			$destination = $this->input->post('destination');
			$datedepart = $this->input->post('datedepart');
			$datereturn = $this->input->post('datereturn');
			$adult = $this->input->post('adult');
			$child = $this->input->post('child');
			$infant = $this->input->post('infant');
			$roundtrip = $this->input->post('roundtrip');

			if ($roundtrip == 1) {
				$link = link."search/flight?d=".$departure."&a=".$destination."&date=".$datedepart."&ret_date=".$datereturn."&adult=".$adult."&child=".$child."&infant=".$infant."&token=".$token."&v=3".json;
			} else {
				$link = link."search/flight?d=".$departure."&a=".$destination."&date=".$datedepart."&adult=".$adult."&child=".$child."&infant=".$infant."&token=".$token."&v=3".json;
			}
			$html = $this->Linkresponse->getContentJson($link);
			$dolanJson = json_decode(json_encode($html),true);
			return $dolanJson;
		}
		function ListAirport($token){
			$link = link."flight_api/all_airport?token=".$token.json;
			$html = $this->Linkresponse->getContentJson($link);
			$dolanJson = json_decode(json_encode($html),true);
			return $dolanJson;
		}
		function CheckUpdate($token){
			$link = link."ajax/mCheckFlightUpdated?token=".$token."&d=CGK&a=DPS&date=2014-05-30&adult=1&child=0&infant=0&time=134078435".json;
			$html = $this->Linkresponse->getContentJson($link);
			$dolanJson = json_decode(json_encode($html),true);
			return $dolanJson;
		}
		function getFlightdata($token){
			$today = date('Y-m-d');
			$link = link."flight_api/get_flight_data?flight_id=16825942&token=".$token."&date=2014-05-30".json;
			$html = $this->Linkresponse->getContentJson($link);
			$dolanJson = json_decode(json_encode($html),true);
			return $dolanJson;
		}
		function getNearestAirport($token,$ipAdd){
			$link = link."flight_api/getNearestAirport?token=".$token."&ip=".$ipAdd.json;
			$html = $this->Linkresponse->getContentJson($link);
			$dolanJson = json_decode(json_encode($html),true);
			return $dolanJson;
		}
		// function getFlightData($token,$flight_id){
		// 	$link = link."flight_api/get_flight_data?flight_id=".$flight_id."&token=".$token."&date=2014-05-30".json;
		// 	$html = $this->Linkresponse->getContentJson($link);
		// 	$dolanJson = json_decode(json_encode($html),true);
		// 	return $dolanJson;
		// }
}
?>