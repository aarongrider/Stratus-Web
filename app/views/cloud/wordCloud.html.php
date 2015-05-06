<h1><?=$cloud->name;?></h1>
<h5>Word Cloud Number: <b><?=$cloud->id;?></b></h5>

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
            <td> <button class="btn waves-effect waves-light blue" type="" name="action"><?=$word->name;?></button></td>
            <td> <?=$word->count;?> </td>
            <td> Top: <b><?=$word->top;?></b>, Left: <b><?=$word->left;?></b></td>
        </tr>

    <?php } ?>
    </tbody>
</table>

<hr>

<div align="center"><a href="/cloud/" class="waves-effect waves-light btn orange">Start Over</a></div>