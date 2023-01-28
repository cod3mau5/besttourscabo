<div class="widget card text-center border border-success">
    <div class="card-header bg-transparent border-success">
        <h1 class="widget-title my-0 m-font m-color" style="color:rgb(251, 133, 0)">
            <b>@{{ text.book_now.summary.title }}</b>
        </h1>
    </div>
    <hr class="line">
    <div class="summary-block">
        <div class="summary-content">
            <div class="summary-head">
                <h5 class="summary-title">@{{ text.book_now.summary.start_location }}</h5>
            </div>
            <div class="summary-price">
                <p class="summary-text sm_start"></p>
            </div>
        </div>
    </div>
    <hr class="line">
    <div class="summary-block">
        <div class="summary-content">
            <div class="summary-head">
                <h5 class="summary-title">@{{ text.book_now.summary.end_location }}</h5>
            </div>
            <div class="summary-price">
                <p class="summary-text sm_end"></p>
            </div>
        </div>
    </div>
    <hr class="line">
    <div class="summary-block">
        <div class="summary-content">
        <div class="summary-head">
            <div class="summary-head d-none"> <h5 class="summary-title">Unit</h5></div>
            <p class="summary-text sm_unit d-none"></p></div>

            {{-- <hr class="line"> --}}
            <div class="summary-price">
                <div class="summary-head"> <h5 class="summary-title">@{{ text.book_now.summary.trip_type }}</h5></div>
                
                <span class="summary-small-text sm_trip"></span>
            </div>
        </div>
    </div>
    <hr class="line">
    <div class="summary-block">
        <div class="summary-content">
        <div class="summary-head"> <h5 class="summary-title">@{{ text.book_now.summary.total }}</h5></div>
            <div class="summary-price">
                <p class="summary-text sm_price"></p>
            </div>
        </div>
    </div>
</div>