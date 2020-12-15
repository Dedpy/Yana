<?php


// instantiate and use the dompdf class

  $myfile = fopen("toSend.html", "w") or die("Unable to open file!");
  $url=$_POST['lien'];
  $lines=file($url);
  foreach($lines as $line_num => $line) {
    //$line = htmlentities($line);
    //$line = str_replace("<", "<span><", $line);
    $line = str_replace('<button value="confirmer" id="confirmer">Envoyer</button>', '', $line);
    $line = str_replace("img/ida2.png", "https://image.ibb.co/h0KWOc/ida2.png", $line);
    $line = str_replace("Exporter PDF", "", $line);
    fwrite($myfile, $line);
  }
fclose($myfile);
function get_include_contents($filename) {
    if (is_file($filename)) {
        ob_start();
        include $filename;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    return false;
}
$string = get_include_contents("toSend.html");

$string=htmlentities($string);

?>
<form method="post" action="http://laptops.topic.ca/back/projet/light/envoyer-mail.php">
  <input type="hidden" name="contenu" value="<?php echo $string ?>">
  <input type="hidden" name="destination" value="<?php echo $_POST['destination'] ?>">
  <input type="hidden" name="objet" value="<?php echo $_POST['objet'] ?>">
  <input type="hidden" name="link" value="<?php echo $_POST['link'] ?>">
  <button value="confirmer" id="confirmer">Confirmation en cours</button>
</form>
<script>

    document.getElementById("confirmer").click(); // Click on the checkbox
</script>