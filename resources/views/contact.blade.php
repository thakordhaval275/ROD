@extends('mainlayout')

@section('pageheader')
    Contact Us
@endsection

@section('contain')
    <hr>
<!-- Start Map Section -->
<div id="google-map"></div>
<!-- End Map Section -->

<!-- Start Contact Us Section -->
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="medium-title">
                    Contact Us
                </h2>
                <div class="information">
                    <div class="contact-datails">
                        <div class="icon">
                            <i class="ti-location-pin"></i>
                        </div>
                        <div class="info">
                            <h3>Address</h3>
                            <span class="detail">Main Office: NO.22-23 Street Name- City,Country</span>
                            <span class="datail">Customer Center: NO.130-45 Streen Name- City, Country</span>
                        </div>
                    </div>
                    <div class="contact-datails">
                        <div class="icon">
                            <i class="ti-mobile"></i>
                        </div>
                        <div class="info">
                            <h3>Phone Numbers</h3>
                            <span class="detail">Main Office: +880 123 456 789</span>
                            <span class="datail">Customer Supprort: +880 123 456 789 </span>
                        </div>
                    </div>
                    <div class="contact-datails">
                        <div class="icon">
                            <i class="ti-location-arrow"></i>
                        </div>
                        <div class="info">
                            <h3>Email Address</h3>
                            <span class="detail">Customer
                    Support: info@mail.com</span>
                            <span class="detail">Technical Support: support@mail.com</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 box box-primary">
                <!-- Form -->
                <form method="post" action="{{route('contactstore')}}">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('firstName')) has-error @endif">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name">
                                        @if($errors->first('firstName'))
                                            <p class="text-danger"> {{$errors->first('firstName')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('lastName')) has-error @endif">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name">
                                        @if($errors->first('lastName'))
                                            <p class="text-danger"> {{$errors->first('lastName')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('emailid')) has-error @endif">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="emailid" name="emailid" placeholder="E-mail Address">
                                        @if($errors->first('emailid'))
                                            <p class="text-danger"> {{$errors->first('emailid')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('relationship')) has-error @endif">
                                    <div class="form-group">
                                        <div class="search-category-container">
                                            <label class="styled-select">
                                                <select id="relationship" name="relationship" class="form-control dropdown-product selectpicker">
                                                    <option value="">Select Relationship to ROD</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Rrecruiter">Rrecruiter</option>
                                                    <option value="Job Seeker">Job Seeker</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </label>
                                            @if($errors->first('relationship'))
                                                <p class="text-danger"> {{$errors->first('relationship')}} </p>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('companyName')) has-error @endif">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="companyName" name="companyName" placeholder="Company/Organization">
                                        @if($errors->first('companyName'))
                                            <p class="text-danger"> {{$errors->first('companyName')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('other')) has-error @endif">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="other" name="other" placeholder="If Other, please specify">
                                        @if($errors->first('other'))
                                            <p class="text-danger"> {{$errors->first('other')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('country')) has-error @endif">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Country/Region">
                                        @if($errors->first('country'))
                                            <p class="text-danger"> {{$errors->first('country')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('contactNo')) has-error @endif">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="contactno" name="contactNo" placeholder="Contact No">
                                        @if($errors->first('contactNo'))
                                            <p class="text-danger"> {{$errors->first('contactNo')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 @if($errors->first('howCanIHelp')) has-error @endif">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="How can we help you ?" rows="11" name="howCanIHelp"></textarea>
                                        @if($errors->first('howCanIHelp'))
                                            <p class="text-danger"> {{$errors->first('howCanIHelp')}} </p>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" id="submit" class="btn btn-common">Send Us</button>
                                    <div id="msgSubmit" class="h3 text-center"></div>
                                    {{--<div class="clearfix"></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End Contact Us Section  -->
    @endsection

@section('jslinks')
    <!-- Google Maps API -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>
    <!-- Google Maps JS Only for Contact Pages -->
    <script type="text/javascript">
        var map;
        var defult = new google.maps.LatLng(22.310696,73.192635,30);
        var mapCoordinates = new google.maps.LatLng(22.310696,73.192635,30);

        var markers = [];
        var image = new google.maps.MarkerImage(
            'assets/img/map-marker.png',
            new google.maps.Size(84, 70),
            new google.maps.Point(0, 0),
            new google.maps.Point(60, 60)
        );

        function addMarker() {
            markers.push(new google.maps.Marker({
                    position: defult,
                    raiseOnDrag: false,
                    icon: image,
                    map: map,
                    draggable: false
                }
            ));

        }

        function initialize() {
            var mapOptions = {
                    backgroundColor: "#ffffff",
                    zoom: 14,
                    disableDefaultUI: true,
                    center: mapCoordinates,
                    zoomControl: false,
                    scaleControl: false,
                    scrollwheel: false,
                    disableDoubleClickZoom: true,
                    mapTypeId: google.maps.MapTypeId.ROADMAP,
                    styles: [{
                        "featureType": "landscape.natural",
                        "elementType": "geometry.fill",
                        "stylers": [{
                            "color": "#ffffff"
                        }
                        ]
                    }
                        , {
                            "featureType": "landscape.man_made",
                            "stylers": [{
                                "color": "#ffffff"
                            }
                                , {
                                    "visibility": "off"
                                }
                            ]
                        }
                        , {
                            "featureType": "water",
                            "stylers": [{
                                "color": "#80C8E5"
                            }
                                , {
                                    "saturation": 0
                                }
                            ]
                        }
                        , {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [{
                                "color": "#999999"
                            }
                            ]
                        }
                        , {
                            "elementType": "labels.text.stroke",
                            "stylers": [{
                                "visibility": "off"
                            }
                            ]
                        }
                        , {
                            "elementType": "labels.text",
                            "stylers": [{
                                "color": "#333333"
                            }
                            ]
                        }

                        , {
                            "featureType": "road.local",
                            "stylers": [{
                                "color": "#dedede"
                            }
                            ]
                        }
                        , {
                            "featureType": "road.local",
                            "elementType": "labels.text",
                            "stylers": [{
                                "color": "#666666"
                            }
                            ]
                        }
                        , {
                            "featureType": "transit.station.bus",
                            "stylers": [{
                                "saturation": -57
                            }
                            ]
                        }
                        , {
                            "featureType": "road.highway",
                            "elementType": "labels.icon",
                            "stylers": [{
                                "visibility": "off"
                            }
                            ]
                        }
                        , {
                            "featureType": "poi",
                            "stylers": [{
                                "visibility": "off"
                            }
                            ]
                        }

                    ]

                }
            ;
            map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
            addMarker();

        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    @endsection