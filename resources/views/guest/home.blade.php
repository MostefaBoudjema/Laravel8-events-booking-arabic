@extends('layouts.guest')

@section('content')
    @include('partials.guest.header')

    <section id="events" class="events">
        <div class="container">
            <div class="row">
                @if (count($events) > 0)
                    @foreach ($events as $event)
                        <div class="col-lg-4">
                            <h2><a href="{{ route('events.show', $event->id) }}" class="">{{ $event->title }}</h2></a>
                            <td><img class="img-thumbnail" src='https://picsum.photos/id/{{ $event->id }}/300/300')
                                    alt="img" style="width:225px; height:200px"></td>
                            <div class="event-meta">
                                <div class="venue"><span class="label label-default">{{ $event->venue }}</span></div>
                                <div class="datetime"><span class="label label-info">{{ $event->start_time }}</span></div>
                            </div>
                            <div> {!! $event->description !!} </div>
                        </div>
                    @endforeach
                @endif
            </div>
            {{ $events->links() }}
        </div>
    </section>

@endsection

{{-- @if ($loop->index > 0 && ($loop->index + 1) % 3 == 0) </div><hr /><div class="row"> @endif --}}
