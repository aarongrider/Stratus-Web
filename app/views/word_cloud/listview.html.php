<div id="topBar">
    <a href="/" class="waves-effect waves-light btn orange"><i class="mdi-navigation-arrow-back"></i></a> &nbsp
    <a class="waves-effect dropdown-button waves-light btn blue" data-activates='dropdown-share'> <i class="mdi-social-share"></i> </a> &nbsp
    <a href="/WordCloud/cloudview/<?=$cloud->cloudid;?>" class="waves-effect waves-light btn green">View Word Cloud</a> <br>
    <h5 class="grey-text" style="margin-top: 30px;">CLOUDID</h5>
    <h1 style="margin-top: 0px;"><?=$cloud->cloudid;?></h1>
    <p>Created <?=date("F j, Y, g:i a", strtotime($cloud->created));?></p>
</div>

<!-- Share Dropdown -->
<ul id='dropdown-share' class='dropdown-content' style="z-index: 1; margin-top: 50px;">
    <li><a target="_blank" href="http://www.facebook.com/sharer/sharer.php?u=#http://voicecloudapp.com/WordCloud/cloudview/<?=$cloud->cloudid;?>">Facebook</a></li>
    <li><a target="_blank" href="https://twitter.com/home?status=I just made a word cloud! http://voicecloudapp.com/WordCloud/cloudview/<?=$cloud->cloudid;?>">Twitter</a></li>
</ul>


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
            <td> <h5> <b> <?=$word->count;?> </b> </h5> </td>
            <td> <?=date("F j, Y, g:i a", strtotime($word->timestamp));?> </td>
        </tr>

    <?php } ?>
    </tbody>
</table>

<hr>

</div>