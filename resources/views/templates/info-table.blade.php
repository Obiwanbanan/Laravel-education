
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Test page </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        .info__pagination {
            display: flex;
        }

    </style>
</head>
<body>
<header>
    @include('сomponents.header')

</header>
<main><section>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col" >email</th>
            </tr>
            </thead>
            @if($clients)
                @foreach($clients as $client)
                    <tr>
                        <th scope="row">{{ $client->id }}</th>
                        <th> {{ $client->name }}</th>
                        <th>{{ $client->email }}</th>
                    </tr>
                @endforeach

            @endif

        </table>

        <div class="info__pagination">
            {{ $clients->links() }}
        </div>

    </section>
</main>
<footer>
    @include('сomponents.footer')
</footer>
</body>
</html>



