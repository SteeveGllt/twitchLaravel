<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-image: url('images/background.jpg');">

<div class="absolute left-64 top-52 flex flex-row-reverse">
    <div class="border-2 border-violet-900 border-opacity-40 ml-5 w-96 rounded-2xl text-xl shadow-xl"
         style="backdrop-filter: blur(2px); background-color: rgba(66,51,93,0.35)">
        <p style="font-family: Roboto, sans-serif" class="flex justify-center text-white">CHAT</p>
    </div>
    <div class="relative">
        <img class="rounded-2xl border-2 border-violet-900 border-opacity-40 shadow-xl" src="images/giphy1.gif"
             style="height: 540px; width: 960px" alt="">
        <div class="flex justify-center">
            <div class="absolute top-96">
               <!--<div style="margin-top: 100px">
                    <img src="{{ asset('images/logoryry.png') }}" height="100" width="100">
                </div>-->
            </div>
        </div>
    </div>
    <div
        class="animate-pulse absolute top-0.5 right-2 h-4 w-4 my-1 border-2 border-white rounded-full bg-red-600 z-2"></div>
</div>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fugaz+One&family=Monoton&family=Roboto:wght@900&display=swap');
</style>
</body>
</html>
