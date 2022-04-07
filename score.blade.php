<!DOCTYPE html>
<head>
<div>

<meta charset = "UCT-8?">
<meta name ="viewport" content="width=device-width, initial-scale=1">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/ccs/boostrap.min,css" rol="stylesheet">

<title>Attempts</title>
</head>
<body>
<div class= "container-sm">
    <h1>Player Attempts Average Score</h1>

    <table class="table table-striped table-hover">
    <thread>
    <tr>
            <th scope="col">Player</th>
            <th scope="col">Attempt Score 1</th>
            <th scope="col">Attempt Score 2</th>
            <th score="col">Attempt Score 3</th>
            <th scope="col">Average Score</th>
    </tr>
    </thread>
    <tbody> 
    <tr>
        <td> {{$plater_1}}</td>
        <td> {{$p1_attempt1}}</td>
        <td> {{$p1_attempt2}}</td>
        <td> {{$p1_attempt3}}</td>
        <td> {{$p1_average}}</td>
    </tr>
    <tr>
        <td> {{$plater_2}}</td>
        <td> {{$p2_attempt1}}</td>
        <td> {{$p2_attempt2}}</td>
        <td> {{$p2_attempt3}}</td>
        <td> {{$p2_average}}</td>
    </tr>
    <tr>
        <td> {{$plater_3}}</td>
        <td> {{$p3_attempt1}}</td>
        <td> {{$p3_attempt2}}</td>
        <td> {{$p3_attempt3}}</td>
        <td> {{$p3_average}}</td>
    </tr>
    </tbody>
    </table>
</div>
