  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.8/js/jquery.dataTables.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="<?php echo base_url(); ?>js/materialize.min.js"></script>
    <script type="text/javascript">
      $('.datedepart').pickadate({
  		  selectMonths: true, 
        selectYears: true,
        min: 1,
        closeOnSelect: true,
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd'
      });
      $('.datereturn').pickadate({
        selectMonths: true, 
        selectYears: true,
        min: 1,
        closeOnSelect: true,
        format: 'yyyy-mm-dd',
        formatSubmit: 'yyyy-mm-dd'
      });
    </script>
     <script type="text/javascript">
        $(document).ready(function() {
          $('#TableDepart').DataTable();
          $('select').material_select();
          $('.collapsible').collapsible({
            accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
          });
        });
        function roundTrip(){
          var roundtrip = document.getElementById("roundtrip");
          var datereturn = document.getElementById("datereturn");
          if (roundtrip.options[roundtrip.selectedIndex].value == '1') {
            datereturn.disabled = false;
          }else {
            datereturn.disabled = true;
          };
        }
    </script>