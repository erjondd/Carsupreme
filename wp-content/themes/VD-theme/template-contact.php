<?php

get_header();

/*
Template Name: Contact Template
*/

?>

<?php


$map = get_field("map");
$mycontact = get_field("mycontact");



?>

<body class="contact">
  <div class="page">
    <div class="map-content">
      <div class="map-img module">
        <iframe class="module" src="<?= $map ?>" width="100%" height="100vh" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
    </div>
    <div class="information-content">
      <div class="contact-head-picture"><img src="<?= get_template_directory_uri() ?>/images/logoholdingag.png" alt=""></div>
      <div class="contact-tittle">
        Contact Us
      </div>
      <div class="contact-info">
        <div class="email">
          <img src="<?= get_template_directory_uri() ?>/images/mail.svg"> info@schweizerischeversicherungen.com
        </div>
        <div class="telephone">
          <img src="<?= get_template_directory_uri() ?>/images/phone.svg"> +41 (0) 79 999 99 90
        </div>
        <div class="location">
          <img src="<?= get_template_directory_uri() ?>/images/location.svg"> Gewerbestrasse 11, 6248 Alberswil
        </div>
      </div>
       <?= $mycontact ?> 

 
      <!-- <form id="form">
        <fieldset>

          <div class="box-contact">
            <label for="name">Name</label>
            <input type="text" name="contactname" id="contactname" size="12" onBlur="contactname_validation();" required /><span id="contactname_err"></span>
          </div>


          <div class="box-contact">
            <label for="telephone">telephone</label>
            <input type="name" id="contactphone" onBlur="contactphone_validation();" placeholder="" required /><span id="contactphone_err"></span>
          </div>

          <div class="box-contact">
            <label for="email">Email</label>
            <input type="email" id="contactemail" onBlur="contactemail_validation();" placeholder="" required /><span id="contactemail_err"></span>
          </div>

          <div class="box-column">
            <div class="special-label">
            
<select id="select-message" name="select-message">
<option value="" selected disabled hidden>FÜR WELCHE VERSICHERUNG BIST DU INTERESSIERT?</option>
  <option value="Problem1">First Problem</option>
  <option value="Problem2">Second Problem</option>
  <option value="Problem3">Third Problem</option>
  <option value="Problem4">Fourth Problem</option>
  <option value="Problem5">Fifth Problem</option>
  <option value="Problem6">Sixth Problem</option>
  <option value="Problem7">Seventh Problem</option>
</select>
               <div id='buttons'>
                <img id="show" src="http://localhost/medialabs/wp-content/themes/VD-theme/images/arrow-down.svg" alt="">
                <img id='hide' src="http://localhost/medialabs/wp-content/themes/VD-theme/images/arrow-up.svg" alt="">
              </div> 
            </div>
            <textarea id="message" name="messageForm" id="contact_message" cols="30" rows="10" placeholder="Nachricht…" required>

            </textarea>

          </div>
          <input type="submit" value="Send" class="submit-btn" />
        </fieldset>-->
      </form> 
    </div>
  </div>

 


  <script>
    var show = document.getElementById('show');
    var hide = document.getElementById('hide');
    var message = document.getElementById('message');
    var textarea = document.getElementById('textarea');

    show.addEventListener('click', function() {
      message.style = ('display: block');
      textarea.style = ('animation: riseHeight 1s .1s normal forwards');
      hide.style = ('display: block');
      show.disabled = true;
    });

    hide.addEventListener('click', function() {
      message.style = ('display: none');
      hide.style = ('display:none');
      show.style = ('display:block')
      show.disabled = true;
    });
    show.addEventListener('click', function() {
      message.style = ('display: block');
      show.style = ('display:none')
      hide.style = ('display:block');
      show.disabled = true;
    });

    //contact name validation starts
    function contactname_validation() {
      'use strict';
      var name_name = document.getElementById("contactname");
      var contactname_value = document.getElementById("contactname").value;
      var contactname_length = contactname_value.length;
      if (contactname_length < 3 || contactname_length > 12) {
        document.getElementById('contactname_err').innerHTML = '3 to 12 characters';
        name_name.focus();
        document.getElementById('contactname_err').style.color = "#FF0000";
      } else {
        document.getElementById('contactname_err').innerHTML = 'Valid name';
        document.getElementById('contactname_err').style.color = "#00AF33";
      }
    }
    setInputFilter(document.getElementById("contactname"), function(value) {
      return /^[a-z]*$/i.test(value);
    });
    // contact name validation ends

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


    //contact phone validation starts
    function contactphone_validation() {
      'use strict';
      var contactphone_name = document.getElementById("contactphone");
      var contactphone_value = document.getElementById("contactphone").value;
      var contactphone_length = contactphone_value.length;
      if (contactphone_length < 5 || contactphone_length > 20) {
        document.getElementById('contactphone_err').innerHTML = '5 to 20 characters';
        contactphone_name.focus();
        document.getElementById('contactphone_err').style.color = "#FF0000";
      } else {
        document.getElementById('contactphone_err').innerHTML = 'Valid phone number';
        document.getElementById('contactphone_err').style.color = "#00AF33";
      }
    }
    setInputFilter(document.getElementById("contactphone"), function(value) {
      return /^-?\d*$/.test(value);
    });
    //contact phone validation ends

    //contact email validation starts
    function contactemail_validation() {
      'use strict';
      var email_name = document.getElementById("contactemail");
      var contactemail_value = document.getElementById("contactemail").value;
      if (!contactemail.value.includes('@')) {
        document.getElementById('contactemail_err').innerHTML = 'This is not email';
        email_name.focus();
        document.getElementById('contactemail_err').style.color = "#FF0000";
      } else {
        document.getElementById('contactemail_err').innerHTML = 'Valid Email';
        document.getElementById('contactemail_err').style.color = "#00AF33";
      }
    }
    //contact email validation ends

    //textarea 
    $(document).ready(function() {

      $("[name='messageForm']").validate({
        rules: {
          sender: {
            required: true,
            minlength: 3,
            lettersonly: true
          }
        }
      })
    });



  </script>