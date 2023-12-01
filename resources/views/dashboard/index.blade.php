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
                            <div id="{{$post->id}}">{{$post->title}}</div>

                            <!-- 編集 -->
                            <div class="ml-auto">
                                <a href="/posts/{{ $post->id }}/edit" class="inline-block text-sm px-4 py-2 leading-none border rounded mt-4 lg:mt-0 ">Edit</a>
                            </div>

                            <!-- 削除 - モーダル無し -->
                            <div class="ml-auto">
                                <form action="{{ route('posts.destroy', ['post' => $post->id] )}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                                        <x-danger-button>{{ __('Delete') }}</x-danger-button>
                                </form>
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
