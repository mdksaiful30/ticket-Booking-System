@extends('master')

@section('content')
    <div class="row mt-md-3  ">



        <div class="col-8 ">
            <div class="mb-2">
                <h4 class="text-primary">Add a Bus Trip</h4>
            </div>

            <form action="" method="POST">
                @csrf

                <div class="mb-3">
                    {{-- <label for="productname" class="form-label">Product Name</label> --}}
                    <input class="form-control" type="text" id="productname" name="name" placeholder="Trip Name"
                        required>
                </div>
                <div class="mb-3">
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" name="start_location_id">
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" name="end_location_id">
                            @foreach ($locations as $location)
                                <option value="{{ $location->id }}" {{ $loop->last ? 'selected' : '' }}>
                                    {{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>



                <div class="mb-3">
                    <div class="input-group date" id="datetimepicker" data-target-input="nearest">
                        <input type="date" class="form-control datetimepicker-input" data-target="#datetimepicker"
                            name="date" />
                    </div>
                </div>

                <div class="text-center d-grid">
                    <button class="btn btn-success" type="submit"> Add a Trip </button>
                </div>

        </div>


        </form>
    </div>
    </div>
@endsection
