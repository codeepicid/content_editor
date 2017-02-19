/**
 *
 * Home Script
 *
 * Version 1.0
 * @author Hendra
 * @copyright GOBOX INDONESIA
 *
 */

Handlebars.registerHelper('sliceString', function (words) {
    var count = 80;
    var trimmedString = words.substr(0, count);

    //re-trim if we are in the middle of a word
    return trimmedString.substr(0, Math.min(trimmedString.length, trimmedString.lastIndexOf(" "))) + ' ...';
});

Handlebars.registerHelper('dateFormated', function (date, type) {
    if (type == 'text')
        return moment(date, "YYYY-MM-DD HH:mm:ss").fromNow();
    else
        return moment(date, "YYYY-MM-DD HH:mm:ss").format('DD MMM YYYY');
});

var App = {
    init: function() {
        this.caseTemplate = Handlebars.compile($('#case-template').html());
        this.feature = $('#feature-highlight');
        this.getCase();
        this.binds();
    },
    binds: function() {
        var self = this;
        $('.open-feature')
            .on('click', function(){ self.openFeature(); });
        $('.dialog-overlay-close')
            .on('click', function(){ self.closeFeature(); });
        $('.read-more-btn')
            .on('click', function(){ self.openFeatureMobile(this); });
        $('.close-detail-btn')
            .on('click', function(){ self.closeFeatureMobile(this); });
        $('#go-box-pro-link')
            .on('click', function(){ self.goTo('#gobox-pro'); });
    },
    openFeature: function() {
        this.feature.addClass('open');
    },
    goTo: function(id) {
        $('html,body').animate({
            scrollTop: $(id).offset().top - 120
        },'slow');
        $('#wrapper').removeClass('toggled')
    },
    closeFeature: function() {
        this.feature.removeClass('open');
    },
    openFeatureMobile: function(a) {
        var target = $(a).attr('data-target');
        $(target).addClass('open');
    },
    closeFeatureMobile: function(a) {
        var parrent = $(a).parent('.why-us-detail');
        $(parrent).removeClass('open');
    },
    getCase: function() {
        var caseTemplate = this.caseTemplate;

        function renderTemplate(data) {
            $('#blog-container').html(caseTemplate(data.data));
        }
        $.get('/api/blogs?limit=3&promos=true', function(data) {
            renderTemplate(data);
        });
    }
};

App.init();

// How it Work Carousel Script

// var state        = 0;
// var screenImage  = $("#iPhone2");
// var theImage     = new Image();
// var iphoneWidth  = null;
// var iphoneHeight = null;
// var howtoRatio = null;
// var imageMask  = new Image();
// var imageSteps = null;
// var adRatio    = null;
// var divider    = null;
// var topPad     = null;
// var leftPad    = null;
// var WW         = $(window).width();;

// screenImage.load(function() {
//     theImage.src = screenImage.attr("src");
//     iphoneWidth  = theImage.width;
//     iphoneHeight = theImage.height;
//     howtoRatio   = parseInt(screenImage.css('width'))/iphoneWidth;
//     divider      = parseInt(screenImage.css('width'))*0.016;
//     $('#how-to-visual .loading-iphone').css('display', 'block');
//     $('#how-to-visual .loading-iphone').css('height', parseInt( parseInt(screenImage.css('width')) * 1.2));
//     $('#how-to-visual .loading-iphone').css('padding-top', parseInt($('.loading-iphone').css('height')) / 2.3);

//     $("#how-to-visual > img").load(function() {
//         imageMask.src = $('#how-to-visual').children('img').attr('src');
//         imageSteps    = imageMask;
//         adRatio       = Math.ceil(howtoRatio*imageSteps.width);
//         topPad        = parseInt(screenImage.css('height'))*184/1500 + parseInt($('#how-to-iPhone').css('padding-top'));
//         leftPad       = parseInt(screenImage.css('width'))*167/1087 + parseInt($('#how-to-iPhone').css('padding-left'));

//         if( WW < 750) {
//             leftPad = WW * 0.309;
//         }
        
//         $('#how-to-visual .loading-iphone').delay(800).fadeOut(300);
//         $('#how-to-visual > img').css('display', 'block');

//         $('#how-to-visual').css('top', topPad);
//         $('#how-to-visual').css('left', leftPad);

//         $('#how-to-visual').children('img').attr('width', parseInt(adRatio * 0.58));
//         $('#how-to-visual').children('img').attr('height', parseInt( parseInt(screenImage.css('width')) * 1.2));

//         $('#how-to-visual').css('width', parseInt(adRatio/10.7));
//         $('#how-to-visual').css('height', parseInt( parseInt(screenImage.css('width')) * 1.2) );
//     }).each(function() {
//       if(this.complete)
//         $(this).load();
//     });
// }).each(function() {
//     if(this.complete)
//         $(this).load();
// });

// $('#how-it-work-2').bind('slide.bs.carousel', function (e) {

//     // var slideFrom = $(this).find('.active').index();
//     var slideTo = $(e.relatedTarget).index();
//     // console.log(slideFrom+' => '+slideTo);

//     if(slideTo == 0) {
//         $('#how-to-visual').children('img').animate({'left' : 0}, 500);
//     } else {
//         $('#how-to-visual').children('img').animate({'left' : '-' + ((adRatio/10.5) + divider) * slideTo + 'px'}, 500);
//     }
// });

// $(document).ready(function () {
//     $("#how-to-visual").on('swiperight', function () {
//         $('#how-it-work-2').carousel('prev');
//     });
//     $("#how-to-visual").on('swipeleft', function () {
//         $('#how-it-work-2').carousel('next');
//     });
// });

// !How it Work Carousel Script

// Map Script
var map;
var marker;
var originGoBox;
var destinationGoBox;
var directionsDisplay;
var icons = {
    start: new google.maps.MarkerImage(
        '/assets/gobox/img/marker-gobox-start.svg',
        new google.maps.Size( 40, 60 ),
        new google.maps.Point( 0, 0 ),
        new google.maps.Point( 24, 47 )
    ),
    end: new google.maps.MarkerImage(
        '/assets/gobox/img/marker-gobox-end.svg',
        new google.maps.Size( 44, 60 ),
        new google.maps.Point( 0, 0 ),
        new google.maps.Point( 24, 49 )
    ),
    general: new google.maps.MarkerImage(
        '/assets/gobox/img/marker-gobox.svg',
        new google.maps.Size( 44, 60 ),
        new google.maps.Point( 0, 0 ),
        new google.maps.Point( 24, 49 )
    )
};

function initialize() {

  map = new google.maps.Map(document.getElementById('maps'), {
    center : new google.maps.LatLng(-6.219260,106.812410),
    zoom : 15,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false,
    streetViewControl: false
  });

  marker = new google.maps.Marker({
    map : map,
    icon : icons.general,
    anchorPoint: new google.maps.Point(0,-29),
    draggable :false
  });

  var inputOrigin = document.getElementById('fare-from');
  var inputDestination = document.getElementById('fare-to');

  var autooption = {
    componentRestrictions : { country: 'id' }
  };

  var autocompleteOrigin = new google.maps.places.Autocomplete(inputOrigin, autooption);

  google.maps.event.addListener(autocompleteOrigin,'place_changed',function(){
    marker.setVisible(false);
    var place = autocompleteOrigin.getPlace();

    originGoBox = place.geometry.location;

    if(place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
    } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17);
    }
    
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    if(originGoBox && destinationGoBox){
        if(directionsDisplay != null) {
            directionsDisplay.setMap(null);
            directionsDisplay = null;
        }
        var rendererOptions = {
            map: map,
            suppressMarkers: true
        };
        directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);

        getFare(directionsDisplay, originGoBox, destinationGoBox);
    }
  });

  var autocompleteDestination = new google.maps.places.Autocomplete(inputDestination, autooption);

  google.maps.event.addListener(autocompleteDestination,'place_changed',function(){
    marker.setVisible(false);
    var place = autocompleteDestination.getPlace();

    destinationGoBox = place.geometry.location;

    if(place.geometry.viewport) {
        map.fitBounds(place.geometry.viewport);
    } else {
        map.setCenter(place.geometry.location);
        map.setZoom(17);
    }
    
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    if(originGoBox && destinationGoBox){
        if(directionsDisplay != null) {
            directionsDisplay.setMap(null);
            directionsDisplay = null;
        }
        var rendererOptions = {
            map: map,
            suppressMarkers: true
        };
        directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);

        getFare(directionsDisplay, originGoBox, destinationGoBox);
    }
  });

  var styles = [{"featureType": "all", "elementType": "all", "stylers": [{"hue": "#ffbb00"}]}, {"featureType": "all", "elementType": "geometry.fill", "stylers": [{"hue": "#ffbb00"}]}, {"featureType": "all", "elementType": "labels.text.fill", "stylers": [{"hue": "#ffbb00"}]}];

    map.setOptions({styles: styles});
}

var rupiahCurrency = function(data) {
    var rev     = parseInt(data, 10).toString().split('').reverse().join('');
    var rev2    = '';
    for(var i = 0; i < rev.length; i++){
        rev2  += rev[i];
        if((i + 1) % 3 === 0 && i !== (rev.length - 1)){
            rev2 += '.';
        }
    }
    return 'Rp. ' + rev2.split('').reverse().join('') + ',00';
}

var getFare = function(directionsDisplay, originGoBox, destinationGoBox) {

    var request = {
        origin: originGoBox,
        destination: destinationGoBox,
        travelMode: google.maps.DirectionsTravelMode.DRIVING
    };

    directionsService = new google.maps.DirectionsService();
    directionsService.route(request, function(response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            marker.setVisible(false);
            directionsDisplay.setDirections(response);
            var leg = response.routes[ 0 ].legs[ 0 ];
            makeMarker( leg.start_location, icons.start, "title", 0 );
            makeMarker( leg.end_location, icons.end, 'title', 1 );

            $('#estimasi-harga .fare-content').hide();
            $('#estimasi-harga .loading-fare').toggle();
            $.get(apiUrl + "?origin.lat=" + originGoBox.lat() + "&origin.long=" + originGoBox.lng() + 
                            "&destinations.lat=" + destinationGoBox.lat() + "&destinations.long=" + destinationGoBox.lng(),
            function(data, status){
                $('#fare-pickbak').html(rupiahCurrency(data[1].fare));
                $('#fare-pickbox').html(rupiahCurrency(data[2].fare));
                $('#fare-engkelbak').html(rupiahCurrency(data[3].fare));
                $('#fare-engkelbox').html(rupiahCurrency(data[4].fare));
                $('#fare-distance').html(Math.ceil(data[1].estimated_distance));
                $('#estimasi-harga .loading-fare').toggle();
                $('#estimasi-harga .fare-content').show();

            });
        } else
            alert('failed to get directions');
    });
}

var markers = {};
var makeMarker = function( position, icon, title, id ) {
    if(markers[id] != null){
        markers[id].setMap(null);
        markers[id] = null
    }
    var marker = new google.maps.Marker({
        position: position,
        map: map,
        icon: icon,
        title: title
    });
    markers[id] = marker;
}

$("#estimasi-harga button[type=reset]").click(function() {
    originGoBox = null;
    destinationGoBox = null;

    if(directionsDisplay != null) {
        directionsDisplay.setMap(null);
        directionsDisplay = null;
    }
    var rendererOptions = {
        map: map,
        suppressMarkers: true
    };
    directionsDisplay = new google.maps.DirectionsRenderer(rendererOptions);

    markers[0].setMap(null);
    markers[1].setMap(null);
});

google.maps.event.addDomListener(window, 'load', initialize);
// !Map Script
//# sourceMappingURL=home.js.map
