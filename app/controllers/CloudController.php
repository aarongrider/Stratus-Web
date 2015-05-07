<?php

namespace app\controllers;

use app\models\Cloud;
use app\models\Word;

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

    public function notFound()
    {
        // Word Clould not found
    }

    public function submit()
    {
        // Take in JSON post
        if ($this->request->data) // If we have submitted the form
        {
            $data = $this->request->data;

            // Parse string and ensure we have the correct key
            //$key = "4r3hjiohs3jfiuh3";
            //$offset = 2;
            //$value = substr($data, $offset, strlen($key));

            // Check to make sure we have the correct key
            //if ($value == $key) {

                // Truncate HTTP data from JSON string
                //$data = substr($data, 7 + strlen($key), -3);
                //$data = stripslashes($data);
                $json = json_decode($data);
                //$cloud = Cloud::createCloud($json);

                // Return id
                return $data;
            //}

        }

        //$keys = array_keys($params['request']->data);
        //$data = $keys[0];
        //if(($data = json_decode($data, true)) != null) {
        //    $params['request']->data = $data;
        //}

        // Parse JSON & save to DB

        // Return ID to sender
    }

}

?>