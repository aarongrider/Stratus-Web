<?php

namespace app\controllers;

use app\models\Cloud;
use app\models\Words;

class WordCloudController extends \lithium\action\Controller
{

    public function index($cloudid = null)
    {
        WordCloudController::cloudview($cloudid);
    }

    public function cloudview($cloudid = null)
    {
        $cloud = Cloud::find('first', array('conditions' => array('id' => $cloudid)));

        if ($cloud != null) {
            $words = Words::find('all', array('conditions' => array('cloudid' => $cloudid)));
            return compact('cloud', 'words');
        }
        else {
            return $this->redirect('/main/notFound/' . $cloudid);
        }
    }

    public function listview($cloudid = null)
    {
        $cloud = Cloud::find('first', array('conditions' => array('id' => $cloudid)));

        if ($cloud != null) {
            $words = Words::find('all', array('conditions' => array('cloudid' => $cloudid)));
            return compact('cloud', 'words');
        } else {
            return $this->redirect('/notFound/' . $cloudid);
        }
    }

    public function removeWord($wordid)
    {
        $word = Words::find('first', array('conditions' => array('id' => $wordid)));
        Words::remove(array('id' => $wordid));

        // Redirect back to wordcloud
        $url = '/WordCloud/cloudview/' . $word->cloudid;
        return $this->redirect($url);
    }
}

?>