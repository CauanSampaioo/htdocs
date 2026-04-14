<?php
defined("CONTROL") or die("Acesso negado !!");

$api = new ApiConsumer('all');
$countries = $api->getCountriesAll();

?>

<div>
    <div>
        <h1>Países do Mundo</h1>
        <hr>
    </div>
    
    <div>
        <p>Lista de países</p>
        <select id="selectCountry" name="formSelect">
            <option></option>
            <?php foreach($countries as $country): ?>
                <option value="<?= $country ?>"><?= $country?></option>
            <?php endforeach;?>    
        </select>
    </div>
</div>

<script>

    document.addEventListener('DOMContentLoaded',() => {
        //Country Select 
        const selectCountry = document.querySelector('#selectCountry');

        selectCountry.addEventListener('change', () => {
            const country = selectCountry.value;
            window.location.href = `?rota=country&countryName=${country}`
        })
    })

</script>