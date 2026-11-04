<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12 header-homepage">
                <h1>Contattaci</h1>
            </div>
        </div>
        <form class="form-custom" method="POST" action="{{route('messageSent')}}">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="inserisci il tuo nome" name="name1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput2" class="form-label">Cognome</label>
                <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="inserisci il tuo cognome" name="surname1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput3" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleFormControlInput3" placeholder="inserisci la tua email" name="email1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Scrivi il tuo Messaggio</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="..." name="text1"></textarea>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Invia</button>
            @csrf
        </form>
    </div>
</x-layout>