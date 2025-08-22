@props(['tag', 'size' => 'base'])
@php    
    $classes = "bg-white/10 hover:bg-white/25 rounded-xl text-bold transition-colors duration-300";

    if ($size === "base")  {
        $classes .= " px-5 py-2 text-sm";
    } 
    if ($size === "small")  {
        $classes .= " px-3 py-2 text-[10px]";
    } 
@endphp
<a href="/tags/{{ trim($tag->name)  }}" class="{{ $classes }}">{{ $tag->name }}</a>
