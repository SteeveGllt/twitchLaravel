<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url('images/background.jpg');">

<div class="flex justify-center items-center h-screen flex-col">
    <div style="background-image: url('images/giphy1.gif'); background-size: 110%" class="bg-clip-text">
        <h1 class="text-9xl text-transparent h-36" style="font-family: Roboto, sans-serif">Starting Soon</h1>
    </div>
    <div id="timer" class="text-2xl font-black text-white" style="font-family: Roboto, sans-serif"></div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fugaz+One&family=Monoton&family=Roboto:wght@900&display=swap');
</style>

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
