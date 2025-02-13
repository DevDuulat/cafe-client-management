<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Мои отзывы') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900">
                    @if ($reviews->isEmpty())
                        <p class="text-gray-500">Вы еще не оставляли отзывов.</p>
                    @else
                        <x-review-list :reviews="$reviews" />
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
