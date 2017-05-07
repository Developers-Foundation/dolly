/* ----------------------------------------------------------- */
/* Nob Mailer START
 /* ----------------------------------------------------------- */
$(document).ready(function () {
    $('form.form-email').submit(function (e) {
        if (e.preventDefault) e.preventDefault();
        else e.returnValue = false;

        var thisForm = $(this).closest('form.form-email');
        var submitButton = thisForm.find('button');
        submitButton.prop("disabled", true);
        var emailField = thisForm.find('.form-input-email');
        var nameField = thisForm.find('.form-input-name');
        var messageField = thisForm.find('.form-input-message');
        var subjectField = thisForm.find('.form-input-subject');
        var phoneField = thisForm.find('.form-input-phone');

        if (thisForm.attr('data-form-type').indexOf("nob") > -1) {
            // Nob form
            var sendFrom = emailField.val(),
                sendTo = "dolly@dollychildren.org",
                subject = "Message from " + nameField.val() + ", Subject: " + subjectField.val(),
                msg = "Message: " + messageField.val(),
                msgHTML = "<p> Phone Number: " + phoneField.val() +"<br>"+ messageField.val() + "<p>",
                fromName = nameField.val(),
                toName = "Dolly Children Foundation Website";

            var sendData = JSON.stringify({
                'sendFrom': sendFrom,
                'fromName': fromName,
                'sendTo': sendTo,
                'toName': toName,
                'subject': subject,
                'msg': msg,
                'msgHTML': msgHTML
            });

            $.ajax({
                url: 'assets/mail/mailer.php',
                crossDomain: false,
                data: sendData,
                method: "POST",
                cache: false,
                dataType: 'json',
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    // Deal with JSON
                    console.log(data);
                    var returnData = data;
                    submitButton.removeClass("btn-primary");
                    if (returnData.success) {
                        // Throw success msg
                        emailField.val("");
                        nameField.val("");
                        messageField.val("");
                        phoneField.val("");
                        subjectField.val("");
                        submitButton.html("Received");
                        submitButton.addClass("btn-success");
                    } else {
                        // Throw error message
                        submitButton.html("Sorry an error occured");
                        submitButton.addClass("btn-danger");
                    }
                    submitButton.prop("disabled", false);
                },
                error: function (error) {
                    console.log(error);
                    // Throw error message
                    submitButton.html("Sorry an error occured");
                    submitButton.removeClass("btn-primary");
                    submitButton.addClass("btn-danger");
                    submitButton.prop("disabled", false);
                }
            });
        }
    });
});
/* ----------------------------------------------------------- */
/* Nob Mailer END
 /* ----------------------------------------------------------- */
/* ----------------------------------------------------------- */
/* Nob Google Map Start
 /* ----------------------------------------------------------- */
function loadedGmap() {
    if ($('body').hasClass("contact-page")) {
        // create a LatLng object containing the coordinate for the center of the map
        var latlng = new google.maps.LatLng(6.593691, 3.352847);

        // Find your styles here :) https://snazzymaps.com/explore
        var styleArr = [{
            "featureType": "landscape",
            "stylers": [{"saturation": -100}, {"lightness": 65}, {"visibility": "on"}]
        }, {
            "featureType": "poi",
            "stylers": [{"saturation": -100}, {"lightness": 51}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.highway",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {
            "featureType": "road.arterial",
            "stylers": [{"saturation": -100}, {"lightness": 30}, {"visibility": "on"}]
        }, {
            "featureType": "road.local",
            "stylers": [{"saturation": -100}, {"lightness": 40}, {"visibility": "on"}]
        }, {
            "featureType": "transit",
            "stylers": [{"saturation": -100}, {"visibility": "simplified"}]
        }, {"featureType": "administrative.province", "stylers": [{"visibility": "off"}]}, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{"visibility": "on"}, {"lightness": -25}, {"saturation": -100}]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{"hue": "#ffff00"}, {"lightness": -25}, {"saturation": -97}]
        }];

        // prepare the map properties
        var options = {
            zoom: 15,
            center: latlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            navigationControl: true,
            mapTypeControl: false,
            scrollwheel: false,
            styles: styleArr,
            disableDoubleClickZoom: true
        };

        // initialize the map object
        var map = new google.maps.Map(document.getElementById('google_map'), options);

        // add Marker
        var marker1 = new google.maps.Marker({
            position: latlng, map: map
        });

        // add listener for a click on the pin
        google.maps.event.addListener(marker1, 'click', function () {
            infowindow.open(map, marker1);
        });

        // add information window
        var infowindow = new google.maps.InfoWindow({
            content: '<div class="info"><strong>Dolly Children Foundation</strong><br><br>My company address is here<br> 32846 Sydney</div>'
        });
    }
}
/* ----------------------------------------------------------- */
/* Nob Google Map End
/* ----------------------------------------------------------- */

// Prevent default button click behaviour
$(document).ready(function(){
   $('#donateModalButton').on('click', function(e){
       e.preventDefault();
   })
});