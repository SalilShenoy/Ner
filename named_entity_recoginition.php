<?php
    namespace named_entity_recognition;

    use seekquarry\yioop\configs as C;
    require_once 'vendor/autoload.php';
    require_once  'vendor/dennis-de-swart/php-stanford-corenlp-adapter/bootstrap.php';

    print ('Named Entity Recognition Module For Yioop');

    $text = "The Golden Gate Bridge was designed by Joseph Strauss.";
    $text = 'क्या आप अंग्रेजी-हिंदी में बात कर सकते हैं';

    $coreNLP = new \CorenlpAdapter();
    $coreNLP->getOutput($text);

    //results
    echo '<pre>';
    $coreNLP->serverMemory;
    $coreNLP->trees;
    print_r($coreNLP->getWordValues($coreNLP->trees[0]));
    echo '</pre>'
?>