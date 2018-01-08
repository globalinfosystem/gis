<?php
$getAllTender = $this->Page_model->get_all_tenders();
?>

<table id="no-more-tables" class="table table-bordered table-striped table-condensed table-responsive">
    <thead>
        <tr>
            <th>Sno.</th>
            <th>Tender Subject </th>
            <th class="numeric">Date of Tender Notice</th>
            <th class="numeric">Tender Notice </th>
            <th class="numeric">Detailed Notice</th>
            <th class="numeric">Corrigendum</th>
            <th class="numeric">Last Date for Submission of Tender</th>
            <th class="numeric">Time of Submission</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($getAllTender)) { ?>
            <?php $i = 1; ?>
            <?php foreach ($getAllTender as $tender) { ?>
                <tr>
                    <td data-title="Sno."><?php echo $i; ?></td>
                    <td data-title="Tender Subject"><?php echo !empty($tender['tender_subject']) ? $tender['tender_subject'] : '-'; ?></td>
                    <td data-title="Date of Tender Notice" class="numeric"><?php echo!empty($tender['tender_date_notice']) ? $tender['tender_date_notice'] : ''; ?></td>
                    <td data-title="Tender Notice" class="numeric"><?php echo !empty($tender['tender_notice']) ? '<a href="'.base_url().'uploads/tender/'.$tender['tender_notice'].'" title="'.$tender['tender_subject'].'"><img src="'.base_url().'design/themes/'.CNF_THEME.'/images/pdficon.png" /></a>' : ''; ?></td>
                    <td data-title="Detailed Notice" class="numeric"><?php echo !empty($tender['tender_Detiled_notice']) ? '<a href="'.base_url().'uploads/tender/'.$tender['tender_Detiled_notice'].'" title="'.$tender['tender_subject'].'"><img src="'.base_url().'design/themes/'.CNF_THEME.'/images/pdficon.png" /></a>' : ''; ?></td>
                    <td data-title="Corrigendum" class="numeric"><?php echo !empty($tender['tender_corrigendum']) ? '<a href="'.base_url().'uploads/tender/'.$tender['tender_corrigendum'].'" title="'.$tender['tender_subject'].'"><img src="'.base_url().'design/themes/'.CNF_THEME.'/images/pdficon.png" /></a>' : ''; ?></td>
                    <td data-title="Submission Date" class="numeric"><?php echo !empty($tender['tender_lastdate']) ? $tender['tender_lastdate'] : ''; ?></td>
                    <td data-title="Submission Time" class="numeric"><?php echo !empty($tender['tender_timesubmission']) ? $tender['tender_timesubmission'] : ''; ?></td>
                </tr>
            <?php } ?>
            <?php $i++; ?>
        <?php } ?>
    </tbody>
</table>
