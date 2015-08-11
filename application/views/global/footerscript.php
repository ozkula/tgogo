  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="<?php echo base_url(); ?>js/materialize.min.js"></script>
    <script type="text/javascript">
      $('.datepicker').pickadate({
		  selectMonths: true, 
      selectYears: true,
      min: 1,
      formatSubmit: 'yyyy-mm-dd'
      });
    </script>
    