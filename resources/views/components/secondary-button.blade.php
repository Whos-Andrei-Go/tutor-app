<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-sky-900 rounded-lg font-semibold text-base text-sky-900  tracking-widest hover:shadow-md hover:text-white hover:bg-sky-700 focus:outline-none hover:border-sky-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-500']) }}>
    {{ $slot }}
</button>