<?php


?>
<!DOCTYPE html>
<html>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<title>View Books</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--[if lt IE 9]>
<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>
<form action="insertMessages.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Message Entry</h1>
                <div class="form-group"
                    <textarea class="form-control" name="message"></textarea>
                </div>
                <button type="submit" class="form-control btn btn-primary">Add</button>
            </div>
        </div>
    </div>
</form>



</body>
</html>