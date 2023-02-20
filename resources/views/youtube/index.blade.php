<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>YouTube</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>.container { max-width: 720px; }</style>
</head>
<body>
    <section class="d-flex align-items-center vh-100">
        <div class="container">
            <div class="ratio ratio-16x9 bg-dark">
                <iframe src="{{ youtube_embed_url($url) }}" allowfullscreen></iframe>
            </div>
        </div>
    </section>
</body>
</html>
