<?php

get_header();

/*
Template Name: Homepage Template
*/

$homecontact = get_field("homecontact");

?>
<div class="homepage-start">
    <img src="<?= get_template_directory_uri() ?>/images/sports-car.png" alt="">
</div>

<body class="homepage">
    <section class="page">




        <div class="leftside-homepage">
            <div class="show-here"></div>
            <div class="black-text">
                Du willst
            </div>
            <span class="typed-text"></span><span class="cursor">&nbsp;</span>

        </div>
        <script>
            const typedTextSpan = document.querySelector(".typed-text");
            const cursorSpan = document.querySelector(".cursor");

            const textArray = ["monatlich zahlen?", "Täglich kündigen können?", "Parkschaden nach 7 Jahren?", "günstige Prämien auch bei Jungen Lenkern?"];
            const typingDelay = 200;
            const erasingDelay = 100;
            const newTextDelay = 2000; // Delay between current and next text
            let textArrayIndex = 0;
            let charIndex = 0;

            function type() {
                if (charIndex < textArray[textArrayIndex].length) {
                    if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                    typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
                    charIndex++;
                    setTimeout(type, typingDelay);
                } else {
                    cursorSpan.classList.remove("typing");
                    setTimeout(erase, newTextDelay);
                }
            }

            function erase() {
                if (charIndex > 0) {
                    if (!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
                    typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex - 1);
                    charIndex--;
                    setTimeout(erase, erasingDelay);
                } else {
                    cursorSpan.classList.remove("typing");
                    textArrayIndex++;
                    if (textArrayIndex >= textArray.length) textArrayIndex = 0;
                    setTimeout(type, typingDelay + 1100);
                }
            }

            document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
                if (textArray.length) setTimeout(type, newTextDelay + 250);
            });
        </script>
        <div class="rightside-homepage">
            <div class="top-text">
                AUTOVERSICHERUNG
            </div>
            <div class="middle-text">
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed.
            </div>
            <form id="home">
                <fieldset>

                    <div class="box active" id="box-cars"> <label for="cars">FAHRZEUG</label>
                        <select id="cars" name="cars">
                            <option value="" disabled selected hidden>Marke</option>
                            <option value="BMW">BMW</option>
                            <option value="Fiat">Fiat</option>
                            <option value="Audi">Audi</option>
                        </select>
                    </div>
                    <div class="box" id="box-model"> <label for="model">MODEL</label>
                        <select id="model" name="model">
                            <option value="" disabled selected hidden>z.B. 116d</option>
                            <option value="7 Series">7 Series</option>
                            <option value="8 Series">8 Series</option>
                            <option value="9 Series">9 Series</option>
                        </select>
                    </div>
                    <div class="box" id="box-year"> <label for="year">ERSTZULASSUNG</label>
                        <select id="year" name="year">
                            <option value="" disabled selected hidden>z.B 2021</option>
                            <option value="2021">2021</option>
                            <option value="2020">2020</option>
                            <option value="2019">2019</option>
                        </select>
                    </div>
                    <div class="box" id="box-type"> <label for="type">TREIBSTOF</label>
                        <select id="type" name="type">
                            <option value="" disabled selected hidden>z.B Diesel</option>
                            <option value="Diesel">Diesel</option>
                            <option value="Diesel 2">Diesel 2</option>
                            <option value="Diesel 3">Diesel 3</option>
                        </select>

                    </div>
                    <div class="button-homepage">
                        <a id="getdata">Offerte</a>
                    </div>

                </fieldset>
            </form>
        </div>
        <div class="formrightside-homepage" id="validation">
            <div class="head-tittle">KONTAKTDATEN</div>
            <div class="order-form">
                <div class="order-column">
                    <div class="column-leftside">Autodaten:</div>
                    <div class="column-rightside"></div>
                </div>
                <div class="order-column">
                    <div class="column-leftside">Marke :</div>
                    <div class="column-rightside" id="value-car"></div>
                </div>
                <div class="order-column">
                    <div class="column-leftside">Model :</div>
                    <div class="column-rightside" id="value-model"></div>
                </div>
                <div class="order-column">
                    <div class="column-leftside">Erstzulassung :</div>
                    <div class="column-rightside" id="value-year"></div>
                </div>

                <div class="order-column">
                    <div class="column-leftside">Treibstof :</div>
                    <div class="column-rightside" id="value-type"></div>
                </div>

                <div class="edit-button">
                    <img id="edit-button" src="<?= get_template_directory_uri() ?>/images/edit-icon.svg" alt="">

                </div>
            </div>

             <?= $homecontact ?> 
             <script>
                 jQuery(document).ready(function(){

                                 jQuery('#cars').change(function(e){
                var value = e.target.value;
                jQuery('#carcars').val(value);
            });

            jQuery('#model').change(function(e){
                var value = e.target.value;
                jQuery('#carmodel').val(value);
            });

            jQuery('#year').change(function(e){
                var value = e.target.value;
                jQuery('#caryear').val(value);
            });

            jQuery('#type').change(function(e){
                var value = e.target.value;
                jQuery('#cartype').val(value);
            });
            
        })



             </script>
            <!-- <form action="registration" id="validated-form">
                <div class="form-more-info" id="valid-form">
                    <div class="box-info">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="first_name" size="12" onBlur="name_validation();" required /><span id="name_err"></span>
                    </div>
                    <div class="box-info">
                        <label for="surname">NACHNAME</label>
                        <input type="text" name="surname" id="last_name" size="12" onBlur="surname_validation();" required /><span id="surname_err"></span>
                    </div>
                    <div class="box-info">
                        <label for="birthday">GEBURTSTAG</label>
                        <input type="date" id="date" name="birthday" onblur="getAge();" required /><span id="birthday_err"></span>
                    </div>
                    <div class="box-info">
                        <label for="telephone">TELEFON</label>
                        <input type="tel" id="phone" name="phone" onBlur="phone_validation();" required /><span id="phone_err"></span>
                    </div>
                    <div class="box-info">
                        <label for="email">EMAIL</label>
                        <input type="email" id="email" name="email" onBlur="email_validation();" required /><span id="email_err"></span>
                    </div>
                    <div class="box-info">
                        <label for="zipcode"> PLZ, ORT </label>
                        <div class="who-labels">
                            <input type="text" name="zip" id="zip" onkeyup="getCityName(this.value)" required />
                            <div id="zipcode_err"></div>
                        </div>
                    </div>
                    <input type="text" id="value-car-hidden" name="value-car-hidden" />
                    <input type="text" id="value-type-hidden" name="value-type-hidden" />
                    <input type="text" id="value-year-hidden" name="value-year-hidden" />
                    <input type="text" id="value-model-hidden" name="value-model-hidden" />

                </div>
                <div class="footer-rsidebar">
                    <input type="checkbox" name="checkbox" value="1"> Ich akzeptiere die <span>AGB</span> und <span>Datenschutzbestimmungen.</span>
                    <input type="submit" id="submit-button" value='Submit' />
                    <script>
                        jQuery(document).ready(function() {

                            var $submit = jQuery("#submit-button").hide(),
                                $cbs = jQuery('input[name="checkbox"]').click(function() {
                                    $submit.toggle($cbs.is(":checked"));
                                });

                        });
                    </script>
                </div>
            </form> -->


        </div>

    </section>

    <script>
        jQuery(document).ready(function() {

            jQuery("#cars").change(function(e) {

                var value = e.target.value;
                jQuery('#value-car').text(value);
                jQuery('#value-car-hidden').text(value);
                jQuery('#box-model').addClass('active')


                jQuery('#box-cars').addClass('black-background')

            })
            jQuery("#model").change(function(e) {

                var value = e.target.value;
                jQuery('#value-model').text(value);
                jQuery('#value-model-hidden').text(value);
                jQuery('#box-year').addClass('active')


                jQuery('#box-model').addClass('black-background')
            })
            jQuery("#year").change(function(e) {

                var value = e.target.value;
                jQuery('#value-year').text(value);
                jQuery('#value-year-hidden').text(value);
                jQuery('#box-type').addClass('active')

                jQuery('#box-year').addClass('black-background')
            })
            jQuery("#type").change(function(e) {

                // console.log(e.target.value);
                var value = e.target.value;
                jQuery('#value-type').text(value);
                jQuery('#value-type-hidden').text(value);
                jQuery('#box-type').addClass('black-background')
                jQuery('.button-homepage').addClass('show');
            });
            jQuery("#getdata").click(function() {
                jQuery('.rightside-homepage').addClass('hide');
                jQuery('.formrightside-homepage').addClass('hide');
            })
            jQuery("#edit-button").click(function() {
                jQuery('.formrightside-homepage').removeClass('hide');
                jQuery('.rightside-homepage').removeClass('hide');
            });


            setInterval(function() {
                var currentSlide = jQuery('.red-text.active').next();

                if (currentSlide.length === 0) {
                    currentSlide = jQuery('.red-text').first();
                }

                SliderBG(currentSlide);
            }, 3000);

            function SliderBG(currentSlide) {
                jQuery('.red-text').removeClass('active');
                currentSlide.addClass('active');
            };



        });


        //name validation starts
        function name_validation() {
            'use strict';
            var name_name = document.getElementById("name");
            var name_value = document.getElementById("name").value;
            var name_length = name_value.length;
            if (name_length < 3 || name_length > 12) {
                document.getElementById('name_err').innerHTML = '3 to 12 characters';
                // name_name.focus();
                document.getElementById('name_err').style.color = "#FF0000";
            } else {
                document.getElementById('name_err').innerHTML = '';

            }
        }
        //name validation ends

        //surname validation starts
        function surname_validation() {
            'use strict';
            var surname_name = document.getElementById("surname");
            var surname_value = document.getElementById("surname").value;
            var surname_length = surname_value.length;
            if (surname_length < 3 || surname_length > 20) {
                document.getElementById('surname_err').innerHTML = '3 to 20 characters';
                // surname_name.focus();
                document.getElementById('surname_err').style.color = "#FF0000";
            } else {
                document.getElementById('surname_err').innerHTML = "";

            }
        }
        //surname validation ends

        //phone validation starts
        function phone_validation() {
            'use strict';
            var phone_name = document.getElementById("phone");
            var phone_value = document.getElementById("phone").value;
            var phone_length = phone_value.length;
            if (phone_length < 5 || phone_length > 20) {
                document.getElementById('phone_err').innerHTML = '5 to 20 characters';
                // phone_name.focus();
                document.getElementById('phone_err').style.color = "#FF0000";
            } else {
                document.getElementById('phone_err').innerHTML = "";

            }
        }
        //phone validation ends

        //email validation starts
        function email_validation() {
            'use strict';
            var email_name = document.getElementById("email");
            var email_value = document.getElementById("email").value;
            if (!email.value.includes('@')) {
                document.getElementById('email_err').innerHTML = 'This is not email';
                // email_name.focus();
                document.getElementById('email_err').style.color = "#FF0000";
            } else {
                document.getElementById('email_err').innerHTML = "";
            }
        }
        //email validation ends



        function setInputFilter(textbox, inputFilter) {
            ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
                textbox.addEventListener(event, function() {
                    if (inputFilter(this.value)) {
                        this.oldValue = this.value;
                        this.oldSelectionStart = this.selectionStart;
                        this.oldSelectionEnd = this.selectionEnd;
                    } else if (this.hasOwnProperty("oldValue")) {
                        this.value = this.oldValue;
                        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                    } else {
                        this.value = "";
                    }
                });
            });
        };


        setInputFilter(document.getElementById("name"), function(value) {
            return /^[a-z]*$/i.test(value);
        });
        setInputFilter(document.getElementById("surname"), function(value) {
            return /^[a-z]*$/i.test(value);
        });
        setInputFilter(document.getElementById("phone"), function(value) {
            return /^-?\d*$/.test(value);
        });
        // setInputFilter(document.getElementById("email"), function(value) {
        //     return  /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(value);
        // });



        //fillimi validimi i zipcode
        function getCityName(zip) {
            jQuery.get("http://crm.luzernerversicherungen.ch/data.cfm?action=get&type=cityname", {
                    zip: zip
                })
                .done(function(data) {
                    var obj = JSON.parse(data);
                    if (obj.error == 0) {

                        jQuery('#zipcode_err').text(obj.citylist[0].city);

                        document.getElementById('zipcode_err').innerHTML = obj.citylist[0].city + " " + obj.citylist[0].canton;


                        document.getElementById('zipcode_err').style.color = "#00AF33";


                    } else {
                        document.getElementById('zipcode_err').innerHTML = "Wrong ZIP";
                        document.getElementById('zipcode_err').style.color = "#FF0000";

                    }
                });
        }

        //fundi validimi i zipcode
        //fillimi validimi i dates
        function getAge() {
            var dateString = document.getElementById("date").value;
            if (dateString != "") {
                var today = new Date();
                var birthDate = new Date(dateString);
                var age = today.getFullYear() - birthDate.getFullYear();
                var m = today.getMonth() - birthDate.getMonth();
                var da = today.getDate() - birthDate.getDate();
                if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
                    age--;
                }
                if (m < 0) {
                    m += 12;
                }
                if (da < 0) {
                    da += 30;
                }

                if (age < 18 || age > 100) {
                    document.getElementById('birthday_err').innerHTML = "U not 18 years"
                    document.getElementById('birthday_err').style.color = "#FF0000";

                } else {

                    // document.getElementById('birthday_err').innerHTML = "U are 18 years"
                    // document.getElementById('birthday_err').style.color = "#00AF33";
                    document.getElementById('birthday_err').style.display = "none";
                }
            }
        }
        //perfundim validimi i dates




        // After checkbox is true show button








        // Fundi i after checkbox
    </script>

</body>