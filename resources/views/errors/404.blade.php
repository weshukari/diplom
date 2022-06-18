<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Not Found</title>
    <style>
        .container{
            width:70%;
            margin: 0 auto;
        }
        img{
            width:100%;
        }
        a{
            margin: 0 auto;
            font-family: roboto;
            color: #89023E;
            border-bottom: 1px solid #89023E;
            text-align: center;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="/images/error/error.svg" class="w-50">
            </div>
            <div class="col">
                <a href="{{ url()->previous() }}">
                    <p>Вернуться назад</p>
                </a>
            </div>
        </div>
    </div>
</body>
</html>