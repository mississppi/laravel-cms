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
                            
                            <!-- 削除ボタン -->
                            <x-danger-button
                                x-data=""
                                x-on:click.prevent="$dispatch('open-modal', 'confirm-post-deletion')"
                            >{{ __('Delete Post') }}</x-danger-button>

                            <!-- 削除モーダル -->
                            <x-modal name="confirm-post-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
                                <form method="post" action="{{ route('posts.destroy')}}" class="p-6">
                                    @csrf
                                    @method('delete')

                                    <h2 class="text-lg">{{__('delete post?')}}</h2>
                                    <span>{{$post->id}}</span>

                                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                                    <div class="mt-6 flex justify-end">
                                        <x-secondary-button x-on:click="$dispatch('close')">{{__('Cancel')}}</x-secondary-button>
                                        <x-danger-button class="ml-3">{{__('Delete Post')}}</x-danger-button>
                                    </div>
                                </form>
                            </x-modal>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
