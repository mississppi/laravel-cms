<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('カテゴリ登録') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('categories.partials.create-category-form')
                </div>
            </div>
        </div>
    </div>

</x-app-layout>


<!-- //category新規ページ生成
//ドロップダウンでstatus
//category呼び出す

//一覧を取得
//deleteボタンを追加
//deleteできる
//editページ生成
//edit遷移できるようにする

//フロントページ作る
//記事呼び出す -->