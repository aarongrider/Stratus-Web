<?php

namespace app\controllers;

use app\models\Cloud;
use app\models\Word;
use lithium\core\Environment;

class CloudController extends \lithium\action\Controller
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
            //$this->wordCloud($request['id']);
            return $this->redirect('./wordCloud/' . $request['id']);
        }

    }

    public function wordCloud($cloudid = null)
    {
        $cloud = Cloud::find('first', array('conditions' => array('id' => $cloudid)));

        if ($cloud != null) {
            $words = Word::find('all', array('conditions' => array('cloudid' => $cloudid)));
            return compact('cloud', 'words');
        }
        else {
            return $this->redirect('./notFound/');
        }
    }

    public function wordList($cloudid = null)
    {
        $cloud = Cloud::find('first', array('conditions' => array('id' => $cloudid)));

        if ($cloud != null) {
            $words = Word::find('all', array('conditions' => array('cloudid' => $cloudid)));
            return compact('cloud', 'words');
        }
        else {
            return $this->redirect('./notFound/');
        }
    }

    public function notFound()
    {
        // Word Clould not found
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
            $cloud = Cloud::find('first', array('conditions' => array('id' => $cloudid)));

            // If we could not fine a cloud
            if ($cloud == null) $cloud = "none";

            return $json;
            //return $cloud;
        }
    }

}

?>