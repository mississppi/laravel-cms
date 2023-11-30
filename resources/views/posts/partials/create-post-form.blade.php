<section>

    <form action="{{ route('posts.store') }}" method="POST" class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="title" :value="__('Title')" />
            <x-text-input id="title" name="title" type="text" class="mt-1 block w-full" required autofocus />
        </div>

        <div>
            <x-input-label for="content" :value="__('Content')" />
            <textarea id="content" type="text" class="mt-1 block w-full" name="content" value=""></textarea>
        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>
                {{ __('Publish') }}
            </x-primary-button>
        </div>
    </form>

</section>
