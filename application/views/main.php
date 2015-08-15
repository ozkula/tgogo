<!doctype html>
<html>
  <head>
    <?php $this->load->view('global/head'); ?>
  </head>
  <body>
  <div class="navbar-fixed">
      <nav class=" light-blue darken-4">
        <div class="nav-wrapper container">
            <a href="#" class="brand-logo"></a>
        </div>
      </nav>
	</div>
    <div class="container">
      <?php $this->load->view('main_content'); ?>
    </div>
    <?php $this->load->view('global/footerscript'); ?>
    <script type="text/javascript">
        $(document).ready(function() {
          $('select').material_select();
        });
        function validate() {
        if (document.getElementById('return').checked) {
            document.getElementById('arrival').disabled = false;
        } else {
            document.getElementById('arrival').disabled = true;
        }
    }
    </script>
  </body>
</html>