@extends("layouts.index")


@section("content")


<div class="relative z-20 flex items-center mt-20 overflow-hidden bg-white dark:bg-gray-800">
    <div class="container relative flex px-6 py-16 mx-auto">
        <div class="relative z-20 flex flex-col sm:w-2/3 lg:w-2/5">
            <span class="w-20 h-2 mb-12 bg-gray-800 dark:bg-white">
            </span>
            <h1 class="flex flex-col text-6xl font-black leading-none text-gray-800 uppercase font-bebas-neue sm:text-8xl dark:text-white">
                Drari
                <span class="text-5xl sm:text-7xl">
                    Volley cup
                </span>
            </h1>
            <p class="text-sm text-gray-700 sm:text-base dark:text-white">
                Dimension of reality that makes change possible and understandable. An indefinite and homogeneous environment in which natural events and human existence take place.
            </p>
            <div class="flex mt-8">
                <a href="#" class="px-4 py-2 mr-4 text-white uppercase bg-yellow-500 border-2 border-transparent rounded-lg text-md hover:bg-yellow-700">
                    Get started
                </a>
                <a href="#" class="px-4 py-2 text-yellow-500 uppercase bg-transparent border-2 border-yellow-500 rounded-lg dark:text-white hover:bg-yellow-500 hover:text-white text-md">
                    Read more
                </a>
            </div>
        </div>
        <div class="relative hidden w-full ml-10 sm:block sm:w-1/3">
            <img  src="{{asset('storage/img/volleyballl.png')}}" class="max-w-xs m-auto md:max-w-sm"/>
        </div>
    </div>
</div>

<section>
                <h3>4 Random Players (No Team)</h3>
                @foreach ($noTeamRandom as $player)
                        <span>{{ $player->name }} {{$player->lastname}}</span>
                @endforeach
            </section>
<section>4 Random Players</section>


@endsection
