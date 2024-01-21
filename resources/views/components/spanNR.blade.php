@props(['value'])

<span class="text-[#1E1E1E] opacity-50 text-xl leading-[23px] font-bold">
    {{ $value ?? $slot }}
</span>
