<div class="three-cards" align="center">
    <h2>
        {{ __('Find Your Tour Here') }}
    </h2>
    <form action="">
        <div class="parentCard">
            <div class="div1Card">
                <div class="single-card">
                    <div style="">
                        <select name="type" id="type"
                            style="border: none; width: 150px; background: transparent; margin-bottom:5%">
                            <option value="">{{ __('Choose Type') }}</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="div2Card">
                <div class="single-card">
                    <select name="type" id="type"
                        style="border: none; background: transparent; margin-bottom:5%">
                        <option value="" style="color: rgb(214, 200, 200)">
                            {{ ' ' . __('Destination') }}
                        </option>
                        @foreach ($destination as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>


            </div>
            <div class="div3Card">
                <div class="single-card"> <input type="text"

              style="
              position: relative;
              margin: auto;
                width: 55%;
                margin-bottom:2%
              "
                        placeholder="{{ '  ' . "  ".  __('Duration') }}"></div>
            </div>
            <div class="div4Card">
                {{-- <div class="single-card"> <input type="text" style=" ::placeholder:text-center" placeholder="{{ __('  Start Date') }}" onfocus="(this.type='date')"> </div> --}}
                <div class="single-card">
                    <select name="" id="" style="border: none;  background: transparent;">
                        <option value="">{{ __('Start Date') }}</option>
                        <option value="january">
                            {{ __('January') }}
                        </option>
                        <option value="february">
                            {{ __('February') }}
                        </option>
                        <option value="march">
                            {{ __('March') }}
                        </option>
                        <option value="april">
                            {{ __('April') }}
                        </option>
                        <option value="may">
                            {{ __('May') }}
                        </option>
                        <option value="june">
                            {{ __('June') }}
                        </option>
                        <option value="july">
                            {{ __('July') }}
                        </option>
                        <option value="august">
                            {{ __('August') }}
                        </option>
                        <option value="september">
                            {{ __('September') }}
                        </option>
                        <option value="october">
                            {{ __('October') }}
                        </option>
                        <option value="november">
                            {{ __('November') }}
                        </option>
                        <option value="december">
                            {{ __('December') }}
                        </option>

                    </select>
                </div>

            </div>
        </div>
        <button class="package-view">
            {{ __('Find Tour') }}
        </button>
    </form>
</div>
