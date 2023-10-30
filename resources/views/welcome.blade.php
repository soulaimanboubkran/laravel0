@extends('layouts.master')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
       
    </head>
    @section('content')
    <body class="antialiased">
    <div class="row">
            <x-article
            img='https://assets-global.website-files.com/5ef5480befd392489dacf544/5f9f5e5943de7e69a1339242_5f44a7398c0cdf460857e744_img-image-p-1080.jpeg'
                h1="Example Article"
                desc="This is an example article with a header, description, and a button."
                btn="Read More"
            />
            <x-article

            img='https://assets-global.website-files.com/5ef5480befd392489dacf544/5f9f5e5943de7e69a1339242_5f44a7398c0cdf460857e744_img-image-p-1080.jpeg'

                h1="Example Article"
                desc="This is an example article with a header, description, and a button."
               btn="Read More"
            />
            <x-article
            img='https://assets-global.website-files.com/5ef5480befd392489dacf544/5f9f5e5943de7e69a1339242_5f44a7398c0cdf460857e744_img-image-p-1080.jpeg'

                h1="Example Article"
               desc="This is an example article with a header, description, and a button."
                btn="Read More"
            />
        </div>

    </body>
    @endsection
</html>


   
