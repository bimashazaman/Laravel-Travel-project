

<p>
    Dear Admin,
</p>


<p>
    {{ $name }} has booked a room {{ $room_id }} in {{ $hotel_id }}. Please review the details below. 
</p>



User details: <br><br>

Name:  {{ $name }}<br>
Email:  {{ $email }}<br>
Phone:  {{ $phone }}<br>
Total person: {{ $persons }}<br>
Start Date:  {{ $start_date }}<br>
End Date:  {{ $end_date }}<br>
Subject:  {{ $subject }}<br>
{{-- Message:  {{ $message }}<br> --}}
Message:  {!! $subject !!}<br><br>

Thanks