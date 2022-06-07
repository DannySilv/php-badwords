<h1>Paragrafo</h1>
<p>
  <?php
  $myPar = "Harry fissò Ron, e mentre i loro sguardi s'incrociavano, convennero in
  silenzio: Black e Lupin erano fuori di senno. La loro storia non aveva alcun senso. Come faceva Crosta a essere Peter Minus? Azkaban doveva aver sconvolto la mente di Black, dopotutto... ma perché Lupin gli dava corda? ";
  echo "$myPar";
  ?>
</p>

<h2>Lunghezza</h2>
<p>
  <?php
  echo "La lunghezza del mio paragrafo è di " . strlen($myPar) . " caratteri";
  ?>
</p>

<h1>Paragrafo Censurato</h1>
<p>
  <?php
  $censoredWord = $_GET["word"];
  $myParCensored = str_replace("$censoredWord", "***", $myPar);
  echo "$myParCensored";
  ?>
</p>

<h2>Lunghezza con censura</h2>
<p>
  <?php
  echo "La lunghezza del mio paragrafo censurato è di " . strlen($myParCensored) . " caratteri";
  ?>
</p>
