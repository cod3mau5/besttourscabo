<div class="tab-pane" id="step3">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center">
                <div class="mb-4">
                    <i class="mdi mdi-check-circle-outline text-success display-4"></i>
                </div>
                <form action="{{ route('sendReservation') }}" method="POST">
                    @csrf
                    <h5>@{{ text.book_now.form.step_details.title }}</h5>
                    <p class="text-muted">
                        @{{ text.book_now.form.step_details.paragraph }}
                    </p>
                    <div id="summary-details">
                        @include('extras.summary_table')
                        <input type="hidden" name="_trip_type" id="_trip_type" value="">
                        <input type="hidden" name="_location_start" id="_location_start" value="">
                        <input type="hidden" name="_location_end" id="_location_end" value="">
                        <input type="hidden" name="_passengers" id="_passengers" value="">
                        <input type="hidden" name="_children" id="_children" value="">
                        <input type="hidden" name="_unit" id="_unit" value="">
                        <input type="hidden" name="_arrival_date" id="_arrival_date" value="">
                        <input type="hidden" name="_arrival_time" id="_arrival_time" value="">
                        <input type="hidden" name="_arrival_company" id="_arrival_company" value="">
                        <input type="hidden" name="_arrival_flight" id="_arrival_flight" value="">
                        <input type="hidden" name="_departure_date" id="_departure_date" value="">
                        <input type="hidden" name="_departure_time" id="_departure_time" value="">
                        <input type="hidden" name="_departure_company" id="_departure_company" value="">
                        <input type="hidden" name="_departure_flight" id="_departure_flight" value="">
                        <input type="hidden" name="_contact_firstname" id="_contact_firstname" value="">
                        <input type="hidden" name="_contact_lastname" id="_contact_lastname" value="">
                        <input type="hidden" name="_contact_email" id="_contact_email" value="">
                        <input type="hidden" name="_contact_phone" id="_contact_phone" value="">
                        <input type="hidden" 
                                name="_booster_seat" 
                                id="_booster_seat" 
                                v-model="specialRequest.boosterSeat"
                        >
                        <input type="hidden" 
                                name="_car_seat"
                                 id="_car_seat" 
                                 v-model="specialRequest.carSeat"
                        >
                        <input type="hidden" 
                                name="_shopping_stop" 
                                id="_shopping_stop"
                                v-model="specialRequest.shoppingStop"
                        >
                        <input type="hidden" name="_contact_request" id="_contact_request" value="">
                        <input type="hidden" name="_subtotal" id="_subtotal" value="100">
                        <input type="hidden" name="_total" id="_total" value="100">

                        <input type="hidden" name="Paypal[cmd]" value="_xclick" />
                        <input type="hidden" name="Paypal[no_note]" value="1" />
                        <input type="hidden" name="Paypal[lc]" value="en_US" />
                        <input type="hidden" name="Paypal[bn]" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <input type="hidden" name="Paypal[first_name]" id="paypal_firstname" value="firstname" />
                        <input type="hidden" name="Paypal[last_name]" id="paypal_lastname" value="lastname" />
                        <input type="hidden" name="Paypal[payer_email]" id="paypal_email" value="email" />
                        <input type="hidden" name="Paypal[item_number]" value="1" / >
                        <input type="hidden" name="language" id="language" v-model="language">
                    </div>
                    <button type="submit" id="sendReservation" style="display: none"></button>
                </form>
            </div>
        </div>
    </div>
</div>