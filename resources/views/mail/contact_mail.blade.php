<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Mail</title>

    <style>
        .light {
            color: lightgray;
            font-weight: lighter;
        }
    </style>


</head>

<body>
    <h1>Grazie per averci contattato {{$name}}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, nobis sit dolorum, in dolore inventore quia nam sint blanditiis obcaecati quam, natus placeat necessitatibus nesciunt minus ab velit eveniet molestiae.</p>
    <br>
    e questo è il tuo messaggio: 
    <p class="light">
        {{$text}}
    </p>
</body>

</html>