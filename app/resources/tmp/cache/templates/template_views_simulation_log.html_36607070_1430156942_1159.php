<h1>Simulation Log</h1>

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed">
    <thead>
    <tr>
        <th class="column-sm">Status</th>
        <th class="column-sm">Simulation Id</th>
        <th class="column-sm">H-Range</th>
        <th class="column-sm">Stopping Time</th>
        <th class="column-sm">Modified</th>
        <th class="column-sm"></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($simulations as $simulation) { ?>

        <?php
        $status = 'glyphicon-refresh';
        if ($simulation->status == 1) {$status = 'glyphicon-ok';}
        else if ($simulation->status == -1) {$status = 'glyphicon-remove';}
        ?>

        <tr>
            <td> <span class="glyphicon <?php echo $h($status); ?>" aria-hidden="true"></span> </td>
            <td> <?php echo $h($simulation->id); ?> </td>
            <td> <?php echo $h($simulation->hrange); ?> </td>
            <td> <?php echo $h($simulation->stoppingtime); ?> </td>
            <td> <?php echo $h($simulation->modified); ?> </td>
            <td> <a href="<?php echo $this->redirect('./zip/' . $simulation->id); ?>" class="btn">Download</a> </td>
        </tr>

    <?php } ?>
    </tbody>
</table>