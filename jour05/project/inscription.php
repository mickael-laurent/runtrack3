<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
</head>
<body>
<h2>Inscription</h2>
<form id="inscriptionForm" method="post" action="inscription_process.php">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom">
    <span id="nomError"></span><br>

    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom">
    <span id="prenomError"></span><br>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email">
    <span id="emailError"></span><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password">
    <span id="passwordError"></span><br>

    <label for="confirm_password">Confirmer mot de passe :</label>
    <input type="password" id="confirm_password" name="confirm_password">
    <span id="confirmPasswordError"></span><br>

    <input type="submit" value="S'inscrire">
</form>

<script>
    document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
        var nom = document.getElementById('nom').value.trim();
        var prenom = document.getElementById('prenom').value.trim();
        var email = document.getElementById('email').value.trim();
        var password = document.getElementById('password').value;
        var confirmPassword = document.getElementById('confirm_password').value;

        var nomError = document.getElementById('nomError');
        var prenomError = document.getElementById('prenomError');
        var emailError = document.getElementById('emailError');
        var passwordError = document.getElementById('passwordError');
        var confirmPasswordError = document.getElementById('confirmPasswordError');

        // Réinitialiser les erreurs
        nomError.innerHTML = '';
        prenomError.innerHTML = '';
        emailError.innerHTML = '';
        passwordError.innerHTML = '';
        confirmPasswordError.innerHTML = '';

        // Vérifications
        if (nom === '') {
            event.preventDefault();
            nomError.innerHTML = 'Le nom est requis';
        }

        if (prenom === '') {
            event.preventDefault();
            prenomError.innerHTML = 'Le prénom est requis';
        }

        if (email === '') {
            event.preventDefault();
            emailError.innerHTML = 'L\'email est requis';
        } else if (!isValidEmail(email)) {
            event.preventDefault();
            emailError.innerHTML = 'Format d\'email invalide';
        }

        if (password === '') {
            event.preventDefault();
            passwordError.innerHTML = 'Le mot de passe est requis';
        }

        if (confirmPassword === '') {
            event.preventDefault();
            confirmPasswordError.innerHTML = 'Veuillez confirmer votre mot de passe';
        } else if (password !== confirmPassword) {
            event.preventDefault();
            confirmPasswordError.innerHTML = 'Les mots de passe ne correspondent pas';
        }
    });

    // Fonction pour valider l'email
    function isValidEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>
</body>
</html>