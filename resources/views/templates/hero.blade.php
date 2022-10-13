<section class="main__hero">
    <div class="main__add-section">
        <h2>
            Add site form
        </h2>
        <form action="api/sites" method="POST">
            <input type="text" name="name_site" placeholder="enter name site">
            <input type="text" name="site_map" placeholder="enter site map">
            <input type='submit' value="Add site"/>
        </form>
    </div>


    <div class="main__delete-section">
        <h2>
            Delete site form
        </h2>
        <select class="main__select-delete">
            @foreach($sites as $site)
                <option value="{{ $site['id'] }}"> {{ $site['name_site'] }} </option>
            @endforeach
        </select>

        <form class="main__form-delete" method="POST">
            @csrf
            @method('DELETE')
            <input type='submit' value="delete site"/>
        </form>
    </div>

    <div class="maim__update-section">
        <h2>
            Update site form
        </h2>

        <select class="main__select-update">
            @foreach($sites as $site)
                <option value="{{ $site['id'] }}"> {{ $site['name_site'] }} </option>
            @endforeach
        </select>
        <form class="main__form-update" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="update_name_site" placeholder="enter update name site">
            <input type="text" name="update_site_map" placeholder="enter update site map">
            <input type='submit' value="Update site"/>
        </form>

    </div>


    <div class="main__clients">
        <form action="api/client" method="POST">
            <select class="main__client-select">
                @foreach($clients as $client)
                    <option value="{{ $client['id'] }}"> {{ $client['name'] }} </option>
                @endforeach

            </select>

            <input class="main__client-id" type="text" name="id_client" value="{{ $clients[0]['id'] }}"
                   style="display: none">
            <input type='submit' value="show"/>
        </form>

    </div>


</section>

<script>

    const selectDelete = document.querySelector(".main__select-delete");
    const formDelete = document.querySelector(".main__form-delete");
    const selectUpdate = document.querySelector(".main__select-update");
    const formUpdate = document.querySelector(".main__form-update");

    const selectClient = document.querySelector(".main__client-select");
    const inputClient = document.querySelector(".main__client-id");

    function changeAction(select, form) {
        select.addEventListener('change', (event) => {
            form.setAttribute('action', 'api/sites/' + event.target.value)
        });
    }

    selectClient.addEventListener('change', (event) => {
        inputClient.value = event.target.value
    });

    changeAction(selectDelete, formDelete)
    changeAction(selectUpdate, formUpdate)


</script>




