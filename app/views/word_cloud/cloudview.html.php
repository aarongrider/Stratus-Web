<div style="width: <?=$cloud->width;?>px; height: <?=$cloud->height;?>px; overflow: scroll;">

    <div id="topBar">
        <a href="/" class="waves-effect waves-light btn orange">Start Over</a> &nbsp
        <a href="/WordCloud/listview/<?=$cloud->id;?>" class="waves-effect waves-light btn green">View Word List</a> <br>
        <h3>CloudID: <?=$cloud->id;?></h3>
        <p>Created <?=$cloud->created;?></p>
    </div>

    <?php foreach($words as $word) {

        // If we have an unpositioned word
        if ($word->top == 0 & $word->left == 0) { }

        $width = $word->right - $word->left;
        $height = $word->bottom - $word->top;

        $color = "blue";
        if ($word->count >= 5) $color = "green";
        if ($word->count >= 10) $color = "yellow";
        if ($word->count >= 15) $color = "red";
    ?>

            <!-- Word Button -->
            <div style="position: absolute; width: <?=$width;?>px; height: <?=$height;?>px; top: <?=$word->top;?>px; left: <?=$word->left;?>px;">
                <button class="word btn dropdown-button waves-effect waves-light <?=$color;?>" data-activates='dropdown<?=$word->id;?>'><?=$word->name;?></button>
            </div>

            <!-- Dropdown Structure -->
            <ul id='dropdown<?=$word->id;?>' class='dropdown-content'">
                <li><a href="#">Count: <?=$word->count;?></a></li>
                <li class="divider"></li>
                <li><a href="https://google.com/#q=<?=$word->name;?>">Google</a></li>
                <li><a href="http://wikipedia.org/wiki/<?=$word->name;?>">Wikipedia</a></li>
                <li><a href="http://dictionary.reference.com/browse/<?=$word->name;?>">Define</a></li>
                <li class="divider"></li>
                <li><a href="#">Remove</a></li>
            </ul>

    <?php } ?>

</div>