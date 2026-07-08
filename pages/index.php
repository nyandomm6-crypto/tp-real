<?php
include('../inc/functions.php');
$departments = get_all_departments();

?>
<html>

<head>
    <title>Les news</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../design/theme-minimal/style.css">

</head>

<body>
    <nav class="navbar">
        <ul>
            <li>Liste des départements</li>
            <li><a href="search.php">🔍 Rechercher un employé</a></li>
            <li><a href="stats.php">📊 Statistiques par emploi</a></li>
            </li>
            <li><a href="dept_form.php">➕ Ajouter un département</a></li>
            <li><a href="emp_form.php">➕ Ajouter un employé</a></li>
        </ul>

    </nav>


    <h2>Tableau</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Department Number</th>
                <th>Department Name</th>
                <th>Manager actuel</th>
                <th>Nombre d'employés</th>
                <th>Action</th>
            </tr>

        </thead>
        <tbody>
            <?php foreach ($departments as $line) { ?>
                <tr>


                    <td><a href="employees.php?dept_no=<?= urlencode($line['dept_no']) ?>"><?= $line['dept_no'] ?></a></td>
                    <td><?= $line['dept_name'] ?></td>
                    <td><?= $line['manager_name'] ?? '—' ?></td>
                    <td><?= $line['nb_employees'] ?></td>
                    <td><a href="dept_form.php?dept_no=<?= urlencode($line['dept_no']) ?>">Éditer</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>

</html>