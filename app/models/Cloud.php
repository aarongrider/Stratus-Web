<?php

namespace app\models;

class Cloud extends \lithium\data\Model {

    public static function createCloud($data) {

        // Create cloud
        $cloud = Cloud::create();
        $cloud->width = $data->layout->width;
        $cloud->height = $data->layout->height;
        $cloud->created = date('Y-m-d H:i:s');
        $cloud->save();

        // Create words
        foreach($data->words as $word_data)
        {
            $word = Word::create();
            $word->cloudid = $cloud->id;
            $word->name = $word_data->name;
            $word->count = $word_data->count;

            // Bounds
            $word->bottom = $word_data->bounds->bottom;
            $word->top = $word_data->bounds->top;
            $word->left = $word_data->bounds->left;
            $word->right = $word_data->bounds->right;

            $word->save();
        }

        return $cloud;

    }

}

?>