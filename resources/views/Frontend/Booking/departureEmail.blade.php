

<p>
    Dear Admin,
</p>


<p>
    {{ $name }} has booked a tour for {{ $tour_id }}. Please review the details below. 
</p>



User details: <br><br>

Name:  {{ $name }}<br>
Email:  {{ $email }}<br>
Phone:  {{ $phone }}<br>
Address:  {{ $address }}<br>
Total person: {{ $persons }}<br>
Subject:  {{ $subject }}<br>
{{-- Message:  {{ $message }}<br> --}}
Message:  {!! $subject !!}<br><br>

Thanks