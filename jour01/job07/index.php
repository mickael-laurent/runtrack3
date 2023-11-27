<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        function jourTravaille(date) {
  const joursFeries2020 = {
    "01-01": "Jour de l'an",
    "04-13": "Lundi de Pâques",
    "05-01": "Fête du Travail",
    "05-08": "Victoire 1945",
    "07-14": "Fête nationale",
    "08-15": "Assomption",
    "11-01": "Toussaint",
    "11-11": "Armistice",
    "12-25": "Noël"
  };

  const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
  const jourSemaine = date.toLocaleDateString('fr-FR', { weekday: 'long' });
  const dateStr = date.toLocaleDateString('fr-FR', options);
  const moisAnnee = date.toLocaleDateString('fr-FR', { year: 'numeric', month: 'long' });

  const jour = date.getDate().toString().padStart(2, '0');
  const mois = (date.getMonth() + 1).toString().padStart(2, '0');
  const clef = `${mois}-${jour}`;

  if (joursFeries2020[clef]) {
    console.log(`Le ${dateStr} est un jour férié : ${joursFeries2020[clef]}`);
  } else if (jourSemaine === 'samedi' || jourSemaine === 'dimanche') {
    console.log(`Non, ${dateStr} est un week-end`);
  } else {
    console.log(`Oui, ${dateStr} est un jour travaillé`);
  }
}

// Exemple d'utilisation de la fonction avec une date
const maDate = new Date('2020-01-05'); // Mettez la date souhaitée ici
jourTravaille(maDate);
    </script>
</body>
</html>