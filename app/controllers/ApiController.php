<?php

namespace app\controllers;

use app\models\Cloud;
use app\models\Words;

class ApiController extends \lithium\action\Controller
{

    public function save()
    {
        // Take in JSON post
        if ($this->request->data) // If we have submitted the form
        {
            echo $this->request->data;
            $cloud = Cloud::createCloud($this->request->data["cloud"]);
            return $cloud->cloudid;
        }
    }

    public function load()
    {
        // Take in JSON post
        if ($this->request->data) // If we have submitted the form
        {
            $json = $this->request->data;
            $cloudid = $json["cloudid"];
            $cloud = Cloud::find('first', array('conditions' => array('cloudid' => $cloudid), 'with' => array('Word', 'Group')));

            // If we could not fine a cloud
            if ($cloud == null) $cloud = "none";

            return compact('cloud');
        }
    }

}

?>