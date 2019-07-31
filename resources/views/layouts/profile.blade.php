<link rel="stylesheet" href="/public/block/profile/style.css">
@if(Auth::guest())
@else
    <div class="main">
    <div class="container">
        <div class="profile">
            <div class="paper_box">
                <div class="info_box">
                    <div class="name_box">
                        {{ Auth::user()->nik }}
                    </div>
                    <div class="locate">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <div class="locate_text">{{ Auth::user()->city }}</div>
                    </div>
                </div>

            </div>
            <div class="photo">
                <img src="{{ Auth::user()->avatar }}" alt="">
            </div>
            <div class="tape_rank">Послушник</div>
        </div>
        <div class="progress_bar_box">
            <div class="progress_line_wrapper_1 progress_line_wrapper">
                <div class="progress_bar_line_1 progress_line_inset"></div>
            </div>
            <div class="progress_circle_wrapper_1 progress_circle_wrapper">
                <div class="progress_circle_line_1 progress_circle_inset"></div>
            </div>
            <div class="progress_line_wrapper_2 progress_line_wrapper">
                <div class="progress_bar_line_2 progress_line_inset"></div>
            </div>
            <div class="progress_circle_wrapper_2 progress_circle_wrapper">
                <div class="progress_circle_line_2 progress_circle_inset"></div>
            </div>
            <div class="progress_line_retush">
                <span class="score_item score_1">0</span>
                <span class="score_item score_2">25</span>
                <span class="score_item score_3">50</span>
                <div class="line_retush_fill"></div>
            </div>
        </div>
    </div>
</div>
@endif