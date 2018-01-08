<?php
$getAllDocument = $this->Page_model->get_all_downloads();
?>

<table id="no-more-tables" class="table table-bordered table-striped table-condensed table-responsive">
    <thead>
        <tr>
            <th>Sno.</th>
            <th>Title </th>
            <th class="numeric">Content</th>
            <th class="numeric">Date</th>
            <th class="numeric">Document File</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($getAllDocument)) { ?>
            <?php $i = 1; ?>
            <?php foreach ($getAllDocument as $document) { ?>
                <tr>
                    <td data-title="Sno."><?php echo $i; ?></td>
                    <td data-title="Title"><?php echo !empty($document['download_title']) ? $document['download_title'] : '-'; ?></td>
                    <td data-title="Content" class="numeric"><?php echo!empty($document['download_content']) ? $document['download_content'] : ''; ?></td>
                    <td data-title="Date" class="numeric"><?php echo!empty($document['download_date']) ? $document['download_date'] : ''; ?></td>
                    <td data-title="Document File" class="numeric"><?php echo !empty($document['download_pdf']) ? '<a href="'.base_url().'uploads/document/'.$document['download_pdf'].'" title="'.$document['download_title'].'"><img src="'.base_url().'design/themes/'.CNF_THEME.'/images/pdficon.png" /></a>' : ''; ?></td>
                   
                </tr>
            <?php } ?>
            <?php $i++; ?>
        <?php } ?>
    </tbody>
</table>
