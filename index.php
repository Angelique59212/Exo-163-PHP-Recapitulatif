<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>PHP & HTML</title>
  </head>
  <body>
    <h1>Liste des élèves</h1>
    <!-- Instructions : Afficher la liste des élèves qui sont présents dans le tableau $students -->
    <?php
        //students
        $students = ['Hulk', 'Iron Man', 'Wonder Woman', 'Black Widow', 'Malicia'];
     ?>
     <ul>
       <?php
          // TODO Display the students here, each student inside a new <li> element
       foreach ($students as $student) {
           echo $student . "<br>";
       }
       ?>
     </ul>
     <hr>
     <h1>Date du jour</h1>
     <form>

       <!-- Instructions : Créer la liste de jour (en chiffres), de mois (en chiffres) et d'année en PHP. -->
       <label for="day">Day</label>
       <select  name="day" id="day"><?php
           for ($i = 1; $i <=31 ; $i++) {
               echo "<option value = $i >$i</option>";
           }?>
       </select>

       <label for="month">Month</label>
       <select  name="month" id="month"><?php
           for ($i = 1; $i <=12 ; $i++) {
               echo "<option value = $i >$i</option>";
           } ?>
       </select>

       <label for="year">Year</label>
       <select  name="year" id="year"><?php
           for ($i = 1900; $i <=2022 ; $i++) {
               echo "<option value = $i >$i</option>";
           } ?>
       </select>

     </form>

     <hr>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "fille" -->
     <?php
     if (isset($_GET['gender'])) {
         if ($_GET['gender'] === "fille") {
             echo "Je suis une fille";
         }
     }
     ?>
     <!-- TODO Instruction : Afficher ce bloc que si dans l'URL il y'a une variable sexe et que ça valeur vaut "garçon" -->
    <?php
    if (isset($_GET['gender'])) {
        if ($_GET['gender'] === "garçon") {
            echo "Je suis une garçon";
        }
    }
    else {
        echo "Je suis indéfini";
    }
    ?>
     <!-- TODO Instruction : Afficher ce bloc dans les autres cas -->

  </body>
</html>
