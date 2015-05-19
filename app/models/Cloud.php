<?php

namespace app\models;

class Cloud extends \lithium\data\Model {

    public $hasMany = array(
        'Word' => array('key' => array('cloudid' => 'cloudid')),
        'Group' => array('key' => array('cloudid' => 'cloudid')),
    );


    public static function createCloud($json) {

        // Create cloud
        $cloud = Cloud::create();
        $cloud->width = $json["width"];
        $cloud->height = $json["height"];
        $cloud->timestamp = $json["layout"]["timestamp"];
        $cloud->created = date('Y-m-d H:i:s');
        $cloud->save();

        // Create words
        foreach($json["words"] as $word_data)
        {
            $word = Word::create();
            $word->cloudid = $cloud->cloudid;
            $word->name = $word_data["name"];
            $word->count = $word_data["count"];
            $word->timestamp = $word_data["timestamp"];
            $word->attached = $word_data["attached"];
            $word->group = $word_data["group"];

            // Bounds
            $word->bottom = $word_data["bottom"];
            $word->top = $word_data["top"];
            $word->left = $word_data["left"];
            $word->right = $word_data["right"];

            $word->save();
        }

        // Create groups
        foreach($json["groups"] as $group_data)
        {
            $group = Group::create();
            $group->groupcloudid = $group_data["id"];
            $group->cloudid = $cloud->cloudid;

            // Center
            $group->centerx = $group_data["centerx"];
            $group->centery = $group_data["centery"];

            // Bounds
            $group->bottom = $group_data["bottom"];
            $group->top = $group_data["top"];
            $group->left = $group_data["left"];
            $group->right = $group_data["right"];

            $group->save();
        }

        return $cloud;

    }

}

?>