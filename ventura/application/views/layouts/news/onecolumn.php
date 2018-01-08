<?php $this->load->view('layouts/' . CNF_THEME . '/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
<?php echo $content; ?>
<?php if (!empty($pageId)) { ?>
    <?php $this->load->view('layouts/' . CNF_THEME . '/page/file', array('pageId' => $pageId)); ?><br>
    <?php $this->load->view('layouts/' . CNF_THEME . '/page/image', array('pageId' => $pageId)); ?><br>
    <?php $this->load->view('layouts/' . CNF_THEME . '/page/text', array('pageId' => $pageId)); ?><br>
    <?php $this->load->view('layouts/' . CNF_THEME . '/page/pdf', array('pageId' => $pageId)); ?>
<?php } ?>
<?php $this->load->view('layouts/' . CNF_THEME . '/footer',array('pageId' => $pageId)); ?>   