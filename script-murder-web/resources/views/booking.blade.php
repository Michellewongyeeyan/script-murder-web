@extends('layouts.app')

@section('title', 'Booking Session')

@section('content')
<section id="booking">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Book Your Murder Script Session</h1>
                <p>Select from our thrilling range of scripts and book your session today!</p>
                
                <p><strong>{{ $scriptItemCount }} script(s) found</strong></p>

                <!-- Display each script item dynamically -->
                <div class="row">
                    @foreach($scriptItems as $scriptItem)
                    <div class="col-md-4">
                        <div class="outer">
                            <a href="#">
                                <img src="{{ asset('pictures/' . $scriptItem->picture) }}" alt="{{ $scriptItem->scriptname }}">
                                <div class="details">
                                    <h3>{{ $scriptItem->scriptname }}</h3>
                                    <p>Location: {{ $scriptItem->location }}</p>
                                    <p>Date: {{ \Carbon\Carbon::parse($scriptItem->event_date)->format('M d, Y') }}</p>
                                    <p>Price: £{{ number_format($scriptItem->price, 2) }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
@endsection
