@extends('layouts.app')

@section('title', 'Booking Session')

<<<<<<< Updated upstream
=======
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/booking.css') }}">
@endsection

>>>>>>> Stashed changes
@section('content')
<section id="booking">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Book Your Murder Script Session</h1>
                <p>Select from our thrilling range of scripts and book your session today!</p>

                <form method="GET" action="{{ route('booking') }}" class="mb-4">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="length">Length</label>
                            <select id="length" name="length" class="form-control">
                                <option value="">All</option>
                                <option value="1 hour 30 mins" {{ request()->get('length') == '1 hour 30 mins' ? 'selected' : '' }}>1 hour 30 mins</option>
                                <option value="2 hours" {{ request()->get('length') == '2 hours' ? 'selected' : '' }}>2 hours</option>
                                <option value="2 hours 30 mins" {{ request()->get('length') == '2 hours 30 mins' ? 'selected' : '' }}>2 hours 30 mins</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="tag">Script Type</label>
                            <select id="tag" name="tag" class="form-control">
                                <option value="">All</option>
                                <option value="Horror" {{ request()->get('tag') == 'Horror' ? 'selected' : '' }}>Horror</option>
                                <option value="Crime" {{ request()->get('tag') == 'Crime' ? 'selected' : '' }}>Crime</option>
                                <option value="Mystery" {{ request()->get('tag') == 'Mystery' ? 'selected' : '' }}>Mystery</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="person">Number of Players</label>
                            <select id="person" name="person" class="form-control">
                                <option value="">All</option>
                                <option value="4-6 ppl" {{ request()->get('person') == '4-6 ppl' ? 'selected' : '' }}>4-6 ppl</option>
                                <option value="6-8 ppl" {{ request()->get('person') == '6-8 ppl' ? 'selected' : '' }}>6-8 ppl</option>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Filter</button>
                </form>

                @if (request()->has('length') || request()->has('tag') || request()->has('person'))
                <div class="mb-4">
                    <p>You have selected:</p>
                    <p>
                        @php
                            $selectedFilters = [];
                        @endphp
                        
                        @if (request()->has('length') && request()->get('length') != '')
                            @php
                                $selectedFilters[] = 'Length: ' . request()->get('length');
                            @endphp
                        @endif
                        
                        @if (request()->has('tag') && request()->get('tag') != '')
                            @php
                                $selectedFilters[] = 'Script Type: ' . request()->get('tag');
                            @endphp
                        @endif
                        
                        @if (request()->has('person') && request()->get('person') != '')
                            @php
                                $selectedFilters[] = 'Number of Players: ' . request()->get('person');
                            @endphp
                        @endif
                        
                        {{ implode(' | ', $selectedFilters) }}
                    </p>
                </div>
                @endif

                <p><strong>{{ $scriptItemCount }} script(s) found</strong></p>

                <!-- Display each script item dynamically -->
                <div class="row">
                    @foreach($scriptItems as $scriptItem)
<<<<<<< Updated upstream
                    <div class="col-md-4">
                        <div class="outer">
                            <a href="#">
                                <img src="{{ asset('pictures/' . $scriptItem->picture) }}" alt="{{ $scriptItem->scriptname }}">
                                <div class="details">
                                    <h3>{{ $scriptItem->scriptname }}</h3>
                                    <p class="fas fa-map-marker-alt">Location: {{ $scriptItem->location }}</p>
                                    <p class="far fa-clock"> Date: {{ \Carbon\Carbon::parse($scriptItem->event_date)->format('M d, Y') }}</p>
                                    <p>Price: £{{ number_format($scriptItem->price, 2) }}</p>
                                    <p>Description: {{ $scriptItem->description }}</p>
                                </div>
                            </a>
=======
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset('pictures/' . $scriptItem->picture) }}" class="card-img-top" alt="{{ $scriptItem->scriptname }}">
                            <div class="card-body">
                                <span class="card-tag">{{ $scriptItem->tag }}</span>
                                <span class="card-length">{{ $scriptItem->length }}</span>
                                <span class="card-person">{{ $scriptItem->person }}</span>
                                <h5 class="card-title">{{ $scriptItem->scriptname }}</h5> 
                                <p class="card-tag">{{$scriptItem->tag}}</p>
                                <p class="card-text"><i class="fas fa-map-marker-alt"></i> Location: {{ $scriptItem->location }}</p>
                                <p class="card-text"><i class="far fa-clock"></i> Date: {{ \Carbon\Carbon::parse($scriptItem->event_date)->format('M d, Y') }}</p>
                                <p class="card-price">Price: £{{ number_format($scriptItem->price, 2) }}</p>
                                <p class="card-text"> {{ Str::limit($scriptItem->description, 170) }}</p>
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
>>>>>>> Stashed changes
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>
<<<<<<< Updated upstream
@endsection
=======
@endsection

@section('scripts')
    <script src="{{ asset('js/booking.js') }}"></script>
@endsection
>>>>>>> Stashed changes
