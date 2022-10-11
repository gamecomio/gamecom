<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gamecom - Discover Games And Communities For You!</title>

        <meta property="og:image" content="/images/gamecom-filled.png">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@modcommunity_">
        <meta property="og:title" content="Discover Games And Communities For You!">
        <meta property="og:type" content="article">
        <meta property="og:url" content="https://gamecom.io/">
        <meta property="og:site_name" content="Gamecom">
        <meta property="og:locale" content="en_US">
        <meta name="description" content="Find games and communities for you to join and participate in! All data received from The Modding Community and provide everything on a simple and user-friendly website!">
        <meta name="keywords" content="game, games, gaming, community, communities, best, servers, directory, discover, discovery, modding, modcommunity">
        <meta property="og:description" content="Find games and communities for you to join and participate in! All data received from The Modding Community and provide everything on a simple and user-friendly website!">

        <link rel="canonical" href="https://gamecom.io/">
        <!-- <link rel="manifest" href="https://moddingcommunity.com/forums/manifest.webmanifest/">
        <meta name="msapplication-config" content="https://moddingcommunity.com/forums/browserconfig.xml/">-->
        <meta name="msapplication-starturl" content="/">
        <meta name="application-name" content="Gamecom">
        <meta name="apple-mobile-web-app-title" content="Gamecom">
        <meta name="theme-color" content="#181a1b">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-touch-fullscreen" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">

        <!-- CSS and JavaScript -->
        @vite('resources/js/app.js')
    </head>
    <body>
        <div id="bgol"></div>
        <div id="bg"></div>
        <div class="container mx-auto px-10">
            <div id="gamecomLogo">
                <img src="/images/gamecom.png" alt="logo" />
            </div>
            <div id="searchContainer">
                <form>   
                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Search</label>

                    <div class="relative">
                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                        </div>

                        <input type="search" id="default-search" class="block p-4 pl-10 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Games, Communities, Mods, Servers, And More!" required>
                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Search</button>
                    </div>
                </form>
            </div>
            <div class="text-white m-7">
                <h3 class="text-3xl font-bold mb-4">Welcome!</h3>
                <p>We are currently in development! The source code of this website may be found <a href="https://github.com/gamemann/gamecom" target="_blank">here</a>.</p>
                <br>
                <p>This project is powered by <a class="text-red-400" href="https://ModdingCommunity.com/" target="_blank">The Modding Community</a>!</p>

            </div>
            <footer class="p-4 bg-white rounded-lg shadow md:flex md:items-center md:justify-between md:p-6 dark:bg-gray-800 m-7">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-300">© 2022 <a href="https://gamecom.io/" class="hover:underline">Gamecom</a>. All Rights Reserved.
                </span>
                <ul class="flex flex-wrap items-center mt-3 text-sm text-gray-500 dark:text-gray-300 sm:mt-0">
                    <li>
                        <a href="/" class="mr-4 hover:underline md:mr-6 ">Home</a>
                    </li>
                    <li>
                        <a href="https://moddingcommunity.com/" target="_blank" class="mr-4 hover:underline md:mr-6">Mod Community</a>
                    </li>
                </ul>
            </footer>
        </div>

    </body>
</html>
