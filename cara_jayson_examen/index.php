<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <?php include ('include/header.php')?>

    <main>
        <div class="case">
            <form action=" ">
                <fieldset>
                    <legend>Vos information</legend>
                    <div>
                        <label for="nom">Votre nom</label><br />
                        <input type="text" name="nom" id="nom" required>
                    </div>
                    <div>
                        <label for="prenom">Votre prénom</label><br />
                        <input type="text" name="prenom" id="prenom" required>
                    </div>
                    <div>
                        <label for="email">Votre mail</label><br />
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div>
                        <label for="tel">Votre numéro de téléphone</label><br />
                        <input type="tel" name="tel" id="tel" required>
                    </div>
                </fieldset>
            </form>

            <form action=" ">
                <fieldset>
                    <legend>Votre commande</legend>
                    <div>
                        <label for="command">Choisissez parmi les possibilités</label><br />
                        <select name="command" id="command">
                            <optgroup label="Hardware">
                                <option value="ecran">Ecran</option>
                                <option value="souris">Souris</option>
                                <option value="clavier">Clavier</option>
                                <option value="ram">RAM</option>
                                <option value="disque_dur">Disque Dur</option>
                            </optgroup>
                            <optgroup label="Software">
                                <option value="office_365">Office 365</option>
                                <option value="packet_traces">Packet Traces</option>
                                <option value="google_workspace">Google workspace</option>
                            </optgroup>
                        </select>
                    </div>
                    <div>
                        <label for="quantity">La quantité souhaitée</label><br />
                        <input type="number" name="quantity" id="quantity" min="1" max="10" value="1" required>
                    </div>
                    <div>
                        <label for="date">Date de commande souhaitée</label><br />
                        <input type="date" name="date" id="date" required>
                    </div>
                    <div>
                        <label for="choice">Facture choisie</label>
                    </div>
                    <div>
                        <input type="checkbox" id="mail" name="mail" checked>
                        <label for="mail">Par mail</label>
                    </div>
                    <div>
                        <input type="checkbox" id="paper" name="paper">
                        <label for="paper">Par papier</label>
                    </div>
                    <div>
                        <label for="remarque">Remarques supplémentaires</label><br />
                        <textarea name="remarque" id="remarque" cols="30" rows="10"></textarea>
                    </div>
                </fieldset>
            </form>
        </div>
        <div>
            <button type="submit">Envoyer</button>
        </div>
        <div>
            <h5>Galerie image</h5>
            
        </div>
    </main>
    <?php include ('include/footer.php') ?>
</body>
</html>