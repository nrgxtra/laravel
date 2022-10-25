<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-transparent border border-gray-300 rounded-md font-semibold text-xs text-white-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:ring focus:ring-blue-200 active:text-white-800 active:bg-transparent-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
