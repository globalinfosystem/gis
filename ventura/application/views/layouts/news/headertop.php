<?php $menus = SiteHelpers::menus('headertop'); ?>
<?php
$external = '';
if (!empty($_SERVER['PATH_INFO'])) {
    $external = base_url() . substr($_SERVER['PATH_INFO'], 1, 100);
}
?>
<div class="header_top1">
    <div class="header_top_right">
	<?php /*?> 		<a href="#skip_to_main" title="Skip to main content">Skip to main content</a>

        <a href="javascript:void(0);" class="fontS noback" title="Decrease font size" id="decfont" tabindex="6"><img src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/images/small-font.png" alt="" /></a> 
        <a href="javascript:void(0);" class="fontS noback noPadding-left" title="Reset font size" id="equalfont" tabindex="7"><img src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/images/normal-font.png" alt="" /></a> 
        <a href="javascript:void(0);" class="fontS noback noPadding-left" title="Increase font size" id="incfont" tabindex="8"><img src="<?php echo base_url(); ?>design/themes/<?php echo CNF_THEME; ?>/images/big-font.png" alt="" /></a>
       <input type="search" id="search-box" name="search" placeholder="Type minimum 3 character for search" style="width:300px; margin-left:10px;" autocomplete="off" /> 
        <a class="searchButton" href="javascript:void(0)" title="Search" onclick="sitesearch()"><img src="<?php echo base_url(); ?>design/images/icon-search.png" height="20px" /></a> 
<?php */?>        
<div id="result"></div>
       <ul class="top_nav top_nav_top">
            <li>&nbsp;</li>
            <?php foreach ($menus as $menu) : ?>
                <li <?php echo (!empty($page) && trim($page) == trim($menu['module'])) || (!empty($menu['url']) && trim($menu['url']) == trim($external)) ? 'class="active"  ' : ''; ?>> 
                    <a  
                    <?php if ($menu['menu_type'] == 'external') : ?>
                            href="<?php echo $menu['url']; ?>" 
                        <?php else : ?>
                            href="<?php echo site_url($menu['module']); ?>" 
                        <?php endif; ?> 
                        <?php echo (!empty($page) && trim($page) == trim($menu['module'])) ? 'class="active"  ' : ''; ?>>
                            <?php echo $menu['menu_name']; ?>				
                    </a> 
                </li>
            <?php endforeach; ?>
        </ul>
  </div>

</div>
