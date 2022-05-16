@extends('layout')

@section('content')
@include('partials._search')


{{-- <h2>
    {{$ticket['summary']}}
  </h2>
  <p>
      {{$ticket['description']}}
  </p>
  <p>
      {{$ticket['status']}}
  </p> --}}

  <div class="mx-4">
    <div class="bg-gray-50 border border-gray-200 p-10 rounded">
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <img
                class="w-48 mr-6 mb-6"
                src="{{ asset('images/clientimg.png')}}" alt="" />

            <h3 class="text-2xl mb-2">{{ $ticket->summary }}</h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>
            <ul class="flex">
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
                    <a href="#">Laravel</a>
                </li>
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
                    <a href="#">API</a>
                </li>
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
                    <a href="#">Backend</a>
                </li>
                <li
                    class="bg-black text-white rounded-xl px-3 py-1 mr-2"
                >
                    <a href="#">Vue</a>
                </li>
            </ul>
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> Daytona, FL
            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                     Description
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                       {{ $ticket->description }}
                    </p>
                    <p>
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Quaerat praesentium eos
                        consequuntur ex voluptatum necessitatibus
                        odio quos cupiditate iste similique rem in,
                        voluptates quod maxime animi veritatis illum
                        quo sapiente.
                    </p>



                    <a
                        href=""
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i>
                        Create status</a
                    >
                </div>
            </div>
        </div>
    </div>
</div>

  @endsection
