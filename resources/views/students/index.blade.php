@extends('layouts.app')

@section('content')
    <div class="flex flex-col h-screen">
        <x-navbar />
        <main
            class="flex flex-col items-center justify-center flex-grow px-3 py-3 bg-gray-100 pt-36 sm:py-0 dark:bg-gray-900">
            <div
                class="w-full md:w-[768px] lg:w-[1024px] max-h-[600px] h-fit rounded-lg shadow-md relative flex justify-center">

                @include('partials.alerts')

                @include('partials.buttons')

                @include('partials.table')
            </div>
            <div class="w-full mx-auto mt-3 md:w-fit">{{ $students->links() }}</div>
        </main>
    </div>
    @include('partials.modals')
@endsection
