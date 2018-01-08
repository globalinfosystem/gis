<?php $this->load->view('layouts/'.CNF_THEME.'/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
 
<?php

if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 1){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
	
	$this->load->view('layouts/'.CNF_THEME.'/account/registration', array('registration' => $registration));
}

if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 2){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
		$this->load->view('layouts/'.CNF_THEME.'/account/registration', array('registration' => $registration));
} 

if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 3){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
		$this->load->view('layouts/'.CNF_THEME.'/account/registration', array('registration' => $registration));
} 


if(!empty($_SESSION['user']) && !empty($_SESSION['acountType']) && $_SESSION['acountType'] == 4){
	$registration = $this->Page_model->get_registration_by_id($_SESSION['user']['registration_id']);
		$this->load->view('layouts/'.CNF_THEME.'/account/registration', array('registration' => $registration));
} 

?>
 

<?php $this->load->view('layouts/'.CNF_THEME.'/footer'); ?>   