<button class="btn btn-{{ $type }} @if (isset($condition)) {{ $condition }} @endif"
    type="submit">{{ $slot }}</button>
