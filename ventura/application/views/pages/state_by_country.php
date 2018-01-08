<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : ''));
 	$stateresult = $this->Page_model->get_state_by_country();
	print_r($stateresult);
	?>


