<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>SESSION</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>

    <p id="paragraph" style="font-size: xx-large; text-align: center;">STARBUCKS</p>


    <iframe src="https://embed.restream.io/player/index.html?token=829f1dea602c905350ae8c85fc341949" width="960" height="576" frameborder="0" allowfullscreen></iframe>

    <p id="date"></p>
    <p id="schedule"></p>


    <script>

        var clockElement = document.getElementById('date');
        var schedule = new Date(2020, 11, 9, 20, 40, 0);
        console.log(clockElement.textContent < schedule);

        function clock() {
            clockElement.textContent = new Date().toString();
            document.getElementById("schedule").innerHTML = schedule;
            
        }
        setInterval(clock, 1000);

        if (clockElement.textContent < schedule) {
                document.getElementById("paragraph").innerHTML = "TIM HORTONS";
        }
    </script>


</body>
</html>