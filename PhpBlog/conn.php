<?php

try{
    $db = new PDO("sqlite:siberzihin.db","root","",array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ));

$sql = "SELECT * FROM iletisim";


$iletisim = $db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

foreach ($iletisim as $contact) {
    echo $contact['id'].PHP_EOL;
    echo $contact['adsoyad'].PHP_EOL;
    echo $contact['eposta'].PHP_EOL;
    echo $contact['konu'].PHP_EOL;
    echo $contact['mesaj'].PHP_EOL;
}
}catch (PDOException $parametre) {
    echo $parametre->getMessage();
}


?>