<section>
    <?php
  
        // creer une méthode de contrôle du formulaire
        class User{
            static function userform(){
                if(isset($_POST["numero_de_serie"]) || isset($_POST["date"]) || isset($_POST["pays"])){
                    //variables => GET
                    $_number = $_POST["numero_de_serie"];
                    $_date = $_POST["date"];
                    $_pays = $_POST["pays"];
                    //ternaire
                    $_number &&  $_date && $_pays ? print '<p class="success">Numéro de série : '.$_number."<br>date : ".$_date."<br>Pays : ".$_pays."</p>" 
                                                    
                    :print '<p class="warning">Les champs sont tous obligatoires</p>';
        
                }
            }
        }
        User::userform();
    ?>
</section>
    <fieldset>
            <legend>inscription</legend>
            <form action="<?php urlencode($_SERVER['PHP_SELF']) ?>" method="post">
                <label for="numero">Numéro de serie</label>
                <input type="text" id="numero" name="numero_de_serie" placeholder="Numéro de serie" aria-required="true" autofocus>
                <label for="date">Votre anniversaire</label>
                <input type="date" id="date" name="date" aria-required="true">
                <label for="pays">Lieu de naissance</label>
                    <div class="select-pays" role="group">
                        <select name="pays" id="pays" aria-required="true">
                            <option value="">Choisir son pays</option>
                            <option value="France">France</option>
                            <option value="Germany">Germany</option>
                            <option value="Italy">Italy</option>
                            <option value="Spain">Spain</option>

                        </select>
                    </div>
                <input type="submit" value="Envoyer">
                
        </form>
</fieldset>

