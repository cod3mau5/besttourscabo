@section('summary-header')
    {{-- @include('includes.google-header-conversion') --}}
@endsection
<div class="table-rep-plugin">
    <div class="table-responsive mb-0" data-pattern="priority-columns">
        <table id="tech-companies-1" class="table table-striped table-sm m-0">
            <div class="container">
                <div class="row mb-2">
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.trip_type }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_trip_type"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.start_location }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_start_location"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.end_location }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_end_location"></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.number_travelers }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_passengers"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.number_children }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_children"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.arrival_time }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_arrival_time"></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.arrival_airline }}</strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_arrival_airline"></div>
                    </div>
                    <div class="col-md-6">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.arrival_flight }}</strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_arrival_fight"></div>
                    </div>
                </div>
                <div class="row departure_block">
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.departure_time }}</strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_departure_time"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.departure_airline }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_departure_airline"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.departure_flight }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_departure_fight"></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.name }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_fullname"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.email }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_email"></div>
                    </div>
                    <div class="col-md-4">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.phone }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_phone"></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.aditional_info }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-info info_request"></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.total_price }} </strong><br>
                        <div class="fs-6 text-wrap badge badge-soft-success info_price"></div>
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="col-md-12">
                        <strong class="fs-5">@{{ text.book_now.form.step_details.pay_method }} </strong><br>
                        <span class="fs-6 text-wrap badge badge-soft-warning">@{{ text.book_now.form.step_details.cash }}</span>
                    </div>
                        <label class="pay" style="display:none">
                            <input type="radio" 
                            ame="pay_method" 
                            id="optionsRadios2" 
                            value="cash" 
                            checked="checked"
                            style="display:none">
                            @{{ text.book_now.form.step_details.cash }}
                        </label>
                        {{-- <label class="pay">
                            <input type="radio" name="pay_method" id="optionsRadios1" value="paypal">
                            Paypal
                        </label> --}}
                </div>
            </div>
        </table>
    </div>

</div>