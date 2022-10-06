<div class="three-cards" align="center">
    <h2>
        {{ __('Find Your Tour Here') }}
    </h2>
    <div class="parentCard">
        <div class="div1Card">
            <div class="single-card">
                <select name="type" id="type" style="border: none; background: transparent; margin-bottom:5%">
                    <option value="">{{ __('Choose Type') }}</option>
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="div2Card">
            <div class="single-card">
                <select name="type" id="type" style="border: none; background: transparent; margin-bottom:5%">
                    <option value="" style="color: rgb(214, 200, 200)">
                        {{" " . __('Destination') }}
                    </option>
                    @foreach ($destination as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>


        </div>
        <div class="div3Card">
            <div class="single-card"> <input type="number" min="1" placeholder="{{"   " . __('Duration') }}"></div>
        </div>
        <div class="div4Card">
            <div class="single-card"> <input type="text" style=" ::placeholder:text-center" placeholder="{{ __('  Start Date') }}" onfocus="(this.type='date')"> </div>
        </div>
    </div>
    <button class="package-view">
        {{ __('Find Tour') }}
    </button>
</div>



