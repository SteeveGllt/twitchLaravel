<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap" rel="stylesheet">
</head>
<body style="background-image: url('images/backgroundpamp1n.png'); background-size: cover">
<div class="flex justify-center">
    <div style="text-shadow: 0 0 7px rgba(0,0,0,0.38);font-family: 'Press Start 2P', cursive; backdrop-filter: saturate(10%) blur(4px); color: #ffffff; margin-top: 20%; max-width: 80%;"
         class="text-3xl font-semibold shadow-2xl border-2 border-slate-600 border-opacity-20 p-6 rounded flex flex-col">
        <div class="flex justify-center">Installe toi, j'arrive ..</div>
        <div id="timer" class="text-3xl flex justify-center mt-6" style="font-family: 'Press Start 2P', cursive;"></div>
</div>

</div>
<script>
    const departMinutes = 5
    let temps = departMinutes * 60

    const timerElement = document.getElementById("timer")

    setInterval(() => {
        let minutes = parseInt(temps / 60, 10)
        let secondes = parseInt(temps % 60, 10)

        minutes = minutes < 10 ? "0" + minutes : minutes
        secondes = secondes < 10 ? "0" + secondes : secondes

        timerElement.innerText = `${minutes}:${secondes}`
        temps = temps <= 0 ? 0 : temps - 1
    }, 1000)
</script>
</body>
</html>
