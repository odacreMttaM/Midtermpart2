<!DOCTYPE html>
<head>
<div>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/ccs/boostrap.min,css" rol="stylesheet">

<title>Attempts</title>
</head> 
<body>
    <div class="container-sm">
        <h1>Player Attempts</h1>

        <form action="/compute-power" method="POST">
        <input type="hidden" name="player_1" value= "{{ $player_1 }}">
        <input type="hidden" name="player_2" value= "{{ $player_2 }}">
        <input type="hidden" name="player_3" value= "{{ $player_3 }}">
       @csrf
        <div class="row">
            <label>Player: <strong>{{ $player_1 }}</strong></label>
                <div class="col col-md-4">
                    <label>Attempt Score 1<label>
                        <input type="number" name="p1_attempt1" class="form-control">
                </div>
                <div class="col col-md-4">
                    <label>Attempt Score 2<label>
                        <input type="number" name="p1_attempt1" class="form-control">
                    </div>
                <div class="col col-md-4">
                    <label>Attempt Score 3<label>
                    <input type="number" name="p1_attempt1" class="form-control">
                    </div>
                    </div>
                    <div class="row">
            <label>Player: <strong>{{ $player_2 }}</strong></label>
                <div class="col col-md-4">
                    <label>Attempt Score 1<label>
                        <input type="number" name="p1_attempt1" class="form-control">
                </div>
                <div class="col col-md-4">
                    <label>Attempt Score 2<label>
                        <input type="number" name="p1_attempt1" class="form-control">
                    </div>
                <div class="col col-md-4">
                    <label>Attempt Score 3<label>
                    <input type="number" name="p1_attempt1" class="form-control">
                    </div>
                    </div>
                    <div class="row">
            <label>Player: <strong>{{ $player_3 }}</strong></label>
                <div class="col col-md-4">
                    <label>Attempt Score 1<label>
                        <input type="number" name="p1_attempt1" class="form-control">
                </div>
                <div class="col col-md-4">
                    <label>Attempt Score 2<label>
                        <input type="number" name="p1_attempt1" class="form-control">
                    </div>
                <div class="col col-md-4">
                    <label>Attempt Score 3<label>
                    <input type="number" name="p1_attempt1" class="form-control">
                    </div>
                    </div>
                    <hr />
                <div class="row">
                    <button class="btn btn-primary btn-lg" type="submit">
                        Compute Average Attempt Score
                    </button>
    </div>
    </form>
</div>

<script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrirty="sha384-ka75k0G1n4gmtz2M1Qn">
</body>
</html>
