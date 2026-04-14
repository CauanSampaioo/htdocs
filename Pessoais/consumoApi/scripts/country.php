<?php 
defined('CONTROL') or die('Acesso inválido');

$api = new ApiConsumer();
$country = $_GET['countryName'] ?? null;

if(!$country){
    header('Location: ?route=home');
    die();
}

// get country data
$country_data = $api->getCountry($country);
?>
<div>
    <div>
        <img src="<?= $country_data[0]['flags']['png'] ?>">
    </div>
    <div>
        <p><strong><?= $country_data[0]['name']['common'] ?></strong></p>        
        <p>Capital: <strong><?= $country_data[0]['capital'][0] ?></strong></p>
    </div>
</div>

<div>
    <p>Região:<strong><?= $country_data[0]['region'] ?></strong></p>
    <p>Sub-região:<strong><?= $country_data[0]['subregion'] ?></strong></p>
    <p>População:<strong><?= $country_data[0]['population'] ?></strong> habitantes</p>
    <p>Área:<strong><?= $country_data[0]['area'] ?></strong> km<sup>2</sup></p>
</div>

<div>
    <a href="?route=home" class="btn btn-primary px-5">Voltar</a>
</div>