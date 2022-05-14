<h1>{{ $heading }}</h1>

@foreach ($tickets as $ticket)
<h2>
    <a href="/tickets/{{$ticket['id']}}">{{$ticket['summary']}}
  </h2></a>
  <p>
      {{$ticket['description']}}
  </p>
  <p>
      {{$ticket['status']}}
  </p>@endforeach
