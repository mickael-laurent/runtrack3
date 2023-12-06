<!DOCTYPE html>
<html>
<head>
    <title>Liste des utilisateurs</title>
</head>
<body>

<table id="userTable" border="1">
    <tr>
        <th>id</th>
        <th>nom</th>
        <th>prenom</th>
        <th>email</th>
    </tr>
    <!-- Les données seront insérées ici dynamiquement -->
</table>

<button onclick="updateTable()">Update</button>

<script>
    function updateTable() {
        fetch('user.php')
            .then(response => response.json())
            .then(data => {
                let table = document.getElementById('userTable');
                table.innerHTML = "<tr><th>id</th><th>nom</th><th>prenom</th><th>email</th></tr>";

                data.forEach(user => {
                    let row = `<tr><td>${user.id}</td><td>${user.nom}</td><td>${user.prenom}</td><td>${user.email}</td></tr>`;
                    table.innerHTML += row;
                });
            });
    }

    // Au chargement initial, afficher les utilisateurs
    window.onload = updateTable;
</script>

</body>
</html>