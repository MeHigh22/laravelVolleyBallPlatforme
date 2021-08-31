@extends("layouts.indexBack")

@section("content")

    <section class="bg-white dark:bg-gray-800">
        <div class="container px-6 py-8 mx-auto">
            <div class="items-center lg:flex">
                <div class="container flex flex-col px-6 py-10 mx-auto space-y-6 lg:h-128 lg:py-16 lg:flex-row lg:space-x-6">
            <div class="w-full mt-8 lg:w-1/2">
                <div class="lg:max-w-lg">
                    <h1 class="text-2xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-4xl">{{$player->name}} {{$player->lastname}}</h1>
                    <p class="mt-2 text-gray-600 dark:text-gray-300">Détails : </p>

                    <div class="grid gap-6 mt-8 sm:grid-cols-2">
                        <div class="block text-gray-800 dark:text-gray-200">

                            <h2 class="text-2xl font-medium tracking">Age</h2>
                            <h2>{{$player->age}}</h2>
                        </div>

                        <div class="items-center block text-gray-800 dark:text-gray-200">


                            <h2 class="text-2xl font-medium tracking">Gender</h2>
                            <h2>{{$player->sex}}</h2>
                        </div>

                        <div class="items-center block text-gray-800 dark:text-gray-200">

                            <h2 class="text-2xl font-medium tracking">Phone</h2>
                            <h2>{{$player->phone}}</h2>
                        </div>

                        <div class="items-center block text-gray-800 dark:text-gray-200">
                            <h2 class="text-2xl font-medium tracking">Email</h2>
                            <h2>{{$player->email}}</h2>
                        </div>

                        <div class="items-center block text-gray-800 dark:text-gray-200">

                            <h2 class="text-2xl font-medium tracking">Country</h2>
                            <h2>{{$player->country}}</h2>
                        </div>
                        <div class="items-center block text-gray-800 dark:text-gray-200">

                            <h2 class="text-2xl font-medium tracking">Team & Role</h2>
                            <h2>{{$player->teams ? $player->teams->club : "Free Player"}} | {{$player->roles->role}}</h2>
                        </div>

                        <form action={{route("player.destroy", $player->id)}} method="POST" class="items-center block text-gray-800 dark:text-gray-200">
                            @csrf
                            @method("DELETE")
                            <button type ="submit" class="btn btn-outline btn-secondary">Delete</button>
                        </form>

                        <div>
                            <a href="{{route("player.edit", $player->id)}}"><button class="btn btn-outline btn-accent">Edit</button></a>
                        </div>

                    </div>
                </div>
            </div>

                <div class="object-cover w-full h-48 mt-8 lg:mt-0">
                    <div class="flex items-center justify-center lg:justify-end">
                        <div class="max-w-lg">
                            <img class="object-cover object-center w-full pb-10 rounded-md shadow h-100" src="{{asset('storage/img/' . $player->photos->src)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
