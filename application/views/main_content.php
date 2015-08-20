<?php $ListAirport = $Airport['all_airport']['airport']; ?>
<div class="row">
	<div class="col s12 m12 l12">
		<div class="card ">
        	<div class="card-content ">
        		<form method="post" action="<?php echo base_url(); ?>search/SearchFlight">
        		<div class="row">
        			<div class="col s12 m12 l4">
        				<div class="input-field">
		                  <select name="departure">
		                    <option value="" disabled selected>Berangkat</option>
		                    <?php for ($i=0; $i <count($ListAirport) ; $i++) { ?>
		                     <option value="<?php echo $ListAirport[$i]['airport_code']; ?>"><?php echo $ListAirport[$i]['location_name'].' - '.$ListAirport[$i]['airport_name'].' - '.$ListAirport[$i]['airport_code']; ?></option> -->
		                    <?php } ?>
		                  </select>
		                </div>
		                <div class="input-field">
		                  <select name="destination">
		                    <option value="" disabled selected>Tujuan</option>
		                   	<?php for ($i=0; $i <count($ListAirport) ; $i++) { ?>
		                    	<option value="<?php echo $ListAirport[$i]['airport_code']; ?>"><?php echo $ListAirport[$i]['location_name'].' - '.$ListAirport[$i]['airport_name'].' - '.$ListAirport[$i]['airport_code']; ?></option> -->
		                    <?php } ?>
		                  </select>
		                </div>
		                <div class="input-field">
		                      <select name="roundtrip" id="roundtrip" onchange="roundTrip();">
		                        <option value="" disabled selected>Pulang Pergi</option>
		                        <option value="1">Ya</option>
		                        <option value="0">Tidak</option>
		                      </select>
		                </div>
        			</div>
        			<div class="col s6 m6 l4">
        				<div class="input-field">
			            	<input type="text" class="datedepart" name="datedepart" id="datedepart" placeholder="Waktu Berangkat">
			            </div>
			            <div class="input-field">
			            	<input type="text" class="datereturn" name="datereturn" id="datereturn" placeholder ="Waktu Kembali" disabled>
			            </div>
        			</div>
        			<div class="col s6 m6 l4">
        				<div class="input-field">
			                <select name="adult">
			                    <option value="1">1</option>
			                    <option value="2">2</option>
			                    <option value="3">3</option>
			                    <option value="4">4</option>
			                    <option value="5">5</option>
			                </select>  
			            </div>
			            <div class="input-field">
		                    <select name="child">
			                    <option value="0">0</option>
			                    <option value="1">1</option>
			                    <option value="2">2</option>
			                    <option value="3">3</option>
			                    <option value="4">4</option>
			                    <option value="5">5</option>
		                  	</select>
		                </div>
		                <div class="input-field">
		                    <select name="infant">
			                    <option value="0">0</option>
			                    <option value="1">1</option>
			                    <option value="2">2</option>
			                    <option value="3">3</option>
			                    <option value="4">4</option>
			                    <option value="5">5</option>
		                  	</select>
		                </div>
        			</div>
        		</div>
			</div>
			<div class="card-action">
				<div class="row">
             		<button class="waves-effect waves-teal btn-flat col m12 s12 l12" type="submit" name="action">Cari</button>
             	</div>
			</div>
			</form>
        </div>
    </div>
</div>
<?php print_r($your_ip); ?>