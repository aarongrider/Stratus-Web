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
            $word = Word::create();
            $word->cloudid = $cloud->id;
            $word->name = $word_data["name"];
            $word->count = $word_data["count"];
            $word->timestamp = $word_data["timestamp"];
            $word->attached = $word_data["attached"];
            $word->group = $word_data["group"];

            // Bounds
            $word->bottom = $word_data["bounds"]["bottom"];
            $word->top = $word_data["bounds"]["top"];
            $word->left = $word_data["bounds"]["left"];
            $word->right = $word_data["bounds"]["right"];

            $word->save();
        }

        // Create groups
        foreach($json["groups"] as $group_data)
        {
            $group = Group::create();
            $group->groupcloudid = $group_data["id"];
            $group->cloudid = $cloud->id;

            // Center
            $group->centerx = $group_data["center"]["x"];
            $group->centery = $group_data["center"]["y"];

            // Bounds
            $group->bottom = $group_data["bounds"]["bottom"];
            $group->top = $group_data["bounds"]["top"];
            $group->left = $group_data["bounds"]["left"];
            $group->right = $group_data["bounds"]["right"];

            $group->save();
        }

        return $cloud;

    }

}

?>