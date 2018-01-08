<?php $widgets = SiteHelpers::widgetverticals($ids); ?>
<?php $GLOBALS['visitercount'] = SiteHelpers::getCounter();?>

<?php if($column == 1) { ?>
<?php $i = 1;?>
<div class="row top-space">
	 <?php foreach ($widgets as $widget) : ?>
			<?php if(!empty($widget->widget_text)){?>
			<?php $widgetDescription = str_replace('[theme_uri]',base_url() . 'administrator/themes/mango/',$widget->widget_text);;?>
			<?php $widgetDescription = str_replace('[website_link]',base_url(),$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{iframe}}','<iframe ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{button}}','<button ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{input}}','<input ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/iframe}}','</iframe> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/button}}','</button> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{count}}',$GLOBALS['visitercount'],$widgetDescription);?>
			<?php $widgetDescription = str_replace('{{img}} ','<img ',$widgetDescription);?>
				 <div class="col-md-12"> <?php if(!empty($widgetDescription)){ echo $widgetDescription; }?> </div>
			<?php } ?>
		<?php $i++;?>  
	<?php endforeach;?>
</div>
<?php } ?>

<?php if($column == 2) { ?>
<?php $j = 1;?>
<div class="row top-space">
	 <?php foreach ($widgets as $widget) : ?>
			<?php if(!empty($widget->widget_text)){?>
			<?php $widgetDescription = str_replace('[theme_uri]',base_url() . 'administrator/themes/mango/',$widget->widget_text);;?>
			<?php $widgetDescription = str_replace('[website_link]',base_url(),$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{iframe}}','<iframe ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{button}}','<button ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{input}}','<input ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/iframe}}','</iframe> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/button}}','</button> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{count}}',$GLOBALS['visitercount'],$widgetDescription);?>
			<?php $widgetDescription = str_replace('{{img}} ','<img ',$widgetDescription);?>
						<div class="col-md-6" style="height: auto !important;">
							<?php if(!empty($widgetDescription)){ echo $widgetDescription; }?> 
						</div>
			<?php } ?>
		<?php $j++;?>  
	<?php endforeach;?>
</div>
<?php } ?>

<?php if($column == 3) { ?>
<?php $j = 1;?>
<div class="row top-space">
	 <?php foreach ($widgets as $widget) : ?>
			<?php if(!empty($widget->widget_text)){?>
			<?php $widgetDescription = str_replace('[theme_uri]',base_url() . 'administrator/themes/mango/',$widget->widget_text);;?>
			<?php $widgetDescription = str_replace('[website_link]',base_url(),$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{iframe}}','<iframe ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{button}}','<button ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{input}}','<input ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/iframe}}','</iframe> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/button}}','</button> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{count}}',$GLOBALS['visitercount'],$widgetDescription);?>
			<?php $widgetDescription = str_replace('{{img}} ','<img ',$widgetDescription);?>				
						<div class="col-md-4" style="height: auto !important;">
							<?php if(!empty($widgetDescription)){ echo $widgetDescription; }?> 
						</div>
				<?php $j++;?>  
			<?php } ?>
		
	<?php endforeach;?>
</div>
<?php } ?>

<?php if($column == 4) { ?>
<?php $j = 1;?>
<div class="row top-space">
	 <?php foreach ($widgets as $widget) : ?>
			<?php if(!empty($widget->widget_text)){?>
			<?php $widgetDescription = str_replace('[theme_uri]',base_url() . 'administrator/themes/mango/',$widget->widget_text);;?>
			<?php $widgetDescription = str_replace('[website_link]',base_url(),$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{iframe}}','<iframe ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{button}}','<button ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{input}}','<input ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/iframe}}','</iframe> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/button}}','</button> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{count}}',$GLOBALS['visitercount'],$widgetDescription);?>
			<?php $widgetDescription = str_replace('{{img}} ','<img ',$widgetDescription);?>
						<div class="col-md-3" style="height: auto !important;">			
							<?php if(!empty($widgetDescription)){ echo $widgetDescription; }?> 
						</div>
				<?php $j++;?>  
			<?php } ?>
		
	<?php endforeach;?>
</div>
<?php } ?>

<?php if($column == 6) { ?>
<?php $j = 1;?>
<div class="row top-space">
	 <?php foreach ($widgets as $widget) : ?>
			<?php if(!empty($widget->widget_text)){?>
			<?php $widgetDescription = str_replace('[theme_uri]',base_url() . 'administrator/themes/mango/',$widget->widget_text);;?>
			<?php $widgetDescription = str_replace('[website_link]',base_url(),$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{iframe}}','<iframe ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{button}}','<button ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{input}}','<input ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/iframe}}','</iframe> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{/button}}','</button> ',$widgetDescription);;?>
			<?php $widgetDescription = str_replace('{{count}}',$GLOBALS['visitercount'],$widgetDescription);?>
			<?php $widgetDescription = str_replace('{{img}} ','<img ',$widgetDescription);?>
						<div class="col-md-2" style="height: auto !important;">			
							<?php if(!empty($widgetDescription)){ echo $widgetDescription; }?> 
						</div>
				<?php $j++;?>  
			<?php } ?>
		
	<?php endforeach;?>
</div>
<?php } ?>
	
