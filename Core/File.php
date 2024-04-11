<form action="#" method="post" enctype="multipart/form-data">
    <label for="filename">Název souboru</label>
    <input id="filename" type="text" name="filename">
    <input type="file" name="file" accept="image/*">
    <input type="submit" value="Nahrát soubor">
</form>

<?php

// soubor je uložen pod klíčem file (name="file")
$_FILES['file'];

// protože $_FILES je více dimenzionální, k datům jako takovým
// se dostaneme takto
$_FILES['file']['name']; // jméno souboru
$_FILES['file']['type']; // typ souboru
$_FILES['file']['tmp_name']; // jméno dočasného souboru
// ... a další


// pokud jsou ve $_FILES pod předaným jménem inputu nějaká data, zpracujeme je
if (isset($_FILES['file'])) {
    // nejdříve vyrobíme jméno nahrávaného souboru - z cesty kam soubor nahrát a originálního jména
    $storeFileName =  $storeTo . $_FILES['file']['name'];
    // dále se pokusíme soubor přesunou z dočasného umístění ($_FILES['file']['tmp_name']) do $storeFileName
    // (ke kterému přidáme ještě kořenovou složku serveru) pomocí move_uploaded_file
    if (move_uploaded_file($_FILES['file']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $storeFileName)) {
        // pokud se vše povede, vrátíme jméno souboru, abychom ho mohli uložit třeba do databáze                
        return $storeFileName;
    }
}
