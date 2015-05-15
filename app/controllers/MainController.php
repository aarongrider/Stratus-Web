<?php

namespace app\controllers;

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

}

?>