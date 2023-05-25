<?php
// Récupérer l'ID de l'utilisateur connecté (vous devez adapter cela à votre logique d'authentification)
$idUtilisateur = 1; // Mettez ici la logique pour récupérer l'ID de l'utilisateur connecté

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Vérifier la connexion
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

// Récupérer les compétences de l'utilisateur connecté
$sql = "SELECT * FROM users WHERE id = $idUtilisateur";
$result = mysqli_query($conn, $sql);
$user = mysqli_fetch_assoc($result);

// Vérifier si des données ont été soumises pour ajouter une compétence
if (isset($_POST['ajouter'])) {
    $nouveauSkill = $_POST['skill'];

    // Ajouter le skill à la liste des skills de l'utilisateur
    $skillsExistants = explode(', ', $user['skill']);
    $skillsExistants[] = $nouveauSkill;
    $skills = implode(', ', $skillsExistants);

    // Mettre à jour la base de données avec la nouvelle liste de skills
    $sqlUpdate = "UPDATE users SET skill = '$skills' WHERE id = $idUtilisateur";

    if (mysqli_query($conn, $sqlUpdate)) {
        echo "Skill ajouté avec succès.";
        // Rafraîchir les données de l'utilisateur
        $user['skill'] = $skills;
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}

// Vérifier si des données ont été soumises pour modifier un skill
if (isset($_POST['modifier'])) {
    $skillIndex = $_POST['skillIndex'];
    $nouveauSkill = $_POST['skill'];

    // Modifier le skill à l'index donné dans la liste des skills de l'utilisateur
    $skillsExistants = explode(', ', $user['skill']);
    $skillsExistants[$skillIndex] = $nouveauSkill;
    $skills = implode(', ', $skillsExistants);

    // Mettre à jour la base de données avec la liste de skills modifiée
    $sqlUpdate = "UPDATE users SET skill = '$skills' WHERE id = $idUtilisateur";

    if (mysqli_query($conn, $sqlUpdate)) {
        echo "Skill modifié avec succès.";
        // Rafraîchir les données de l'utilisateur
        $user['skill'] = $skills;
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}

// Vérifier si des données ont été soumises pour supprimer un skill
if (isset($_POST['supprimer'])) {
    $skillIndex = $_POST['skillIndex'];

    // Supprimer le skill à l'index donné de la liste des skills de l'utilisateur
    $skillsExistants = explode(', ', $user['skill']);
    unset($skillsExistants[$skillIndex]);
    $skills = implode(', ', $skillsExistants);

    // Mettre à jour la base de données avec la liste de skills modifiée
    $sqlUpdate = "UPDATE users SET skill = '$skills' WHERE id = $idUtilisateur";

    if (mysqli_query($conn, $sqlUpdate)) {
        echo "Skill supprimé avec succès.";
        // Rafraîchir les données de l'utilisateur
        $user['skill'] = $skills;
    } else {
        echo "Erreur : " . mysqli_error($conn);
    }
}

// Fermer la connexion à la base de données
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Page personnelle de l'utilisateur</title>
</head>
<body>
    <h1>Bienvenue sur votre page personnelle, <?php echo $user['firstname']; ?></h1>

    <h2>Vos skills :</h2>
    <?php if (!empty($user['skill'])): ?>
        <ul>
            <?php $skills = explode(', ', $user['skill']);
            foreach ($skills as $index => $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun skill enregistré.</p>
    <?php endif; ?>

    <h2>Ajouter un skill :</h2>
    <form method="POST" action="">
        <input type="text" name="skill" placeholder="Entrez un nouveau skill" required>
        <button type="submit" name="ajouter">Ajouter</button>
    </form>

    <h2>Modifier un skill :</h2>
    <?php if (!empty($user['skill'])): ?>
        <ul>
            <?php foreach ($skills as $index => $skill): ?>
                <li>
                    <?php echo $skill; ?>
                    <form method="POST" action="">
                        <input type="text" name="skill" placeholder="Modifier le skill" required>
                        <input type="hidden" name="skillIndex" value="<?php echo $index; ?>">
                        <button type="submit" name="modifier">Modifier</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun skill à modifier.</p>
    <?php endif; ?>

    <h2>Supprimer un skill :</h2>
    <?php if (!empty($user['skill'])): ?>
        <ul>
            <?php foreach ($skills as $index => $skill): ?>
                <li>
                    <?php echo $skill; ?>
                    <form method="POST" action="">
                        <input type="hidden" name="skillIndex" value="<?php echo $index; ?>">
                        <button type="submit" name="supprimer">Supprimer</button>
                    </form>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>Aucun skill à supprimer.</p>
    <?php endif; ?>
</body>
</html>
