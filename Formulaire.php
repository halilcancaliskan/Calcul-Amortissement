<!doctype html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<head>
    <meta charset="utf-8" />
    <link href="microcms.css" rel="stylesheet" />
    <title>TP - Amortissements</title>
</head>
<body>
    <header>
        <h1>Halilcan CALISKAN</h1>
    </header>


<h2>TP - Amortissements :</h2>

<form action="" method="post">
  <div class="case">

    <!--=========================-->
  <p>Durée (Années) :</p>
    <input type="text" name="duree" />
    <!--=========================-->
  <p>Base d’amortissement :</p>
    <input type="text" name="valeur" />
    <!--=========================-->
  <p>Date d'acquisition  :</p>
    <input type="text" name="jaqui" value="JJ"/>
    <input type="text" name="maqui" value="MM"/>
    <input type="text" name="aaqui" value="AAAA"/>
    <!--=========================-->
 <p>Date de mise en service  :</p>
    <input type="text" name="jservice" value="JJ"/>
    <input type="text" name="mservice" value="MM"/>
    <input type="text" name="aservice" value="AAAA"/>
  </div>
  <!--=========================-->
  <p>Mode d'amortissement :</p>
  <select name="type">
    <option value="Lineaire">Lineaire</option>
    <option value="Degressif">Degressif</option>
  </select>
  <!--=========================-->
    <br/><br/>
    <input type="Submit" value="Valider"/>

  </form>
</body>
</html>
