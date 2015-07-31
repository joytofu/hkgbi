<?php
$urls = array(
    'http://www.hkgbi.com/index.php?c=msg&id=2604&',
    'http://www.hkgbi.com/index.php?c=msg&id=2371&'
    
);
$api = 'http://data.zz.baidu.com/urls?site=www.hkgbi.com&token=N0uqWo8NS5TtkrWu';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;
?>