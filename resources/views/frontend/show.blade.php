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



    <div class="mx-auto lg:w-4/5 xl:w-3/4 mt-14 mb-12 lg:min-w-900">
        <div class="my-3 py-2.5" >
            <h1 class="text-xl my-3">
                {{$post->title}}
            </h1>
        </div>

        <p>{{$post->content}}</p>
    </div>

    <!-- footer -->
    @include('components.Footer')
</body>
</html>