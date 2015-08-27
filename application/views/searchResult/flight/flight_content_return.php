<?php $result_return = $result_search['returns']['result'];?>
<div class="row">
	<div class="col s12 m12 l12">
		<ul class="collection">
	    <?php for ($i=0; $i <count($result_return) ; $i++) { ?>
	    	<li class="collection-item avatar">
		      <img src="<?php echo $result_return[$i]['image']; ?>" alt="" class="circle">
		      <span class="title"><?php echo $result_return[$i]['airlines_name']; ?></span>
		      <p><?php echo $result_return[$i]['simple_departure_time'] ?> - <?php echo $result_return[$i]['simple_arrival_time'] ?></p>
		      <a href="<?php echo $result_return[$i]['flight_id'] ?>" class="secondary-content">Pesan Sekarang</a>
		    </li>
		<?php } ?>
		</ul>
	</div>
</div>