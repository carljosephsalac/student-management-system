@props(['course' => '', 'year' => ''])

<li>
    <a href="{{ route('students.get', ['course' => $course, 'year' => $year]) }}"
        class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700
        {{ request()->is("students/$course/$year") ? 'bg-gray-100 dark:bg-gray-700' : '' }}">
        {{ $slot }}
    </a>
</li>
