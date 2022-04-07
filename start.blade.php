<DOCTYPE html>
<html lang="en">
    <head>
    
    <meta charset = "utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/ccs/boostrap.min,css" rol="stylesheet">


<title>Start</title>
</head>
<body>   
<div class="container-sm">
    <h1>Enter the name of the players</h1?>
    
    <form action="/enter-attempts" method="POST">
    @csrf
    @for ($i = 1; $i <= 3; $i++)
    <div class="row">
        <label>Player {{ $i }} Name:</label>
        <input type="text" name="name_{{ $i }}" class="form-control">
    </div>
    @endfor
    <hr />
    <div class="row">
        <button class="btn btn-primary bnt-lg"> Save Players</button>
</div>
    </form>
</div>

<script scr="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrirty="sha384-ka75k0G1n4gmtz2M1Qn">
    </body>
    </html>






