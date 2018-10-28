<?php
ini_set('max_execution_time', 0); 
//test URL - https://www.amazon.com/s/ref=sr_pg_2/132-1263259-9288323?me=A15YBCJT4UFKRS&rh=i%3Amerchant-items&page=2&ie=UTF8&qid=1539339495
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $_POST['url'] );
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_BINARYTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 6.1; rv:19.0) Gecko/20100101 Firefox/19.0");
curl_setopt($ch, CURLOPT_POST, 1); 
$content = curl_exec($ch);

$dom = new domDocument; 
@$dom->loadHTML($content);
$dom->preserveWhiteSpace = false;
$title = $dom -> getElementsByTagName("h2");


foreach ($title as $item) {
  $amazon['title'][] = $item->nodeValue;
}

$tags = $dom->getElementsByTagName('img');
 
foreach ($tags as $tag) { 
	if($tag->getAttribute('class') == "s-access-image cfMarker"){
		$amazon['img'][] = $tag->getAttribute('src');
	}	
}

 echo "<pre>"; print_r($amazon);