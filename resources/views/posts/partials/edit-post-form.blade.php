<section>

    <form action="{{ route('posts.update', ['post' => $post->id] ) }}" method="post" class="mt-6 space-y-6">
        @csrf

        <input type="hidden" name="post_id" value="{{$post->id}}">
        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" value="{{$post->title}}" required autofocus />
        </div>

        <div>
            <x-input-label for="content" :value="__('Content')" />
            <textarea id="content" type="text" class="mt-1 block w-full" name="content" value="">{{$post->content}}</textarea>
        </div>

        <div>
            <x-input-label for="category" :value="__('Category')" />
            <select id="id" name="id" value="{{$post->category}}">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{$post->category_id  == $category->id ? 'selected' : '' }}>
                    {{ $category->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <x-input-label for="status" :value="__('Status')" />
            <select id="status" name="status">
                <option value="draft" {{ $post->status == 'draft' ? 'selected' : '' }} >draft</option>
                <option value="published" {{ $post->status == 'published' ? 'selected' : '' }} >publish</option>
            </select>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>
                {{ __('Post') }}
            </x-primary-button>
        </div>
    </form>

</section>
