<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        @include('components.Header')

        <section class="content">
            <div class="container">
                <div class="details">
                    <!-- {% for post in site.posts %} -->
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>
                        <article class="detail">
                            <div class="title"><a href="/">うごけない</a></div>
                            <div class="category">php</div>
                        </article>

                    <!-- {% endfor %} -->
                </div>
            </div>
        </section>

        @include('components.Footer')
    </div>
</body>
</html>