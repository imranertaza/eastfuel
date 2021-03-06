function generatemap(e, o, l, n) {
    var r, c = document.getElementById(e);
    null != c && google.maps.event.addDomListener(window, "load", function () {
        var e = new google.maps.LatLng(o, l),
            t = {
                zoom: 10,
                disableDefaultUI: !0,
                scrollwheel: !0,
                scaleControl: !0,
                center: e,
                styles: [{
                    stylers: [{
                        hue: "#424449"
                    }, {
                        invert_lightness: !0
                    }, {
                        saturation: -88
                    }, {
                        lightness: 36
                    }, {
                        gamma: .5
                    }]
                }, {
                    featureType: "water",
                    elementType: "geometry"
                }]
            },
            i = new google.maps.Map(c, t),
            a = new google.maps.InfoWindow({
                content: '<div style="width:100%;float:left;"><div style="float:left;"><p style="font-size:14px;text-align:center;"><strong>' + n + "</strong></p></div></div>"
            }),
            s = new google.maps.Marker({
                position: e,
                map: i,
                icon: r
            });
        google.maps.event.addListener(s, "click", function () {
            a.open(i, this)
        })
    }), r = "images/map-marker.png"
} ! function (v) {
    "use strict";
    var i = i || {},
        c = (v(window), v(document)),
        r = v("html"),
        e = (v("body"), navigator.userAgent.toLowerCase());
    e.match(/(iphone|ipod|android|iemobile)/), e.match(/(iphone|ipod|ipad|android|iemobile)/), e.match(/(iphone|ipod|ipad)/), e.match(/(iemobile)/), v(".countdown"), v(".bar"), v(".round-chart"), v(".skill-bar"), v(".counter"), v(".datetimepicker");
    v.fn.exists = function () {
        return 0 < this.length
    }, i.niceSelect = function () {
        v("select").niceSelect()
    }, i.fitVids = function () {
        var e = v(".fitvids-video");
        e.length && e.fitVids()
    }, i.googleDemoMap = function () {
        v(".google-demo-map").each(function () {
            var e, t, i, a, s, o = v(this).attr("id"),
                l = v(this).attr("data-type"),
                n = [{
                    featureType: "all",
                    elementType: "labels.text.fill",
                    stylers: [{
                        saturation: 36
                    }, {
                        color: "#000000"
                    }, {
                        lightness: 40
                    }]
                }, {
                    featureType: "all",
                    elementType: "labels.text.stroke",
                    stylers: [{
                        visibility: "on"
                    }, {
                        color: "#000000"
                    }, {
                        lightness: 16
                    }]
                }, {
                    featureType: "all",
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "administrative",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 17
                    }, {
                        weight: 1.2
                    }]
                }, {
                    featureType: "landscape",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 20
                    }]
                }, {
                    featureType: "poi",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 21
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.fill",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 17
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "geometry.stroke",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 29
                    }, {
                        weight: .2
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 18
                    }]
                }, {
                    featureType: "road.local",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 16
                    }]
                }, {
                    featureType: "transit",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 19
                    }]
                }, {
                    featureType: "water",
                    elementType: "geometry",
                    stylers: [{
                        color: "#000000"
                    }, {
                        lightness: 17
                    }]
                }];
            "green" === l ? n = [{
                featureType: "administrative",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#444444"
                }]
            }, {
                featureType: "landscape",
                elementType: "all",
                stylers: [{
                    color: "#f2f2f2"
                }]
            }, {
                featureType: "poi",
                elementType: "all",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "road",
                elementType: "all",
                stylers: [{
                    saturation: -100
                }, {
                    lightness: 45
                }]
            }, {
                featureType: "road.highway",
                elementType: "all",
                stylers: [{
                    visibility: "simplified"
                }]
            }, {
                featureType: "road.arterial",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "transit",
                elementType: "all",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "water",
                elementType: "all",
                stylers: [{
                    color: "#84ba3f"
                }, {
                    visibility: "on"
                }]
            }] : "midnight" === l ? n = [{
                featureType: "all",
                elementType: "labels.text.fill",
                stylers: [{
                    color: "#ffffff"
                }]
            }, {
                featureType: "all",
                elementType: "labels.text.stroke",
                stylers: [{
                    color: "#000000"
                }, {
                    lightness: 13
                }]
            }, {
                featureType: "administrative",
                elementType: "geometry.fill",
                stylers: [{
                    color: "#000000"
                }]
            }, {
                featureType: "administrative",
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#144b53"
                }, {
                    lightness: 14
                }, {
                    weight: 1.4
                }]
            }, {
                featureType: "landscape",
                elementType: "all",
                stylers: [{
                    color: "#08304b"
                }]
            }, {
                featureType: "poi",
                elementType: "geometry",
                stylers: [{
                    color: "#0c4152"
                }, {
                    lightness: 5
                }]
            }, {
                featureType: "road.highway",
                elementType: "geometry.fill",
                stylers: [{
                    color: "#000000"
                }]
            }, {
                featureType: "road.highway",
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#0b434f"
                }, {
                    lightness: 25
                }]
            }, {
                featureType: "road.arterial",
                elementType: "geometry.fill",
                stylers: [{
                    color: "#000000"
                }]
            }, {
                featureType: "road.arterial",
                elementType: "geometry.stroke",
                stylers: [{
                    color: "#0b3d51"
                }, {
                    lightness: 16
                }]
            }, {
                featureType: "road.local",
                elementType: "geometry",
                stylers: [{
                    color: "#000000"
                }]
            }, {
                featureType: "transit",
                elementType: "all",
                stylers: [{
                    color: "#146474"
                }]
            }, {
                featureType: "water",
                elementType: "all",
                stylers: [{
                    color: "#021019"
                }]
            }] : "light" === l ? n = [{
                featureType: "administrative.locality",
                elementType: "all",
                stylers: [{
                    hue: "#2c2e33"
                }, {
                    saturation: 7
                }, {
                    lightness: 19
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "landscape",
                elementType: "all",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: -100
                }, {
                    lightness: 100
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "poi",
                elementType: "all",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: -100
                }, {
                    lightness: 100
                }, {
                    visibility: "off"
                }]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [{
                    hue: "#bbc0c4"
                }, {
                    saturation: -93
                }, {
                    lightness: 31
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "road",
                elementType: "labels",
                stylers: [{
                    hue: "#bbc0c4"
                }, {
                    saturation: -93
                }, {
                    lightness: 31
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "road.arterial",
                elementType: "labels",
                stylers: [{
                    hue: "#bbc0c4"
                }, {
                    saturation: -93
                }, {
                    lightness: -2
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "road.local",
                elementType: "geometry",
                stylers: [{
                    hue: "#e9ebed"
                }, {
                    saturation: -90
                }, {
                    lightness: -8
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "transit",
                elementType: "all",
                stylers: [{
                    hue: "#e9ebed"
                }, {
                    saturation: 10
                }, {
                    lightness: 69
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "water",
                elementType: "all",
                stylers: [{
                    hue: "#e9ebed"
                }, {
                    saturation: -78
                }, {
                    lightness: 67
                }, {
                    visibility: "simplified"
                }]
            }] : "grey" === l ? n = [{
                featureType: "landscape",
                elementType: "labels",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "transit",
                elementType: "labels",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "poi",
                elementType: "labels",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "water",
                elementType: "labels",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                featureType: "road",
                elementType: "labels.icon",
                stylers: [{
                    visibility: "off"
                }]
            }, {
                stylers: [{
                    hue: "#00aaff"
                }, {
                    saturation: -100
                }, {
                    gamma: 2.15
                }, {
                    lightness: 12
                }]
            }, {
                featureType: "road",
                elementType: "labels.text.fill",
                stylers: [{
                    visibility: "on"
                }, {
                    lightness: 24
                }]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [{
                    lightness: 57
                }]
            }] : "blackandwhite" === l && (n = [{
                featureType: "water",
                elementType: "all",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: -100
                }, {
                    lightness: 100
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "landscape",
                elementType: "all",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: -100
                }, {
                    lightness: 100
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "road",
                elementType: "geometry",
                stylers: [{
                    hue: "#000000"
                }, {
                    saturation: -100
                }, {
                    lightness: -100
                }, {
                    visibility: "simplified"
                }]
            }, {
                featureType: "road",
                elementType: "labels",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: -100
                }, {
                    lightness: 100
                }, {
                    visibility: "off"
                }]
            }, {
                featureType: "poi",
                elementType: "all",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: -100
                }, {
                    lightness: 100
                }, {
                    visibility: "off"
                }]
            }, {
                featureType: "administrative",
                elementType: "all",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: 0
                }, {
                    lightness: 100
                }, {
                    visibility: "off"
                }]
            }, {
                featureType: "transit",
                elementType: "geometry",
                stylers: [{
                    hue: "#000000"
                }, {
                    saturation: 0
                }, {
                    lightness: -100
                }, {
                    visibility: "on"
                }]
            }, {
                featureType: "transit",
                elementType: "labels",
                stylers: [{
                    hue: "#ffffff"
                }, {
                    saturation: 0
                }, {
                    lightness: 100
                }, {
                    visibility: "off"
                }]
            }]), google.maps.event.addDomListener(window, "load", (e = o, t = n, i = {
                zoom: 11,
                center: new google.maps.LatLng(32.256392, -110.944125),
                styles: t
            }, a = document.getElementById(e), s = new google.maps.Map(a, i), void new google.maps.Marker({
                position: new google.maps.LatLng(432.256392, -110.944125),
                map: s,
                title: "Snazzy!"
            })))
        })
    }, i.niceScroll = function () {
        var e = v("#scrollbar-one"),
            t = v("#scrollbar-two");
        e.length && e.niceScroll({
            cursorcolor: "#e91e63",
            scrollspeed: 200,
            mousescrollstep: 100,
            cursorwidth: 5,
            cursorborder: 0,
            cursorborderradius: 4
        }), t.length && t.niceScroll({
            cursorcolor: "#e91e63",
            cursorwidth: "10px",
            background: "rgba(0,0,0,0.3)",
            cursorborder: "1px solid #e91e63",
            scrollspeed: 200,
            mousescrollstep: 100,
            cursorborderradius: 0
        })
    }, i.twitterLive = function () {
        var e, i = v(".owl-twitter-grid-third-col"),
            a = v(".owl-grid-third-col-two"),
            s = v(".owl-twitter-single"),
            t = new XMLHttpRequest;
        t.open("GET", "http://yankeeinfoweb.com/demo/twitter-feed/twitter-api.php", !0), t.onreadystatechange = function () {
            4 == t.readyState && (e = JSON.parse(t.responseText), jQuery.each(e, function (e, t) {
                i.trigger("add.owl.carousel", '<div class="item mb-20"><div class="yit-twitter-item blue-color-bg pad-25-all flex-full-height"><div class="yit-display-centrize"><div class="yit-display-v-centrize"><div class="tweet-author-thumbnail"><img src="' + t.user.profile_image_url + '" alt="Twitter Avtar" class="img-circle mb-15" width="70" height="70"></div><div class="tweet-author-name caption-title mb-10"><a href="Javascript:void(0);" title="Author" class="white-color-text">@' + t.user.screen_name + '</a></div><div class="tweet-post font-weight-light">' + t.text + '</div><div class="tweet-timestamp"><p class="muted-text"><i class="ti-time"></i> 6 Days ago</p></div></div></div></div></div>')
            }), jQuery.each(e, function (e, t) {
                a.trigger("add.owl.carousel", '<div class="item mb-20"><div class="item"><div class="tweet-item black-extra-grey-color-bg pad-20-all img-rounded flex-full-height"><div class="yit-display-centrize"><div class="yit-display-v-centrize"><div class="tweet-author"><img src="' + t.user.profile_image_url + '" alt="Tweet Author" class="img-circle"><a href="Javascript:void(0);" title="@Lara_ux" class="tweet-user">@' + t.user.screen_name + '</a></div><div class="tweet-post font-weight-light">' + t.text + '<p class="text-muted">5 days ago</p></div></div></div></div></div>')
            }), jQuery.each(e, function (e, t) {
                s.trigger("add.owl.carousel", '<div class="item mb-20"><div class="item"><div class="tweet-item black-extra-grey-color-bg pad-20-all img-rounded flex-full-height"><div class="yit-display-centrize"><div class="yit-display-v-centrize"><div class="tweet-author"><img src="' + t.user.profile_image_url + '" alt="Tweet Author" class="img-circle"><a href="Javascript:void(0);" title="@Lara_ux" class="tweet-user">@' + t.user.screen_name + '</a></div><div class="tweet-post">' + t.text + '<p class="text-muted">5 days ago</p></div></div></div></div></div>')
            }), i.trigger("refresh.owl.carousel"), a.trigger("refresh.owl.carousel"), s.trigger("refresh.owl.carousel"))
        }, t.send()
    }, i.generateMap = function () {
        generatemap("demo-map", 32.256392, -110.944125, "You Are here.!! <br> Contact Here")
    }, i.slider = function () {
        var e = v(".owl-twitter-grid-third-col"),
            t = v(".owl-grid-third-col-two"),
            i = v(".owl-twitter-single"),
            a = v(".owl-single"),
            s = v(".owl-grid-two-col"),
            o = v(".owl-grid-third-col"),
            l = v(".owl-grid-four-col"),
            n = v(".owl-grid-five-col"),
            r = v(".yit-owl-blog"),
            c = v(".yit-owl-partners");
        e.owlCarousel({
            loop: !0,
            nav: !0,
            dots: !1,
            margin: 10,
            autoplay: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1e3: {
                    items: 3,
                    margin: 15
                }
            }
        }), t.owlCarousel({
            loop: !0,
            nav: !0,
            dots: !1,
            margin: 10,
            autoplay: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1e3: {
                    items: 3,
                    margin: 15
                }
            }
        }), i.owlCarousel({
            loop: !0,
            nav: !1,
            dots: !0,
            margin: 10,
            autoplay: !0,
            singleItem: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            animateIn: "bounceInUp",
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1e3: {
                    items: 1,
                    margin: 15
                }
            }
        }), a.owlCarousel({
            loop: !0,
            nav: !1,
            dots: !0,
            margin: 10,
            autoplay: !0,
            singleItem: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            animateIn: "bounceInUp",
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1e3: {
                    items: 1,
                    margin: 15
                }
            }
        }), s.owlCarousel({
            loop: !0,
            nav: !0,
            dots: !1,
            margin: 10,
            autoplay: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1e3: {
                    items: 2,
                    margin: 15
                }
            }
        }), o.owlCarousel({
            loop: !0,
            nav: !0,
            dots: !1,
            margin: 10,
            autoplay: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1e3: {
                    items: 3,
                    margin: 15
                }
            }
        }), l.owlCarousel({
            loop: !0,
            nav: !0,
            dots: !1,
            margin: 10,
            autoplay: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1e3: {
                    items: 4,
                    margin: 15
                }
            }
        }), n.owlCarousel({
            loop: !0,
            nav: !0,
            dots: !1,
            margin: 10,
            autoplay: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1e3: {
                    items: 5,
                    margin: 15
                }
            }
        }), r.owlCarousel({
            loop: !0,
            nav: !1,
            dots: !1,
            margin: 10,
            autoplay: !0,
            singleItem: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            animateIn: "fadeIn",
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1e3: {
                    items: 1,
                    margin: 15
                }
            }
        }), c.owlCarousel({
            loop: !0,
            nav: !1,
            dots: !1,
            margin: 10,
            autoplay: !0,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsiveClass: !0,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1e3: {
                    items: 4,
                    margin: 15
                }
            }
        })
    }, i.formValidation = function () {
        var t, e, i;
        t = jQuery, e = t("#contact-form"), i = t("#newsletter-form"), jQuery.validator.addMethod("lettersonly", function (e, t) {
            return this.optional(t) || /^[a-z0-9_-]+$/i.test(e)
        }, "Please use only a-z0-9_-"), e.validate({
            rules: {
                firstname: {
                    required: !0
                },
                email: {
                    email: !0,
                    required: !0
                },
                phoneno: {
                    required: !0,
                    number: !0,
                    maxlength: 10
                },
                website: {
                    required: !0
                }
            },
            highlight: function (e) {
                t(e).closest(".control-group").removeClass("success").addClass("has-error animation-slideDown")
            },
            success: function (e) {
                t(e).addClass("valid").closest(".control-group").removeClass("has-error").addClass("success")
            }
        }), i.validate({
            rules: {
                newsemail: {
                    email: !0,
                    required: !0
                }
            },
            highlight: function (e) {
                t(e).closest(".control-group-validate").removeClass("success").addClass("has-error animation-slideDown")
            },
            success: function (e) {
                t(e).addClass("valid").closest(".control-group-validate").removeClass("has-error").addClass("success")
            }
        })
    }, i.instaFeed = function () {
        var e = "6803684911.2e0553c.0c00f7341c1c45b29c12449f518a6d3c",
            t = 6,
            i = v(".yit-instafeed-blog"),
            a = v(".yit-instafeed-footer"),
            s = v(".yit-instafeed-dual"),
            o = v(".yit-instafeed");
        i.length && (t = 6, v.ajax({
            url: "https://api.instagram.com/v1/users/self/media/recent",
            dataType: "jsonp",
            type: "GET",
            data: {
                access_token: e,
                count: t,
                scope: "public_content"
            },
            success: function (e) {
                v.each(e.data, function (e, t) {
                    i.append('<div class="col-lg-4 col-md-4 col-xl-4"><div class="instafeed-item"><a href="' + t.link + '" title="Insta Thumbnail"><img src="' + t.images.low_resolution.url + '" alt="Insta Image" data-no-retina=""><div class="instafeed-count pink-color-bg"><i class="fa fa-heart-o"></i> ' + t.likes.count + "</div></a></div></div>")
                })
            },
            error: function (e) {
                console.log(e)
            }
        })), a.length && (t = 8, v.ajax({
            url: "https://api.instagram.com/v1/users/self/media/recent",
            dataType: "jsonp",
            type: "GET",
            data: {
                access_token: e,
                count: t,
                scope: "public_content"
            },
            success: function (e) {
                console.log(e), v.each(e.data, function (e, t) {
                    a.append('<div class="col-lg-3 col-md-3 col-xl-3"><div class="instafeed-item"><a href="' + t.link + '" title="Insta Thumbnail"><img src="' + t.images.low_resolution.url + '" alt="Insta Image" data-no-retina=""><div class="instafeed-count pink-color-bg"><i class="fa fa-heart-o"></i> ' + t.likes.count + "</div></a></div></div>")
                })
            },
            error: function (e) {
                console.log(e)
            }
        })), s.length && (t = 8, v.ajax({
            url: "https://api.instagram.com/v1/users/self/media/recent",
            dataType: "jsonp",
            type: "GET",
            data: {
                access_token: e,
                count: t,
                scope: "public_content"
            },
            success: function (e) {
                v.each(e.data, function (e, t) {
                    s.append('<div class="col-lg-6 col-md-6 col-xl-6"><div class="instafeed-item"><a href="' + t.link + '" title="Insta Thumbnail"><img src="' + t.images.low_resolution.url + '" alt="Insta Image" data-no-retina=""><div class="instafeed-count"><div class="yit-display-centrize"><div class="yit-display-v-centrize"><i class="fa fa-heart-o"></i> ' + t.likes.count + "</div></div></div></a></div></div>")
                })
            },
            error: function (e) {
                console.log(e)
            }
        })), o.length && (t = 4, v.ajax({
            url: "https://api.instagram.com/v1/users/self/media/recent",
            dataType: "jsonp",
            type: "GET",
            data: {
                access_token: e,
                count: t,
                scope: "public_content"
            },
            success: function (e) {
                v.each(e.data, function (e, t) {
                    o.append('<div class="col-lg-3 col-md-6 col-xl-3"><div class="instafeed-item"><a href="' + t.link + '" title="Insta Thumbnail"><img src="' + t.images.low_resolution.url + '" alt="Insta Image" data-no-retina=""><div class="instafeed-count pink-color-bg"><i class="fa fa-heart-o"></i> ' + t.likes.count + "</div></a></div></div>")
                })
            },
            error: function (e) {
                console.log(e)
            }
        }))
    }, i.retinaImage = function () {
        v("img:not([data-at2x])").attr("data-no-retina", "")
    }, i.countDown = function () {
        v(function () {
            timeToLaunch(), numberTransition("#days .number", days, 2e3, "easeOutQuad"), numberTransition("#hours .number", hrs, 1700, "easeOutQuad"), numberTransition("#minutes .number", min, 1500, "easeOutQuad"), numberTransition("#seconds .number", sec, 1300, "easeOutQuad"), setTimeout(countDownTimer, 1001)
        })
    }, i.pieChart = function () {
        var e = v(".yit-chart.style-1"),
            t = v(".yit-chart.style-2"),
            i = v(".yit-chart.style-3"),
            a = v(".yit-chart.style-4"),
            s = v(".yit-chart.style-5");
        e.one("inview", function (e, t) {
            v(".chart", this).easyPieChart({
                scaleColor: "#e91e63",
                lineWidth: 10,
                lineCap: "butt",
                barColor: "#e91e63",
                trackColor: "#ecf0f1",
                size: 160,
                animate: 1500,
                onStep: function (e) {
                    this.$el.find("span").text(Math.round(e))
                },
                onStop: function (e, t) {
                    this.$el.find("span").text(Math.round(t))
                }
            })
        }), t.one("inview", function (e, t) {
            v(".chart-one", this).easyPieChart({
                scaleColor: "#e91e63",
                lineWidth: 20,
                lineCap: "round",
                barColor: "#e91e63",
                trackColor: "#ecf0f1",
                size: 160,
                animate: 1500,
                onStep: function (e) {
                    this.$el.find("span").text(Math.round(e))
                },
                onStop: function (e, t) {
                    this.$el.find("span").text(Math.round(t))
                }
            })
        }), t.one("inview", function (e, t) {
            v(".chart-two", this).easyPieChart({
                scaleColor: "#000",
                lineWidth: 5,
                lineCap: "butt",
                barColor: "#e91e63",
                trackColor: "#ecf0f1",
                size: 160,
                animate: 1500,
                onStep: function (e) {
                    this.$el.find("span").text(Math.round(e))
                },
                onStop: function (e, t) {
                    this.$el.find("span").text(Math.round(t))
                }
            })
        }), i.one("inview", function (e, t) {
            v(".chart-two", this).easyPieChart({
                scaleColor: "#000",
                lineWidth: 1,
                lineCap: "round",
                barColor: "#e91e63",
                trackColor: "#ecf0f1",
                size: 160,
                animate: 1500,
                onStep: function (e) {
                    this.$el.find("span").text(Math.round(e))
                },
                onStop: function (e, t) {
                    this.$el.find("span").text(Math.round(t))
                }
            })
        }), a.one("inview", function (e, t) {
            v(".chart-two", this).easyPieChart({
                scaleColor: "#000",
                lineWidth: 1,
                lineCap: "round",
                barColor: "#000",
                trackColor: "#dfdfdf",
                size: 120,
                animate: 1500,
                onStep: function (e) {
                    this.$el.find("span").text(Math.round(e))
                },
                onStop: function (e, t) {
                    this.$el.find("span").text(Math.round(t))
                }
            })
        }), s.one("inview", function (e, t) {
            v(".chart-four", this).easyPieChart({
                scaleColor: "#e91e63",
                lineWidth: 3,
                lineCap: "butt",
                barColor: "#e91e63",
                trackColor: "#dfdfdf",
                size: 120,
                animate: 1500,
                onStep: function (e) {
                    this.$el.find("span").text(Math.round(e))
                },
                onStop: function (e, t) {
                    this.$el.find("span").text(Math.round(t))
                }
            })
        })
    }, i.skillBar = function () {
        v(".yit-skillbar.style-1").one("inview", function (e, t) {
            v(".yit-skillbar.style-1 .skillbar").skillBars({
                from: 0,
                speed: 4e3,
                interval: 100,
                decimals: 0
            })
        }), v(".yit-skillbar.style-2").one("inview", function (e, t) {
            v(".yit-skillbar.style-2 .skillbar").skillBars({
                from: 0,
                speed: 4e3,
                interval: 100,
                decimals: 0
            })
        }), v(".yit-skillbar.style-3").one("inview", function (e, t) {
            v(".yit-skillbar.style-3 .skillbar").skillBars({
                from: 0,
                speed: 4e3,
                interval: 100,
                decimals: 0
            })
        }), v(".yit-skillbar.style-4").one("inview", function (e, t) {
            v(".yit-skillbar.style-4 .skillbar").skillBars({
                from: 0,
                speed: 4e3,
                interval: 100,
                decimals: 0
            })
        })
    }, i.jGallery = function () {
        v(".justified-gallery").justifiedGallery({
            rowHeight: 400,
            maxRowHeight: !1,
            captions: !0,
            margins: 10,
            lastRow: "nojustify",
            randomize: !0,
            waitThumbnailsLoad: !0
        })
    }, i.magnificPopup = function () {
        var e = v(".popup-image"),
            t = v(".popup-image-no-margins"),
            i = v(".popup-gallery"),
            a = v(".zoom-gallery"),
            s = v(".popup-with-form"),
            o = v(".popup-modal"),
            l = v(".popup-with-zoom-anim"),
            n = (v(".popup-with-move-anim"), v(".popup-youtube, .popup-vimeo, .popup-gmaps"));
        e.magnificPopup({
            type: "image"
        }), n.magnificPopup({
            disableOn: 700,
            type: "iframe",
            mainClass: "mfp-fade",
            closeOnContentClick: !0,
            closeBtnInside: !1,
            fixedContentPos: !0,
            removalDelay: 160,
            preloader: !1
        }), t.magnificPopup({
            type: "image",
            closeOnContentClick: !0,
            closeBtnInside: !1,
            fixedContentPos: !0,
            mainClass: "mfp-no-margins mfp-with-zoom",
            image: {
                verticalFit: !0
            },
            zoom: {
                enabled: !0,
                duration: 300
            }
        }), i.magnificPopup({
            delegate: ".popup-link",
            type: "image",
            closeOnContentClick: !0,
            closeBtnInside: !1,
            fixedContentPos: !0,
            tLoading: "Loading image #%curr%...",
            mainClass: "mfp-fade",
            gallery: {
                enabled: !0,
                navigateByImgClick: !0,
                preload: [0, 1]
            },
            image: {
                tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
                titleSrc: function (e) {
                    return e.el.attr("title") + "<small>by Print Frame Deliver</small>"
                }
            }
        }), a.magnificPopup({
            delegate: "a",
            type: "image",
            mainClass: "mfp-with-zoom mfp-img-mobile",
            fixedContentPos: !0,
            closeBtnInside: !1,
            image: {
                verticalFit: !0,
                titleSrc: function (e) {
                    return e.el.attr("title") + "<small>by Print Frame Deliver</small>"
                }
            },
            gallery: {
                enabled: !0
            },
            zoom: {
                enabled: !0,
                duration: 300,
                opener: function (e) {
                    return e.find("img")
                }
            }
        }), s.magnificPopup({
            type: "inline",
            preloader: !1,
            closeBtnInside: !1,
            fixedContentPos: !0,
            mainClass: "mfp-fade",
            focus: "#name",
            callbacks: {
                beforeOpen: function () {
                    v(window).width() < 700 ? this.st.focus = !1 : this.st.focus = "#name"
                }
            }
        }), o.magnificPopup({
            type: "inline",
            preloader: !1,
            modal: !0,
            blackbg: !0,
            mainClass: "mfp-fade",
            callbacks: {
                open: function () {
                    r.css("margin-right", 0)
                }
            }
        }), c.on("click", ".popup-modal-dismiss", function (e) {
            e.preventDefault(), v.magnificPopup.close()
        }), l.magnificPopup({
            type: "inline",
            fixedContentPos: !1,
            fixedBgPos: !0,
            overflowY: "auto",
            closeBtnInside: !0,
            preloader: !1,
            midClick: !0,
            removalDelay: 300,
            blackbg: !0,
            mainClass: "my-mfp-zoom-in"
        }), v(".popup-with-move-anim").magnificPopup({
            type: "inline",
            fixedContentPos: !1,
            fixedBgPos: !0,
            overflowY: "auto",
            closeBtnInside: !0,
            preloader: !1,
            midClick: !0,
            removalDelay: 300,
            blackbg: !0,
            mainClass: "my-mfp-slide-bottom"
        })
    }, i.masonaryIsotop = function () {
        var t, i, a, s, e = v(".grid"),
            o = v(".isotop-filters"),
            l = v(".isotop-masonry"),
            n = v(".isotop-masonry-filter"),
            r = v(".masonry-filter-tab"),
            c = v(".filter-tab"),
            d = v(".metro"),
            p = v(".metro-filter"),
            u = v(".metro-filter-tab"),
            f = v(".blog-isotope"),
            m = v(".blog-filter-tab"),
            g = v(".blog-masonry"),
            y = v(".facebook-masonry"),
            h = v(".blog-isotop-filters");
        e.imagesLoaded(function () {
            e.masonry({
                itemSelector: ".grid-item",
                columnWidth: ".grid-item",
                gutter: 0,
                percentPosition: !0,
                masonry: {
                    gutterWidth: 0
                }
            })
        }), t = v(".isotope").isotope({
            itemSelector: ".element-item",
            layoutMode: "fitRows"
        }), o.on("click", "button", function () {
            var e = v(this).attr("data-filter");
            t.isotope({
                filter: e
            })
        }), c.each(function (e, t) {
            var i = v(t);
            i.on("click", "button", function () {
                i.find(".is-checked").removeClass("is-checked"), v(this).addClass("is-checked")
            })
        }), t.imagesLoaded().progress(function () {
            t.isotope("layout")
        }), i = l.isotope({
            itemSelector: ".isotop-masonry-item",
            percentPosition: !0,
            masonry: {
                columnWidth: ".isotop-masonry-item"
            }
        }), n.on("click", "button", function () {
            var e = v(this).attr("data-filter");
            i.isotope({
                filter: e
            })
        }), r.each(function (e, t) {
            var i = v(t);
            i.on("click", "button", function () {
                i.find(".is-checked").removeClass("is-checked"), v(this).addClass("is-checked")
            })
        }), i.imagesLoaded().progress(function () {
            i.isotope("layout")
        }), a = d.isotope({
            itemSelector: ".metro-item",
            percentPosition: !0,
            masonry: {
                columnWidth: ".metro-item"
            }
        }), p.on("click", "button", function () {
            var e = v(this).attr("data-filter");
            a.isotope({
                filter: e
            })
        }), u.each(function (e, t) {
            var i = v(t);
            i.on("click", "button", function () {
                i.find(".is-checked").removeClass("is-checked"), v(this).addClass("is-checked")
            })
        }), a.imagesLoaded().progress(function () {
            a.isotope("layout")
        }), s = f.isotope({
            itemSelector: ".blog-element-item",
            layoutMode: "fitRows"
        }), h.on("click", "button", function () {
            var e = v(this).attr("data-filter");
            s.isotope({
                filter: e
            })
        }), m.each(function (e, t) {
            var i = v(t);
            i.on("click", "button", function () {
                i.find(".is-checked").removeClass("is-checked"), v(this).addClass("is-checked")
            })
        }), s.imagesLoaded().progress(function () {
            s.isotope("layout")
        }), g.imagesLoaded(function () {
            g.masonry({
                itemSelector: ".blog-grid-item",
                columnWidth: ".blog-grid-item",
                gutter: 0,
                percentPosition: !0,
                masonry: {
                    gutterWidth: 0
                }
            })
        }), y.imagesLoaded(function () {
            y.masonry({
                itemSelector: ".facebook-grid-item",
                columnWidth: ".facebook-grid-item",
                gutter: 0,
                percentPosition: !0,
                masonry: {
                    gutterWidth: 0
                }
            })
        })
    }, i.counter = function () {
        var i, a, s, o, l, e = v("#counter.style-1"),
            t = v("#counter.style-2"),
            n = v("#counter.style-3"),
            r = v("#counter");
        e.one("inview", function (e, t) {
            !!(i = {
                useEasing: !0,
                useGrouping: !0,
                separator: ",",
                decimal: "."
            }), a = new countUp(".style-1 #data-1", 0, v("#data-1", this).attr("data-count"), 0, 2.5, i), s = new countUp(".style-1 #data-2", 0, v("#data-2", this).attr("data-count"), 0, 2.5, i), o = new countUp(".style-1 #data-3", 1, v("#data-3", this).attr("data-count"), 0, 2.5, i), l = new countUp(".style-1 #data-4", 0, v("#data-4", this).attr("data-count"), 0, 2.5, i), a.start(), s.start(), o.start(), l.start()
        }), t.one("inview", function (e, t) {
            var i, a, s, o, l;
            i = {
                useEasing: !0,
                useGrouping: !0,
                separator: ",",
                decimal: "."
            }, a = new countUp(".style-2 #data-1", 0, v("#data-1", this).attr("data-count"), 0, 2, i), s = new countUp(".style-2 #data-2", 0, v("#data-2", this).attr("data-count"), 0, 2, i), o = new countUp(".style-2 #data-3", 1, v("#data-3", this).attr("data-count"), 0, 2, i), l = new countUp(".style-2 #data-4", 0, v("#data-4", this).attr("data-count"), 0, 2, i), a.start(), s.start(), o.start(), l.start()
        }), n.one("inview", function (e, t) {
            var i, a, s, o, l;
            i = {
                useEasing: !0,
                useGrouping: !0,
                separator: ",",
                decimal: "."
            }, a = new countUp(".style-3 #data-1", 0, v("#data-1", this).attr("data-count"), 0, 2.5, i), s = new countUp(".style-3 #data-2", 0, v("#data-2", this).attr("data-count"), 0, 2.5, i), o = new countUp(".style-3 #data-3", 1, v("#data-3", this).attr("data-count"), 0, 2.5, i), l = new countUp(".style-3 #data-4", 0, v("#data-4", this).attr("data-count"), 0, 2.5, i), a.start(), s.start(), o.start(), l.start()
        }), r.one("inview", function (e, t) {
            var i, a, s, o, l;
            i = {
                useEasing: !0,
                useGrouping: !0,
                separator: ",",
                decimal: "."
            }, a = new countUp("#data-1", 0, v("#data-1", this).attr("data-count"), 0, 2.5, i), s = new countUp("#data-2", 0, v("#data-2", this).attr("data-count"), 0, 2.5, i), o = new countUp("#data-3", 1, v("#data-3", this).attr("data-count"), 0, 2.5, i), l = new countUp("#data-4", 0, v("#data-4", this).attr("data-count"), 0, 2.5, i), a.start(), s.start(), o.start(), l.start()
        })
    }, i.stellar = function () {
        v.stellar({
            horizontalScrolling: !1,
            responsive: !0
        })
    }, i.swiper = function () {
        new Swiper(".swiper-default-carousel"), new Swiper(".swiper-navigation-carousel", {
            allowTouchMove: !0,
            loop: !0,
            slidesPerView: 1,
            preventClicks: !1,
            autoplay: {
                delay: 5e3
            },
            keyboard: {
                enabled: !0
            },
            navigation: {
                nextEl: ".swiper-navigation-carousel-next",
                prevEl: ".swiper-navigation-carousel-prev"
            },
            pagination: {
                el: ".swiper-navigation-carousel-pagination",
                clickable: !0
            }
        }), new Swiper(".swiper-fade-carousel", {
            allowTouchMove: !0,
            loop: !0,
            slidesPerView: 1,
            preventClicks: !1,
            effect: "fade",
            autoplay: {
                delay: 5e3
            },
            keyboard: {
                enabled: !0
            },
            navigation: {
                nextEl: ".swiper-fade-carousel-next",
                prevEl: ".swiper-fade-carousel-prev"
            },
            pagination: {
                el: ".swiper-fade-carousel-pagination",
                clickable: !0
            }
        }), new Swiper(".swiper-center-slide-carousel", {
            allowTouchMove: !0,
            slidesPerView: "auto",
            centeredSlides: !0,
            spaceBetween: 0,
            preventClicks: !1,
            loop: !0,
            loopedSlides: 3,
            pagination: {
                el: "null",
                clickable: !0
            },
            autoplay: {
                delay: 5e3,
                disableOnInteraction: !0
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        }), new Swiper(".swiper-bottom-scrollbar-full", {
            allowTouchMove: !0,
            slidesPerView: "auto",
            grabCursor: !0,
            preventClicks: !1,
            spaceBetween: 30,
            keyboardControl: !0,
            speed: 1e3,
            pagination: {
                el: null
            },
            autoplay: {
                delay: 5e3
            },
            scrollbar: {
                el: ".swiper-scrollbar",
                draggable: !0,
                hide: !1,
                snapOnRelease: !0
            },
            mousewheel: {
                enable: !0
            },
            keyboard: {
                enabled: !0
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        }), new Swiper(".swiper-multislide", {
            slidesPerView: 4,
            allowTouchMove: !0,
            spaceBetween: 0,
            preventClicks: !1,
            pagination: {
                el: ".swiper-pagination",
                clickable: !0
            },
            autoplay: {
                delay: 3e3
            },
            breakpoints: {
                1199: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                991: {
                    slidesPerView: 3,
                    spaceBetween: 0
                },
                767: {
                    slidesPerView: 1,
                    spaceBetween: 0
                }
            }
        }), new Swiper(".swiper-verticle", {
            allowTouchMove: !0,
            loop: !0,
            slidesPerView: 1,
            preventClicks: !1,
            direction: "vertical",
            mousewheel: !0,
            keyboard: {
                enabled: !0
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: !0
            }
        }), new Swiper(".swiper-progressbar", {
            allowTouchMove: !0,
            loop: !0,
            slidesPerView: 1,
            preventClicks: !1,
            autoplay: {
                delay: 5e3
            },
            pagination: {
                el: ".swiper-pagination",
                type: "progressbar"
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            }
        })
    }, i.navigation = function () {
        var t = 0,
            e = v(".yit-on-scroll-nav"),
            i = v(".yit-on-scroll-fixed"),
            a = (v(".xs-navbar-nav li a"), v(".navbar-toggler")),
            s = v(".navbar-collapse"),
            o = v(".toggle"),
            l = v(".js-nav-active a");

        function n() {
            v("[data-nav-status='toggle']").removeClass("is-visible").addClass("is-hidden")
        }

        function r() {
            v("[data-nav-status='toggle']").removeClass("is-hidden").addClass("is-visible")
        }
        v(window).scroll(function () {
            150 < v(window).scrollTop() ? (e.removeClass("animated fadeInDown"), e.addClass("animated fadeInDown")) : e.removeClass("animated fadeInDown")
        }), v(window).scroll(function () {
            150 < v(window).scrollTop() ? (i.removeClass("animated fadeInDown fixed-top"), i.addClass("animated fadeInDown fixed-top")) : i.removeClass("animated fadeInDown fixed-top")
        }), v(window).scroll(function () {
            var e = v(this).scrollTop();
            0 < e && e < v(document).height() - v(window).height() && (t < e ? window.setTimeout(n, 300) : window.setTimeout(r, 300), t = e)
        }), c.on("click", ".xs-navbar-nav li a", function (e) {
            a.is(":visible") && s.collapse("hide")
        }), v(".toggle").click(function (e) {
            e.preventDefault(), e.stopPropagation(), v(this).parent("li.dropdown").siblings("li").find(".dropdown-menu").hide(), v(this).next(".dropdown-menu").toggle(), v(this).hasClass("active") ? v(this).removeClass("active") : (o.removeClass("active"), v(this).addClass("active"))
        }), v(function () {
            var e = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
            l.each(function () {
                v(this).attr("href") != e && "" != v(this).attr("href") || (v(this).addClass("active"), v(this).parents().each(function () {
                    v(this).hasClass("nav-item") && v(this).addClass("active")
                }))
            })
        })
    }, i.flexSlider = function () {
        var e = v(".flexslider-fade"),
            t = v(".flexslider-slide");
        e.flexslider({
            animation: "fade",
            prevText: '<i class="flexslider-icon ti-angle-left"></i>',
            nextText: '<i class="flexslider-icon ti-angle-right"></i>'
        }), t.flexslider({
            animation: "slide",
            prevText: '<i class="flexslider-icon ti-arrow-left"></i>',
            nextText: '<i class="flexslider-icon ti-arrow-right"></i>'
        })
    }, i.slickSlider = function () {
        var e = v(".yit-slick-single"),
            t = v(".yit-slick-thumbslider-for"),
            i = v(".yit-slick-thumbslider-nav");
        e.slick({
            dots: !0,
            infinite: !0,
            speed: 500,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: !0
        }), t.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: !1,
            fade: !0,
            autoplay: !0,
            asNavFor: ".yit-slick-thumbslider-nav"
        }), i.slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            asNavFor: ".yit-slick-thumbslider-for",
            dots: !0,
            centerMode: !0,
            autoplay: !0,
            focusOnSelect: !0
        })
    }, i.onScroll = function () {
        document.getElementById("toTop").addEventListener("click", function (e) {
            return jQuery("html, body").animate({
                scrollTop: 0
            }, 800), !1
        }), jQuery(window).scroll(function () {
            150 < jQuery(this).scrollTop() ? jQuery("#toTop").fadeIn("slow") : jQuery("#toTop").fadeOut("slow")
        }), v(window).scroll(function () {
            var e = v(window).scrollTop(),
                t = v("#yit-js-scroll-logo"),
                i = v(".normal-logo");
            200 <= e ? (t.attr("src", "upload/images/logo/logo_black.png"), v(".normal-logo").addClass("on-scroll-logo animated fadeIn")) : (t.attr("src", "upload/images/logo/logo_black.png"), i.removeClass("on-scroll-logo animated fadeIn"))
        }), v('[data-toggle="tooltip"]').tooltip(), v('[data-toggle="popover"]').popover(), v(".yit-scroll-nav").find("a[href^='#']").on("click", function (e) {
            e.preventDefault(), v("html, body").animate({
                scrollTop: v(this.hash).offset().top - 40
            }, 1e3)
        })
    }, i.dataTimePicker = function () {
        var e = v('[data-toggle="popover"]'),
            t = v("#datetimepicker1"),
            i = v("#datetimepicker2"),
            a = v("#datetimepicker4"),
            s = v("#datetimepicker5"),
            o = v("#pickup-time"),
            l = v("#drop-date"),
            n = v("#drop-time"),
            r = v("#pickup-date");
        e.popover(), t.length && t.datetimepicker({
            format: "YYYY-MM-DD hh:mm A",
            debug: !1
        }), r.length && r.datetimepicker({
            format: "YYYY-MM-DD",
            debug: !1
        }), o.length && o.datetimepicker({
            format: "LT",
            debug: !1
        }), l.length && l.datetimepicker({
            format: "YYYY-MM-DD",
            debug: !1
        }), n.length && n.datetimepicker({
            format: "LT",
            debug: !1
        }), i.length && i.datetimepicker({
            format: "LT"
        }), i.length && i.datetimepicker({
            format: "L"
        }), a.length && a.datetimepicker(), s.length && s.datetimepicker({
            viewMode: "years"
        })
    }, c.ready(function () {
        var e = v("#rotate"),
            t = v('[data-toggle="tooltip"]');
        i.slider(), i.generateMap(), i.twitterLive(), i.niceScroll(), i.googleDemoMap(), i.fitVids(), i.niceSelect(), i.formValidation(), i.instaFeed(), i.retinaImage(), i.countDown(), i.pieChart(), i.skillBar(), i.jGallery(), i.magnificPopup(), i.masonaryIsotop(), i.counter(), i.stellar(), i.swiper(), i.navigation(), i.flexSlider(), i.slickSlider(), i.onScroll(), (new WOW).init(), e.rotaterator({
            fadeSpeed: 1e3,
            pauseSpeed: 700
        }), t.tooltip()
    })
}(jQuery),
    function (s) {
        s.fn.extend({
            rotaterator: function (e) {
                e = s.extend({
                    fadeSpeed: 1e3,
                    pauseSpeed: 700,
                    child: null
                }, e);
                var a = "";
                return this.each(function () {
                    var t = e,
                        i = s(this);
                    s(i.children(), i).each(function () {
                        s(this).hide()
                    }), a = t.child ? t.child : s(i).children(":first"), s(a).fadeIn(t.fadeSpeed, function () {
                        s(a).delay(t.pauseSpeed).fadeOut(t.fadeSpeed, function () {
                            var e = s(this).next();
                            0 == e.length && (e = s(i).children(":first")), s(i).rotaterator({
                                child: e,
                                fadeSpeed: t.fadeSpeed,
                                pauseSpeed: t.pauseSpeed
                            })
                        })
                    })
                })
            }
        })
    }(jQuery);
jQuery(document).ready(function ($) { });