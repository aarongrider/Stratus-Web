<div style="width: <?=$cloud->width;?>; height: <?=$cloud->height;?>">

    <?php foreach($words as $word) {

        $width = $word->right - $word->left;
        $height = $word->bottom - $word->top;

    ?>

            <div style="position: absolute; width: <?=$width;?>; height: <?=$height;?>; top: <?=$word->top;?>; left: <?=$word->left;?>;">
                <button class="word btn waves-effect waves-light blue" type="" name="action"><?=$word->name;?></button>
            </div>

    <?php } ?>

</div>

<a href="/cloud/" class="waves-effect waves-light btn orange">Start Over</a></div>