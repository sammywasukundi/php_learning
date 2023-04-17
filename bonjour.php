
<?php 
    
    if(isset($_GET['nom']) AND isset($_GET['prenom']) AND isset($_GET['repeter'])){
        $_GET['repeter'] = (int) $_GET['repeter'];
        if($_GET['repeter'] >= 1 AND $_GET['repeter'] <= 50){
            for($i = 0;$i < $_GET['repeter']; $i++){
                echo "bonjour ".$_GET['nom']." ".$_GET['prenom']." !"."<br>";
            }  
        }
        
        
    }
    else{
        echo "Renseigner le nom et le prenom et un nombre des repetitions";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <title>Document</title>
</head>
<body>
  <img src="images.php" alt="link image with PHP" height="auto" width="100%">
            <!-- <form  method="post" action="cible.php">
                  <h2 style="font-family: Arial, Helvetica, sans-serif; font-size: 28px; font-weight: light;">Sign up</h2>
                  <div class="div_label">
                    <input name="firstname" type="text" class="form-control" placeholder="Nom">
                  </div>
                  <div class="div_label">
                    <input name="name" type="text" class="form-control" id="name" placeholder="Postnom">
                  </div>
                  <div class="div_label">
                    <input name="email" type="email" class="form-control" id="email" placeholder="Email address">
                  </div>
                  <div class="div_label">
                    <input name="password" type="password" class="form-control" id="email" placeholder="Password">
                  </div>
                  <div class="div_label">
                      <textarea name="message" id="message" cols="30" rows="10"></textarea>
                  </div>
                  <div class="div_label">
                      <select name="choix" id="#">
                          <option value="rdc">rdc</option>
                          <option value="rwanda">rwanda</option>
                          <option value="ouganda">ouganda</option>
                          <option value="burundi">burundi</option>
                      </select>
                  </div>
                  <div class="div_label">
                      <input type="checkbox" name="case" id="case" checked="checked"><label for="case">case 1</label>
                      <input type="checkbox" name="case" id="case"><label for="case">case 2</label>

                  </div>
                  <div class="div_label">
                    Aimez-vous les frites ?
                    <input type="radio" name="frites" value="oui" id="oui"
                    checked="checked" /> <label for="oui">Oui</label>
                    <input type="radio" name="frites" value="non" id="non" /> <label
                    for="non">Non</label>
                  </div>
                  <div class="div_label">
                    <button type="submit" class="btn" name="Sign">Sign up</button>
                    <button type="submit" class="btn" name="Sing_in">Sign in</button>
                  </div>
            </form> -->
            <form  action="cible.php" method="post" enctype="multipart/form-data">
                <p>
                    Formulaire d'envoi de fichier :<br/>
                    <input type="file" name="monfichier" /><br/>
                    <input type="submit" value="Envoyer le fichier" />
                </p>
            </form>
            <a href="https://uniluk.org/">uniluk</a>
</body>
</html>