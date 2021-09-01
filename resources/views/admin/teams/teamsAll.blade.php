@extends("layouts.indexBack")

@section("content")

<div class="relative px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
    <button class="btn btn-outline btn-primary"><a href="team/create">Register a team</a></button>
  <div class="relative grid gap-5 sm:grid-cols-2 lg:grid-cols-4">
    @foreach ($teams as $team)
    <div class="flex flex-col justify-between overflow-hidden text-left transition-shadow duration-200 bg-blue-800 rounded shadow-xl group hover:shadow-2xl">
        <a href={{"team/" . $team->id}}>
            <div class="p-5">
            <div class="flex items-center justify-center w-10 h-10 mb-4 rounded-full bg-indigo-50">
              <svg class="w-8 h-8 text-deep-purple-accent-400" stroke="currentColor" viewBox="0 0 52 52">
                <polygon stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none" points="29 13 14 29 25 29 23 39 38 23 27 23"></polygon>
              </svg>
            </div>
            <p class="mb-2 font-bold">{{$team->club}}</p>
            <p class="text-sm leading-5 text-gray-900">
             City :  {{$team->city}}
            </p>
            <p class>
             Max Players : {{count($team->players)}} / {{$team->maxplayers}}
            </p>
            @php
                $avn=0;
                $ctr=0;
                $arr=0;
                $rmp=0;

                foreach($team->players as $player){
                    if($player->role_id === 1){
                        $avn++;

                    }elseif($player->role_id === 2){
                        $ctr++;
                    }
                    elseif($player->role_id === 3){
                        $arr++;
                    }
                    elseif($player->role_id === 4){
                        $rmp++;
                    }
                }
            @endphp
            <p>
                Front : {{$avn}} / {{$team->AVN}}
            </p>
            <p>
                Central :{{$ctr}} / {{$team->CTR}}
            </p>
            <p>
                Back : {{$arr}} / {{$team->ARR}}
            </p>
            <p>
                Subs :{{$rmp}} / {{$team->RMP}}
            </p>
          </div>
        </a>
      <div class="w-full h-1 ml-auto duration-300 origin-left transform scale-x-0 bg-deep-purple-accent-400 group-hover:scale-x-100"></div>
    </div>
    @endforeach

  </div>
</div>

@endsection
