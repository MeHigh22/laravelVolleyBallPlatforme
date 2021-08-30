@extends("layouts.indexBack")

@section("content")

<style>
  .-z-1 {
    z-index: -1;
  }

  .origin-0 {
    transform-origin: 0%;
  }

  input:focus ~ label,
  input:not(:placeholder-shown) ~ label,
  textarea:focus ~ label,
  textarea:not(:placeholder-shown) ~ label,
  select:focus ~ label,
  select:not([value='']):valid ~ label {
    /* @apply transform; scale-75; -translate-y-6; */
    --tw-translate-x: 0;
    --tw-translate-y: 0;
    --tw-rotate: 0;
    --tw-skew-x: 0;
    --tw-skew-y: 0;
    transform: translateX(var(--tw-translate-x)) translateY(var(--tw-translate-y)) rotate(var(--tw-rotate))
      skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y));
    --tw-scale-x: 0.75;
    --tw-scale-y: 0.75;
    --tw-translate-y: -1.5rem;
  }

  input:focus ~ label,
  select:focus ~ label {
    /* @apply text-black; left-0; */
    --tw-text-opacity: 1;
    color: rgba(0, 0, 0, var(--tw-text-opacity));
    left: 0px;
  }
</style>

<div class="min-h-screen p-0 bg-gray-100 sm:p-12">
  <div class="max-w-md px-6 py-12 mx-auto bg-white border-0 shadow-lg sm:rounded-3xl">
    <h1 class="mb-8 text-2xl font-bold">Add a team</h1>
    <form id="form" action={{route('team.store')}} method="POST">
        @csrf
      <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="club"
          placeholder=" "
          required
          class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
        />
        <label for="club" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Enter club name</label>
        <span class="hidden text-sm text-red-600" id="error">Club is required</span>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="city"
          placeholder=" "
          class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
        />
        <label for="city" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Enter city name</label>
        <span class="hidden text-sm text-red-600" id="error">City is required</span>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="text"
          name="country"
          placeholder=" "
          class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
        />
        <label for="country" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Enter country</label>
        <span class="hidden text-sm text-red-600" id="error">Country is required</span>
      </div>


      <div class="relative z-0 w-full mb-5">
        <select
          name="continent_id"
          value=""
          onclick="this.setAttribute('value', this.value);"
          class="block w-full px-0 pt-3 pb-2 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none z-1 focus:outline-none focus:ring-0 focus:border-black"
        >
          <option value="" selected disabled hidden></option>
          @foreach ($continents as $continent)
        <option value="{{ $continent->id}}">{{ $continent->continent }}</option>
          @endforeach
        </select>
        <label for="select" class="absolute text-gray-500 duration-300 top-3 -z-1 origin-0">Select a continent</label>
        <span class="hidden text-sm text-red-600" id="error">Option has to be selected</span>
      </div>

      <div class="relative z-0 w-full mb-5">
        <input
          type="number"
          name="maxplayers"
          placeholder=""
          class="block w-full px-0 pt-3 pb-2 pl-5 mt-0 bg-transparent border-0 border-b-2 border-gray-200 appearance-none focus:outline-none focus:ring-0 focus:border-black"
        />
        <label for="money" class="absolute text-gray-500 duration-300 top-3 origin-0">Max Players</label>
        <span class="hidden text-sm text-red-600" id="error">Amount is required</span>
      </div>

      <button
        id="button"
        type="submit"
        class="w-full px-6 py-3 mt-3 text-lg text-white transition-all duration-150 ease-linear bg-blue-500 rounded-lg shadow outline-none hover:bg-pink-600 hover:shadow-lg focus:outline-none"
      >
        Create a team
      </button>
    </form>
  </div>
</div>

<script>
  'use strict'

  document.getElementById('button').addEventListener('click', toggleError)
  const errMessages = document.querySelectorAll('#error')

  function toggleError() {
    // Show error message
    errMessages.forEach((el) => {
      el.classList.toggle('hidden')
    })

    // Highlight input and label with red
    const allBorders = document.querySelectorAll('.border-gray-200')
    const allTexts = document.querySelectorAll('.text-gray-500')
    allBorders.forEach((el) => {
      el.classList.toggle('border-red-600')
    })
    allTexts.forEach((el) => {
      el.classList.toggle('text-red-600')
    })
  }
</script>

@endsection
