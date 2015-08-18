          <form method="post" action="<?php echo base_url(); ?>main/SearchFlight">
          <div class="row">
              <div class="col m6 s6">
                <div class="input-field">
                  <select name="departure">
                    <option value="" disabled selected>Berangkat</option>
                    <?php for ($i=0; $i <count($ListAirport) ; $i++) { ?>
                     <option value="<?php echo $ListAirport[$i]['airport_code']; ?>"><?php echo $ListAirport[$i]['airport_code'].'-'.$ListAirport[$i]['location_name'].'-'.$ListAirport[$i]['airport_name']; ?></option> -->
                    <?php } ?>
                  </select>
                </div>  

                <div class="input-field">
                  <select name="destination">
                    <option value="" disabled selected>Tujuan</option>
                   	<?php for ($i=0; $i <count($ListAirport) ; $i++) { ?>
                    	<option value="<?php echo $ListAirport[$i]['airport_code']; ?>"><?php echo $ListAirport[$i]['airport_code'].'-'.$ListAirport[$i]['location_name'].'-'.$ListAirport[$i]['airport_name']; ?></option> -->
                    <?php } ?>
                  </select>
                </div>  
                <div class="input-field">
                      <select name="roundtrip" id="roundtrip">
                        <option value="" disabled selected>Pulang Pergi</option>
                        <option value="1">Ya</option>
                        <option value="0">Tidak</option>
                      </select>
                </div>
              </div>

              <div class="col m6 s6">
                <div class="input-field">
                  <input type="date" class="datepicker" name="datedepart" id="datedepart" placeholder="Waktu Berangkat">
                </div>
                <div class="input-field">
                  <input type="date" class="datepicker" name="datereturn" id="datereturn" placeholder ="Waktu Kembali">
                </div>
              </div>
                    <select name="adult">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>  
                    <select name="child">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                    <select name="infant">
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
          </div>
          <div class="row">
                <button class="btn waves-effect waves-light col m12 s12" type="submit" name="action"><i class="material-icons">flight</i> Cari</button>
          </div>
          </form>
          <pre>
          <?php print_r($result_search); ?>
          </pre>