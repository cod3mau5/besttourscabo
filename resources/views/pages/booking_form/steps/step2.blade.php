<div class="tab-pane" id="step2">
    <div>
    <form id="form_step2">
        {{-- FIRST NAME, LAST NAME --}}
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="first_name" class="form-label">
                        @{{ text.book_now.form.step_contact.first_name }}
                    </label>
                        <input type="text" 
                            class="form-control" 
                            id="first_name" 
                            name="first_name" 
                            :placeholder="text.book_now.form.step_contact.first_name" 
                            required>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="mb-3">
                    <label class="form-label" for="last_name">
                        @{{ text.book_now.form.step_contact.last_name }}
                    </label>
                    <input type="text" 
                    class="form-control" id="last_name" name="last_name" :placeholder="text.book_now.form.step_contact.last_name" required>
                </div>
            </div>
        </div>
        {{-- EMAIL, PHONE NUMBER --}}
        <div class="row">
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="email1" class="form-label">
                        @{{ text.book_now.form.step_contact.email }}
                    </label>
                        <input type="email" class="form-control" id="email" name="email" :placeholder="text.book_now.form.step_contact.email" required="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mb-3">
                    <label for="primary_phone" class="form-label">
                        @{{ text.book_now.form.step_contact.phone_number }}
                    </label>
                        <input type="tel" class="form-control" id="primary_phone" :placeholder="text.book_now.form.step_contact.phone_number" required="">
                </div>
            </div>
        </div>
        {{-- SPECIAL REQUEST --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3">
                    <label class="title fs-5">
                        <b>@{{ text.book_now.form.step_contact.special_request.title }}</b>
                    </label>
                    <p>
                        @{{ text.book_now.form.step_contact.special_request.paragraph }}
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3 ml-2">
                    <label for="booster_seat">
                        <input type="checkbox" 
                                name="booster_seat" 
                                id="booster_seat" 
                                v-model="specialRequest.boosterSeat"
                        >
                        @{{ text.book_now.form.step_contact.special_request.checkboxes.booster_seat.title }}
                    </label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3">
                    <label for="car_seat">
                        <input type="checkbox" 
                                name="car_seat" 
                                id="car_seat"
                                v-model="specialRequest.carSeat"
                        >
                        @{{ text.book_now.form.step_contact.special_request.checkboxes.car_seat.title }}
                    </label>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="mb-3 mb-md-0 mr-2">
                    <label for="shopping_stop" class="mb-0">
                        <input type="checkbox" 
                                name="shopping_stop" 
                                id="shopping_stop" 
                                v-model="specialRequest.shoppingStop"
                        >
                        @{{ text.book_now.form.step_contact.special_request.checkboxes.shopping_stop.title }} <br>
                        <small>
                            @{{ text.book_now.form.step_contact.special_request.checkboxes.shopping_stop.subtitle }}
                        </small>
                    </label>
                </div>
            </div>
        </div>
        {{-- COMMENTS --}}
        <div class="row">
            <div class="col-lg-12">
                <div class="mb-3">
                    <label for="request" class="form-label">
                        @{{ text.book_now.form.step_contact.comments }}
                    </label>
                        <textarea name="request" id="request" cols="30" rows="5" class="form-control"></textarea>
                </div>
            </div>

        </div>
    </form>
    </div>
</div>
{{-- <div class="tab-pane" id="bank-detail">
    <div>
        <form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="basicpill-namecard-input">Name on Card</label>
                        <input type="text" class="form-control" id="basicpill-namecard-input">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label>Credit Card Type</label>
                        <select class="form-select">
                            <option selected>Select Card Type</option>
                            <option value="AE">American Express</option>
                            <option value="VI">Visa</option>
                            <option value="MC">MasterCard</option>
                            <option value="DI">Discover</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="basicpill-cardno-input">Credit Card Number</label>
                        <input type="text" class="form-control" id="basicpill-cardno-input">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="basicpill-card-verification-input">Card Verification Number</label>
                        <input type="text" class="form-control" id="basicpill-card-verification-input">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="mb-3">
                        <label class="form-label" for="basicpill-expiration-input">Expiration Date</label>
                        <input type="text" class="form-control" id="basicpill-expiration-input">
                    </div>
                </div>

            </div>
        </form>
    </div>
</div> --}}