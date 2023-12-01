<section>

    <form action="{{ route('posts.store') }}" method="post" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus />
        </div>

        <div>
            <x-input-label for="content" :value="__('Content')" />
            <textarea id="content" type="text" class="mt-1 block w-full" name="content" value=""></textarea>
        </div>

        <div>
            <x-input-label for="category" :value="__('Category')" />
            <select id="id" name="id">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{$category->title}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <x-input-label for="status" :value="__('Status')" />
            <select id="status" name="status">
                <option value="draft">draft</option>
                <option value="published">publish</option>
            </select>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>
                {{ __('Post') }}
            </x-primary-button>
        </div>
    </form>

</section>
