<?php

echo "Hello world from Nokia!";
$req = $bdd->prepare('INSERT INTO commande(date, civilite, nom, prenom, societe, email, tel, service, pack, type, opt_1, opt_2, opt_3, opt_4, opt_5, precision)
VALUES(:date, :civilite, :nom, :prenom, :societe, :email, :tel, :service, :pack, :type, :opt_1, :opt_2, :opt_3, :opt_4, :opt_5, :precision)')
or exit(print_r($bdd->errorInfo()));
                                   
$req->execute(array(
'date' => $date,
'civilite' => $civilite,
'nom' => $nom,
'prenom' => $prenom,
'societe' => $societe,
'email' => $email,
'tel' => $tel,
'service' => $service,
'pack' => $pack,
'type' => $type,
'opt_1' => $opt_1,
'opt_2' => $opt_2,
'opt_3' => $opt_3,
'opt_4' => $opt_4,
'opt_5' => $opt_5,
'precision' => $precision
));
