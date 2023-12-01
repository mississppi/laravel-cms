<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    @foreach($posts as $post)

                        <div class="flex justify-between mb-4">
                            <div>{{$post->id}}</div>
                            <div id="{{$post->id}}">{{$post->title}}</div>
                            
                            <!-- 削除 - モーダル無し -->
                            <form action="{{ route('posts.destroy', ['post' => $post->id] )}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <x-danger-button>{{ __('Delete Post') }}</x-danger-button>
                            </form>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
