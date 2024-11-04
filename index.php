<!DOCTYPE html>
    <html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="styles.css" />

		<title>Employees</title>
	</head>
  <body>
  <div class="dropdown">
			<button>Wanna have some fun?</button>
	</div>

    <div class="dropdown-content">
        <a rel="noopener" target="_blank" href="https://scratch.mit.edu/projects/1070509086/fullscreen/">Feeling
        lucky?</a>
        <a rel="noopener" target="_blank" href="https://scratch.mit.edu/projects/1070509086/fullscreen/">Feeling
        lucky?</a>
        <a rel="noopener" target="_blank" href="https://scratch.mit.edu/projects/1070509086/fullscreen/">Feeling
        lucky?</a>
    </div>

    <form id="addForm" >
        <input type="text" name="firstName" id="firstName" placeholder="Voornaam" required>
        <input type="text" name="lastName" id="lastName" placeholder="Achternaam" required>

        <select name="department" id="departments" required>
            <?php require 'departments.php'; ?>
        </select>
        <button type="submit" id="addButton">Voeg toe</button>
	</form>

    <table id="employeesTable">
        <thead>
            <tr>
                <th>Voornaam</th>
                <th>Achternaam</th>
                <th>Afdeling</th>
                <th id="deleteHeadCell">Verwijder</th>
            </tr>
        </thead>
        <tbody>
            <?php require 'display_table.php'; ?>
        </tbody>
	</table>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>