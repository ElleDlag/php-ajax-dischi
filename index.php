<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.5.3/handlebars.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="main.css">
    <title>Dischi collection</title>
</head>
<body>
<!-- main content -->
    <main>
        <div class="container-fluid">
            <div class="row d-flex flex-row flex-wrap final">
            </div>
        </div>
    </main>

<!-- template -->
    
    <script id="tmpl-disco" type="text/x-handlebars-template">
        <div class="disco-info  col-sm-6 col-md-4">
            <div class="disco-img"><img src="{{poster}}" alt=""></div>
            <h1>{{title}}</h1>
            <div class="infos">
                <p>{{author}}</p>
                <p>{{year}}</p>
            </div>
        </div>
    </script>
</body>
</html>