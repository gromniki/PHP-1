<!--<p><?php /*echo $this->getMessage(); */?></p>
<?php /*if (!empty($this->getAuthor())) { */?>
    <p style="text-align: right"><?php /*echo $this->getAuthor(); */?></p>
<?php /*} */?>
<hr>-->

<p><?php echo $record->getMessage(); ?></p>
<?php if (!empty($record->getAuthor())) { ?>
    <p style="text-align: right"><?php echo $record->getAuthor(); ?></p>
<?php } ?>
<hr>
