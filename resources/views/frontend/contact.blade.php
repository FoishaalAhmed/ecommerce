

@extends('layouts.app')
@section('title', 'Contact')
@section('content')
<div class="container-fluid" style="margin-bottom: 20px ;">
      <div class="dtl-2nd-nav">
        <div class="row" style="background-image: linear-gradient( rgb(152, 158, 152),rgb(209, 209, 209));">
          <div class="container">
            <div class="row" style="text-align: center; padding-top: 10px; padding-bottom: 10px;margin: auto; ">
              <div class="col-12">
                <a href="{{URL::to('/')}}" style="text-decoration: none;color: black;">Home</a> /
                <a style="text-decoration: none;color: black;">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!---MAIN CONTENT-->
    <div class="" style="width: 70%; text-align: center; margin: auto;">
      <div class="row">
        <div class="col-md-6" style="text-align: center; margin: auto;">
            <span id="form_output"></span>
          <form style="text-align: left; padding: 10px; " action="" id="contact-form" method="POST">
            @csrf
            <label for="fname"> Name</label>
            <input type="text" id="fname" name="name" placeholder="Your name.." style="width: 100%; padding: 12px;border: 1px solid #ccc; border-radius: 4px;box-sizing: border-box; margin-top: 6px; margin-bottom: 16px;resize: vertical;" required="" >
            <br>
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="Your e-mail .." style="width: 100%; padding: 12px;border: 1px solid #ccc; border-radius: 4px;box-sizing: border-box; margin-top: 6px; margin-bottom: 16px;resize: vertical;">
            <br>
            <label for="phone">Phone</label>
            <input type="text" id="phone" name="phone" placeholder="Your Phone Number.." style="width: 100%; padding: 12px;border: 1px solid #ccc; border-radius: 4px;box-sizing: border-box; margin-top: 6px; margin-bottom: 16px;resize: vertical;" required="" >
            <br>
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" placeholder="Your subject.." style="width: 100%; padding: 12px;border: 1px solid #ccc; border-radius: 4px;box-sizing: border-box; margin-top: 6px; margin-bottom: 16px;resize: vertical;" required="" >
            <br>
            <label for="message">Message</label>
            <textarea id="message" name="message" placeholder="Write something.." style="width: 100%; padding: 12px;border: 1px solid #ccc; border-radius: 4px;box-sizing: border-box; margin-top: 6px; margin-bottom: 16px;resize: vertical; height:200px" required="" ></textarea>
            <br>
            <button type="submit" class="btn btn-sm btn-default"> Submit </button>
          </form>
        </div>
        <div class="col-md-6" style="text-align: center; margin: auto;">
          <div class="footerlogoicon">
            <img src="{{asset('public/frontend/img/logo.png')}}" alt="">
          </div>
          <br><br><br>
          <div class="footerlogoicon">
            <p style="margin: 0px; color: black;">{!!$contact->address!!}</p>
            <br><br><br>
            <p style="margin: 0px; color: black;">Phone: {{$contact->phone}}</p>
            <p style="margin: 0px; color: black;">Email: {{$contact->email}}</p>
          </div>
          <br>
          <div class="footer-icon footerlogoicon">
            <div class="row" style="text-align: center; margin: auto;">
              <div class="col-4"></div>
              <div class="col-1">
                <span>
                  <a href="{{$contact->facebook}}" title="facebook"><i class="fab fa-facebook-f"></i></a>
                </span>
              </div>
              <div class="col-1">
                <span>
                  <a href="{{$contact->instagram}}" title="instagram"><i class="fab fa-instagram"></i></a>
                </span>
              </div>
              <div class="col-1">
                <span>
                  <a href="{{$contact->twitter}}" title="twitter"><i class="fab fa-twitter"></i></a>
                </span>
              </div>
              {{-- <div class="col-1">
                <span>
                  <a href="#" title="whatsapp"><i class="fab fa-whatsapp"></i></a>
                </span>
              </div> --}}
              <div class="col-4"></div>
            </div>
          </div>
          <br><br>
        </div>
      </div>
    </div>
    <!---MAIN CONTENT-->
    <div class="row">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14606.070133890113!2d90.35101528679589!3d23.764578353316857!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c09f9ba3d447%3A0x1babce9f1c6c95a3!2sMohammadpur%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1617028390513!5m2!1sen!2sbd"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
  <br><br>
@endsection

@section('footer')
<script>
   $(function(){
    
        $.ajaxSetup({
    
            headers: {'X-CSRF-Token' : '{{csrf_token()}}'}
    
        });

        $('#contact-form').submit(function(event) {
    
            event.preventDefault();
    
            var formData = $('#contact-form').serialize();

            var url = '{{route("query")}}';



            $.ajax({

                url: url,
                method: 'POST',
                data: formData,
                dataType: 'json',

                success: function(data){


                    if (data.error.length > 0) {

                        var error_html = '';

                        for(var count = 0; count < data.error.length; count++)
                        {
                            error_html += '<div class="alert alert-danger">'+data.error[count]+'</div>';
                        }

                        $('#form_output').html(error_html);  
                                            
                    } else {

                        $('#form_output').html(data.success);
                        $('#contact-form')[0].reset();
                    }
                    
                },

                error: function(error) {

                    console.log(error);
                }


            });

        });
    
    });
    
        
    
        
</script>
@endsection

