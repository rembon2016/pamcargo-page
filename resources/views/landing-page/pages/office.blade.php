@extends('landing-page.layouts.main')
@section('title', 'Offices')

@push('head')

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
        integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
        crossorigin="" />

    <!-- Make sure you put this AFTER Leaflet's CSS -->
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
        integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
        crossorigin=""></script>
    @endpush

    <style>
        .leaflet-top, .leaflet-bottom {
            z-index: 500 !important;
        }
        .header-style-3 .is-fixed .main-bar {
            z-index: 501 !important;
        }
    </style>

@section('page-content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(@assets('images/banner/1.jpg'));">
        <div class="overlay-main site-bg-sky opacity-08"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <div class="banner-title-outer">
                    <div class="banner-title-name">
                        <h2 class="wt-title">Offices</h2>
                    </div>
                </div>
                <!-- BREADCRUMB ROW -->                            
                
                    <div>
                        <ul class="wt-breadcrumb breadcrumb-style-2">
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li>Offices</li>
                        </ul>
                    </div>
                
                <!-- BREADCRUMB ROW END -->                        
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    
        <!-- Faq Section -->
        <div class="section-full p-t120 p-b90 tw-faq-area">

        <div class="container">

            <!-- TITLE START-->
            <div class="section-head center wt-small-separator-outer">
                <div class="wt-small-separator site-text-primary">
                    <div>Offices</div>                                
                </div>
                <h2 class="wt-title">Our Local Team Will be Glad to Help You</h2>
            </div>                  
            <!-- TITLE END-->

            <div class="section-content text-center mb-5">
                <p>
                    We have offices in all major trading centers of our customers as well as an international network of partners. Our team of experts look forward to assisting you. Just get in touch.
                </p>
            </div>

            <div class="row mb-5 d-flex justify-content-center">
                <div id="map" style="height: 650px; width: 1000px;"></div>
            </div>

            <div class="mt-3">
                <h2 class="wt-title text-center mb-4">Find Your Destination</h2>

                <div class="office-box-group mb-4">
                    <div class="office-continent-group">
                        <button type="button" class="office-continent-button active">
                            All
                        </button>
                        <button type="button" class="office-continent-button">
                            Asia
                        </button>
                        <button type="button" class="office-continent-button">
                            Europe
                        </button>
                        <button type="button" class="office-continent-button">
                            America
                        </button>
                        <button type="button" class="office-continent-button">
                            Africa
                        </button>
                        <button type="button" class="office-continent-button">
                            Australia
                        </button>
                    </div>
                </div>

                <div class="search-box-group mb-3">
                    <label for="search-input" class="search-label">
                        <i class="fa fa-search site-text-primary"></i>
                    </label>
                    <input type="search" name="search" id="search-input" class="search-input" placeholder="Search">
                </div>

                <div class="country-box-group">
                    @foreach ($countries as $country)
                        <div class="country-box">
                            <div class="country-box-content">
                                <img src="{{ $country->image }}" alt="">
                                <div class="country-box-content-text">
                                    <h4 class="country-box-content-text-title mb-0">{{ $country->name }}</h4>
                                    @if (!is_null($country->sub_name))
                                        <span class="country-box-content-text-desc text-muted">{{ $country->sub_name }}</span>
                                    @endif
                                </div>
                            </div>
                            <div class="country-box-button">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Faq Categories End -->
@endsection

@push('script')
<script>
    $(document).ready(function(){
        const data = [{"name_country":"Dubai","address":"P.O. Box - 117993, Office 813, Al-Fattan Plaza Airport Road,\r\nAl Garhoud, Dubai - U.A.E.","longitude":"55.3425675","latitude":"25.2513042","website":"[]","image_thumbnail":"1664506901-imgthumb.png"},{"name_country":"Vietnam - Ho Chi Minh","address":"Room 402-403,Citilight Tower, 45 Vo Thi Sau St.Daokao Ward,Dist.1, Hochiminh City, Vietnam","longitude":"106.6947222","latitude":"10.7902778","website":"[]","image_thumbnail":"1664512435-imgthumb.png"},{"name_country":"Vietnam -  Da Nang","address":"5th Floor, Trong Thuc Building, 630-632 Ngo Quyen Street, An Hai Bac Ward, Son Tra District, Da Nang City ","longitude":"108.236274","latitude":"16.08263","website":"[]","image_thumbnail":"1664512568-imgthumb.png"},{"name_country":"Vietnam -  Hanoi","address":"6th, Floor, Detech Tower No. 08 Ton That Thuyet St., My Dinh 2, Nam Tu Liem Dist., Hanoi, Viet Nam","longitude":"105.7796006","latitude":"21.0287649","website":"[]","image_thumbnail":"1664512805-imgthumb.png"},{"name_country":"Vietnam - Haipong","address":"Room 503, Thang Loi Building, 3 Le Thanh Tong Str., May To, Ngo Quyen, Haiphong City, Vietnam","longitude":"106.6911962","latitude":"20.8669552","website":"[]","image_thumbnail":"1664512940-imgthumb.png"},{"name_country":"Indonesia","address":"Gedung PSI \u2013 2nd Floor,\r\nJl. Pengadegan Timur Raya No. 1, RT 04\/RW 01,\r\nKel. Pengadegan, Kec. Pancoran, Jakarta Selatan 12770, Indonesia.","longitude":"106.8584099","latitude":"-6.2496324","website":"[]","image_thumbnail":"1664513025-imgthumb.png"},{"name_country":"Italy","address":"Via degli Alpini n. 10. 31046 Oderzo, Treviso, ITALIA","longitude":"12.4926029","latitude":"45.7799548","website":"[]","image_thumbnail":"1664513185-imgthumb.png"},{"name_country":"Bangladesh - Dhaka ","address":"House No 195\/A, Road No 01, New DOHS,\r\n\r\nMohakhali, Dhaka, Post code : 1206","longitude":"90.4044829","latitude":"23.7731698","website":"[]","image_thumbnail":"1664513356-imgthumb.png"},{"name_country":"Hongkong","address":"Unit 903A, 9th Floor, Sun Cheong Industrial Building,No.2-4 Cheung Yee Street, Lai Chi Kok Kowloon, Hong Kong.","longitude":"114.1449315","latitude":"22.3368483","website":"[]","image_thumbnail":"1664513458-imgthumb.png"},{"name_country":"Switzerland","address":"Erlenstrasse 27, CH4106 Therwill, Switzerland","longitude":"7.5546301","latitude":"47.5036273","website":"[]","image_thumbnail":"1664513655-imgthumb.png"},{"name_country":"Austria","address":"Brucknerstra\u00dfe 4\/3b A-1040 Vienna","longitude":"16.3723248","latitude":"48.1991013","website":"[]","image_thumbnail":"1664513751-imgthumb.png"},{"name_country":"France","address":"115 chemin du Cardinal 07230 Lablachere","longitude":"4.1993365","latitude":"44.4438092","website":"[]","image_thumbnail":"1664513886-imgthumb.png"},{"name_country":"China","address":"RM A, 25TH Floor, Yongrong Enterprise Centre NO.1111,Liyang Road, Shanghai, China 200081","longitude":"121.4871913","latitude":"31.2607946","website":"[]","image_thumbnail":"1664514029-imgthumb.png"},{"name_country":"Taiwan","address":"GRAND LONG AIR & SEA CO.,LTD\r\n4F, No.52-1, Sec.1, Chang An E.Rd.,\r\nTaipei City 10442, Taiwan","longitude":"121.557648","latitude":"25.0512944","website":"[]","image_thumbnail":"1664516398-imgthumb.png"},{"name_country":"Myanmar","address":"C\/O PREMIER CARGO SOLUTIONS No 24. Kha Yae Pin Yeik Mon Housing (1) Kha. Yae Pin Yeik Mon (8 street) Mingaladon, Yangon","longitude":"96.1429089","latitude":"16.9314538","website":"[]","image_thumbnail":"1664516487-imgthumb.png"},{"name_country":"Cambodia","address":"Address : No. 1008AB, Kampuchea Krom Blvd (St. 128), Sangkat Teuk Laok 1, Khan Toul Kork, Phnom Penh, Cambodia","longitude":"104.8977776","latitude":"11.5676088","website":"[]","image_thumbnail":"1664516587-imgthumb.png"},{"name_country":"India - Mumbai","address":"117, 1st floor, Nahar & Seth Indl. Estate, Cardinal Gracious Road, Chakala Andheri East, Mumbai - 400099 India.","longitude":"72.8556579","latitude":"19.1132654","website":"[]","image_thumbnail":"1664516663-imgthumb.png"},{"name_country":"India - Chennai","address":"New no 77 \/ old no 39, Thambu Chetty Street Parry, Chennai - 6000001 India.","longitude":"80.2879915","latitude":"13.0999792","website":"[]","image_thumbnail":"1664516749-imgthumb.png"},{"name_country":"Thailand","address":"Level 3, Room 332 The Metropolois Samrong, 954\/1724, Sukhumvit Road, Thepharak, Samutprakam, 10270","longitude":"100.5930601","latitude":"13.6461799","website":"[]","image_thumbnail":"1664516817-imgthumb.png"},{"name_country":"Korea","address":"Suite 501, DaeMyung Vichen City Officetel, 196, Worldcup-ro, Seoul, 121-850","longitude":"126.878754","latitude":"37.5791595","website":"[]","image_thumbnail":"1664516972-imgthumb.png"},{"name_country":"Sri Lanka","address":"Level 05, 45\/02, Baybrooke Street, Colombo 02, Sri Lanka","longitude":"79.8545513","latitude":"6.9197854","website":"[]","image_thumbnail":"1664517043-imgthumb.png"},{"name_country":"Germany","address":"drosselweg 14 42781 Haan","longitude":"6.997487","latitude":"51.1954792","website":"[]","image_thumbnail":"1664517212-imgthumb.png"},{"name_country":"Bangladesh - Chittagong","address":"House No : 146\/A, Saleh Ahmed Chairman Lane\r\n\r\nAgrabad C\/A, Badamtoli, Chittagong, Post code : 4100","longitude":"90.4044829","latitude":"23.7731698","website":"[]","image_thumbnail":"1681274398-imgthumb.png"},{"name_country":"Portugal","address":"","longitude":"-8.510715947520596","latitude":"39.66818149794826 ","website":"[]","image_thumbnail":"1701944447-imgthumb.png"}] ;
        const options = {
            coordinates: [-6.241201, 106.8602260],
            name: "PAM INDONESIA",
            adress: "Jl. Asem Baris 3A",
            postalCode: "12830",
            city: "Jakarta Selatan",
            website: ["https://www.rembon.co.id/", "rembon.co.id →"],
            socialMedia: ["https://www.linkedin.com/", "Linkedin →"]
        }

        var map = L.map('map', {
            center: options.coordinates,
            // zoom: 4,
            scrollWheelZoom: true,
            maxBoundViscosity: 1.0,
            zoomControl: true,
            maxZoom: 4,
            minZoom: 2
        });

        L.tileLayer("https://{s}.basemaps.cartocdn.com/light_nolabels/{z}/{x}/{y}.png", {
            noWrap: true,
            attribution: 'Map tiles by <a href="http://cartodb.com/attributions#basemaps">CartoDB</a> | Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
        }).addTo(map);


        var southWest = L.latLng(-89.98155760646617, -180),
            northEast = L.latLng(89.99346179538875, 180);

        var bounds = L.latLngBounds(southWest, northEast);

        map.setMaxBounds(bounds);
        map.on('drag', function() {
            map.panInsideBounds(bounds, {
                animate: false
            });
        });

        map.setView([0, 0], 0);
        var newArr = [];
        
        $.each(data, function(index, val) {
            newArr.push({
                coordinates: [val.latitude, val.longitude],
                name: val.name_country,
                address: val.address,
                image: val.image_thumbnail,
            });
        });

        $.each(newArr, function(index, val) {
            L.marker(val.coordinates, {
                    icon: L.icon({
                        iconUrl: 'https://pamcargo.com/assets/dash/files/offices/' + val.image,
                        iconSize: [24, 24]
                    })
                })
                .addTo(map)
                .bindPopup(
                    L.popup({}).setContent(
                        `<h3>${val.name}</h3>
                <p style="margin: 0 !important; line-height: 1.3;">${val.address}</p>
                <div class="links">
                
                </div>`
                    )
                )
                .on("click", function(e) {
                    circleClick(e, val.name);
                });
        });

        // L.marker({
        //     coordinates: [-6.241201, 106.8602260],
        //     name: "PAM INDONESIA",
        //     adress: "Jl. Asem Baris 3A",
        //     postalCode: "12830",
        //     city: "Jakarta Selatan",
        //     website: ["https://www.rembon.co.id/", "rembon.co.id →"],
        //     socialMedia: ["https://www.linkedin.com/", "Linkedin →"]
        // }, {
        //         icon: L.icon({
        //             iconUrl: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNZLAgDksERXVl5s5jUv_lVbL6pbn3ataLCtsrXN3xXQ&s',
        //             iconSize: [24, 24]
        // })
        //     })
        //     .addTo(map);
    })

</script>
@endpush