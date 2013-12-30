<?php

// Example : 
$model = $bdd->query('SELECT * FROM noukate')->fetch();
print_r($model);
foreach ($model as $m) {
 echo $m['titre'];
}

  

