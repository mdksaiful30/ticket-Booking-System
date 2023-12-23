@extends('master')

@section('content')
    <div class="row mt-md-3">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="header-title mb-3 text-primary">Booking a trip</h4>

                        <a href="{{ route('book.trip') }}" class="btn btn-sm btn-success ms-3">Back</a>


                    </div>
                    <div class="row">
                        <div class="col-6">
                            <h5 class="text-primary"> Journey From: <span
                                    class="text-black font-weight-normal">{{ $booking_info['start_location'] }}</span></h5>
                            <h5 class="text-primary">Journey To: <span
                                    class="text-black font-weight-normal">{{ $booking_info['end_location'] }}</span></h5>
                            <h5 class="text-primary"> Date: <span
                                    class="text-black font-weight-normal">{{ $booking_info['date'] }}</span></h5>
                        </div>
                        <div class="col-6">
                        </div>
                    </div>
                    <form method="post" action="">
                        @csrf

                        <div class="table-responsive">
                            <table class="table table-striped table-sm table-nowrap table-centered mb-0">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>trip Name</th>
                                        <th>Available Ticket</th>
                                        <th>Buying Ticket</th>
                                        <th>Phone Number</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse ($trips as $key => $trip)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $trip->name }}</td>
                                            <td class="ps-md-3">{{ $trip->available_ticket }}</td>

                                            <td class="input-group">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="quantity" {{ $trip->available_ticket == 0 ? 'disabled' : '' }}>

                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>

                                            </td>

                                            <td>
                                                <input type="number" name="quantity_sold[{{ $trip->id }}]"
                                                    min="0">
                                            </td>
                                            <td class="table-action">
                                                @if ($trip->available_ticket > 0)
                                                    <button type="submit" class="btn btn-sm btn-success" name="trip_id"
                                                        value="{{ $trip->id }}">
                                                        Book
                                                    </button>
                                                @else
                                                    <span class="text-danger">Not available </span>
                                                @endif
                                            </td>
                                        </tr>

                                    @empty


                                        <tr>
                                            <td colspan="6" class="text-center">No available buses</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- end table-responsive-->
                    </form>

                </div> <!-- end card-body-->
            </div> <!-- end card-->
        </div>
        <!-- end col-->
    </div>
@endsection
