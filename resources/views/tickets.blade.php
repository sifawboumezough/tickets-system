@extends('layout')

@section('content')
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">


@foreach ($tickets as $ticket)
{{-- <h2>
    <a href="/tickets/{{$ticket['id']}}">{{$ticket['summary']}}
  </h2></a>
  <p>
      {{$ticket['description']}}
  </p>
  <p>
      {{$ticket['status']}}
  </p> --}}
  {{-- <div class="bg-gray-700 lg:ml-2 w-full max-h-96 md:mr-2 rounded-md lg:w-1/4 flex justify-center flex-col space-y-4">
    <div class="w-36 h-36 bg-white rounded-full mt-6 mx-auto">
      <Image
          src='https://www.kindpng.com/picc/m/495-4952816_user-list-add-new-user-icon-hd-png.png' width='200' height='200' layout='responsive'alt="ClientData" class="rounded-full object-cover"
      />
    </div>
    <div className="mx-auto text-center">
      <h1 class="text-white font-poppins>{{$ticket->description}}</h1>
      <h1 class="text-white font-poppins"></h1>
      <h1 class="text-white font-poppins"></h1>
      <h1 class="text-white font-poppins"></h1>
    </div>
  </div> --}}

        <div class="bg-gray-50 border border-gray-200 rounded p-6">
            <div class="flex">
                <img
                    {{-- class="hidden w-28 mr-6 md:block" --}}
                    src ='https://www.kindpng.com/picc/m/24-248394_user-icon-hd-png-download.png' width='200' height='100' layout='responsive'alt="ClientData" class="rounded-full object-cover mr-10"
                    alt=""
                />
                <div>
                    <h3 class="text-2xl">
                        <a href="/tickets/{{$ticket->id}}"> {{$ticket->summary}}</a>                    </h3>
                    <div class="text-xl font-bold mb-4">Acme Corp</div>
                    <ul class="flex">
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Laravel</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">API</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Backend</a>
                        </li>
                        <li
                            class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                        >
                            <a href="#">Vue</a>
                        </li>
                    </ul>
                    <div class="text-lg mt-4">
                        <i class="fa-solid fa-location-dot"></i> Boston,
                        MA
                        <div class="text-xl">
                            <ul class="flex ">Status
                                <li
                                  class="flex mx-2 items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs"
                                    >
                                    {{ $ticket->status}}
                                </li>
                             </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  @endforeach

  @endsection
