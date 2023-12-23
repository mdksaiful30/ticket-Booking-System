@extends('master')

@section('content')
    <div class="row mt-md-3">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title mb-3 text-primary">Booking a trip</h4>

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
                                    @foreach ($trips as $key => $trip)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $trip->name }}</td>
                                            <td class="ps-md-3">36</td>

                                            <td class="input-group">
                                                <select class="form-select" aria-label="Default select example"
                                                    name="quantity">
                                                    {{-- <option selected>Select Ticket Quantity</option> --}}
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
                                                <button type="submit" class="btn btn-primary" name="trip_id"
                                                    value="{{ $trip->id }}">
                                                    Book
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
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
