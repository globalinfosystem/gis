<div class="title-bar blue-bar">
    Application Form
    <?php if (!empty($_SESSION['application'])) { ?>
        <span class="floatRight">
            <a style="padding:10px;background: green;color: white;margin: 1px;" href="<?php echo base_url(); ?>applicationform/?form=participants" title="Participants Details"> Participants  </a>
        </span>
    <?php } ?>
</div>
<?php if ($this->session->flashdata('error')) { ?>
    <div class="alert alert-warning">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Warning!</strong> <?php echo $this->session->flashdata('error'); ?>
    </div>
<?php } ?>
<?php if ($this->session->flashdata('success')) { ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert">&times;</a>
        <strong>Success!</strong> <?php echo $this->session->flashdata('success'); ?>
    </div>
<?php } ?>
<?php
if (empty($_GET['form'])) {
    $this->load->view('layouts/' . CNF_THEME . '/applicationforms/applicationform');
}
if (!empty($_SESSION['application']) && !empty($_GET['form']) && $_GET['form'] == 'participants') {
    $this->load->view('layouts/' . CNF_THEME . '/applicationforms/applicationform_address');
}
?>