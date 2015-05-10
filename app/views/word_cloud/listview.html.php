<div id="topBar">
    <a href="/" class="waves-effect waves-light btn orange">Start Over</a> &nbsp
    <a href="/wordcloud/cloud/<?=$cloud->id;?>" class="waves-effect waves-light btn blue">View Word Cloud</a> <br>
    <h3>CloudID: <?=$cloud->id;?></h3>
    <p>Created <?=$cloud->created;?></p>
</div>

<div style="margin-top: 200px;">

<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-condensed">
    <thead>
    <tr>
        <th class="column-sm">Name</th>
        <th class="column-sm">Count</th>
        <th class="column-sm">Spoken</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach($words as $word) { ?>

        <tr>
            <td> <button class="btn waves-effect waves-light blue-grey" type="" name="action"><?=$word->name;?></button></td>
            <td> <?=$word->count;?> </td>
            <td> <?=$word->timestamp;?> </td>
        </tr>

    <?php } ?>
    </tbody>
</table>

<hr>

</div>