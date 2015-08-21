<?php 
	$result_depart = $result_search['departures']['result'];
?>
<div class="row">
	<div class="col s12 m12 l12">
	  	<?php for ($i=0; $i <count($result_depart) ; $i++) { ?>
			<div class="card-panel">
			<table>
				<tr>
					<td>
						<div class="center-align"><img src="<?php echo $result_depart[$i]['image']; ?>" alt="" class="circle"><br><b><?php echo $result_depart[$i]['airlines_name'] ?></b><br>
						<?php if ($result_depart[$i]['has_food'] == 1) { ?><i class="small material-icons">local_dining</i><?php } else { }; ?>
						<?php if ($result_depart[$i]['check_in_baggage'] > 0) { ?><i class="small material-icons">card_travel</i><?php } else { }; ?>
						<?php if ($result_depart[$i]['airport_tax'] > 0) { ?><i class="small material-icons">book</i><?php } else { }; ?>
						 <br><?php echo $result_depart[$i]['duration']; ?><br>
						<?php echo $result_depart[$i]['stop']; ?></div>
					</td>
					<td><div class="center-align">
						<i class="small material-icons">flight_takeoff</i><?php echo $result_depart[$i]['simple_departure_time']; ?> - <?php echo $result_depart[$i]['simple_arrival_time']; ?><i class="small material-icons">flight_land</i><br>
						<a class="waves-effect waves-light btn right-align">IDR <?php echo $result_depart[$i]['price_value']; ?></a><br>
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