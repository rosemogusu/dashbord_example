<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>

<body>
    <div class="flex w-full h-full relative">
        <div class="left w-1/12 sticky top-0 right-0">

            <div class="h-20 lg:h-48 flex justify-center items-center">
                <img src="{{ asset('assets/logo.svg') }}" class="logo" alt="logo">
            </div>
            <div class="h-10 lg:h-20 flex justify-center items-center flex-col">
                <img src="{{ asset('assets/1.svg') }}" class="logo" alt="logo">
                <h3 class="text-custom">Overview</h3>
            </div>
            <div class="h-10 lg:h-20 flex justify-center  items-center flex-col">
                <img src="{{ asset('assets/2.svg') }}" class="logo" alt="logo">
                <h3 class="text-white">Maintenance</h3>
            </div>
            <div class="h-10 lg:h-20 flex justify-center items-center flex-col">
                <img src="{{ asset('assets/messages.svg') }}" class="logo" alt="logo">
                <h3 class="text-white">Messages</h3>
            </div>
            <div class="h-10 lg:h-20 flex justify-center items-center flex-col">
                <img src="{{ asset('assets/tenants.svg') }}" class="logo" alt="logo">
                <h3 class="text-white">Tenants</h3>
            </div>
            <div class="h-10 lg:h-20 flex justify-center items-center flex-col">
                <img src="{{ asset('assets/settings.svg') }}" class="logo" alt="logo">
                <h3 class="text-white">Settings</h3>
            </div>
            <div class="h-10 lg:h-20 flex justify-center items-center flex-col">
                <img src="{{ asset('assets/profile.svg') }}" class="logo" alt="logo">
                <h3 class="text-white">Profile</h3>
            </div>
            <div class="h-10 lg:h-20 flex justify-center items-center flex-col">
                <img src="{{ asset('assets/logout.svg') }}" class="logo" alt="logo">
                <h3 class="text-white">Logout</h3>
            </div>
        </div>

        <div class="flex flex-col w-9/12 h-full " >
            <div class="flex flex-row w-full mt-16  pl-20 justify-between">
                <div class="text">
                    <h1 class="text-4xl font-bold m-2 text-blue-900">Overview</h1>
                </div>
                <div class="search w-3/4 relative">
                    <input type="text" name="search" class="w-full border-2"/>
                    <img class="image absolute top-0 right-0 p-2" src="{{ asset('assets/searchbar.svg') }}" alt="">
                </div>

            </div>
            <div class="flex flex-row w-full mt-5  pl-20 justify-between">
                <div class="card w-1/3 px-2">
                    <img class="card-image w-full" src="{{ asset('assets/newtenants.svg') }}" alt="New tenants">
                </div>
                <div class="card w-1/3 px-2">
                    <img class="card-image w-full" src="{{ asset('assets/tickets.svg') }}" alt="rating">
                </div>
                <div class="card w-1/3 px-2">
                    <img class="card-image w-full" src="{{ asset('assets/tickets.svg') }}" alt="ticket">
                </div>
            </div>
            <div class="flex flex-row w-full mt-5  pl-20 justify-between">
                <div class="card w-1/2 px-2">
                    <img class="image w-full" src="{{ asset('assets/card1.svg') }}" alt="">
                </div>
                <div class="card w-1/2 px-2">
                    <img class="image w-full" src="{{ asset('assets/card2.svg') }}" alt="">
                </div>

            </div>
            <div class="flex flex-row w-full mt-5  pl-20 justify-between">
                <div class="card w-full">
                    <img class="image w-full" src="{{ asset('assets/card3.svg') }}" alt="">
                </div>

            </div>
        </div>
        <div class="end w-2/12 h-screen ">

            <div class="h-20 lg:h-48 flex justify-center items-center">
                <img src="{{ asset('assets/notification.svg') }}" class="logo" alt="logo">
            </div>
            <div class="h-32 lg:h-48 flex justify-center items-center">
                <img src="{{ asset('assets/calendar.svg') }}" class="logo" alt="logo">
            </div>
            <div class="h-20 lg:h-48 mt-20 flex justify-center items-center">
                <img src="{{ asset('assets/taskspanel.svg') }}" class="logo" alt="logo">
            </div>

        </div>
    </div>
</body>

</html>
