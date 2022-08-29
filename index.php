<!-- Creiamo una variabile con un paragrafo di testo a scelta.
Stampiamo a schermo il paragrafo e la sua lunghezza.
Passiamo sulla barra del browser in query string una parola che vogliamo censurare
Recuperiamo la parola da censurare via PHP e  sostituiamo tutte le sue occorrenze nel paragrafo con 3 asterischi.
Stampiamo di nuovo il paragrafo e la sua nuova lunghezza. -->

<?php

$text = 'Ennò ennò, rischia di rovinare una carriera con un gesto indecente Zinedine Zidane.';

echo $text;
echo '<br/> <br/>';
echo strlen($text);
echo '<br/> <br/>';


$bad_words = $_GET['badwords'];
$replace_text = str_replace($bad_words, '***', $text);

echo $replace_text;
echo '<br/> <br/>';
echo strlen($replace_text);


?>