<?php
$rep2 = explode(" ", $_POST['rep1']);
$a = count($rep2);
$bravo = 0;
$tab = array("glacon", "glacons", "glace", "glaces","glaçon","glaçons");
if(!empty($_POST['ok'])) {
  foreach (range(0, $a) as $i) {
    if(in_array($rep2[$i],$tab,false)){
    $bravo = 1;
  }
}
if($bravo == 1){
$remplir1 = "mon_image()";
}
else{
$remplir = "Mauvaise reponse";

}

}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Enigme</title>
  <link rel="stylesheet" href="style.css">

</head>
<body>
  <form method="post" action="">


<header>
<h1 id="logo"><span>Enigme du jour</span></h1>
</header>

<section id="text">
    <h2>Un homme est retrouvé pendu chez lui. Son appartement est vide avec juste une flaque d'eau en dessous de lui. Comment s'est-il pendu ?</h2>
  </section>
  <section id="im">
    <img src="images/eni.jpg">
  </section>

<section id="rep">

<label >Votre réponse :</label>
<input id="rep1" name="rep1" type="text"  />
<input id="bouton" name="ok" type="submit" value="OK" onclick()='window.scrollTo(this.position())'>
  </section>





</form>
<?php
if(isset($remplir)){
  echo "<p style='text-align: center; font-weight: bold;font-size: 2.5rem;color: #7B241C '>Mauvaise reponse</p>";
}
if(isset($remplir1)){
  echo "<img style='
  width: 200px;
  display: block;
  margin-left: auto;
  margin-right: auto;
  margin-top: 5%;
  border-radius: 50px;
  'src='images/bravo.jpg'/>";
}

?>
<footer>

<ul id="footer">
  <li><a href="https://www.instagram.com/quentinfayolle34/?hl=fr"><svg class="icon facebook"><use href="images/social-icons.svg#instagram"></use></svg></a></li>
  <li><a href="https://www.instagram.com/pjdoazan/?hl=fr"><svg class="icon instagram"><use href="images/social-icons.svg#instagram"></use></svg></a></li>
  <li><a href="https://www.youtube.com/watch?v=gJMJpSIs3Zg&ab_channel=CANAL%2BS%C3%A9ries"><svg class="icon youtube"><use href="images/social-icons.svg#youtube"></use></svg></a></li>
  <li><a href="https://mobile.twitter.com/Mrmagiedo"><svg class="icon twitter"><use href="images/social-icons.svg#twitter"></use></svg></a></li>
</ul>

</footer>
</body>
</html>
