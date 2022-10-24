<?php
/*TASK 1*/
function displayArticlePreview($fullText, $linkToFullText, $maxChar = 200){
    if(strlen($fullText)>$maxChar){
        $fullText = strip_tags($fullText);
        $textCut = substr($fullText, 0, $maxChar);
        $endPoint = strrpos($textCut, ' ');
        //if the string contain any space then it will cut without word basis
        $textCut = $endPoint? substr($textCut, 0, $endPoint) : substr($textCut, 0);
        $textWords = explode(' ', $textCut);
        $nbrWords = count($textWords);
        $previewText ="";
        for($i=0;$i<$nbrWords-3;$i++){
            $previewText .= $textWords[$i]." ";
          }
          
          $previewText.="<a href='".$linkToFullText."'>";
          
        for($i=$nbrWords-3;$i<$nbrWords;$i++){
            $previewText .= ($nbrWords-1) > $i?$textWords[$i]." ":$textWords[$i]."...</a>";
          }
        return $previewText;


    }
    return $fullText;
}

$articleText = "If you are a complete beginner, web development can be challenging, we will hold your hand and provide enough detail
                for you to feel comfortable and learn the topics properly. You should feel at home whether you are a student learning
                web development (on your own or as part of a class), a teacher looking for class materials, a hobbyist, or someone
                who just wants to understand more about how web technologies work.";

$articleLink = "http://localhost/tasks/task1/fullArticlePage.php?fulltext=".$articleText;

$articlePreview = displayArticlePreview($articleText, $articleLink);

echo $articlePreview;

