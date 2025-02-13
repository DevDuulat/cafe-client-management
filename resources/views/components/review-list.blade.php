<div class="space-y-4">
    @if ($reviews->isEmpty())
        <p class="text-gray-500">Вы еще не оставляли отзывов.</p>
    @else
        @foreach ($reviews as $review)
            <div class="p-4 bg-white shadow rounded-lg">
                <p class="text-gray-700">{{ $review->review }}</p>
                <p class="text-sm text-gray-400">{{ $review->created_at->format('d.m.Y') }}</p>
            </div>
        @endforeach
    @endif
</div>
