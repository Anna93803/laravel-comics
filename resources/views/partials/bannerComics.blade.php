
<?php
$linkBanner = [
    [
        'name' => 'Digital Comics',
        'src' => 'buy-comics-digital-comics.png',
        'href' =>'#'
    ],
    [
        'name' => 'DC Merchandise',
        'src' => 'buy-comics-merchandise.png',
        'href' => '#'
    ],
    [
        'name' => 'Subscription',
        'src' => 'buy-comics-subscriptions.png',
        'href' => '#'
    ],
    [
        'name' => 'Comics Shop locator',
        'src' => 'buy-comics-shop-locator.png',
        'href' => '#'
    ],
    [
        'name' => 'Dc Power Visa',
        'src' => 'buy-dc-power-visa.svg',
        'href' => '#'
    ]
];
?>

<div class="bg-container-cards">
    <div class="container">
        <div class="row">
            <div class="col">
                @foreach($comics as $comic)
                    <div class="box-cards">
                        <a href="comic/{{$comic['id']}}" class="cards">
                            <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                            <h5>{{$comic['series'] }}</h5>
                            <span>{{ $comic['price'] }}</span>
                        </a>
                    </div>
                @endforeach
                @dump($comics);
                @dump($comic);
            </div>
            <div class="col">
                <button class="btn">LOAD MORE</button>
            </div>
        </div>
    </div>
</div>
<div class="bg-banner">
    <div class="container">
        <div class="banner-cards">
            <ul>
                @foreach ($linkBanner as $link)
                <li>
                    <a href="{{ $link['href']}}">
                        <img src="{{ asset( 'images/' . $link['src'])}}" alt="{{$link['name']}}">
                        <h4>{{ $link['name']}}</h4>
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>