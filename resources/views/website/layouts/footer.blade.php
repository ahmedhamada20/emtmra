<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('website/mba/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{asset('website/mba/js/bootstrap.min.js')}}"></script>
<script src="{{asset('website/mba/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('admin/select/js/select2.full.min.js')}}"></script>

<script>

    $(document).ready(function () {
        $('.js-example-basic-multiple').select2();
    });
</script>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 4,
                nav: true
            },
            992: {
                items: 4,
                nav: true,
                loop: true
            }
        }
    });


    $(".owl-prev").html('<i class="fa fa-chevron-left" class="prev2"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right" class="next2"></i>');
    $(".owl-dot").css('display', 'none');

    $('.owl-carousel2').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: false,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: true
            }
        }
    });


    $(".owl-prev").html('<i class="fa fa-chevron-left" class="prev2"></i>');
    $(".owl-next").html('<i class="fa fa-chevron-right" class="next2"></i>');
    $(".owl-dot").css('display', 'none');

    $('.owl-carousel5').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        responsive: {
            0: {
                items: 2,
                nav: true
            },
            600: {
                items: 3,
                nav: true
            },
            767: {
                items: 4,
                nav: true
            },
            992: {
                items: 6,
                nav: true,
                loop: true
            }
        }
    });


    $(".owl-prev").html('<i class="fa fa-angle-left" class="prev2"></i>');
    $(".owl-next").html('<i class="fa fa-angle-right" class="next2"></i>');
    $(".owl-dot").css('display', 'none');






</script>
<script src="{{asset('website/mba/js/wmBox.js')}}"></script>
<script src="{{asset('website/mba/js/main.js')}}"></script>

<script type="text/javascript">
    // $(document).ready(function ($) {
    //     $('#chkbox').prop('checked', true);
    //     GetCountry();
    // });

    function getValueFromQueryString(param) {
        var results = new RegExp('[\?&]' + param + '=([^&#]*)').exec(window.location.href);
        if (results == null) {
            return null;
        }
        return decodeURI(results[1]) || 0;
    }

    // function GetCountry() {
    //     debugger
    //     $.ajax({
    //         async: true,
    //         type: 'Get',
    //         url : isArray,
    //         contentType: 'application/json; charset=utf-8',
    //         dataType: 'json',
    //         success: function (data) { SelectcountrySuccess(data) },
    //         error: function (data) {
    //
    //             alert(data.d);
    //             $("#txtcountry").val('');
    //         }
    //     });
    // }

    function SelectcountrySuccess(result) {

        var list = $.parseJSON(result);
        $("#countrybrowsers").empty();
        for (var i = 0; i < list.length; i++) {
            $("#countrybrowsers").append("<option data-value='" + list[i].iCountryID + "' value='" + list[i].sCountryName + "'></option>");

        }
    }

    function onChangeddlcountry(_this) {
        var entervalue = _this.value;
        var count = 0;
        for (let i = 0; i < $("#countrybrowsers")[0].options.length; i++) {

            if ($("#countrybrowsers")[0].options[i].value == entervalue) {
                count = count + 1;
                $("#txtcountry").val($("#countrybrowsers")[0].options[i].value);

            }
        }
        if (count <= 0) {
            sweetAlert("Please Select Correct Country!", "", "error").then(function () {
                swal.close();
                $("#txtcountry").val('');
                $("#mCode").val('');
            });
            return false;
        }
    }


    function onblurddlcountry() {

        if (count == 0) {
            sweetAlert("Country not found. Please try again!", "", "error").then(function () {
                swal.close();
                $("#txtcountry").val('');
                $("#mCode").val('');
                $('#txtcountry').focus();
            });

        }
        count = 0;
    }


    function OnlyNumberValidationDash(e) {
        if (navigator.appName.toLowerCase() == 'netscape') {
            var key1;
            var keychar1;
            key1 = e.which;
            keychar1 = String.fromCharCode(key1);
            if ((key1 == null) || (key1 == 0) || (key1 == 8) || (key1 == 9) || (key1 == 27) || (key1 == 45)) {
                return true;
            }
            else if ((("0123456789").indexOf(keychar1) > -1)) {
                return true;
            }
            else {
                return false;
            }
        }
        else {
            key1 = e.keyCode;
            keychar1 = String.fromCharCode(key1);
            if ((key1 == null) || (key1 == 0) || (key1 == 8) || (key1 == 9) || (key1 == 27) || (key1 == 45)) {
                return true;
            }
            else if ((("0123456789").indexOf(keychar1) > -1)) {
                return true;
            }
            else {
                return false;
            }
        }
    }

    function OnlyAlphaValidationWithSpace(e) {
        if (navigator.appName.toLowerCase() == 'netscape') {
            var key1;
            var keychar1;
            key1 = e.which;
            keychar1 = String.fromCharCode(key1);
            if ((key1 == null) || (key1 == 0) || (key1 == 8) || (key1 == 9) || (key1 == 27) || (key1 == 46) || (key1 == 22)) {
                return true;
            }
            else if ((("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ").indexOf(keychar1) > -1)) {
                return true;
            }
            else {
                return false;
            }
        }
        else {
            key1 = e.keyCode;
            keychar1 = String.fromCharCode(key1);
            if ((key1 == null) || (key1 == 0) || (key1 == 8) || (key1 == 9) || (key1 == 27) || (key1 == 46) || (key1 == 22)) {
                return true;
            }
            else if ((("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ ").indexOf(keychar1) > -1)) {
                return true;
            }
            else {
                return false;
            }
        }
    }


    $(function () {

        $("#btnSubmit").click(function () {
            debugger
            if ($("#txtName").val() == '' || $("#txtName").val() == undefined) {
                sweetAlert("Please enter your name!", "", "error").then(function () {
                    swal.close();
                    $('#txtName').focus();
                });

                return false;
            }

            if ($("#txtEmailTwo").val() == '' || $("#txtEmailTwo").val() == undefined) {
                sweetAlert("Please enter your email!", "", "error").then(function () {
                    swal.close();
                    $('#txtEmailTwo').focus();
                });

                return false;
            }

            
            if ($("#txtcountryTwo").val() == '' || $("#txtcountryTwo").val() == undefined) {
                sweetAlert("Please enter your country!", "", "error").then(function () {
                    swal.close();
                    $('#txtcountryTwo').focus();
                });

                return false;
            }

            if ($("#txtContact").val() == '' || $("#txtContact").val() == undefined) {
                sweetAlert("Please enter your Phone!", "", "error").then(function () {
                    swal.close();
                    $('#txtContact').focus();
                });

                return false;
            }

           

        

            // if ($("#txtcountry").val() == '' || $("#txtcountry").val() == undefined) {
            //     sweetAlert("Please select your Country!", "", "error").then(function () {
            //         swal.close();
            //         $('#txtcountry').focus();
            //     });
            //
            //     return false;
            // }


            // if ($("#txtContact").val() == '' || $("#txtContact").val() == undefined) {
            //     sweetAlert("Please enter your contact number!", "", "error").then(function () {
            //         swal.close();
            //         $('#txtContact').focus();
            //     });

            //     return false;
            // }

            // var countryname = $('#txtcountry').val();
            // var Ecountry = $('#countrybrowsers [value="' + countryname + '"]').data('value');

            // var arr = Ecountry.split('-');
            // var mobile = $("#txtContact").val();
            // var mobilecode = arr[0];
            // var countryId = arr[0];
            // var mobilelength = arr[1];

            // if (mobile.length >= 7 && mobile.length <= 15) {
            //     var Emobile = $("#txtContact").val();
            // }
            // else {
            //     sweetAlert("Mobile Number is not Correct.", "", "error").then(function () {
            //         swal.close();
            //         $('#txtContact').focus();
            //     });
            //     return false;
            // }


            // var Ename = $("#txtName").val();
            // var Eemail = $("#txtEmail").val();
            // var Emobile = $("#txtContact").val();

            // if (IsEmail(Eemail) == false) {
            //     sweetAlert("Your Email-Id is invalid.", "", "error").then(function () {
            //         swal.close();
            //         $('#txtEmail').focus();
            //     });

            //     return false;
            // }

            // var chkwhatsapp = "";
            // if (($("input[id*='chkbox']:checked").length) <= 0) {
            //     chkwhatsapp = "0";
            // }
            // else {
            //     chkwhatsapp = "1";
            // }

            // var pagename = "Amity Online MBA Middle East Lead Gen Page Feb 2020";
            // var pageurl = "https://application.amityonline.com/Middleeast/online-courses/mba";

            // let utm_source = getValueFromQueryString('utm_source');
            // let utm_keyword = getValueFromQueryString('utm_keyword');
            // let utm_medium = getValueFromQueryString('utm_medium');
            // let utm_campaign = getValueFromQueryString('utm_campaign');
            // let utm_placement = getValueFromQueryString('utm_placement');
            // let utm_dstn_Location = getValueFromQueryString('utm_dstn_Location');

            //
            //http://localhost:38546/api/SaveAllLPDataApi/SaveLPEnquiry

            // $.post("https://careersoftomorrow.amityonline.com/Authapi/api/SaveAllLPDataApi/SaveLPEnquiry",
            //     {
            //         Name: Ename, Email: Eemail, MobileNo: Emobile, City: "", Designation: "", ProgramID: "440", PageName: pagename,
            //         TExperience: "", Organization: "", Utm_Source: utm_source, Utm_Medium: utm_medium, Utm_Campaign: utm_campaign,
            //         Utm_Keyword: utm_keyword, Utm_Placement: utm_placement, Page_Url: pageurl, UniqueId: "",
            //         Utm_Dstn_Location: utm_dstn_Location, TechInfoStatus: "Failure", Counter: 0, EducationalQual: "", MobileCode: mobilecode,
            //         CorporateName: "", CompanyName: "", HighestQual: "", Query: "", StateId: "", CountryId: "", IpAddress: "",
            //         FormNo: "", EventType: "", sType: "", Services: "", CompaignType: "", Reason: "", DOB: "", EmploymentStatus: "", LocationId: "",
            //         SInterest: chkwhatsapp, VisitTime: "", TimeSlot: "", SpecializationName: "", EnrollmentNo: "", Salary: "", preffJob: "",
            //         preffJobLocation: "", EmployeeId: "", isManually: "", Address: "", Source: "", Center: "", TrainingFor: "", AnnualIncome: "", countryName: countryname
            //     },
            //     function (data) {
            //         debugger

            //         if (data.indexOf("Already Exist") != -1) {
            //             sweetAlert("You are already registered with us!", "", "error").then(function () {
            //                 swal.close();
            //             });
            //             return;
            //         }

            //         window.location.href = "mba/Default/Thankyou.html";
            //     }
            // ).fail(function () {
            // });
        });
    });


    function onchangemobile() {
        var mobile = $("#txtContact").val();
        if (mobile.length != 10) {
            sweetAlert("Please Enter Correct Mobile!", "", "error").then(function () {
                swal.close();
                $("#txtContact").val('');
                $('#txtContact').focus();
            });
            return false;
        }
    }

    function IsEmail(email) {
        var regex = /^([\w-\.]+)@((\[[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!regex.test(email)) {
            return false;
        } else {
            return true;
        }
    }

    function DropDownChangeCountry(_this) {
        debugger;
        var txtcountry = $('#txtcountry').val();
        var valcountry = $('#countrybrowsers [value="' + txtcountry + '"]').data('value');

        var arr = valcountry.split('-');
        var _country = arr[0];

        $("#mCode").val("+" + _country);

    }

    function isNum(e) {
        debugger
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
            return false;
        }
        $(document).on('input', '#txtContact', function () {
            var phone = $('#txtContact').val();
            if (phone.indexOf('0') == 0) {
                sweetAlert("First digit cannot be zero!", "", "error").then(function () {
                    swal.close();
                    $('#txtContact').val('');
                    $('#txtContact').focus();
                });
                return false;
            }
        });
    }
</script>
