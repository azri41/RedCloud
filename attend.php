{% extends "base.html" %} 
{% block content %}
<div>
    <h1 class="font-bold uppercase mt-10">Attendance Validation</h1>

    <form class="mt-20" action="/attend-event-script" method="post">
        <h1>Attendance Password</h1>
        <input type="text" name="attend_pass" class="bg-gray-300">
        <input type="hidden" name="eventID" value="{{eventID}}">
        <input type="hidden" name="userIDSend" value="{{userIDSend}}">
        <input type="submit" name="submit">
    </form>
</div>
{% endblock content %}