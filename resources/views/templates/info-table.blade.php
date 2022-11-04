<form id="contactForm">
        <input class="hidden-sitemap" type="text">
        <div class="form-group">
            <button class="btn btn-success" id="submit">Submit</button>
        </div>
    </form>



<section>
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
