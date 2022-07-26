<?php
$dcComics = [
    [
        'name' => 'Characters',
        'href' => '#'
    ],
    [
        'name' =>'Comics',
        'href' => '#'
    ],
    [
        'name' => 'Movies',
        'href' => '#'
    ],
    [
        'name' => 'Tv',
        'href' => '#'
    ],
    [
        'name' => 'Games',
        'href' => '#'
    ],
    [
        'name' => 'Videos',
        'href'=> '#'
    ],
    [
        'name'=> 'News',
        'href' =>'#'
    ]
];

$shop = [
    [
        'name' => 'Shop Dc',
        'href'=> '#'
    ],
    [
        'name' => 'Shop Dc Collectibles',
        'href'=> '#'
    ],
];

$dc = [
    [
        'name' => 'Terms of Use',
        'href' => '#'
    ],
    [
        'name' => 'Ad Choices',
        'href' => '#'
    ],
    [
        'name' => 'Privacy policy (New)',
        'href' => '#'
    ],
    [
        'name' => 'Advertising',
        'href' => '#'
    ],
    [
        'name' => 'Jobs',
        'href'=> '#'
    ],
    [
        'name' => 'Subscriptions',
        'href' => '#'
    ],
    [
        'name' => 'Talent WorkShop',
        'href' => '#'
    ],
    [
        'name'=> 'CPSC Certificates',
        'href'=> '#'
    ],
    [
        'name' => 'Ratings',
        'href'=> '#'
    ],
    [
        'name' => 'Shop Help',
        'href' => '#'
    ],
    [
        'name' =>'Contact Us',
        'href' => '#'
    ],
];

$sites = [
    [
        'name' =>'DC',
        'href' => '#'
    ],
    [
        'name' =>'MAD Megazine',
        'href' => '#'
    ],
    [
        'name' => 'DC Kinds',
        'href' => '#'
    ],
    [
        'name' => 'DC Universe',
        'href'=> '#'
    ],
    [
        'name' => 'DC Power Visa',
        'href'=> '#'
    ],
];
?>



<div class="bg-footer">
    <div class="container">
        <div class="row">
            <div class="col">
                <div>
                    <ul>
                        <li><h5>Dc Comics</h5></li>
                        @foreach ($dcComics as $link)
                            <li><a href="{{$link['href']}}">{{ $link['name'] }} </a></li>
                        @endforeach
                        <ul>
                            <li><h5>shop</h5></li>
                            @foreach($shop as $link)
                                <li><a href="{{$link['href']}}">{{ $link['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h5>Dc</h5></li>
                        @foreach($dc as $link)
                            <li><a href="{{$link['href']}}">{{ $link['name'] }} </a></li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <ul>
                        <li><h5>Sites</h5></li>
                        @foreach($sites as $link)
                            <li><a href="{{ $link['href']}}">{{$link['name'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
</div>
<div class="bg-footer-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <button class="btn">SING-UP NOW</button>
            </div>
            <div class="col">
                <h4>FOLLOW US</h4>
                <ul>
                    <li><img src=" {{asset('images/footer-facebook.png')}}" alt="icons-facebook"></li>
                    <li><img src=" {{asset('images/footer-periscope.png')}}" alt="icons-periscope"></li>
                    <li><img src=" {{asset('images/footer-pinterest.png')}}" alt="icons-pinterest"></li>
                    <li><img src=" {{asset('images/footer-twitter.png')}}" alt="icons-twitter"></li>
                    <li><img src=" {{asset('images/footer-youtube.png')}}" alt="icons-youtube"></li>
                </ul>
            </div>
        </div>
    </div>
</div>