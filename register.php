
<?php
    session_start();
    $title = "Inscription";
    require ('config/database.php');
    require ('includes/constants.php');
    require ('includes/functions.php');

    if(isset($_POST['register'])){
        if(not_empty(['name','pseudo','email','password','password_confirm'])){
            $errors = [];
            extract($_POST);

            if(mb_strlen($name) < 3){
                $errors[] = "Nom et Prénoms trop courts ! (Minimum 3 caractères)";
            }

            if(mb_strlen($pseudo) < 3){
                $errors[] = "Pseudo trop court ! (Minimum 3 caractères)";
            }

            if(! filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors[] = "Adresse email invalide";
            }

            if(mb_strlen($password) < 6){
                $errors[] = "Mot de passe trop court ! (Minimum 6 caractères)";
            }else{
                if($password != $password_confirm){
                    $errors[] = "Les deux mots de passe ne concordent pas !";
                }
            }

            if(is_already_in_use('pseudo',$pseudo,'users')){
                $errors[] = "Pseudo déjà utilisé !";
            }

            if(is_already_in_use('email',$email,'users')){
                $errors[] = "Adresse email déjà utilisé !";
            }

            if(count($errors) == 0){
                // Envoi d'un email à l' utilisateur
                $to = $email;
                $subject = WEBSITE_NAME.' - ACTIVATION DU COMPTE';
                $token = sha1($pseudo.$email.$password);

                ob_start();
                require('templates/emails/activation.tmpl.php');
                $content = ob_get_clean();
                $headers = 'MINE-Version : 1.0 ' . "\r\n";
                $headers .= 'Content-type : text/html charset=utf-8' . "\r\n";

                // mail($to,$subject,$content,$headers);

                // Informer l' utilisateur pour qu' il vérifie sa boîte de reception

                set_flash("le mail d' activation est envoyé !","success");

                // Redirection vers sa page de profil
                redirect('index.php');
            }

        }else{
            $errors[] = "Veuillez remplir tous les champs !";
        }
    }

    require ('views/register.view.php'); 
?>