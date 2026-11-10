<x-layout>
    <div class="form-person">
        <form method="POST" action="{{route('submitPerson')}}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nome</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>
            <div class="mb-3">
                <label for="surname" class="form-label">Cognome</label>
                <input type="text" name="surname" class="form-control" id="surname">
            </div>
            <div class="mb-3">
                <label for="age" class="form-label">Età</label>
                <input type="text" name="age" class="form-control" id="age">
            </div>
            
            <button type="submit" class="btn btn-primary">Invia i tuoi dati</button>
        </form>
    </div>
</x-layout>