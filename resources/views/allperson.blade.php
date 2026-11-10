<x-layout>
    @foreach($persons as $person)
    <div>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{$person['name']}}</h5>
                <h5 class="card-subtitle mb-2 text-body-secondary">{{$person['surname']}}</h6>
                <h5 class="card-text">{{$person['age']}}</h5>
            </div>
        </div>
    </div>
    @endforeach
    
</x-layout>