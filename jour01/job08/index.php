<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function estNombrePremier(nombre) {
  if (nombre <= 1) return false;
  for (let i = 2; i <= Math.sqrt(nombre); i++) {
    if (nombre % i === 0) {
      return false;
    }
  }
  return true;
}

function sommeNombresPremiers(a, b) {
  if (estNombrePremier(a) && estNombrePremier(b)) {
    return a + b;
  } else {
    return false;
  }
}

// Exemple d'utilisation de la fonction
const premier1 = 17;
const premier2 = 23;

const resultat = sommeNombresPremiers(premier1, premier2);
if (resultat !== false) {
  console.log(`La somme des nombres premiers est : ${resultat}`);
} else {
  console.log("Au moins l'un des nombres n'est pas premier.");
}
    </script>
</body>
</html>