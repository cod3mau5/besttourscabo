<div class="tab-pane" id="step1" role="tabpanel">
    <form id="form_step1">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    {{-- <label class="form-label" for="basicpill-firstname-input">First name</label>
                    <input type="text" class="form-control" id="basicpill-firstname-input"> --}}
                    <label for="trip_type" class="form-label">@{{ text.book_now.form.step_trip.trip_type }}</label>
                        <select id="trip_type" name="trip_type" class="form-control" required="">
                            <option value="" disabled="" selected="selected" style="display:none">
                                @{{ text.book_now.form.step_trip.trip_type }}
                            </option>

                            <option value="o"
                                <?php 
                                    if (isset($_GET['trip']) && $_GET['trip']=='o') { echo 'selected="selected"'; } 
                                ?>
                            >
                            @{{ text.book_now.form.trip_type.oneway }}
                            </option>

                            <option value="r"
                                <?php 
                                    if (isset($_GET['trip']) && $_GET['trip']=='r') { echo 'selected="selected"'; } 
                                ?>
                            >
                            @{{ text.book_now.form.trip_type.roundtrip }}
                        </option>
                        </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="start_location" class="form-label">
                        @{{ text.book_now.form.step_trip.start_location }}
                    </label>
                    <select id="start_location" name="start_location" class="form-control" required="">
                        <option value="" disabled="" selected="selected" style="display:none">
                            @{{ text.book_now.form.step_trip.start_location }}
                        </option>
                        <option value="0"
                                {{ !empty($start_location) ? 'selected' : '' }}
                        >Los Cabos Int. Airport
                        </option>
                        @foreach ($resorts as $row)
                            <option
                                value="{{ $row->id }}"
                                @if(!empty($start_location))
                                    {{ $row->id == $start_location ? 'selected="selected"' : '' }}
                                @endif
                                data-zone="{{ $row->zone_id }}">
                                {{ $row->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="end_location" class="form-label">@{{ text.book_now.form.step_trip.end_location }}</label>
                        <select id="end_location" name="end_location" class="form-control" required="">
                            <option value="" disabled="" selected="selected" style="display:none">@{{ text.book_now.form.step_trip.end_location }}</option>
                            @if(!empty($end_location))
                                <option value="0" {{ $end_location!='' ? 'selected="selected"' : '' }}>Los Cabos Int. Airport</option>
                            @endif
                            @foreach ($resorts as $row)
                                <option
                                    value="{{ $row->id }}"
                                    @if(!empty($end_location))
                                        {{ $row->id == $end_location ? 'selected="selected"' : '' }} 
                                    @endif
                                    data-zone="{{ $row->zone_id }}">
                                    {{ $row->name }}
                                </option>
                            @endforeach
                        </select>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="passengers" class="form-label">
                        @{{ text.book_now.form.step_trip.number_travelers }}
                    </label>
                    <select id="passengers" name="passengers" class="form-control" required>
                        <option value="" disabled="" selected="selected" style="display:none">
                            @{{ text.book_now.form.step_trip.number_travelers }}
                        </option>
                        @for ($x = 1; $x<=10; $x++)
                            <option value="{{$x}}" @if(!empty($passengers))
                                {{ $x == $passengers ? 'selected="selected"' : '' }} 
                            @endif>
                                {{ $x }}
                            </option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="children" class="form-label">
                        @{{ text.book_now.form.step_trip.children }}
                    </label>
                    <select id="children" name="children" class="form-control" required>
                        <option value="" disabled="" selected="selected" style="display:none">
                           @{{ text.book_now.form.step_trip.children }}
                        </option>
                        @for ($x = 0; $x<=6; $x++)
                            <option value="{{$x}}" 
                            @if(!empty($passengers))
                                {{ $x == $passengers ? 'selected="selected"' : '' }}
                            @endif
                            >
                                {{ $x }}
                            </option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="vehicle" class="form-label">
                        Kind of vehicle
                    </label>
                    <select id="vehicle" name="vehicle" class="form-control" required>
                        <option value="" disabled selected style="display:none">Type of vehicle</option>
                    </select>
                </div>
            </div>
        </div>
        <hr>
        <div id="arrival_flight_details">
            <div class="row">
                <div class="trip_locations">
                    <h1 class="card-title ">
                        <span class="badge bg-primary">
                            @{{ text.book_now.form.step_trip.trip_location_title.name }} #1 
                        </span> 
                        <span v-if="language == '0'">De </span>
                        <span class="from"></span> @{{ text.book_now.form.step_trip.trip_location_title.to }}
                        <span class="to"></span>
                    <h1>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">
                            @{{ text.book_now.form.step_trip.trip1.arrival_date }}
                        </label>
                            <input type="text" class="form-control" id="arrival_date"
                                name="arrival_date" placeholder="m/d/Y"
                                value="@if(!empty($date_arrival)){{ $date_arrival }}@endif"
                                required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="time" class="form-label"> 
                            @{{ text.book_now.form.step_trip.trip1.arrival_flight_time }}
                        </label>
                        <input type="text" class="form-control" id="arrival_time" name="arrival_time" :placeholder="text.book_now.form.step_trip.trip1.arrival_flight_time+' '+ text.book_now.form.step_trip.trip1.arrival" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="airline" class="form-label"> @{{ text.book_now.form.step_trip.trip1.arrival_airline }}</label>
                        <select id="arrival_airline" name="arrival_airline" class="form-control" required>
                            <option value="" disabled selected="selected" style="display:none"> @{{ text.book_now.form.step_trip.trip1.arrival_airline+' '+ text.book_now.form.step_trip.trip1.arrival }}</option>
                            <option value="1">AAL American Airlines</option>
                            <option value="3">AMX Aeromexico</option>
                            <option value="2">ACA Air Canada</option>
                            <option value="3">DL Delta</option>
                            <option value="3">AIJ Interjet</option>
                            <option value="3">ASA Alaska</option>
                            <option value="3">CFV Aero Calafia</option>
                            <option value="3">FT Frontier</option>
                            <option value="3">CXP Xtra Airways</option>
                            <option value="3">WJA Westjet</option>
                            <option value="3">SWA Southwest</option>
                            <option value="3">UAL United Airlines</option>
                            <option value="3">VOI Volaris</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="flight" class="form-label">@{{ text.book_now.form.step_trip.trip1.arrival_flight_number }}</label>
                        <input type="text" class="form-control" name="arrival_flight" id="arrival_flight" :placeholder="text.book_now.form.step_trip.trip1.arrival_flight_number+' '+text.book_now.form.step_trip.trip1.arrival " required>
                    </div>
                </div>
            </div>
        </div>
        <div id="departure_flight_details">
            <hr>
            <div class="row">
                <div class="trip_locations">
                    <h1 class="card-title ">
                        <span class="badge bg-warning">
                            @{{ text.book_now.form.step_trip.trip_location_title.name }} #2 
                        </span> 
                        <span v-if="language == '0'">De </span>
                        <span class="to"></span> @{{ text.book_now.form.step_trip.trip_location_title.to }}
                        <span class="from"></span>
                    </h1>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="date" class="form-label">
                            @{{ text.book_now.form.step_trip.trip2.departure_date }}
                        </label>
                        <input type="text" class="form-control" id="departure_date"
                                name="departure_date" placeholder="m/d/Y">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="time" class="form-label">
                            @{{ text.book_now.form.step_trip.trip2.departure_flight_time }}
                        </label>
                        <input type="text" class="form-control" id="departure_time" name="departure_time" :placeholder="text.book_now.form.step_trip.trip2.departure_flight_time +' '+text.book_now.form.step_trip.trip2.departure" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="airline" class="form-label">
                            @{{ text.book_now.form.step_trip.trip2.departure_airline }}
                        </label>
                        <select id="departure_airline" name="departure_airline" class="form-control" required>
                            <option value="" 
                                    disabled 
                                    selected 
                                    style="display:none">
                                    @{{ text.book_now.form.step_trip.trip2.departure_airline +' '+text.book_now.form.step_trip.trip2.departure }}
                            </option>
                            <option value="1">AAL American Airlines</option>
                            <option value="2">ACA Air Canada</option>
                            <option value="3">AIJ Interjet</option>
                            <option value="3">AL United Airlines</option>
                            <option value="3">AMX Aeromexico</option>
                            <option value="3">ASA Alaska</option>
                            <option value="3">CFV Aero Calafia</option>
                            <option value="3">AMX Aeromexico</option>
                            <option value="3">CXP Xtra Airways</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label for="flight" class="form-label">
                            @{{ text.book_now.form.step_trip.trip2.departure_flight_number }}
                        </label>
                        <input type="text" class="form-control" name="departure_flight" id="departure_flight" :placeholder="text.book_now.form.step_trip.trip2.departure_flight_number +' '+text.book_now.form.step_trip.trip2.departure" required>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>