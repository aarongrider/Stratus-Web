<?php

namespace app\models;

class Cloud extends \lithium\data\Model {

    public $hasMany = array(
        'Words' => array('key' => array('id' => 'cloudid'))
    );


    public static function createCloud($json) {

        // Create cloud
        $cloud = Cloud::create();
        $cloud->width = $json["layout"]["width"];
        $cloud->height = $json["layout"]["height"];
        $cloud->timestamp = $json["layout"]["timestamp"];
        $cloud->created = date('Y-m-d H:i:s');
        $cloud->save();

        // Create words
        foreach($json["words"] as $word_data)
        {
            $word = Words::create();
            $word->cloudid = $cloud->id;
            $word->name = $word_data["name"];
            $word->count = $word_data["count"];
            $word->timestamp = $word_data["timestamp"];

            // Bounds
            $word->bottom = $word_data["bounds"]["bottom"];
            $word->top = $word_data["bounds"]["top"];
            $word->left = $word_data["bounds"]["left"];
            $word->right = $word_data["bounds"]["right"];

            $word->save();
        }

        return $cloud;

    }

}

?>