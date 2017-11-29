<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Create task</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
</head>

<body>


<div id="top-bar">
	<a href="logout.php" id="logout">Logg ut</a>
	
<div id="boks">

        <h1 id="velkommen">Opprett oppgave </h1>
        <input id="tasknavn" placeholder="TaskNavn" />
        <br>
        <br>
        <input id="beskrivelse" placeholder="Beskrivelse" />
        <br>
        <br>
        <input id ="dato" type="date" placeholder="dd/mm/åååå" />
        <input id ="klokkeslett" type ="datetime" placeholder="klokkeslett" />
        <br>
        <br>
        <button id="btn"> Create Task </button>
    </div>
    
<div id="task-box">
</div>
	


	
</div>


<script src="script.js"></script>
</body>
</html>