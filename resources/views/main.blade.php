<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test page </title>

        <style>
            table {
                width: 100%;
                border: 3px solid black;
            }
            tr {
               text-align: center;
            }
            td {
                border: 1px solid black;
            }


        </style>

    </head>
    <body>

            <main>
                @include('templates.hero')
            </main>

    </body>
</html>
