<?php 
/**
* 
*/
define('secretKey','56c8624d6a62e1ab22f0d9915ff2d43c');
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
		function SearchFlight($token){
			$departure = "SRG";
			$arrival = "CGK";
			$datedepart = date('Y-m-d');
			$datereturn = date('Y-m-d');
			$adult = 1;
			$child = 0;
			$infant = 0;
			$roundtrip = 0;

			if ($roundtrip == 1) {
				$link = link."search/flight?d=".$departure."&a=".$arrival."&date=".$datedepart."&ret_date=".$datereturn."&adult=".$adult."&child=".$child."&infant=".$infant."&token=".$token."&v=3".json;	
			} else {
				$link = link."search/flight?d=".$departure."&a=".$arrival."&date=".$datedepart."&adult=".$adult."&child=".$child."&infant=".$infant."&token=".$token."&v=3".json;
			}
			$html = $this->Linkresponse->getContentJson($link);
			return $html;
		}
		function ListAirport($token){
			$link = link."flight_api/all_airport?token=".$token.json;
			$html = $this->Linkresponse->getContentJson($link);
			return $html;
		}
		function CheckUpdate($token){
			$link = link."ajax/mCheckFlightUpdated?token=".$token."&d=CGK&a=DPS&date=2014-05-30&adult=1&child=0&infant=0&time=134078435".json;
			$html = $this->Linkresponse->getContentJson($link);
			return $html;
		}
		function getFlightdata($token){
			$today = date('Y-m-d');
			$link = link."flight_api/get_flight_data?flight_id=16825942&token=".$token."&date=2014-05-30".json;
			$html = $this->Linkresponse->getContentJson($link);
			return $html;
		}

}
?>