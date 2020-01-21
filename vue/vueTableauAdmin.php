<link href="vue/css/admin.css" rel="stylesheet" type="text/css">
<!-- Tableau Grid Section -->
<section id="tableau" class="bg-light-gray">

    <!-- DEBUT DU FORMULAIRE -->
    <form method="POST" action=""> 

        <select name="libelle" id="libelle-select">
            <option value ="default" selected="selected">Choisissez votre libelle</option>
        </select>

        <select name="reference" id="reference-select">
            <option value ="default" selected="selected">Choisissez votre reference</option>
        </select>

        <input type="submit" value="Ok" name="buttonDemander"/>

    </form>

    <form method="POST" action="">
        <!-- CREATION DU TABLEAU -->
        <?php
        if (isset($_POST['reference']) && $_POST['reference'] != "Choisissez votre reference") {
            ?>
            <table>
                <td></td><td class="colonne-acqui">N.A</td><td class="colonne-acqui">P.A</td><td class="colonne-acqui">A.N.S</td><td class="colonne-acqui">D</td>

                <?php

                for ($i = 1; $i <= 10; $i++) {
                    $tableau[] = 'Compétence n°' . $i;
                }
                $y = 0;
                foreach ($tableau as $competence) {
                    
                    echo '<div id="choices"><tr>
                    <th>' . $competence . '</th>
                    <th><input type="radio" id="choice1" name="record' . $y . '" value="N.A"><br></th>
                    <th><input type="radio" id="choice2" name="record' . $y . '" value="P.A"><br></th>
                    <th><input type="radio" id="choice3" name="record' . $y . '" value="A.N.S"><br></th>
                    <th><input type="radio" id="choice4" name="record' . $y . '" value="D"><br></th>
                </tr>
                </div>';
                    $y++;
                }
            }
            ?>
        </table>

            <input type="submit" value="Envoyer" id="getChoice" class="page-scroll btn btn-xl"  name="buttonEnvoyer"/>

    </form>
    
    <?php 
        if(isset($_POST['buttonEnvoyer'])){
            for($a = 0; $a < 10; $a++){
                echo $_POST['record'+$a];
            }
            
        }
    ?>

</section>