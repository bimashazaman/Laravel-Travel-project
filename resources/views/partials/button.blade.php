<div class="row">
    <center style="font-weight:600">
        You can add one of your Tour here <span style="color:Blue"> Activities</span>
    </center>
</div>
<div class="row" style="margin-top: 40px; margin-bottom:30px">
    <center>
        <form action="/storeTwo" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <button class="package-view" type="submit">
                Send a quote
            </button>
        </form>


    </center>
</div>