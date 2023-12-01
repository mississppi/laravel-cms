<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
<title>Document</title>
</head>
<body>
    <!-- header -->
    @include('components.Header')

    <!-- 全Post -->
    <div class="container mx-auto lg:w-4/5 xl:w-3/4 gap-4 flex flex-wrap">

        <article class='w-full lg:w-1/2'>
            <figure class="bg-cover bg-center h-40 lg:h-64" style="background-image: url('/path/to/your/image.jpg');">
                <!-- 背景画像のスタイルはインラインスタイルで指定しています -->
                <div class="h-full bg-black opacity-50"></div> <!-- 背景の上に重ねる黒い透明のレイヤーなどを追加できます -->
            </figure>
            <div class="title">111111111111</div>
            <div class="category">php</div>
        </article>

        <article class='w-full lg:w-1/2'>
            <figure class="bg-cover bg-center h-40 lg:h-64" style="background-image: url('/path/to/your/image.jpg');">
                <!-- 背景画像のスタイルはインラインスタイルで指定しています -->
                <div class="h-full bg-black opacity-50"></div> <!-- 背景の上に重ねる黒い透明のレイヤーなどを追加できます -->
            </figure>
            <div class="title">22222222222</div>
            <div class="category">php</div>
        </article>


    </div>

    <!-- footer -->
    @include('components.Footer')
</body>
</html>