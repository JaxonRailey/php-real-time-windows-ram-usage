const sse      = new EventSource('server.php');
sse.onmessage  = function (event) {
    const data = JSON.parse(event.data);
    chart.setValueAnimated(data.perc, 1);
};

const chart = Gauge(document.querySelector('main'));