<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayson cara</title>
</head>
<body>
    <?php
        echo "<h1> Bjour </h1>";
        echo "<p>Salut les gens</p>";
    ?>
    <form action="">
        <fieldset>
            <legend>Vos coordonnées</legend>
            
            <div>
            <label for="nom"> Nom </label>
            <input type="text" name="nom" id="nom">
            </div>

            <div>
            <label for="prenom"> Prénom </label>
            <input type="text" name="prenom" id="prenom">
            </div>

            <div>
            <label for="date"> Date de naissance </label>
            <input type="date" name="date" id="date">
            </div>

           <div>
           <label for="email"> Email</label>
            <input type="email" name="email" id="email">
           </div>

           <div>
           <label for="pays">Dans quel pays habitez-vous ?</label><br />
       <select name="pays" id="pays">
           <optgroup label="Europe">
               <option value="belgique"> Belgique</option>
               <option value="france">France</option>
               <option value="espagne">Espagne</option>
               <option value="italie">Italie</option>
               <option value="royaume-uni">Royaume-Uni</option>
           </optgroup>
           <optgroup label="Amérique">
               <option value="canada">Canada</option>
               <option value="etats-unis">Etats-Unis</option>
           </optgroup>
           <optgroup label="Asie">
               <option value="chine">Chine</option>
               <option value="japon">Japon</option>
           </optgroup>
       </select>
           </div>

        </fieldset>

        <fieldset>
            <legend>Periodicté</legend>

            <div>
            <input type="radio" name="souhait" value="riche" id="riche" /> <label for="riche">Etre riche</label>
            <input type="radio" name="souhait" value="celebre" id="celebre" /> <label for="celebre">Etre célèbre</label>
            <input type="radio" name="souhait" value="intelligent" id="intelligent" /> <label for="intelligent">Etre <strong>encore</strong> plus intelligent</label>
            <input type="radio" name="souhait" value="autre" id="autre" /> <label for="autre">Autre...</label>
            </div>
        </fieldset>
    </form>
</body>
</html>