@props(['value'])

<span class="text-[#1E1E1E] opacity-50 text-xl leading-[23px] font-bold">
    {{ $value ?? $slot }}<span class="pl-1 text-[#FF1A61] text-[14px] leading-[23px] font-bold">*</span>
</span>
