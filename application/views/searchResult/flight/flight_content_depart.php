<?php 
	$result_depart = $result_search['departures']['result'];
?>
<div class="row">
	<div class="col s12 m12 l12">
	  	<?php for ($i=0; $i <count($result_depart) ; $i++) { $flight_info = $result_depart[$i]['flight_infos']['flight_info'];?>
			<div class="card-panel">
			<table>
				<tr>
					<td>
					<div class="row">
						<?php for ($fi=0; $fi <count($flight_info) ; $fi++) { ?>
							<?php if ($flight_info[$fi] > 0) { ?>
							<div class="center-align col s12 m12 l12"><img src="<?php echo $result_depart[$i]['image']; ?>" alt="" class="circle"><br><b><?php echo $result_depart[$i]['airlines_name'] ?></b><br><?php echo $flight_info[$fi]['flight_number']; ?><br>
							<?php if ($result_depart[$i]['has_food'] == 1) { ?><i class="small material-icons">local_dining</i><?php } else { }; ?>
							<?php if ($result_depart[$i]['check_in_baggage'] > 0) { ?><i class="small material-icons">card_travel</i><?php } else { }; ?>
							<?php if ($result_depart[$i]['airport_tax'] > 0) { ?><i class="small material-icons">book</i><?php } else { }; ?>
							 <br><?php echo $result_depart[$i]['duration']; ?><br>

							<?php echo $result_depart[$i]['stop']; ?></div>

							<?php } } ?>
					</div>
					</td>
					<td><div class="center-align">
						<?php for ($fi=0; $fi <count($flight_info) ; $fi++) { ?>
						<?php if ($flight_info[$fi] > 0) { ?>
							<?php echo $flight_info[$fi]['departure_city']; ?> - <?php echo $flight_info[$fi]['arrival_city']; ?><br>
							<i class="small material-icons">flight_takeoff</i><?php echo $flight_info[$fi]['simple_departure_time']; ?> - <?php echo $flight_info[$fi]['simple_arrival_time']; ?><i class="small material-icons">flight_land</i><br>
						<?php } } ?>						
						<br>
						<a class="waves-effect waves-light btn left-align" href="<?php echo base_url(); ?>flight/ChoseFlight/<?php echo $result_search['token']."T".$result_search['search_queries']['date']."T".$result_depart[$i]['flight_id']; ?>"><?php echo $result_depart[$i]['price_value']; ?></a><br>
						<?php if ($result_depart[$i]['price_infant'] > 1 && $result_depart[$i]['price_child'] > 1) { ?>
							Adult : <?php echo $result_depart[$i]['price_adult']; ?> - Child : <?php echo $result_depart[$i]['price_child']; ?> - Infant : <?php echo $result_depart[$i]['price_infant']; ?>
						<?php } else if ($result_depart[$i]['price_child'] > 1) { ?>
							Adult : <?php echo $result_depart[$i]['price_adult']; ?> - Child : <?php echo $result_depart[$i]['price_child']; ?>
						<?php } ?>
						</div>
					</td>
				</tr>
			</table>
			</div>
	 	<?php } ?>
	</div>
</div>