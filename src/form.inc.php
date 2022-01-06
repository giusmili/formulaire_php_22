<section>
    <?php
        //var_dump($_GET)
    /*  foreach ($_POST as $key => $value) {
            print "name : ".$key." ".$value."<br>"; // test request user
        } */
        // creer une méthode de contrôle du formulaire
        if(isset($_POST["numero_de_serie"]) || isset($_POST["date"]) || isset($_POST["pays"])){
            //variables => GET
            $_number = $_POST["numero_de_serie"];
            $_date = $_POST["date"];
            $_pays = $_POST["pays"];
            //ternaire
            $_number &&  $_date && $_pays ? print '<p class="success">Numéro de série : '.$_number."<br>date : ".$_date."<br>Pays : ".$_pays."</p>" 
                                            : print '<p class="warning">Les champs sont tous obligatoires</p>';

        }
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
                    <div class="select-pays">
                        <select name="pays" id="pays" aria-required="true">
                            <option value="">Choisir son pays</option>
                            <option value="france">France</option>
                            <option value="germany">Germany</option>
                            <option value="italy">Italy</option>
                            <option value="spain">Spain</option>

                        </select>
                    </div>
                <input type="submit" value="Envoyer">
                
        </form>
</fieldset>
<?php
    /* class Message{
       public function __construct($msg){
           $this->msg = $msg;
       }
       public function getOut(){
           print "<p>$this->msg</p>";
       }
    }

    
    $_msg_1 = new Message("Hello");

    $_msg_1->getOut(); */

?>
