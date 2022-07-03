@extends('layouts.master')
@section('content')

<br>
<br>
<br><br><br><br>
<br><br><br><br>
<br>
<br><br><br><br>
<br><br><br>



    <div class="parent" align="center">
        <a href="{{ url('/cars') }}">
            <div class="div1">
                <i class="fa-solid fa-car-side"></i>
                <h4 style="margin: 10px;">
                    Rent a car
                </h4>
            </div>
        </a>
        <a href="{{ url('/withDriver')}}">
            <div class="div2">
                <i class="fa-solid fa-car-side"></i>
                <h4 style="margin: 10px">
                   Transfers With drivers
                </h4>
            </div>
        </a>
        <a href="{{ url('/MT') }}">
        <div class="div3" style="background-color: #FAEFD7; box-shadow:none; border:0.1px solid rgb(212, 211, 211)">
            <i class="fa-solid fa-car-side"></i>
            <h4 style="margin: 10px">
               Meet the transfer at airport
            </h4>
        </div>
    </a>

    </div>



<div class="rentCar">
    <p class="headlineRent">
        Meet and transfer at the airport
    </p>

    <p class="ha">
        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis mollitia, distinctio vero esse eum nam
        voluptatem iure sit, consectetur aut et rerum incidunt dolores repellat quasi unde molestiae dicta cum
        temporibus id sapiente ea omnis! Reiciendis, ipsum sapiente cum itaque atque libero ab voluptatibus quisquam
        accusantium facilis adipisci nesciunt praesentium doloremque veniam odio rerum aut aspernatur assumenda.
        Asperiores, cupiditate nesciunt? Aperiam pariatur vero culpa animi nesciunt maiores veritatis cupiditate
        quas voluptatum temporibus repellendus, mollitia ipsam? Architecto numquam impedit nisi vitae doloremque!
        Veritatis minima laudantium est perspiciatis saepe harum quam deserunt unde obcaecati magni sequi, incidunt
        dignissimos asperiores. Soluta, sed consequuntur.
    </p>

    <br>
    <br>

    <div class="container carMeet" style="align-items:center; text-align: center;">
        <div class="parent1">
            <div class="divv1">
                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
            </div>
            <div class="divv2">
                <img src="https://images.unsplash.com/photo-1494976388531-d1058494cdd8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">
            </div>
            </div>
        <br>
        <br>
        <br>
        <p class="ReqCarDet" style="font-weight: 500;
        font-size: 14px;">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis mollitia, distinctio vero esse eum
            nam voluptatem iure sit, consectetur aut et rerum incidunt dolores repellat quasi unde molestiae dicta
            cum temporibus id sapiente ea omnis! Reiciendis, ipsum sapiente cum itaque atque libero ab voluptatibus
            quisquam accusantium facilis adipisci nesciunt praesentium doloremque veniam odio rerum aut aspernatur
            assumenda. Asperiores, cupiditate nesciunt? Aperiam pariatur vero culpa animi nesciunt maiores veritatis
            cupiditate quas voluptatum temporibus repellendus, mollitia ipsam? Architecto numquam impedit nisi vitae
            doloremque! Veritatis minima laudantium est perspiciatis saepe harum quam deserunt unde obcaecati magni
            sequi, incidunt dignissimos asperiores. Soluta, sed consequuntur.
        </p>

        <button class="package-view">Send Request</button>
    </div>
</div>

<br>
<br>
<br>

@endsection
