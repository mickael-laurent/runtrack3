<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function tri(numbers, order) {
  function triAsc(a, b) {
    return a - b;
  }

  function triDesc(a, b) {
    return b - a;
  }

  if (order === "asc") {
    // Tri ascendant
    return numbers.sort(triAsc);
  } else if (order === "desc") {
    // Tri descendant
    return numbers.sort(triDesc);
  } else {
    // Si l'ordre n'est ni asc ni desc, retourner le tableau non trié
    console.log("Veuillez spécifier un ordre valide : 'asc' ou 'desc'");
    return numbers;
  }
}

// Exemple d'utilisation de la fonction
const tableau = [5, 2, 9, 1, 5, 6];

// Tri ascendant
const triAscendant = tri(tableau, "asc");
console.log("Tri ascendant :", triAscendant);

// Tri descendant
const triDescendant = tri(tableau, "desc");
console.log("Tri descendant :", triDescendant);
    </script>
</body>
</html>