<h1><?php echo $h($cloud->name); ?></h1>
<h5>Word Cloud Number: <b><?php echo $h($cloud->id); ?></b></h5>

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed">
    <thead>
    <tr>
        <th class="column-sm">Name</th>
        <th class="column-sm">Count</th>
        <th class="column-sm">Position</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($words as $word) { ?>

        <tr>
            <td> <button class="btn waves-effect waves-light blue" type="" name="action"><?php echo $h($word->name); ?></button></td>
            <td> <?php echo $h($word->count); ?> </td>
            <td> Top: <b><?php echo $h($word->top); ?></b>, Left: <b><?php echo $h($word->left); ?></b></td>
        </tr>

    <?php } ?>
    </tbody>
</table>

<hr>

<div align="center"><a href="/cloud/" class="waves-effect waves-light btn orange">Start Over</a></div>