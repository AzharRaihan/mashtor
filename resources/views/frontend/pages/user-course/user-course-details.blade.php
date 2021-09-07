@extends('frontend.layouts.master')
@section('title',' | Course Details ')
@section('frontend-styles')
<style>
  .student-avater img{
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
  }
  a{
    text-decoration: none !important;
  }
  .rating{
    display: flex;
    
  }
  .rating i{
    color: #FFB317;
  }
  .verified{
    background: #FFB317;
    color: white;
    padding: 7px 15px;
    border-radius: 50px;
  }
  .f-projects{
    border: 1px solid #FFB317;
    padding: 7px 15px;
    border-radius: 50px;
  }
  .course-logo img{
    border-radius: 50%;
  }
  .graduation-badge{
    width: 150px;
    height: 150px;
    border: 2px solid black;
    border-radius: 50%;
    font-size: 45px;
    text-align: center;
    padding: 10px;
    margin: 50px 0px;
  }
  /* .certificate{
    background-image: url('frontend/digital-skill-certificate/certificate.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 850px;
    position: relative;
  }
  .badge{
    position: absolute;
    top: 160px;
    right: 100px;
    color: white;
  }
  .details{
    position: absolute;
    bottom: 272px;
    left: 30%;
    text-align: cenetr;
    justify-content: center;
  }
  .details h2::after{
    content: "";
    display: block;
    margin: auto;
    width: 288px;
    height: 2px;
    background: black;
    margin-top: 2px;
  } */

  .badge1{
    width: 250px;
    height: 200px;
    background: #ffd4f2;
    border-bottom-right-radius: 75%;
    border-bottom-left-radius: 5%;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
  }
  .mashtor-logo1{
    padding-top: 70px;
    margin-left: 100px;
  }
  .mashtor-logo1 img{
    width: 60px;
    height: 60px;
  }
  .badge2{
    width: 300px;
    height: 400px;
    background: #ffd4f2;
    border-bottom-right-radius: 250px;
    border-bottom-left-radius: 250px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    display: flex;
    justify-content: center;
    align-items: flex-end;
    padding-bottom: 30px;
    position: relative;

  }
  .badge2-circle{
    position: absolute;
    border: 3px solid #C2000C;
    width: 250px;
    height: 250px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;

  }
  .verified-badge{
    position: absolute;
    top: 30px;
    text-align: center;
  }
  .name-com-date{
    padding-left: 50px;
    padding-top: 50px;
  }
  .certificate-bg{
    background: #F7F2F7;
    padding: 60px 0px;
  }
  .course-logo-wrap{
    width: 300px;
  }
  .course-logo-wrap{
    padding-left: 50px;
  }
  .founder-signature{
    padding-left: 50px;
    padding-top: 64px;
  }
  .founder-signature h5::before{
    content: "";
    display: block;
    width: 250px;
    height: 1px;
    background: #030303;
    margin-bottom: 6px;
    top: 3;
  }
  .trainer-signature{
    padding-top: 227px;
  }
  .trainer-signature h5::before{
    content: "";
    display: block;
    width: 250px;
    height: 1px;
    background: #030303;
    margin-bottom: 6px;
    top: 3;
  }
  #border-certificate{
    border: 10px solid transparent;
    padding: 15px;
    border-image-source: url('frontend/digital-skill-certificate/binary-number.jpg');
    border-image-repeat: round;
    border-image-slice: 30;
    border-image-width: 10px;
  }
  
</style>
@endsection
@section('frontend-content')
  <!-- Students -->
  <section class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="student-avater">
            <img src="{{ url('uploads/default-avatar.png') }}" alt="" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-9">
          <h2>Sankari Sindhu</h2>
          <p>Successfully Graduated from <a href="#">Women In Digital</a></p>
          <div class="rating">
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
            <span><i class="fas fa-star"></i></span>
          </div>
          <p>5/5 - Highly Recommended</p>
          <p>" Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ratione impedit accusantium et ipsa assumenda, veritatis provident iusto quaerat porro eaque quisquam molestiae repellat qui eos tenetur odit, incidunt accusamus atque. Omnis nesciunt accusantium atque minima ad autem corporis vero eos magnam commodi, fugit consequuntur modi, molestias iure cumque distinctio!"</p>
          <div class="d-flex mt-4">
            <a href="#" class="verified">
              Verified Certificate
            </a>
            <a href="#" class="f-projects ml-3">
              Final Projects <span><i class="fas fa-long-arrow-alt-right"></i></span>
            </a>
          </div>
          <div class="learned mt-4">
            <p>Skills Sankari Sindhu Learned</p>
            <div class="course-logo d-flex pt-3">
              <a href="#" class="mx-2">
                <img src="{{ url('uploads/course/html.png') }}" alt="" class="img-fluid">
              </a>
              <a href="#" class="mx-2">
                <img src="{{ url('uploads/course/css.png') }}" alt="" class="img-fluid">
              </a>
              <a href="#" class="mx-2">
                <img src="{{ url('uploads/course/bootstrap.png') }}" alt="" class="img-fluid">
              </a>
              <a href="#" class="mx-2">
                <img src="{{ url('uploads/course/vscode.png') }}" alt="" class="img-fluid">
              </a>
            </div>
          </div>
        </div>
      </div>

      <!-- Certificate -->
      {{-- <section class="mt-5">
        <div class="text-center m-auto my-3">
          <span class="graduation-badge"><i class="fas fa-graduation-cap"></i></span>
        </div>

        <div class="certificate mt-5">
          <div class="badge">
            <p>Digital Skill For all <br> 2021</p>
          </div>

          <div class="details text-center">
            <h4>THIS CERTIFICATE IS PRESENTED TO</h4>
            <h2 class="pt-3">Sankari Sindhu</h2>
            <p class="pt-3">For participating in the</p>
            <p class="py-2">"UNDP WOMENS DIGITAL INNOVATION HACKATHON <small>2021</small>"</p>
            <p>and demonstrating fabulous innovative skill and teamwork</p>
          </div>
          
        </div>

        

      </section> --}}


      <!-- Certificate End-->

      
    </div>
  </section>
  <!-- Students End -->

  <!-- Certificate -->
  <section class="certificate-bg">
    <div class="container" id="border-certificate">
      <div class="d-flex justify-content-between">
        <div>
          <div class="badge1">
            <div class="mashtor-logo1 d-flex">
              <img src="{{ url('frontend/digital-skill-certificate/m-logo.png') }}" alt="">
              <h2 class="pt-2 pl-3" style="color: #C2000C;">Mashtor</h2>
            </div>
          </div>
          <div class="name-com-date">
            <span>September 6,020</span>
            <h4 class="py-3">Sankari Sindhu</h4>
            <span>Has Successfully compleated a Mashtor workshop</span>
            <h4 class="py-3" style="color: #C2000C">Introducting To Codding</h4>
          </div>
          <!-- Set up your HTML -->
          <div class="owl-carousel course-logo-wrap pt-3">
            <div class="course-logo"> 
              <img src="{{ url('uploads/course/html.png') }}" alt="" class="img-fluid">
            </div>
            <div class="course-logo"> 
              <img src="{{ url('uploads/course/css.png') }}" alt="" class="img-fluid">
            </div>
            <div class="course-logo"> 
              <img src="{{ url('uploads/course/bootstrap.png') }}" alt="" class="img-fluid">
            </div>
            <div class="course-logo"> 
              <img src="{{ url('uploads/course/vscode.png') }}" alt="" class="img-fluid">
            </div>
            <div class="course-logo"> 
              <img src="{{ url('uploads/course/html.png') }}" alt="" class="img-fluid">
            </div>
            <div class="course-logo"> 
              <img src="{{ url('uploads/course/css.png') }}" alt="" class="img-fluid">
            </div>
            <div class="course-logo"> 
              <img src="{{ url('uploads/course/bootstrap.png') }}" alt="" class="img-fluid">
            </div>

          </div>
          <div class="founder-signature">
            <img src="{{ url('frontend/digital-skill-certificate/founder-signature.png') }}" alt="" class="img-fluid">
            <h5>Founder Signature</h5>
          </div>


        </div>
        <div>
          <div class="badge2">
            <div class="badge2-circle m-auto p-3">
              <img src="{{ url('frontend/digital-skill-certificate/w-logo.png') }}" alt="" class="img-fluid">
            </div>
            <div class="verified-badge">
              <h5 class="text-uppercase">Verified</h5>
              <p>Certificate of Archivement</p>
            </div>
            
          </div>
          <div class="trainer-signature">
            <h5>Trainer Signature</h5>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Certificate End-->

@endsection
@section('frontend-scripts')
<script>
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:false,
            loop:false
        }
    }
})
</script>

@endsection