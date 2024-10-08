@extends('layouts.app')

@section('content')
    <section class="flex items-center h-screen bg-white dark:bg-gray-900">
        <div class="max-w-screen-xl px-4 py-8 mx-auto lg:py-16 lg:px-6">
            <div class="max-w-screen-sm mx-auto text-center">
                <h1 class="mb-4 font-extrabold tracking-tight text-7xl lg:text-9xl text-primary-600 dark:text-primary-500">
                    500
                </h1>
                <p class="mb-4 text-3xl font-bold tracking-tight text-gray-900 md:text-4xl dark:text-white">
                    Something's missing.
                </p>
                <ul class="max-w-2xl space-y-1 text-gray-500 list-disc list-inside dark:text-gray-400">
                    <li>
                        There was an error importing the students.
                    </li>
                    <li>
                        Ensure the Excel file format is correct and has not been modified.
                    </li>
                    <li>
                        Ensure the Excel file have the following column headings : <br>
                        Last Name, First Name, Middle Name, Email,
                        Course, Year, Prelim, Midterm, Finals, Average.
                    </li>
                    <li>
                        Last Name, First Name, Middle Name, Email, Course, Year are required.
                    </li>
                    <li>
                        Email must be unique.
                    </li>
                </ul>
                <button type="button" onclick="window.history.back();"
                    class="inline-flex text-white bg-primary-600 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:focus:ring-primary-900 my-4">
                    Back to Previous Page
                </button>
            </div>
        </div>
    </section>
@endsection
