<section class="locations section section-bg" id="locations">
    <div class="container">
        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
            <h2>Orte</h2>
            <p>Hier eine Liste aller Orte.</p>
        </div>
        <ul class="location-list">
            @foreach ($locations as $location)
                <li class="location" id="location_{{$location->id}}">
                    <a class="location-map" target="_blank" href="{{$location->link}}">
                        <svg width="200" viewBox="0 0 100 100" version="1.1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <pattern id="{{$location->photo->file}}" height="100%" width="100%" patternUnits="userSpaceOnUse">
                                    <image xlink:href="{{$location->photo->file}}" width="100%" height="100%" preserveAspectRatio="xMidYMid slice"></image>
                                </pattern>
                            </defs>
                            <polygon fill="url(#{{$location->photo->file}})" points="50 1 95 25 95 75 50 99 5 75 5 25"></polygon>
                            <polygon class="overlay" points="50 1 95 25 95 75 50 99 5 75 5 25" fill-opacity="0 "></polygon>
                        </svg>
                    </a>
                    <div class="location-details">
                        <h3 class="headline">
                            {{$location->name}}
                        </h3>
                        <p class="subline">
                            {{$location->subline}}
                        </p>
                        <p class="description">
                            {{$location->description}}
                        </p>
                        <p class="url">
                            <strong>Adresse:</strong>
                            <a href="{{$location->link}}" target="_blank">{{$location->street}},  {{$location->plz}}  {{$location->city}}</a>
                        </p>
                    </div>
                </li>    
            @endforeach
        </ul>
    </div>
</section>