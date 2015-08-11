          <form>
          <div class="row">
              <div class="col m6 s6">
                <div class="input-field">
                  <select name="departure">
                        <option value="" disabled selected>Berangkat</option>
                        
                    <option></option>
                  </select>
                </div>  

                <div class="input-field">
                  <select name="destination">
                    <option value="" disabled selected>Tujuan</option>
                    <option></option>
                  </select>
                </div>  
                <div class="input-field">
                      <input type="checkbox" id="return" onclick="validate()" />
                      <label for="return">Kembali</label>
                </div>
              </div>

              <div class="col m6 s6">
                <div class="input-field">
                  <input type="date" class="datepicker" name="depart" id="depart" placeholder="Waktu Berangkat">
                </div>
                <div class="input-field">
                  <input type="date" class="datepicker" name="arrival" id="arrival" placeholder ="Waktu Kembali">
                </div>
              </div>
          </div>
          <div class="row">
                <button class="btn waves-effect waves-light col m12 s12" type="submit" name="action"><i class="material-icons">flight</i> Cari</button>
          </div>
          </form>
          <pre>
          
          </pre>