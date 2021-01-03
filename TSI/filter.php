<?php
//$html = file_get_contents('spisok_auto.php');
//if(preg_match_all('|<p>(.*)</p>|Uis', $html, $result))
//{
//   foreach($result[1] as $span_text)
//       echo $span_text . '<br>';
//}
//else
//    echo 'Совпадений нет';
//$format=str_replace('блять','****', $html);
//echo $format;
    function wordfilter($text)
    {
        $terms = file_get_contents('Мат.txt');
        $mass_terms = preg_split("/[\s,]+/",$terms);
        $text= preg_replace($mass_terms,'Censor',$text);
        return $text;

    }

?>