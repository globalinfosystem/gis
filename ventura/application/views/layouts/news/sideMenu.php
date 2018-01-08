<link href="<?php echo base_url();?>design/themes/<?php echo CNF_THEME;?>/verticalmenu/menu-vertical.css" rel="stylesheet" type="text/css" />
<script src="<?php echo base_url();?>design/themes/<?php echo CNF_THEME;?>/verticalmenu/menu-vertical.js" type="text/javascript"></script>
<?php $menus = SiteHelpers::menus($position); ?>
    <ul id="menu-v">
        <?php
			if (!empty($menus)) {
				foreach ($menus as $main) {
					?>
					 <li <?php if (!empty($main['childs'])) { ?>class="has-dropdown"<?php } ?>>
					  <a  <?php if (!empty($main['childs'])) { ?>
							href=<?php echo!empty($main['module']) ? base_url().$main['module'] : '#'; ?>
						<?php } else { ?>
							href=<?php echo base_url().$main['module']; } ?>>
						<?php echo $main['menu_name']; ?>
					  </a>
						<?php if (!empty($main['childs'])) { ?>
							  <ul class="sub">
								<?php
								foreach ($main['childs'] as $childs) {
									?>
									<li><a href="<?php echo !empty($childs['module']) ? base_url().$childs['module'] : '#'; ?>"><?php echo $childs['menu_name']; ?></a></li>
									<?php
								}
								?>
							</ul>
						<?php } ?>
					</li> 
					  <?php
				}
			}
        ?>
    </ul>
