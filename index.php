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
    <canvas id="canvas" width="150" height="150"></canvas>

<script>
	const canvas = document.getElementById("canvas");
	const ctx = canvas.getContext("2d");
	ctx.globalCompositeOperation = "source-over";
	const grad=ctx.createRadialGradient(75,75,5,75,75,75);
	grad.addColorStop(0.2,"blue");
	grad.addColorStop(0.3,"yellow");
	grad.addColorStop(0.34,"red");
 
	ctx.fillStyle = grad;
	ctx.fillRect(0,0,150,150);
 
	ctx.beginPath();
	ctx.moveTo(0, 0);
	ctx.lineTo(150, 150);
	ctx.lineWidth = 1;
	ctx.strokeStyle = "black";
	ctx.stroke();
 
	ctx.beginPath();
	ctx.moveTo(0, 150);
	ctx.lineTo(150, 0);
	ctx.lineWidth = 1;
	ctx.stroke();
	ctx.beginPath();
	ctx.arc(75, 75, 75, 0, 2 * Math.PI);
	ctx.stroke();
	ctx.font = "16px Verdana";
	ctx.strokestyle = "red";
	ctx.strokeText("Hello Blue Sun",21,45);

 
	</script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="main.js"></script>
  </body>
</html>