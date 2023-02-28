<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Front URL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.container { max-width: 720px; }</style>
</head>
<body>
    <section class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="list-group">
                        <a href="{{ front_route('home') }}" class="list-group-item list-group-item-action" target="_blank">
                            Главная
                        </a>

                        <a href="{{ front_route('requests') }}" class="list-group-item list-group-item-action" target="_blank">
                            Запросы
                        </a>

                        <a href="{{ front_route('controllers') }}" class="list-group-item list-group-item-action" target="_blank">
                            Контроллеры
                        </a>

                        <a href="{{ front_route('responses') }}" class="list-group-item list-group-item-action" target="_blank">
                            Ответы
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
