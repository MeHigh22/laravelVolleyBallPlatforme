@extends("layouts.indexBack")



@section("content")

<div class="mt-40 bg-white dark:bg-gray-800">
    <div class="z-20 w-full px-4 py-12 mx-auto text-center sm:px-6 lg:py-16 lg:px-8">
        <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
            <span class="block">
                Welcome to your Admin Dashboard !
            </span>
            <span class="block text-indigo-500">
                Here you can modify or see the players and teams.
            </span>
        </h2>
        <div class="lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex mt-12 rounded-md shadow">
                <button type="button" class="w-full px-6 py-4 text-base font-semibold text-center text-white transition duration-200 ease-in bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:ring-indigo-500 focus:ring-offset-indigo-200 focus:outline-none focus:ring-2 focus:ring-offset-2 ">
                    To Get Started Pick An Option In The NavBar
                </button>
            </div>
        </div>
    </div>
</div>

@endsection
