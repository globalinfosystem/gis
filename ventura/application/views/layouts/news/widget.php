<?php $widgets = SiteHelpers::widget($position,$dynamicPosition); ?>
<?php $GLOBALS['visitercount'] = SiteHelpers::getCounter();?>
<?php $i = 1;?>
 <?php foreach ($widgets as $widget) : ?>
<?php if(!empty($widget->widget_text)){?>
<?php $widgetDescription = str_replace('[theme_uri]',base_url() . 'design/themes/'.CNF_THEME.'/',$widget->widget_text);;?>
<?php $widgetDescription = str_replace('[website_link]',base_url(),$widgetDescription);;?>
<?php $widgetDescription = str_replace('{{iframe}}','<iframe ',$widgetDescription);;?>
<?php $widgetDescription = str_replace('{{button}}','<button ',$widgetDescription);;?>
<?php $widgetDescription = str_replace('{{input}}','<input ',$widgetDescription);;?>
<?php $widgetDescription = str_replace('{{/iframe}}','</iframe> ',$widgetDescription);;?>
<?php $widgetDescription = str_replace('{{/button}}','</button> ',$widgetDescription);;?>
<?php $widgetDescription = str_replace('{{count}}',$GLOBALS['visitercount'],$widgetDescription);?>

<?php $widgetDescription = str_replace('{{img}} ','<img ',$widgetDescription);?>
<?php if($i == 1) { ?>
    <?php if(!empty($widgetDescription)){ echo $widgetDescription; }?>
<?php  } else { ?>
	<div class="top-space"> <?php if(!empty($widgetDescription)){ echo $widgetDescription; }?> </div>
<?php  } ?>
	
<?php } ?>
<?php $i++;?>  
<?php endforeach;?>
	
