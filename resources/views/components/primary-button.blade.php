<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-52 h-10 inline-flex items-center justify-center px-4 py-2 bg-secondary hover:bg-secondary-hover border border-transparent rounded-md font-semibold text-xs text-white hover:text-gray-700 uppercase tracking-widest focus:outline-none focus:ring-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
