@props([
    'employer',
    'width' => 90,
    'height' => 90
])
<img src="{{ asset($employer->logo) }}" width="{{ $width }}" alt="" class="rounded-xl">