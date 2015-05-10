<?php

namespace app\controllers;

use app\models\Cloud;
use app\models\Words;

class MainController extends \lithium\action\Controller
{

    public function index()
    {
        // Form submission to lookup cloud
        $success = false;

        if ($this->request->data) // If we have submitted the form
        {
            $request = $this->request->data;
            $success = true;
        }

        if ($success == true)
        {
            return $this->redirect('/WordCloud/cloudview/' . $request['id']);
        }

    }

    public function notFound($cloudid = null)
    {
        // Word Cloud not found
        if ($cloudid == null) $cloudid = "";

        return compact('cloudid');
    }

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
            $cloud = Cloud::find('first', array('conditions' => array('id' => $cloudid), 'with' => array('Words')));

            // If we could not fine a cloud
            if ($cloud == null) $cloud = "none";

            return compact('cloud');
        }
    }

}

?>