jQuery(document).ready(function($) {
    localStorage.setItem('step','null');
    var start = $('#start_location option:selected').text();
    var end   = $('#end_location option:selected').text();



    if (start != '') {
        $('.from').html( $('#start_location option:selected').text() );
        $('.sm_start').html(start);
    }
    if (end != '') {
        $('.to').html( $('#end_location option:selected').text() );
        $('.sm_end').html(end);
    }

    $('#form_step1').validate();
    $('#form_step2').validate();

    fetchLocationZone(rates);

    if ($('#trip_type').val() == 'r') {
        var start = $('#start_location option:selected').text();
        var end   = $('#end_location option:selected').text();
        $('.from').html(start);
        $('.to').html(end);
        $('.sm_start').html(start);
        $('.sm_end').html(end);
        $('#departure_flight_details').show();
    }

    $('#trip_type').on('change', function() {
        $('.sm_price').html('');
        $('.sm_unit').html('');
        if ($(this).val() == 'r') {
            if($('#language').val() == "1"){
                $('.sm_trip').html('roundtrip');
            }else{
                $('.sm_trip').html('De Ida y Vuelta');
            }
            $('#departure_flight_details').slideDown();
        } else {
            if($('#language').val() == "1"){
                $('.sm_trip').html('oneway');
            }else{
                $('.sm_trip').html('De Ida');
            }
            $('#departure_flight_details').slideUp();
        }
        fetchLocationZone(rates);
    });
    $('#start_location').on('change', function() {
        if ($(this).val() == 0) {
            $('#end_location').html(resort_options);
        } else {
            $('#end_location').html('<option value="0">Los Cabos Int. Airport</option>');
            $('.sm_end').html('Los Cabos Airport');
        }
        var start = $('#start_location option:selected').text();
        var end   = $('#end_location option:selected').text();
        $('.from').html( $('#start_location option:selected').text() );
        $('.to').html( $('#end_location option:selected').text() );

        $('.sm_start').html(start);
        $('.sm_end').html(end);

        fetchLocationZone(rates);
    });
    $('#end_location').on('change', function() {
        var end   = $('#end_location option:selected').text();
        $('.to').html( $('#end_location option:selected').text() );
        $('.sm_end').html(end);
        fetchLocationZone(rates);
    });
    $('#passengers').on('change', function() {
        fetchLocationZone(rates);
    });
    $('#children').on('change', function() {
        fetchLocationZone(rates);
    });
    $('#vehicle').on('change', function() {
        var price = $('#vehicle option:selected').data('price');
        var name  = $('#vehicle option:selected').data('name');
        $('.sm_price').html('$ ' + price + ' usd');
        $('.info_price').html('$ ' + price + ' usd');
        $('#_subtotal').val(price);
        $('#_total').val(price);
        $('.sm_unit').html(name);
    });
    $('#shopping_stop').on('change', function() {
        checkShoppingStop();
    });

    //date & time picker
    $('#arrival_date').datetimepicker({
        format: 'MM/DD/YYYY',
        minDate: moment()
    });
    $('#departure_date').datetimepicker({
        format: 'MM/DD/YYYY',
        useCurrent: false //Important! See issue #1075
    });
    $("#arrival_date").on("dp.change", function (e) {
        if ($('#departure_date').length) {
            $('#departure_date').data("DateTimePicker").minDate(e.date);
        }
    });
    $("#departure_date").on("dp.change", function (e) {
        $('#arrival_date').data("DateTimePicker").maxDate(e.date);
    });
    $('#departure_time').datetimepicker({
        format: 'LT'
    });
    $('#arrival_time').datetimepicker({
        format: 'LT'
    });

    function checkShoppingStop(){
        if(app.specialRequest.shoppingStop){
            var shoppingStop= 25;
            var price = Number($('#_total').val());

            var price = Number(price) + Number(shoppingStop)+'.00';
            console.log("el precio es: "+price)
            $('.sm_price').html('$ ' + price + ' usd');
            $('.info_price').html('$ ' + price + ' usd');
            $('#_subtotal').val(price);
            $('#_total').val(price);
        }else{
            var shoppingStop= 25;
            var price = Number($('#_total').val());
            var price = Number(price) - Number(shoppingStop)+'.00';

            $('.sm_price').html('$ ' + price + ' usd');
            $('.info_price').html('$ ' + price + ' usd');
            $('#_subtotal').val(price);
            $('#_total').val(price);
        }
    }
    function fetchLocationZone(rates)
    {
        var startLocation = $('#start_location').val();
        var endLocation   = $('#end_location').val();

        if ($('#trip_type').val())
        {
            var zone = null;

            if (startLocation != 0 || endLocation != 0)
            {
                if (startLocation != 0)
                    zone = $('#start_location option:selected').data('zone');

                if (endLocation != 0)
                    zone = $('#end_location option:selected').data('zone');
            }

            updateZoneUnits(zone, rates);
            if(app.specialRequest.shoppingStop){
                checkShoppingStop();
            }
        }
    }
    function updateZoneUnits(zone, rates)
    {
        var options = '<option value="" disabled="" selected="selected" style="display:none">Type of vehicle</option>';
        var pax = 1;

        if ($('#passengers').val()){
            pax = Number($('#passengers').val()) + Number($('#children').val());
        }

        for (i=0; i<=Object.keys(rates).length; i++)
        {
            if (rates[i] != undefined && rates[i].zone_id == zone)
            {
                var unit_id  = rates[i].unit_id;
                var capacity = Number(units[unit_id].capacity);
                var unitName = units[unit_id].name;
                var price    = $('#trip_type').val() == 'o' ? rates[i].oneway : rates[i].roundtrip;
                if (pax <= capacity)
                {
                    options +=  '<option value="'+unit_id+'" data-price="'+price+'" data-name="'+unitName+'">'+
                                    unitName +' from $ '+ price + ' USD '+
                                '</option>';
                }else{
                    var price    = $('#trip_type').val() == 'o' ? rates[i].privateoneway : rates[i].privateroundtrip;
                    // price=price+'.00';
                    options +=  '<option value="'+1+'" data-price="'+price+'" data-name="'+unitName+'">'+
                    unitName +' from $ '+ price + ' USD '+
                '</option>';
                }
            }
        }

        $('#vehicle').html(options);
        // FOR ONLY SUBURBAN
        $('#vehicle option:eq(1)').attr('selected','select');
        $('.sm_price').html('');
        $('.sm_unit').html('');


        if(price != undefined){
            var price = $('#vehicle option:selected').data('price');
            var name  = $('#vehicle option:selected').data('name');
            $('.sm_price').html('$ ' + price + ' usd');
            $('.info_price').html('$ ' + price + ' usd');
            $('#_subtotal').val(price);
            $('#_total').val(price);
        }
        $('.sm_unit').html(name);
    }

});
(
    function (e) {
        var n = function (d, k) {
            d = e(d);
            var a = this,
                g = [],
                c = e.extend({}, e.fn.bootstrapWizard.defaults, k),
                f = null,
                b = null;
            this.rebindClick = function (h, a) {
                h.unbind("click", a).bind("click", a)
            };
            this.fixNavigationButtons = function () {
                f.length || (b.find("a:first").tab("show"), f = b.find('li:has([data-toggle="tab"]):first'));
                e(c.previousSelector, d).toggleClass("hidden", a.firstIndex() >= a.currentIndex());
                // e(c.nextSelector, d).toggleClass("disabled", a.currentIndex() >= a.navigationLength());
                e(c.backSelector, d).toggleClass("disabled",
                    0 == g.length);
                a.rebindClick(e(c.nextSelector, d), a.next);
                a.rebindClick(e(c.previousSelector, d), a.previous);
                a.rebindClick(e(c.lastSelector, d), a.last);
                a.rebindClick(e(c.firstSelector, d), a.first);
                a.rebindClick(e(c.backSelector, d), a.back);
                if (c.onTabShow && "function" === typeof c.onTabShow && !1 === c.onTabShow(f, b, a.currentIndex())) return !1
            };
            this.next = function (h) {
                if (
                    $('#step1').hasClass('active') &&
                    $('#form_step1').valid()
                    )
                {
                    var trip_type       = $('#trip_type').val();
                    var start_location  = $('#start_location option:selected').text();
                    var start_id        = $('#start_location').val();
                    var transport_type  = (trip_type == 'r') ? 'Round-trip' : 'One way';
                    var num_passengers  = $('#passengers').val();
                    var num_children  = $('#children').val();
                    var selectedCar     = $('#vehicle option:selected').text();
                    var unit_id         = $('#vehicle').val();
                    var end_location    = $('#end_location option:selected').text();
                    var end_id          = $('#end_location').val();

                    var arrival_date    = $('#arrival_date').val();
                    var arrival_time    = $('#arrival_time').val();
                    var arrival_airline = $('#arrival_airline option:selected').text();
                    var arrival_flight  = $('#arrival_flight').val();

                    $('.departure_block').hide();

                    if (trip_type == 'r')
                    {
                        $('.departure_block').show();
                        var departure_date    = $('#departure_date').val();
                        var departure_time    = $('#departure_time').val();
                        var departure_airline = $('#departure_airline option:selected').text();
                        var departure_flight  = $('#departure_flight').val();
                    }

                    $('#_trip_type').val(trip_type);
                    $('#_location_start').val(start_id);
                    $('#_location_end').val(end_id);
                    $('#_passengers').val(num_passengers);
                    $('#_children').val(num_children);
                    $('#_unit').val(unit_id);
                    $('#_arrival_date').val(arrival_date);
                    $('#_arrival_time').val(arrival_time);
                    $('#_arrival_company').val(arrival_airline);
                    $('#_arrival_flight').val(arrival_flight);

                    if (trip_type == 'r')
                    {
                        $('.departure_block').show();
                        var departure_date    = $('#departure_date').val();
                        var departure_time    = $('#departure_time').val();
                        var departure_airline = $('#departure_airline option:selected').text();
                        var departure_flight  = $('#departure_flight').val();
                        $('#_departure_date').val(departure_date);
                        $('#_departure_time').val(departure_time);
                        $('#_departure_company').val(departure_airline);
                        $('#_departure_flight').val(departure_flight);
                    }

                    $('.info_start_location').html(start_location);
                    $('.info_trip_type').html(transport_type);
                    $('.info_passengers').html(num_passengers);
                    $('.info_children').html(num_children);
                    $('.info_vehicle').html(selectedCar);
                    $('.info_arrival_fight').html(arrival_flight);
                    $('.info_arrival_airline').html(arrival_airline);
                    $('.info_arrival_time').html(arrival_date+" "+arrival_time);
                    $('.info_departure_fight').html(departure_flight);
                    $('.info_departure_airline').html(departure_airline);
                    $('.info_departure_time').html(departure_date+" "+departure_time);
                    $('.info_end_location').html(end_location);

                    $('#nav-step2 a').attr('href', '#step2');
                    $('#bookTabs li:eq(1) a').tab('show');
                    localStorage.setItem('step',2);
                    console.log('step 1');
                    console.log(localStorage.getItem('step'));
                }else if($('#step2').hasClass('active') && $('#form_step2').valid() ){

                        var first_name      = $('#first_name').val();
                        var last_name       = $('#last_name').val();
                        var email           = $('#email').val();
                        var primary_phone   = $('#primary_phone').val();
                        var mobile_phone    = $('#mobile').val();
                        var request         = $('#request').val();

                        $('.info_fullname').html(first_name+" "+last_name);
                        $('.info_email').html(email);
                        $('.info_phone').html(primary_phone);
                        $('.info_mobile').html(mobile_phone);
                        $('.info_request').html(request);

                        $('#_contact_firstname').val($('#first_name').val());
                        $('#_contact_lastname').val($('#last_name').val());
                        $('#_contact_email').val($('#email').val());
                        $('#_contact_phone').val($('#primary_phone').val());
                        $('#_contact_mobile').val($('#mobile').val());
                        $('#_contact_request').val($('#request').val());

                        $('#paypal_firstname').val($('#first_name').val());
                        $('#paypal_lastname').val($('#last_name').val());
                        $('#paypal_email').val($('#email').val());

                        $('#nav-step3 a').attr('href', '#step3');
                        $('#bookTabs li:eq(2) a').tab('show');
                        console.log('step 2');
                        if($('#form_step2').valid() || $('#step2').hasClass('active')){
                            localStorage.setItem('step',3);
                            console.log(localStorage.getItem('step'));
                        }


                }else if(localStorage.getItem('step') == 3 && $('#step3').hasClass('active')){
                    localStorage.setItem('step','final');
                }else{
                    localStorage.setItem('step',null);
                    console.log('step null from second');
                }

                if( (localStorage.getItem('step') == 2 && $('#form_step2').valid()) || (localStorage.getItem('step') == 3 && $('#form_step2').valid()) ){
                    if(localStorage.getItem('step') == 3 && $('#step2').hasClass('active')){
                        $('.go_step2').addClass('btn-success');
                        $('.go_step2').removeClass('btn-primary');
                        $('#language').val() == "1" ? $('.go_step2').html('Finish Booking') : $('.go_step2').html('Finalizar Reserva');
                    }else if($('#step2').hasClass('active') && localStorage.getItem('step') == 2){
                        $('.go_step2').addClass('btn-success');
                        $('.go_step2').removeClass('btn-primary');
                        $('#language').val() == "1" ?  $('.go_step2').html('Finish Booking') : $('.go_step2').html('Finalizar Reserva');
                    }
                    $('#stepTwo').css('pointer-events','auto');
                    $('#stepTree').css('pointer-events','auto');
                    if (d.hasClass("last") || c.onNext && "function" === typeof c.onNext && !1 === c.onNext(f, b, a.nextIndex())) return !1;
                        h = a.currentIndex();
                        $index = a.nextIndex();
                        $index >
                        a.navigationLength() || (g.push(h), b.find('li:has([data-toggle="tab"]):eq(' + $index + ") a").tab("show"))
                        $('#stepTwo').css('pointer-events','none');
                        $('#stepTree').css('pointer-events','none');
                }else if(localStorage.getItem('step') == 'final' && $('#step3').hasClass('active')){
                    $('#sendReservation').click();
                }else{
                    localStorage.setItem('step',null);
                }
            };
            this.previous = function (h) {
                if( $('#step2').hasClass('active') || $('#step3').hasClass('active')){
                    $('.go_step2').removeClass('btn-success');
                    $('.go_step2').addClass('btn-primary');
                    $('.go_step2').html(app.text.book_now.form.buttons.next); // acces to traduction variable in vue
                    localStorage.setItem('step',2);
                }
                if (d.hasClass("first") || c.onPrevious && "function" === typeof c.onPrevious && !1 === c.onPrevious(f, b, a.previousIndex())) return !1;
                h = a.currentIndex();
                $index = a.previousIndex();
                0 > $index || (g.push(h), b.find('li:has([data-toggle="tab"]):eq(' + $index + ") a").tab("show"))
            };
            this.first = function (h) {
                if (c.onFirst && "function" === typeof c.onFirst && !1 === c.onFirst(f, b, a.firstIndex()) || d.hasClass("disabled")) return !1;
                g.push(a.currentIndex());
                b.find('li:has([data-toggle="tab"]):eq(0) a').tab("show")
            };
            this.last = function (h) {
                if (c.onLast && "function" === typeof c.onLast && !1 === c.onLast(f, b, a.lastIndex()) || d.hasClass("")) return !1;
                g.push(a.currentIndex());
                b.find('li:has([data-toggle="tab"]):eq(' + a.navigationLength() + ") a").tab("show")
            };
            this.back = function () {
                if (0 == g.length) return null;
                var a = g.pop();
                if (c.onBack && "function" === typeof c.onBack && !1 === c.onBack(f, b, a)) return g.push(a), !1;
                d.find('li:has([data-toggle="tab"]):eq(' +
                    a + ") a").tab("show")
            };
            this.currentIndex = function () {
                return b.find('li:has([data-toggle="tab"])').index(f)
            };
            this.firstIndex = function () {
                return 0
            };
            this.lastIndex = function () {
                return a.navigationLength()
            };
            this.getIndex = function (a) {
                return b.find('li:has([data-toggle="tab"])').index(a)
            };
            this.nextIndex = function () {
                    return b.find('li:has([data-toggle="tab"])').index(f) + 1
            };
            this.previousIndex = function () {
                return b.find('li:has([data-toggle="tab"])').index(f) - 1
            };
            this.navigationLength = function () {
                return b.find('li:has([data-toggle="tab"])').length -
                    1
            };
            this.activeTab = function () {
                return f
            };
            this.nextTab = function () {
                return b.find('li:has([data-toggle="tab"]):eq(' + (a.currentIndex() + 1) + ")").length ? b.find('li:has([data-toggle="tab"]):eq(' + (a.currentIndex() + 1) + ")") : null
            };
            this.previousTab = function () {
                return 0 >= a.currentIndex() ? null : b.find('li:has([data-toggle="tab"]):eq(' + parseInt(a.currentIndex() - 1) + ")")
            };
            this.show = function (b) {
                b = isNaN(b) ? d.find('li:has([data-toggle="tab"]) a[href=#' + b + "]") : d.find('li:has([data-toggle="tab"]):eq(' + b + ") a");
                0 < b.length &&
                    (g.push(a.currentIndex()), b.tab("show"))
            };
            this.disable = function (a) {
                b.find('li:has([data-toggle="tab"]):eq(' + a + ")").addClass("disabled")
            };
            this.enable = function (a) {
                b.find('li:has([data-toggle="tab"]):eq(' + a + ")").removeClass("disabled")
            };
            this.hide = function (a) {
                b.find('li:has([data-toggle="tab"]):eq(' + a + ")").hide()
            };
            this.display = function (a) {
                b.find('li:has([data-toggle="tab"]):eq(' + a + ")").show()
            };
            this.remove = function (a) {
                var c = "undefined" != typeof a[1] ? a[1] : !1;
                a = b.find('li:has([data-toggle="tab"]):eq(' + a[0] +
                    ")");
                c && (c = a.find("a").attr("href"), e(c).remove());
                a.remove()
            };
            var l = function (d) {
                    var g = b.find('li:has([data-toggle="tab"])');
                    d = g.index(e(d.currentTarget).parent('li:has([data-toggle="tab"])'));
                    g = e(g[d]);
                    if (c.onTabClick && "function" === typeof c.onTabClick && !1 === c.onTabClick(f, b, a.currentIndex(), d, g)) return !1
                },
                m = function (d) {
                    $element = e(d.target).parent();
                    d = b.find('li:has([data-toggle="tab"])').index($element);
                    if ($element.hasClass("disabled") || c.onTabChange && "function" === typeof c.onTabChange && !1 === c.onTabChange(f,
                            b, a.currentIndex(), d)) return !1;
                    f = $element;
                    a.fixNavigationButtons()
                };
            this.resetWizard = function () {
                e('a[data-toggle="tab"]', b).off("click", l);
                e('a[data-toggle="tab"]', b).off("shown shown.bs.tab", m);
                b = d.find("ul:first", d);
                f = b.find('li:has([data-toggle="tab"]).active', d);
                e('a[data-toggle="tab"]', b).on("click", l);
                e('a[data-toggle="tab"]', b).on("shown shown.bs.tab", m);
                a.fixNavigationButtons()
            };
            b = d.find("ul:first", d);
            f = b.find('li:has([data-toggle="tab"]).active', d);
            b.hasClass(c.tabClass) || b.addClass(c.tabClass);
            if (c.onInit && "function" === typeof c.onInit) c.onInit(f, b, 0);
            if (c.onShow && "function" === typeof c.onShow) c.onShow(f, b, a.nextIndex());
            e('a[data-toggle="tab"]', b).on("click", l);
            e('a[data-toggle="tab"]', b).on("shown shown.bs.tab", m)
        };
        e.fn.bootstrapWizard = function (d) {
            if ("string" == typeof d) {
                var k = Array.prototype.slice.call(arguments, 1);
                1 === k.length && k.toString();
                return this.data("bootstrapWizard")[d](k)
            }
            return this.each(function (a) {
                a = e(this);
                if (!a.data("bootstrapWizard")) {
                    var g = new n(a, d);
                    a.data("bootstrapWizard",
                        g);
                    g.fixNavigationButtons()
                }
            })
        };
        e.fn.bootstrapWizard.defaults = {
            tabClass: "nav nav-pills",
            nextSelector: ".wizard li.next",
            previousSelector: ".wizard li.previous",
            firstSelector: ".wizard li.first",
            lastSelector: ".wizard li.last",
            backSelector: ".wizard li.back",
            onShow: null,
            onInit: null,
            onNext: null,
            onPrevious: null,
            onLast: null,
            onFirst: null,
            onBack: null,
            onTabChange: null,
            onTabClick: null,
            onTabShow: null
        }
    }
)(jQuery);



