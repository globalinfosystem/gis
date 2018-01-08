<?php $this->load->view('layouts/' . CNF_THEME . '/header', array('pageAlias' => (!empty($pageAlias)) ? $pageAlias : '', 'pageTitle' => (!empty($pageTitle)) ? $pageTitle : '')); ?>
<section id="contentSection">
            <div class="col-xs-12 col-sm-4 col-md-4  top-space" style="position:relative" id="left">
                    <div id="sidebar">
						<?php $this->load->view('layouts/' . CNF_THEME . '/sideMenu', array('position' => 'leftSide')); ?>	
						<?php $this->load->view('layouts/' . CNF_THEME . '/widget', array('position' => 'left', 'dynamicPosition' => !empty($left_widget) ? $left_widget : '')); ?>
                    </div>
                </div>
				<div class="col-xs-12 col-sm-8 col-md-8" id="center">
                    <?php echo $content; ?>
					<?php if(!empty($pageId)) { ?>
						<?php $this->load->view('layouts/' . CNF_THEME . '/page/file', array('pageId' => $pageId)); ?><br>
						<?php $this->load->view('layouts/' . CNF_THEME . '/page/image', array('pageId' => $pageId)); ?><br>
						<?php $this->load->view('layouts/' . CNF_THEME . '/page/text', array('pageId' => $pageId)); ?><br>
						<?php $this->load->view('layouts/' . CNF_THEME . '/page/pdf', array('pageId' => $pageId)); ?>
					<?php } ?>
                </div>
               
       </section>
<?php $this->load->view('layouts/' . CNF_THEME . '/footer'); ?>    