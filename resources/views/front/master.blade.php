<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>
		@yield('title')
	</title>
	<!--/tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="keywords" content="Grocery Shoppy Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<script>
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
	</script>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--//tags -->
	<link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
	@yield('css')
	<link href="{{ asset('front/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />

	<link href="{{ asset('front/css/font-awesome.css') }}" rel="stylesheet"/>
	<!--pop-up-box-->
	<link href="{{ asset('front/css/popuo-box.css') }}" rel="stylesheet" type="text/css" media="all" />
	<!--//pop-up-box-->
	<!-- price range -->
	<link rel="stylesheet" type="text/css" href="{{ asset('front/css/jquery-ui1.css') }}">
	<!-- fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
@include('front.includes.header')
	<!-- //navigation -->
@yield('main-content')

@include('front.includes.footer')

	<!-- js-files -->
	<!-- jquery -->
	<script src="{{ asset('front/js/jquery-2.1.4.min.js')}}"></script>
	<!-- //jquery -->

	<!-- popup modal (for signin & signup)-->
	<script src="{{ asset('front/js/jquery.magnific-popup.js')}}"></script>
	<script>
        $(document).ready(function () {
            $('.popup-with-zoom-anim').magnificPopup({
                type: 'inline',
                fixedContentPos: false,
                fixedBgPos: true,
                overflowY: 'auto',
                closeBtnInside: true,
                preloader: false,
                midClick: true,
                removalDelay: 300,
                mainClass: 'my-mfp-zoom-in'
            });

        });
	</script>
	<!-- Large modal -->
	<!-- <script>
        $('#').modal('show');
    </script> -->
	<!-- //popup modal (for signin & signup)-->

	<!-- cart-js -->
	<script src="{{asset('front/js/minicart.js')}}"></script>
	<script>
        paypalm.minicartk.render(); //use only unique class names other than paypalm.minicartk.Also Replace same class name in css and minicart.min.js

        paypalm.minicartk.cart.on('checkout', function (evt) {
            var items = this.items(),
                len = items.length,
                total = 0,
                i;

            // Count the number of each item in the cart
            for (i = 0; i < len; i++) {
                total += items[i].get('quantity');
            }

            if (total < 3) {
                alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
                evt.preventDefault();
            }
        });
	</script>
	<!-- //cart-js -->

	<!-- price range (top products) -->
	<script src="{{asset('front/js/jquery-ui.js')}}"></script>
	<script>
        //<![CDATA[
        $(window).load(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 9000,
                values: [50, 6000],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
                }
            });
            $("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

        }); //]]>
	</script>
	<!-- //price range (top products) -->

	<!-- flexisel (for special offers) -->
	<script src="{{asset('front/js/jquery.flexisel.js')}}"></script>
	<script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 3,
                animationSpeed: 1000,
                autoPlay: true,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 2
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 2
                    }
                }
            });

        });
	</script>
	<!-- //flexisel (for special offers) -->

	<!-- password-script -->
	<script>
        window.onload = function () {
            document.getElementById("password1").onchange = validatePassword;
            document.getElementById("password2").onchange = validatePassword;
        }

        function validatePassword() {
            var pass2 = document.getElementById("password2").value;
            var pass1 = document.getElementById("password1").value;
            if (pass1 != pass2)
                document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            else
                document.getElementById("password2").setCustomValidity('');
            //empty string means no validation error
        }
	</script>
	<!-- //password-script -->

	<!-- smoothscroll -->
	<script src="{{asset('front/js/SmoothScroll.min.js')}}"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="{{asset('front/js/move-top.js')}}"></script>
	<script src="{{asset('front/js/easing.js')}}"></script>
	<script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */
            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="{{asset('front/js/bootstrap.js')}}"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
<!-- Ajax-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#postCreate').on('submit',function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        $.ajax({
            type:'post',
            url:url,
            data:data,
            dataTy:'json',
            success:function (data) {
                $('#postCreate').trigger('reset');
                swal({
                    title: "Good job!",
                    text: "You have successfully added you question, we will review it quickly and after then we will publish it in public and send you a confirmation email!, Thank you.",
                    icon: "success",
                });
                $('#questionModal').modal('hide');
            },
            error:function (errorData) {
                var error = errorData.responseJSON.message;
                $('#nameErrorMsg').html('');
                $('#emailErrorMsg').html('');
                $('#descriptionErrorMsg').html('');
                $('#categoryErrorMsg').html('');

                $('#nameErrorMsg').append(error['name']);
                $('#emailErrorMsg').append(error['email']);
                $('#descriptionErrorMsg').append(error['description']);
                $('#categoryErrorMsg').append(error['email']);
            }
        });
    });
</script>

<script>
	function  checkDelete() {
		var check= confirm('Are you sure delete this!!');
		if (check){
		    return true;
		}
		else {
		    return false;
		}
    }
</script>


<!--Ajax -->
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#postCreate').on('submit',function (e) {
        e.preventDefault();
        var data = $(this).serialize();
        var url = $(this).attr('action');
        $.ajax({
            type:'post',
            url:url,
            data:data,
            dataTy:'json',
            success:function (data) {
                $('#postCreate').trigger('reset');
                swal({
                    title: "Good job!",
                    text: "You have successfully added you question, we will review it quickly and after then we will publish it in public and send you a confirmation email!, Thank you.",
                    icon: "success",
                });
                $('#questionModal').modal('hide');
            },
            error:function (errorData) {
                var error = errorData.responseJSON.message;
                $('#firstNameErrorMsg').html('');
                $('#lastNameErrorMsg').html('');
                $('#emailErrorMsg').html('');
                $('#phoneErrorMsg').html('');
                $('#addressErrorMsg').html('');
                $('#imageErrorMsg').html('');
                $('#passwordErrorMsg').html('');
                $('#confirmpassErrorMsg').html('');

                $('#firstNameErrorMsg').append(error['first_name']);
                $('#lastNameErrorMsg').append(error['last_name']);
                $('#emailErrorMsg').append(error['email']);
                $('#phoneErrorMsg').append(error['phone']);
                $('#addressErrorMsg').append(error['address']);
                $('#imageErrorMsg').append(error['image']);
                $('#passwordErrorMsg').append(error['password']);
                $('#confirmpassErrorMsg').append(error['password_confirmation']);
            }
        });
    });
</script>

</body>

</html>