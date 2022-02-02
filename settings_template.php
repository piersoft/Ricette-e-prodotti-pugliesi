<?php

//Telegram
define('API',''); // api google shortner eventuale per shot link
define('TELEGRAM_BOT','508837892XXXXXXXXXXXXXX'); // token Telegram Bot *obbligatorio*
define('BOT_WEBHOOK', 'https://www.piersoft.it/prodottiericettepugliabot/start.php'); // url assoluto https per start.php
define('GDRIVEKEY', '1nPH0wR9zYo2IXXXXXXXXXXX'); // key dello sheet di google drive
define('GDRIVEGID1', '170XXXXXXXX'); //gid del foglio di calcolo . di solito il primo gid=0 per esempio FAQ
define('GDRIVEGID2', '170XXXXXXXX'); // gid dell'eventuale altro foglio di calcolo per esempio foglio Risposte
define('GDRIVEGID0', '170XXXXXXXX'); // gid dell'eventuale altro foglio di calcolo per esempio sedi azienda/sindacato
define('NAME', 'Prodotti Tipici e Ricette di Puglia'); // nome del Bot che appare nelle Informazioni /start
define('LOG_FILE', 'log/telegram.csv');
?>
