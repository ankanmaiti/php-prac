<?php

function urlIs(string $value): bool
{
    $endpoint = str_replace('/test', '', $_SERVER['REQUEST_URI']);
    return $endpoint == $value;
}

?>

<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <!-- logo -->
                <div class="flex-shrink-0">
                    <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                </div>
                <!-- links -->
                <div class="ml-10 flex items-baseline space-x-4">
                    <a href="/test/" class="<?= urlIs('/') ? " bg-gray-900 text-white " : "text-gray-300" ?>rounded-md  px-3 py-2 text-sm font-medium">Home</a>
                    <a href="/test/about" class="<?= urlIs('/about.php') ? " bg-gray-900 text-white " : "text-gray-300" ?>rounded-md  px-3 py-2 text-sm font-medium">About</a>
                    <a href="/test/contact" class="<?= urlIs('/contact.php') ? " bg-gray-900 text-white " : "text-gray-300" ?>rounded-md  px-3 py-2 text-sm font-medium">Contact</a>
                </div>
            </div>
        </div>
    </div>
</nav>