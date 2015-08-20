<!doctype html>
<html>
  <head>
    <?php $this->load->view('global/head');
    if ($roundtrip == 1) {
		$go_dep = $result_search['go_det']['dep_airport'];
		$go_ar = $result_search['go_det']['arr_airport'];

		$ret_dep = $result_search['ret_det']['dep_airport'];
		$ret_ar = $result_search['ret_det']['arr_airport'];
    ?> 
    
    <nav class="light-blue darken-2">
		<div class="nav-wrapper container">
	      <?php echo $go_dep['airport_code'].' - '.$go_dep['business_name']; ?> -> <?php echo $go_ar['airport_code'].' - '.$go_ar['business_name']; ?>
	    </div>
	</nav>
    <div class="container">
      <?php $this->load->view('searchResult/flight_content_depart'); ?>
    </div>

	<nav class="light-blue darken-3">
		<div class="nav-wrapper container">
	      <?php echo $ret_dep['airport_code'].' - '.$ret_dep['business_name']; ?> -> <?php echo $ret_ar['airport_code'].' - '.$ret_ar['business_name']; ?>
	    </div>
	</nav>
    <div class="container">
      <?php $this->load->view('searchResult/flight_content_return'); ?>
    </div>

    <?php } else {
		$go_dep = $result_search['go_det']['dep_airport'];
		$go_ar = $result_search['go_det']['arr_airport'];
    ?> 
    <nav>
		<div class="nav-wrapper container">
	      <?php echo $go_dep['airport_code'].' - '.$go_dep['business_name']; ?> -> <?php echo $go_ar['airport_code'].' - '.$go_ar['business_name']; ?>
	    </div>
	</nav>

    <div class="container">
      <?php $this->load->view('searchResult/flight_content_depart'); ?>
    </div>
    <?php } ?>
	

    <?php $this->load->view('global/footerscript'); ?>
  </body>
</html>