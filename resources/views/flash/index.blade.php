<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.container { max-width: 720px; }</style>
</head>
<body>
    @include('flash.includes.flash')

    <section class="d-flex align-items-center vh-100">
        <div class="container">
            <form action="{{ route('flash.store') }}" method="POST">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-12 col-md-4">
                        <div class="mb-3">
                            <select name="type"class="form-control w-100">
                                <option value="success">Успех</option>
                                <option value="danger">Ошибка</option>
                                <option value="warning">Инфо</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <button type="submit" class="btn btn-primary w-100">
                            Отправить
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
