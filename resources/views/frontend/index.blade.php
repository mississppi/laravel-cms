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

    <div class="grid grid-cols-1 md:grid-cols-2 mx-auto lg:w-4/5 xl:w-3/4 mt-14 mb-12 lg:min-w-900">
        @foreach($posts as $post)
            <div class="ml-4" style="height:320px; ">
                <figure class="bg-cover bg-center lg:h-64" style="height:260px; background-image: url('/images/thumb1.jpg');">
                    <!-- 背景画像のスタイルはインラインスタイルで指定しています -->
                    <div class="h-full bg-black opacity-50"></div> <!-- 背景の上に重ねる黒い透明のレイヤーなどを追加できます -->
                </figure>
                <div><a href="{{ route('frontend.show', ['post' => $post->id]) }}">{{$post->title}}</a></div>
            </div>
        @endforeach
    </div>

    <!-- footer -->
    @include('components.Footer')
</body>
</html>