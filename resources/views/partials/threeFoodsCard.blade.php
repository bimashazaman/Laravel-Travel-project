
    <div class="container">

        <div class="parent" align="center">
            <a href="{{ url('/getfoodsByCategory/1') }}">
                <div class="div1">
                    <i class="fa-solid fa-utensils"></i>
                    <h4 style="margin: 10px">
                       {{ __('Restaurants')}}
                    </h4>
                </div>
            </a>
            <a href="{{ url('/getfoodsByCategory/2') }}">
                <div class="div2">
                    <i class="fa-solid fa-wine-bottle"></i>
                    <h4 style="margin: 10px">
                        {{ __('Wineries') }}
                    </h4>
                </div>
            </a>
            <a href="{{ url('/getfoodsByCategory/3') }}">
                <div class="div3">
                    <i class="fa-solid fa-house"></i>
                    <h4 style="margin: 10px">
                        {{ __('Village yards') }}
                    </h4>
                </div>
            </a>

            <a href="{{ url('/getfoodsByCategory/4') }}">
                <div class="div3">
                    <i class="fa-solid fa-martini-glass"></i>
                    <h4 style="margin: 10px">
                        {{ __('Cafe and clubs') }}
                    </h4>
                </div>
            </a>
        </div>
    </div>
