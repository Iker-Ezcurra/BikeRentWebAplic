@props(['status' => null])

@if ($status)
    <div {{ $attributes->merge(['class' => '']) }}>
        {{ $status }}
    </div>
@endif
