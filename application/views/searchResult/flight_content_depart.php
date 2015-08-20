<?php 
	$result_depart = $result_search['departures']['result'];
?>
<div class="row">
	<div class="col s12 m12 l12">
	    <table class="" id="TableDepart">
	    	<thead>
	    		<tr>
	    			<td>Pesawat</td>
	    			<td>Berangkat</td>
	    			<td>Tiba</td>
	    			<td>Berangkat</td>
	    			<td>Durasi</td>
	    			<td>Fasilitas</td>
	    			<td>Harga</td>
	    		</tr>
	    	</thead>
	    </table>
	    <?php for ($i=0; $i <count($result_depart) ; $i++) { ?>
	    	<li class="collection-item avatar">
		      <img src="<?php echo $result_depart[$i]['image']; ?>" alt="" class="circle">
		      <span class="title"><?php echo $result_depart[$i]['airlines_name']; ?></span>
		      <p><?php echo $result_depart[$i]['simple_departure_time'] ?> - <?php echo $result_depart[$i]['simple_arrival_time'] ?></p>
		      <a href="<?php echo $result_depart[$i]['flight_id'] ?>" class="secondary-content">Pesan Sekarang</a>
		    </li>
		<?php } ?>
		</ul>
	</div>
</div>