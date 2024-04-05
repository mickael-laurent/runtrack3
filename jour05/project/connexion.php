<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
<h2>Connexion</h2>
<form id="connexionForm" method="post" action="connexion_process.php">
    <label for="email">Email :</label>
    <input type="email" id="email" name="email">
    <span id="emailError"></span><br>

    <label for="password">Mot de passe :</label>
    <input type="password" id="password" name="password">
    <span id="passwordError"></span><br>

    <input type="submit" value="Se connecter">
</form>

<script>
    document.getElementById('connexionForm').addEventListener('submit', function(event) {
        var email = document.getElementById('email').value.trim();
        var password = document.getElementById('password').value;

        var emailError = document.getElementById('emailError');
        var passwordError = document.getElementById('passwordError');

        // Réinitialiser les erreurs
        emailError.innerHTML = '';
        passwordError.innerHTML = '';

        // Vérifications
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
    });

    // Fonction pour valider l'email
    function isValidEmail(email) {
        var re = /\S+@\S+\.\S+/;
        return re.test(email);
    }
</script>
</body>
</html>