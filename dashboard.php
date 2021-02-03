{% extends "base.html" %} 
{% block content %}
<main class="px-16 py-6 bg-gray-100 col-span-2">

    <header>
        <h2 class="text-gray-700 text-3xl font-semibold">Dashboard</h2>
    </header>

    <div>
        <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Events</h4>
        <div class="mt-8">
            <form action="">
                <table>
                    {% if all_events %}
                        {% for i in range(all_events|length) %}
                            <tr>
                                <!--event_id, eventType, eventName, eventPassword-->
                                <td><h4>{{i+1}}.{{all_events[i][2]}}</h4></td>
                                <td>
                                    <a href="/attend-script?event_id={{all_events[i][0]}}&eventType={{all_events[i][1]}}&eventName={{all_events[i][2]}}&eventPassword={{all_events[i][3]}}">Attend</a>
                               </td>
                            </tr>
                        {% endfor %}
                    {% endif %}
                </table>
            </form>
        </div>
    </div>

</main>
{% endblock content %}