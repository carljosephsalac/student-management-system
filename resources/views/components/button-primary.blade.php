<button
    {{ $attributes->merge(['type', 'class' => 'text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg px-3 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800']) }}>
    {{ $slot }}
</button>
