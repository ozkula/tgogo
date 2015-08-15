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
                      <input type="checkbox" id="return" onclick="validate()" name="roundtrip" value="1" />
                      <label for="return">Pulang Pergi</label>
                </div>
              </div>

              <div class="col m6 s6">
                <div class="input-field">
                  <input type="date" class="datepicker" name="datedepart" id="depart" placeholder="Waktu Berangkat">
                </div>
                <div class="input-field">
                  <input type="date" class="datepicker" name="datereturn" id="arrival" placeholder ="Waktu Kembali" disabled>
                </div>
              </div>
          </div>
          <div class="row">
                <button class="btn waves-effect waves-light col m12 s12" type="submit" name="action"><i class="material-icons">flight</i> Cari</button>
          </div>
          </form>
          <pre>
          
          </pre>