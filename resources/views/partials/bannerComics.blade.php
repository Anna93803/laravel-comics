<div class="bg-container-cards">
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach ($comics as $comic)
                    <div class="box-cards">
                        <div class="cards">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            <h5>{{$comic['series'] }}</h5>
                            <span>{{ $comic['price'] }}</span>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="col">
                <button class="btn">LOAD MORE</button>
            </div>
        </div>
    </div>
</div>