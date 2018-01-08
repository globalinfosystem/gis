<?php $menus = SiteHelpers::menusMulti('"headertop","top"'); ?>
<style>
    header nav {
        text-align: center;
        background: #efefef;
    }
    header nav ul {
        margin: 0;
        padding: 1em;
        list-style-type: none;
    }
    header nav ul li {
        display: inline;
        margin-left: 1em;
    }
    header nav ul li:first-child {
        margin-left: 0;
    }
    header nav ul li ul {
        display: none;
    }
     header nav ul{display:none;}
</style>
<!--<header>
    <nav>
        <ul>
            <?php foreach ($menus as $menu) : ?>
                <li><a  <?php if ($menu['menu_type'] == 'external') : ?>
							href="<?php echo $menu['url']; ?>" 
						<?php else : ?>
							href="<?php echo site_url($menu['module']); ?>" 
						<?php endif; ?> 
					><?php echo $menu['menu_name']; ?></a>
                    <?php if (count($menu['childs']) > 0): ?>
                        <ul>
                            <?php foreach ($menu['childs'] as $menu2): ?>
                                <li><a <?php if ($menu['menu_type'] == 'external') : ?>
							href="<?php echo $menu2['url']; ?>" 
						<?php else : ?>
							href="<?php echo site_url($menu2['module']); ?>" 
						<?php endif; ?> ><?php echo $menu2['menu_name']; ?></a>
                                    <?php if (count($menu2['childs']) > 0): ?>
                                        <ul>
                                            <?php foreach ($menu2['childs'] as $menu3): ?>
                                                <li><a <?php if ($menu['menu_type'] == 'external') : ?>
							href="<?php echo $menu3['url']; ?>" 
						<?php else : ?>
							href="<?php echo site_url($menu2['module']); ?>" 
						<?php endif; ?>><?php echo $menu3['menu_name']; ?></a></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
</header>-->
