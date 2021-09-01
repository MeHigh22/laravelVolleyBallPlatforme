@extends("layouts.indexBack")

@section("content")
    <section class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-8 mx-auto">
            <div class="w-full mx-auto mt-8">
                <div class="mx-auto lg:max-w-lg">
                    <h1 class="text-2xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-4xl">{{$team->club}}</h1>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Details Club : </p>
                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="block text-gray-800 dark:text-gray-200">
                            <h2 class="text-2xl font-medium tracking">Name </h2>
                            <h2>{{$team->club}}</h2>
                        </div>
                        <div class="items-center block text-gray-800 dark:text-gray-200">
                            <h2 class="text-2xl font-medium tracking">City</h2>
                            <h2>{{$team->city}}</h2>
                        </div>
                        <div class="items-center block text-gray-800 dark:text-gray-200">
                            <h2 class="text-2xl font-medium tracking">Country</h2>
                            <h2>{{$team->country}}</h2>
                        </div>
                        <div class="items-center block text-gray-800 dark:text-gray-200">
                            <h2 class="text-2xl font-medium tracking">Continent</h2>
                            <h2> {{$team->continents->continent}}</h2>
                        </div>
                        <form action={{route("team.destroy", $team->id)}} method="POST" class="items-center block text-gray-800 dark:text-gray-200">
                            @csrf
                            @method("DELETE")
                            <button type ="submit" class="btn btn-outline btn-secondary">Delete</button>
                        </form>
                        <div>
                            <a href="{{route("team.edit",$team->id)}}"><button class="btn btn-outline btn-accent">Edit</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full mx-auto mt-8 lg:w-1/2">
                <div class="mx-auto lg:max-w-lg">
                    <h1 class="mx-auto text-2xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-4xl">List of players</h1>
                    @foreach ($players as $player )
                    @if ($player->team_id == $team->id)
                    <div class="overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
                    <div class="py-5 text-center">
                    <a href={{"/player/" . $player->id}} class="block text-2xl font-bold text-gray-800 dark:text-white">{{$player->name}} {{$player->lastname}}</a>
                    <span class="text-sm text-gray-700 dark:text-gray-200">Role : {{$player->roles->role}}</span>
                    </div>
                    </div>
                    @endif
                    @endforeach
        </div>
    </section>

@endsection
