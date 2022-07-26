<?php 
$navLinks = [
    [
        'title' => 'Characters',
    ],
    [
        'title' => 'Comics',
    ],
    [
        'title' => 'Movies',
    ],
    [
        'title' => 'Tv',
    ],
    [
        'title' => 'Games',
    ],
    [
        'title' => 'Collectibles',
    ],
    [
        'title' => 'Videos',
    ],
    [
        'title' => 'Fans',
    ],
    [
        'title' => 'News',
    ],
    [
        'title' => 'Shop',
    ]
];
?>


<div class="header-Top">
    <div class="container">
        <div class="row">
            <div>DC POWER &#8480; VISA &#174;</div>
            <div>ADDITIONAL DC SITES <i class="fas fa-caret-down"></i></div>
        </div>
    </div>
</div>
<div class="header-bottom">
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="{{ asset('images/dc-logo.png')}}" alt="logo-dc">
            </div>
            <div class="col">
                <ul>
                    @foreach ($navLinks as $link)
                        <li><a href="#">{{ $link["title"] }}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="container-Search">
                <input type="text" name="search" id="search" placeholder="Search">
                <i class="fas fa-search"></i>
            </div>
        </div>
    </div>
</div>