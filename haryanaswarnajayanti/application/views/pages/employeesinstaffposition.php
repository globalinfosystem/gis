<?php $districts = SiteHelpers::getDistricts(); ?>
<div class="title-bar blue-bar">Employees</div>
 <div><table class=" table table-striped table-responsive ">
    <thead>
      <tr>
        <th>S.no</th>
        <th>Name</th>
        <th>Designation</th>
         <th>District</th>
         <th>Date of Last Home District Posting</th>
         <th>ID</th>
      </tr>
    </thead>
    <tbody>
  	<?php 
		if(!empty($staffdata))
		{
			$i=1;
			foreach($staffdata as $data)
			{
	?>	
				<tr>
                <td><?php echo $i;?></td>
                <td><a href="<?php echo base_url();?>profile/index/<?php echo $data['profiler_alias'];?>"><?php echo $data['profiler_name'];?></a></td>
                <td><?php echo !empty($data['profiler_occupation'])?$data['profiler_occupation']:'--';?></td>
                <td><?php echo !empty($data['profiler_district'])?$districts[$data['profiler_district']]:'--';?></td>
                <td><?php echo !empty($data['profiler_home_district_posting'])?date('d M y',strtotime($data['profiler_home_district_posting'])):'--';?></td>
                <td><?php echo !empty($data['profiler_batch_no'])?$data['profiler_batch_no']:'--';?></td>
                </tr>						
	<?php
				$i++;
			}			
		}
	?>  
    </tbody>
  </table></div>