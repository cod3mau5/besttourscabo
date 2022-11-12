@extends('pages.layouts.master')
@section('header_scripts')

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@900&display=swap" rel="stylesheet">

    <style>
        :root{
            --main_blue:#023047;
            --main_orange:#ffb703;
            --secondary_orange:#ff7e00;
        }
                /* helpers */
        .hidden{
            display: none!important;
        }
        .input-error{
            border-color: #9e1317!important;
        }
        .input-success{
            border-color: #016936!important;
        }
        .disabled{
            color: #7F7F7F!important;
            font-weight: 100!important;
        }
        .text-center{
            text-align: center!important;
        }
        .px-0{
            padding-left: 0!important;
            padding-right: 0!important
        }
        .py-0{
            padding-top: 0!important;
            padding-bottom: 0!important;
        }
        .p-1 {
            padding: 1rem !important;
        }
        .p-2 {
            padding: 2rem !important;
        }
        .my-0{
            margin-top: 0!important;
            margin-bottom: 0!important;
        }
        .mx-0{
            margin-left: 0!important;
            margin-right: 0!important;
        }
        .mt-4 {
            margin-top: 4rem !important;
        }
        .mt-3 {
            margin-top: 3rem !important;
        }
        .mt-2 {
            margin-top: 2rem !important;
        }
        .mt-1 {
            margin-top: 1rem !important;
        }
        .ml-1 {
            margin-left: 1rem !important;
        }
        .ml-2 {
            margin-left: 2rem !important;
        }
        .mb-0 {
            margin-bottom: 0 !important;
        }
        .m-auto {
            margin: auto !important;
        }
        .h-100 {
            height: 100% !important;
        }
        .d-flex {
            display: flex !important;
        }
        .polarized {
            background-color: rgba(0, 0, 0, 0.65);
        }
        .h-fit {
            height: fit-content;
        }
        .w-100 {
            width: 100%;
        }
        .date-input {
            cursor: pointer;
        }
        .float-right{
            float: right!important;
        }
        main{
            background: rgb(246,246,246);
            background: radial-gradient(circle, rgba(246,246,246,1) 32%, rgba(246,246,246,0.6839110644257703) 63%, rgba(219,219,219,0.40940126050420167) 81%, rgba(68,68,68,0.4234068627450981) 100%);
            padding-top: 100px;
            padding-bottom: 80px;
            min-height: 100%;
        }
        #cabo_escape .ui.container {
            padding: 1rem 0;
        }
        #cabo_escape .ui.container .father_sticky{
            padding: 0 7px;

        }
        .tour-title {
            text-align: center!important;
            font-family: 'Work Sans', sans-serif;
            background: radial-gradient(circle, var(--main_orange) 10%, var(--secondary_orange) 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 0;
            font-size: 42px;
        }
        .tour-title:before{
            bottom: 2px;
            color: #023047;
            content: attr(title);
            left: 9px;
            position: absolute;
            text-shadow: none;
            transform-origin: bottom left;
            transform: skew(20deg) scale(1, 0.95);
            z-index: -1;
        }
        .grid-gallery > div{
            width: 100%;
            height: 250px;
            background-size: cover;
        }
        .grid-gallery > a > div{
            background-size: cover;
        }
        .shadow-image {
            bottom: 0;
            z-index: 2;
            width: 100%;
            height: 70px;
            position: absolute;
            background-image: linear-gradient(to bottom,rgba(0,0,0,0),rgba(0,0,0,.77));
        }
        .swiper-pagination-bullet{
            background:#FFF;
            opacity:1;
        }
        .swiper-pagination-bullet-active{
            background: var(--main_orange)!important;
        }
        .swiper-horizontal>.swiper-pagination-bullets, .swiper-pagination-bullets.swiper-pagination-horizontal, .swiper-pagination-custom, .swiper-pagination-fraction{
            bottom: 1px !important;
        }
        @media(min-width: 920px){
            .grid-gallery > a{
                width: unset;
                height: unset;
            }
            .grid-gallery{
                display: grid;
                grid-template-columns: 3fr 1fr 1fr;
                grid-template-rows: 6fr 3.5fr;
                grid-gap: 7px;
                height: 360px;
                font-size: 30px;
                margin-left: auto;
                margin-right: auto;
            }

            .grid-gallery > a:nth-child(1){
                grid-row-start: 1;
                grid-row-end: 3;
            }
            .grid-gallery > a:nth-child(2){
                grid-column-start: 2;
                grid-column-end: 4
            }
            .tour-title {
                padding-top: 1rem;
                margin-bottom:2rem;
            }

        }
      /*====================================
          STEPS
      ====================================*/
        .steps {
            position: relative;
            overflow: hidden;
            counter-reset: wizard;
            width: 100%;
            margin: 10px auto;
        }
        .steps li {
            position: relative;
            float: left;
            width: 33.3%;
            text-align: center;
            color: var(--main_blue);
            font-weight: bolder;
            cursor: pointer!important;
        }
        .current ~ li {
            color: black;
        }
        .steps li:before {
            font-weight: bolder;
            counter-increment: wizard;
            content: counter(wizard);
            display: block;
            color: var(--main_blue);
            background-color: var(--main_orange);
            border: 2px solid var(--main_orange);
            text-align: center;
            width: 2em;
            height: 2em;
            line-height: 2em;
            border-radius: 2em;
            position: relative;
            left: 50%;
            margin-bottom: 1em;
            margin-left: -1em;
            z-index: 6;
        }
        .current ~ li:before {
            background-color: var(--main_blue);
            color: #FFF;
            border-color: var(--main_blue);
        }
        .steps li + li:after {
            content: "";
            display: block;
            width: 100%;
            background-color: var(--main_orange);
            height: 2px;
            position: absolute;
            left: -50%;
            top: 1em;
            z-index: 5;
        }
        .current ~ li:after {
            background-color: #555;
        }
        #features_price{
            background: #fff;
            padding: 1rem;
            margin: 3rem .3rem;
            border-radius: 0.28571429rem;
            box-shadow: 1px 1px 48px -6px rgba(0,0,0,0.37);
            -webkit-box-shadow: 1px 1px 48px -6px rgba(0,0,0,0.37);
            -moz-box-shadow: 1px 1px 48px -6px rgba(0,0,0,0.37);
        }
        #features_price > .column{
            padding-left: .5rem;
            padding-right: .5rem;
        }
        #features{
            padding-right: 1.3rem;
        }
        #features i{
            font-size: 1.25rem;
            margin-top:.5rem
        }
        #features .row .column{
            padding-right: .77rem;
            padding-left: .77rem;
            text-align: center;
        }
        #duration .column{
            text-align: center
        }
        #duration .column i{
            font-size: 1.5rem;
        }
        #price .column{
            text-align: center;
        }
        #price .card-price{
            text-align: center;
        }
        #price p:nth-child(2){
            position: relative;
            bottom: 1.3em;
        }
        #price small{
            position: relative;
            bottom: -1.7rem;
            color: #6c757d;
            font-size: 97%;
            line-height: 0;
        }
        #price .ui.orange.label{
            font-size: 21px;
        }
        .description .title{
            text-align: center;
            padding-left: 10px!important;
            padding-right: 10px!important;
        }
        .description #what_to_know{
            padding-bottom: 1rem;
        }
        #back-button-container{
            float: left;
            background-color: var(--main_blue)!important;
            color: white !important;
            padding-left: 2.7rem!important;
            padding-top: 0.6rem;
            padding-bottom: 0.6rem;
            margin-bottom: 1.5rem;
        }
        .button-container {
            float: right;
            background-color: var(--secondary_orange)!important;
            color: white !important;
            margin-top:30px!important;
        }
        footer {
            padding: 3.5rem 0!important;
        }
        #features_price .up.divider{
                display:none;
        }
        #features_price h5{
            margin-top:0;
            text-align: left;
        }
        #location p{
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #location p small {
            display: contents;
        }
        #location p i{
            margin:0 1rem;
            font-size: 3.4rem;
        }
        .filler{
            height: 100%;
            width: 100%;
        }
        form select.dropdown{
            background-color: whitesmoke;
        }
        #location:hover{
            cursor: pointer;
        }
        .image.content{
            height: 80vh;
            padding-top: 75px!important;
        }
        /*====================================
            GOOGLE MAP
        ====================================*/
        #map {
            height: 100%;
            width: 100%;
        }
        .ui.dropdown, input{
            margin: 0;
            max-width: 100%;
            -webkit-box-flex: 1;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            outline: 0;
            -webkit-tap-highlight-color: rgba(255,255,255,0);
            text-align: left;
            line-height: 1.21428571em;
            font-family: Lato,'Helvetica Neue',Arial,Helvetica,sans-serif;
            padding: 0.67857143em 1em;
            background: #fff;
            border: 1px solid rgba(34,36,38,.15);
            color: rgba(0,0,0,.87);
            border-radius: 0.28571429rem;
            -webkit-transition: border-color .1s ease,-webkit-box-shadow .1s ease;
            transition: border-color .1s ease,-webkit-box-shadow .1s ease;
            transition: box-shadow .1s ease,border-color .1s ease;
            transition: box-shadow .1s ease,border-color .1s ease,-webkit-box-shadow .1s ease;
            -webkit-box-shadow: none;
            box-shadow: none;
        }
        @media only screen and (min-width:1200px) {}
        @media only screen and (min-width:1100px) {
            .image.content{
                height: 80vh;
                padding-top:115px!important;
            }
        }
        @media only screen and (max-width:920px) {}
        @media only screen and (max-width:840px) {}
        @media only screen and (max-width:767px) {
            footer {
                display:none;
            }
            #features_price > .column{
                padding-top: 0!important;
                padding-bottom: 0!important;
            }

            main > .ui.container{
                margin-left:0px!important;
                margin-right:0px!important;
            }

            .button-container{
                position: fixed!important;
                bottom: 7px;
                z-index: 11;
                width: calc(100% - 14px);
                height: 41.3px!important;
                margin: 0 auto!important;
            }
            #price p:nth-child(2){
                position: relative;
                bottom:20px;
                margin-top:0;
            }
        }
        @media only screen and (max-width:480px) {
            #features_price h5{
                margin-top:1rem;
                text-align: center;
            }
            #features_price .down.divider{
                display:none;
            }

            #features_price .up.divider{
                display:block;
            }

        }
        @media only screen and (max-width: 767px){
            .ui.modal .content>.description{
                padding-top: 75px!important;
            }
            form .ui.grid{
                padding-left: 0.6rem!important;
                padding-right: 0.6rem!important;
            }
            .ui.grid>.column:not(.row), .ui.grid>.row>.column{
                padding-left: .25rem!important;
                padding-right: .25rem!important;
            }
        }
        @media only screen and (max-width:320px) {}
        .mbsc-calendar-cell.mbsc-flex-1-0-0.mbsc-calendar-day.mbsc-ios.mbsc-ltr.mbsc-hb > div:nth-child(1),
        .mbsc-scroller-wheel-item.mbsc-ios.mbsc-ltr.xxxxmbsc-scroller-wheel-item-2d > div:nth-child(1),
        .mbsc-scroller-wheel-item.mbsc-ios.mbsc-ltr.mbsc-scroller-wheel-item-2d.mbsc-selected > div:nth-child(1),
        .mbsc-calendar-cell.mbsc-flex-1-0-0.mbsc-calendar-day.mbsc-ios.mbsc-ltr > div:nth-child(1),
        .mbsc-calendar-cell.mbsc-flex-1-0-0.mbsc-calendar-day.mbsc-material.mbsc-ltr > div:nth-child(1){
            display: none !important;
        }
        #trial-message{
            display: none !important;
        }
        #paypal-button-container{
            text-align: center;
        }
        #paypal-button{
            margin: 1.3rem;
        }
        .field .iti{
            width: 100%!important;
        }


        /*
 *	TICKET
 *	---------------------------------------------
 */

.ticket-wrap {
	text-align: center;
    min-width: 64%;
}

.ticket {
    width:100%;
	display: inline-block;
	margin: 0 auto;
	border: 2px solid #9facbc;
	font-family: "Variable Bahnschrift", "FF DIN", "Franklin Gothic", "Helvetica Neue", sans-serif;
	font-feature-settings: "kern" 1;
	background: #fff;
}

.ticket__header {
	margin: 0;
	padding: 1.5em;
	background: #f4f5f6;
}

.ticket__co span,
.ticket__route span {
	display: block;
}

.ticket__co {
	display: flex;
    justify-content:center;
	line-height: 1;
	color: #5e7186;
    align-items: center;
}

.ticket__co-icon {
	position: absolute;
	top: 50%;
	margin-top: -2em;
	left: 0;
	width: 4em;
	height: auto;
}

.ticket__co-name {
	font-size: 1.85rem;
	font-variation-settings: "wght" 500, "wdth" 75;
	letter-spacing: -.01em;
}

.ticket__co-subname {
	font-variation-settings: "wght" 700;
	color: #506072;
}

.ticket__body {
	padding: 2rem 1.25em 1.25em;
}

.ticket__route {
	font-variation-settings: "wght" 300;
	font-size: 2em;
	line-height: 1.1;
}

.ticket__description {
	margin-top: .5em;
	font-variation-settings: "wght" 350;
	font-size: 1.125em;
	color: #506072;
}

.ticket__timing {
	display: flex;
    justify-content: space-around;
	align-items: center;
	margin-top: 1rem;
	padding: 1rem 0;
	border-top: 2px solid #9facbc;
	border-bottom: 2px solid #9facbc;
	text-align: left;
}

.ticket__timing p {
	margin: 0 1rem 0 0;
	padding-right: 1rem;
	border-right: 2px solid #9facbc;
	line-height: 1;
}

.ticket__timing p:last-child {
	margin: 0;
	padding: 0;
	border-right: 0;
}

.ticket__small-label {
	display: block;
	margin-bottom: .5em;
	font-variation-settings: "wght" 300;
	font-size: .875em;
	color: #506072;
}

.ticket__detail {
	font-variation-settings: "wght" 700;
	font-size: 1.25em;
	color: #424f5e;
}

.ticket__admit {
	margin-top: 0.5rem;
	font-size: 2.5em;
	font-variation-settings: "wght" 700, "wdth" 85;
	line-height: 1;
	color: #657990;
}

.ticket__fine-print {
    margin-top: 1rem;
    font-size: 2.3rem;
    color: rgb(48, 48, 48);
    margin-bottom: 0px;
}

.ticket__barcode {
	margin-top: 1.25em;
	width: 299px;
	max-width: 100%;
}

@media (min-width: 36em) {
	.ticket-wrap {
		margin-bottom: 4em;
		text-align: center;
	}

	.ticket {
		margin: 0 auto;
		transform: rotate(0deg);
	}

	.ticket__header {
		margin: 0;
		padding: 2em;
	}

	.ticket__body {
		padding: 3rem 2em 2em;
	}

	.ticket__detail {
		font-size: 1.75em;
	}

	.ticket__admit {
		margin-top: 0.5rem;
	}
}

@supports (display: grid) {
	@media (min-width: 72em) {
		.ticket-info,
		.ticket-wrap {
			align-self: center;
		}

		.ticket-wrap {
			order: 2;
			margin-bottom: 0;
		}

		.ticket-info {
			order: 1;
		}
	}
}

    </style>

@endsection
@section('content')

<main id="cabo_escape">
    <div class="ui container">


        <div class="father_sticky">
            <ol class="steps">
                <li :class="step==1 ? 'current' : ''">Details</li>
                <li :class="step==2 ? 'current' : ''">Date</li>
                <li :class="step==3 ? 'current' : ''">Payment</li>
            </ol>

            <div class="ui sixteen column grid">
                <div class="row">
                    <a class="ui left labeled icon button"
                        id="back-button-container"
                        @if (!empty($voucher) && !empty($token))
                            href="{{ route('cabo_escape',[$voucher,$token]) }}"
                            @else
                            href="#"
                        @endif
                        type="button"
                    >
                        <i class="left arrow icon"></i>
                        Back
                    </a>
                </div>
            </div>


            <div v-show="step==3">
                    <div  class="ui cards" style="justify-content: center">
                        <div class="l-col-right ticket-wrap">
                            <div class="ticket" aria-hidden="true">
                              <div class="ticket__header">
                                <div class="ticket__co">
                                    <i class="fa-solid fa-ticket" style="font-size: 2.3rem;float:left;"></i>
                                    <span class="ticket__co-name" style="margin-left:.5rem">{{ $reservation->tour_name }}</span>
                                </div>
                              </div>
                              <div class="ticket__body">
                                <p class="ticket__route">SUMMARY</p>
                                <p class="ticket__description">please make sure your information is correct</p>
                                <div class="ticket__timing">
                                  <p>
                                    <span class="u-upper ticket__small-label">Date:</span>
                                    <span class="ticket__detail">{{$reservation->tour_day}}</span>
                                     <br/>
                                  </p>
                                  <p>
                                    <span class="u-upper ticket__small-label">Time:</span>
                                    <span class="ticket__detail">{{$reservation->tour_time}}</span>
                                  </p>
                                  <p>
                                    <span class="u-upper ticket__small-label">Adults:</span>
                                    <span class="ticket__detail">{{$reservation->adults}}</span>
                                  </p>
                                  @if(!empty($reservation->kids))
                                  <p>
                                    <span class="u-upper ticket__small-label">Kids:</span>
                                    <span class="ticket__detail">{{$reservation->kids}}</span>
                                  </p>
                                  @endif
                                  {{-- <p>
                                    <span class="u-upper ticket__small-label">Tour duration:</span>
                                    <span class="ticket__detail">{{$reservation->duration}}</span>
                                  </p> --}}
                                </div>
                                <p class="ticket__fine-print">Total:</p>
                                @php $total= (float)$reservation->subtotal @endphp
                                <p class="u-upper ticket__admit">${{ number_format($total,2) }} USD</p>
                                <div id="paypal-button-container">
                                    <div id="paypal-button" class="text-center"></div>
                                </div>
                                <img class="ticket__barcode"
                                src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/515428/barcode.png"
                                alt="barcode" />
                            </div>
                            </div>
                        </div>
                    </div>

            </div>


        </div>
    </div>
</main>

@endsection

@section('footer_scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fomantic-ui/2.8.8/semantic.min.js"></script>

    {{-- PAYPAL INTEGRATION --}}
    <script src="https://www.paypal.com/sdk/js?client-id={{ env('PAYPAL_CLIENT_ID') }}&locale=en_US&currency=USD"></script>

    {{-- VueJs 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        var app = new Vue({
            el: '#app',
            data: {
                page: 'loading',
                step:3,
            },
            beforeMount(){
                this.page='loading';
            },
            mounted() {
                this.page='loaded';
                paypal.Buttons({
                        // fundingSource: paypal.FUNDING.CARD,
                        createOrder: function(data, actions) {
                            return actions.order.create({
                                intent: 'CAPTURE',
                                application_context: {
                                    shipping_preference: "NO_SHIPPING"
                                },
                                payer: {
                                    email_address: '{{ $reservation->email }}',
                                    phone: {
                                        phone_type: "MOBILE",
                                        phone_number: { national_number: "526242640804" }
                                    }
                                },
                                purchase_units: [{
                                    amount: {
                                        value: parseFloat('{{ $reservation->subtotal }}').toFixed(2)
                                    }
                                }]
                            });
                        },
                        onApprove: function(data, actions) {
                            return fetch('/paypal/process/'+data.orderID+'/{{$reservation->voucher}}', { method:'GET' }
                            )
                            .then(res => res.json())
                            .then(function(orderData){
                                var errorDetail= Array.isArray(orderData.details) && orderData.details[0];
                                if (errorDetail && errorDetail.issue === 'INSTRUMENT_DECLINED'){
                                    return actions.restart();
                                }

                                if(errorDetail){
                                    var msg = 'Sorry, your transaction could not be processed.';
                                    if(errorDetail.description) msg+= ' ('+orderData.debug_id+')';
                                    return alert(msg);
                                }
                                console.log(orderData);
                                location.href= '{{url("/payment_successfull/")}}'+'/'+orderData.data.payer.name.given_name;
                                alert('Transaction completed by '+orderData.data.payer.name.given_name);
                            });
                        },
                        onError: function(err){
                            console.log('hubo un error:  '+err);
                        }
                }).render('#paypal-button');

            },
            methods:{
                backStep: function(e){
                    e.preventDefault();
                    let total= this.calcTotal();
                    let step = this.step;
                    this.page='loading';
                    this.step !== 1 ? this.step=this.step-1 : this.step=this.step;
                    // $('#inline_calendar').calendar();
                    this.page='loaded';
                },

            }
        })
    </script>

@endsection
