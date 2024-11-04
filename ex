<!DOCTYPE html>
<html lang="en">
	<?php
		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

		$mysqli = new mysqli("localhost", "root", "", "informaticavosql");

		function gen_table($con){

			$result = $con->query("
              SELECT e.first_name, e.last_name, d.department_name
              FROM employees e
              LEFT JOIN departments d ON e.department_id = d.department_id;
          ");

			$rows = $result->fetch_all(MYSQLI_ASSOC);

			foreach($rows as $row){
				//print_r($row);
				echo "<tr>";
				echo "<th>" . $row["first_name"] . "</th>";
				echo "<th>" . $row["last_name"] . "</th>";
				echo "<th>";
					echo (
						(is_null($row["department_name"])) ? "-" : $row["department_name"]
					);
				echo "</th>";
				echo "</tr>";
			}
		}

        function add_employee(){

        }

		?>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Bootstrap demo</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
			integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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

		<style>
			table {
				width: 100%;
				border-collapse: collapse;
			}
			th, td {
				border: 1px solid black;
				padding: 8px;
				text-align: left;
			}
		</style>

		<h1>Personeelslijst</h1>

            <form >
			<input type="text" name="firstName" id="firstName" placeholder="Voornaam" required>
			<input type="text" name="lastName" id="lastName" placeholder="Achternaam" required>
			<select name="department" id="department" required>
				<option value="default_department">---</option>
				<?php 
					$result = $mysqli->query("SELECT department_id, department_name FROM departments");
					print_r($result);

					foreach($result as $depart){
						echo '<option value="' . $depart["department_id"] . '" name=department' . '>' . $depart["department_name"] . '</option>';
					}

				?>
			</select>
			<input type="submit" value="Submit" />
		</form>

		<table id="personTable">
			<thead>
				<tr>
					<th>Voornaam</th>
					<th>Achternaam</th>
					<th>Afdeling</th>
					<th>Verwijder</th>
				</tr>
			</thead>
			<tbody>
				<?php
					gen_table($mysqli);
				?>
			</tbody>
		</table>

		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
			crossorigin="anonymous">
        </script>

        <script>
            document.getElementById('addForm').addEventListener('submit', function(e) {

                e.preventDefault();

                const firstName = document.getElementById('firstName').value;
                const lastName = document.getElementById('lastName').value;
                const department = document.getElementById('department').value;
                const table = document.getElementById('personTable').getElementsByTagName('tbody')[0];
                const newRow = table.insertRow();

                newRow.innerHTML = `
                    <td>${firstName}</td>
                    <td>${lastName}</td>
                    <td>${department}</td>
                    <td><button onclick="deleteRow(this)">Verwijder</button></td>
                `;

                document.getElementById('addForm').reset();
            });

            function deleteRow(button) {
                const row = button.parentNode.parentNode;
                row.parentNode.removeChild(row);
            }
        </script>
	</body>
</html>
<?php?> 
