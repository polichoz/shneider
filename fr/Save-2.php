<?php



$data = $_POST['prenom'] . ";" . $_POST['nom'] . ";" . $_POST['compagnie'] . ";" . $_POST['Domaine'] . ";" . $_POST['langue-source'] . ";" . $_POST['langue-cible'] . ";" . $_POST['courriel'] . ";" . $_POST['Commentaire'] ."\n";

$file = Fopen("Devis.txt","a+"); //create a file if not exists

fwrite($file, $data); // fwrite(file_object, data to store);

header('Location: merci.html');
exit();


?>