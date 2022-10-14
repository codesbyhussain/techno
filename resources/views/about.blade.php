@include('navbar')
    @yield('navbar')
<body>


<div class="overlay">
        <!--Card-->
        <div class="card mx-auto my-3">

            <!--Card content-->
            <div class="card-body">
      
                <!--Section heading-->
                <h2 class="h1-responsive font-weight-bold text-center my-4">About Us</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-5">Made by a team of 4 in partial credit to Major Project during the 7th semester
        <table class="text-center w-responsive mx-auto mb-5">
        <thead>
<tr>
            <th>Hussain Manasi</th><th>191112469</th>
</tr><tr>
            <th>Amit Kumar</th><th>191112423</th>
</tr><tr>
            <th>Peter Thomas Biju</th><th>191112463</th>
</tr><tr>
            <th>Sirus Sah</th><th>191112464</th>
</tr>
</thead>    
</table></p>
                <div class="row">
      
                  <!--Grid column-->
                  <div class="col-md-4 text-center">
                      <i class="fa fa-map-marker mt-4 fa-2x"></i>
                        <p> MANIT, Bhopal, Madhya Pradesh, 462003</p>
                      
                  </div>
                  <div class="col-md-4 text-center">
                      
      
                      <i class="fa fa-phone mt-4 fa-2x"></i>
                        <p>+91 7879870660</p>
                      
      
                  </div>
                  <div class="col-md-4 text-center">
                   
      
                      <i class="fa fa-envelope mt-4 fa-2x"></i>
                        <p>avenger.hussain14@gmail.com</p>
                      
                    
                  </div>
                  <!--Grid column-->
      
                </div>
      
            </div>
      
          </div>
          <!--/.Card-->
</div> 

<h2 style="text-align:center;">
  Feel free to contact us or send suggestions using the contact form provided below
</h2>
<form id="fs-frm" name="simple-contact-form" accept-charset="utf-8" action="https://formspree.io/f/meqdzdzj" method="post">
  <fieldset id="fs-frm-inputs">
    <label for="full-name">Full Name</label>
    <input type="text" name="name" id="full-name" placeholder="First and Last" required="">
    <label for="email-address">Email Address</label>
    <input type="email" name="_replyto" id="email-address" placeholder="email@domain.tld" required="">
    <label for="message">Message</label>
    <textarea rows="5" name="message" id="message" placeholder="Enter any suggestions we can implement here" required=""></textarea>
    <input type="hidden" name="_subject" id="email-subject" value="Contact Form Submission">
  </fieldset>
  <input type="submit" value="Submit">
</form>



@include('footer')
    @yield('footer')

<style>
/* reset */
#fs-frm input,
#fs-frm select,
#fs-frm textarea,
#fs-frm fieldset,
#fs-frm optgroup,
#fs-frm label,
#fs-frm #card-element:disabled {
  font-family: inherit;
  font-size: 100%;
  color: inherit;
  border: none;
  border-radius: 0;
  display: block;
  width: 50%;
  padding: 0;
  margin-left: 20%;
  -webkit-appearance: none;
  -moz-appearance: none;
}
#fs-frm label,
#fs-frm legend,
#fs-frm ::placeholder {
  font-size: .825rem;
  margin-bottom: .5rem;
  padding-top: .2rem;
  display: flex;
  align-items: baseline;
}

/* border, padding, margin, width */
#fs-frm input,
#fs-frm select,
#fs-frm textarea,
#fs-frm #card-element {
  border: 1px solid rgba(0,0,0,0.2);
  background-color: rgba(255,255,255,0.9);
  padding: .75em 1rem;
  margin-bottom: 1.5rem;
}
#fs-frm input:focus,
#fs-frm select:focus,
#fs-frm textarea:focus {
  background-color: white;
  outline-style: solid;
  outline-width: thin;
  outline-color: gray;
  outline-offset: -1px;
}
#fs-frm [type="text"],
#fs-frm [type="email"] {
  width: 100%;
}
#fs-frm [type="button"],
#fs-frm [type="submit"],
#fs-frm [type="reset"] {
  width: auto;
  cursor: pointer;
  -webkit-appearance: button;
  -moz-appearance: button;
  appearance: button;
  margin: auto;
}
#fs-frm [type="button"]:focus,
#fs-frm [type="submit"]:focus,
#fs-frm [type="reset"]:focus {
  outline: none;
}
#fs-frm [type="submit"],
#fs-frm [type="reset"] {
  margin-bottom: 0;
}
#fs-frm select {
  text-transform: none;
}

#fs-frm [type="checkbox"] {
  -webkit-appearance: checkbox;
  -moz-appearance: checkbox;
  appearance: checkbox;
  display: inline-block;
  width: auto;
  margin: 0 .5em 0 0 !important;
}

#fs-frm [type="radio"] {
  -webkit-appearance: radio;
  -moz-appearance: radio;
  appearance: radio;
}

/* address, locale */
#fs-frm fieldset.locale input[name="city"],
#fs-frm fieldset.locale select[name="state"],
#fs-frm fieldset.locale input[name="postal-code"] {
  display: inline;
}
#fs-frm fieldset.locale input[name="city"] {
  width: 52%;
}
#fs-frm fieldset.locale select[name="state"],
#fs-frm fieldset.locale input[name="postal-code"] {
  width: 20%;
}
#fs-frm fieldset.locale input[name="city"],
#fs-frm fieldset.locale select[name="state"] {
  margin-right: 3%;
}


    </style>
</html>
