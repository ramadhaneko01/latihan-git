<?php  



include('simple_html_dom.php');

// $url = "https://sekolahkoding.com";

// $html = file_get_html($url);

// foreach($html->find('div.article') as $article) {
//     $item['title']     = $article->find('div.title', 0)->plaintext;
//     // $item['intro']    = $article->find('div.intro', 0)->plaintext;
//     // $item['details'] = $article->find('div.details', 0)->plaintext;
    
// }
// print_r($item);

$url = "https://shopee.co.id/";
$html = file_get_html($url);

foreach ($html->find('.container') as $postDiv) {
	echo "<pre>";
	die(var_dump($postDiv));
}




?>