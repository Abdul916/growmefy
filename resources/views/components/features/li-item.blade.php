<li {{ $attributes->merge(['class' => 'inline-flex gap-2']) }}>
    <span class=" p-0.5 bg-primary-50 rounded-full h-5 w-5 text-center mx-auto">@svg('check', 'stroke-black')</span>
    <span>{{ $slot }}</span>
</li>
