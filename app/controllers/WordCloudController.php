<?php

namespace app\controllers;

use app\models\Cloud;
use app\models\Word;

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
            $words = Word::find('all', array('conditions' => array('cloudid' => $cloudid, 'attached' => 1)));
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
            $words = Word::find('all', array('conditions' => array('cloudid' => $cloudid)));
            return compact('cloud', 'words');
        } else {
            return $this->redirect('/notFound/' . $cloudid);
        }
    }

    public function removeWord($wordid)
    {
        $word = Word::find('first', array('conditions' => array('id' => $wordid)));
        Word::remove(array('id' => $wordid));

        // Redirect back to wordcloud
        $url = '/WordCloud/cloudview/' . $word->cloudid;
        return $this->redirect($url);
    }
}

?>