function jsonValueKey(jsonString, key) {
    try {
      const jsonObject = JSON.parse(jsonString);
      return jsonObject[key];
    } catch (error) {
      console.error('Erreur de parsing JSON :', error);
      return null;
    }
  }
  
  // Exemple d'utilisation :
  const jsonString = `{
    "name": "La Plateforme_",
    "address": "8 rue d'hozier",
    "city": "Marseille",
    "nb_staff": "11",
    "creation": "2019"
  }`;
  
  const keyToFind = 'city';
  const value = jsonValueKey(jsonString, keyToFind);
  console.log(value); // Affiche "Marseille"