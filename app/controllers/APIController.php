<?php

namespace app\controllers;

use app\models\Cloud;
use app\models\Words;

class APIController extends \lithium\action\Controller
{

    public function save()
    {
        // Take in JSON post
        if ($this->request->data) // If we have submitted the form
        {
            $cloud = Cloud::createCloud($this->request->data);
            return $cloud->id;
        }
    }

    public function load()
    {
        // Take in JSON post
        if ($this->request->data) // If we have submitted the form
        {
            $json = $this->request->data;
            $cloudid = $json["id"];
            $cloud = Cloud::find('first', array('conditions' => array('id' => $cloudid), 'with' => array('Word', 'Group')));

            // If we could not fine a cloud
            if ($cloud == null) $cloud = "none";

            return compact('cloud');
        }
    }

}

?>