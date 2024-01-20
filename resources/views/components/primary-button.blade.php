<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-52 h-10 inline-flex items-center justify-center px-4 py-2 bg-secondary border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest focus:outline-none focus:ring-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
