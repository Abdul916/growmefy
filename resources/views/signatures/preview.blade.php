<!-- resources/views/signatures/preview.blade.php -->
<div>
    <p><strong>{{ $name }}</strong></p>

    @if ($rating_type === 'numbers')
        <p>
            (Bad)
            <a href="{{ url('/landing/' . $business->slug) }}">1</a> |
            <a href="{{ url('/landing/' . $business->slug) }}">2</a> |
            <a href="{{ url('/landing/' . $business->slug) }}">3</a> |
            <a href="{{ url('/landing/' . $business->slug) }}">4</a> |
            <a href="{{ url('/landing/' . $business->slug) }}">5</a>
            (Excellent)
        </p>
    @elseif ($rating_type === 'stars')
        <p>
            @for ($i = 1; $i <= 5; $i++)
                <a href="{{ url('/landing/' . $business->slug) }}">⭐</a>
            @endfor
        </p>
    @elseif ($rating_type === 'faces')
        <p>
            <a href="{{ url('/landing/' . $business->slug) }}">😡</a>
            <a href="{{ url('/landing/' . $business->slug) }}">😊</a>
        </p>
    @endif
</div>

<!-- HTML para copiar -->
<div class="mt-4">
    <label for="signature-html" class="font-semibold">Copy the HTML below:</label>
    <textarea id="signature-html" class="w-full mt-2 p-2 border border-gray-300 rounded text-xs" rows="8" readonly style="resize: none; overflow: hidden; line-height: 1.2;">
        {{ trim(preg_replace('/\s+/', ' ', '
            <p><strong>' . $name . '</strong></p>
            ' . ($rating_type === "numbers" ? '
                <p>(Bad)
                <a href="' . url("/landing/" . $business->slug) . '">1</a> |
                <a href="' . url("/landing/" . $business->slug) . '">2</a> |
                <a href="' . url("/landing/" . $business->slug) . '">3</a> |
                <a href="' . url("/landing/" . $business->slug) . '">4</a> |
                <a href="' . url("/landing/" . $business->slug) . '">5</a>
                (Excellent)</p>' : '') .
            ($rating_type === "stars" ? '
                <p>' . implode(" ", array_fill(0, 5, '<a href="' . url("/landing/" . $business->slug) . '">⭐</a>')) . '</p>' : '') .
            ($rating_type === "faces" ? '
                <p>
                <a href="' . url("/landing/" . $business->slug) . '">😡</a>
                <a href="' . url("/landing/" . $business->slug) . '">😊</a>
                </p>' : '')
        )) }}
    </textarea>
</div>
