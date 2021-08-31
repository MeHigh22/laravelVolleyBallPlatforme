@extends("layouts.index")


@section("content")

<div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
  <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
    <div>
      <p class="inline-block px-3 py-px mb-4 font-semibold tracking-wider text-teal-900 uppercase rounded-full text-md bg-teal-accent-400">
        VolleyBall Players
      </p>
    </div>

    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
      <span class="relative inline-block">
        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
          <defs>
            <pattern id="247432cb-6e6c-4bec-9766-564ed7c230dc" x="0" y="0" width=".135" height=".30">
              <circle cx="1" cy="1" r=".7"></circle>
            </pattern>
          </defs>
        </svg>
        <span class="relative">Here</span>
      </span>
      you have all the players
    </h2>
    <p class="text-base text-gray-700 md:text-lg">
    </p>  </div>
  <div class="grid gap-10 row-gap-8 mx-auto sm:row-gap-10 lg:max-w-screen-lg sm:grid-cols-2 lg:grid-cols-3">

    @foreach ($players as $player )
    <div class="flex">
      <a href={{"player/" . $player->id}}> <img class="object-cover w-20 h-20 mr-4 rounded-full shadow" src="{{asset('storage/img/' . $player->photos->src)}}" /></a>
      <div class="flex flex-col justify-center">
        <p class="text-lg font-bold">{{$player->name}}  {{$player->lastname}} | {{$player->age}} ans</p>
        <p class="text-sm text-gray-800">Poste : {{$player->roles->role}}</p>
      </div>
    </div>
    @endforeach

@endsection

