@extends('frontend.layouts.master')
@section('title',' | Course Details ')
@section('frontend-styles')
<style>
  .student-avater img{
    border-top-right-radius: 50%;
    border-bottom-right-radius: 50%;
    width: 260px;
    height: 260px;
    object-fit: cover;
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
  .badge-1-wrap{
    position: relative;
    height: 650px;
  }
  .badge1{
    width: 250px;
    height: 200px;
    background: #ffd4f2;
    border-bottom-right-radius: 75%;
  }
  .mashtor-logo1{
    padding-top: 70px;
    margin-left: 100px;
  }
  .mashtor-logo1 img{
    width: 60px;
    height: 60px;
  }
  .badge-2-wrap{
    position: relative;
  }
  .badge2{
    width: 300px;
    height: 400px;
    background: #ffd4f2;
    border-bottom-right-radius: 250px;
    border-bottom-left-radius: 250px;
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
    position: absolute;
    bottom: 0px;
    padding-left: 50px;

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
    /* padding-top: 227px; */
    position: absolute;
    bottom: 0px;
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
    max-width: 860px;
    border: 10px solid transparent;
    border-image-source: url('../frontend/digital-skill-certificate/border.png');
    border-image-repeat: 20% round;
    border-image-slice: 30%;
    margin: auto;
    padding-bottom: 30px;
  }
  .name{
    letter-spacing: 2px;
    color: #FFB317;
  }
  @media only screen and (min-width: 576px) and (max-width: 767px) {
    #border-certificate{
      max-width: 460px;
    }
    .badge2 {
      width: 172px;
      height: 290px;
      padding-bottom: 15px;
    }
    .badge2-circle {
      width: 155px;
      height: 155px;
    }
    .name-com-date {
      padding-left: 15px;
      padding-top: 50px;
    }
    .course-logo-wrap {
      padding-left: 15px;
    }
    .course-logo img {
      width: 30px !important;
      height: 30px;
    }
    .owl-item{
      margin: auto;
    }
    .mashtor-logo1 {
      padding-top: 55px;
      margin-left: 40px;
    }
    .badge1 {
      width: 164px;
      height: 140px;
    }
    .mashtor-logo1 img{
      height: 40px;
    }
    .mashtor-logo1 h2{
      font-size: 20px;
    }
    .founder-signature {
      padding-left: 15px;
    }
    .founder-signature img{
      width: 110px;
    }
    .founder-signature h5::before {
      width: 150px;
    }
    .trainer-signature h5::before {
      width: 150px;
    }
    .founder-signature, .trainer-signature, h5{
      font-size: 15px;
    }
    .name-com-date h4{
      font-size: 22px;
    }
    .course-logo-wrap {
      width: 269px;
    }
    .badge-1-wrap {
      height: 525px;
    }
  }
  @media only screen and (min-width: 320px) and (max-width: 575px) {
    #border-certificate{
      max-width: 460px;
    }
    .badge2 {
      width: 125px;
      height: 225px;
      padding-bottom: 15px;
    }
    .badge2-circle {
      width: 105px;
      height: 105px;
    }
    .name-com-date {
      padding-left: 7px;
      padding-top: 50px;
    }
    .course-logo-wrap {
      padding-left: 15px;
    }
    .course-logo img {
      width: 30px !important;
      height: 30px;
    }
    .owl-item{
      margin: auto;
    }
    .mashtor-logo1 {
      padding-top: 24px;
      margin-left: 7px;
    }
    .badge1 {
      width: 95px;
      height: 85px;
    }
    .mashtor-logo1 img{
      height: 30px;
      width: 30px;
    }
    .mashtor-logo1 h2{
      font-size: 20px;
    }
    .founder-signature {
      padding-left: 15px;
    }
    .founder-signature img{
      width: 90px;
    }
    .founder-signature h5::before {
      width: 100px;
    }
    .trainer-signature h5::before {
      width: 100px;
    }
    .founder-signature, .trainer-signature, h5{
      font-size: 12px;
    }
    .name-com-date h4{
      font-size: 12px;
    }
    .name-com-date span{
      font-size: 10px;
    }
    .course-logo-wrap {
      width: 140px;
    }
    .badge-1-wrap {
      height: 385px;
    }
    .verified-badge h5,p{
      font-size: 12px;
    }
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
            <img src="{{ url($user->image) }}" alt="user image not found" class="img-fluid">
          </div>
        </div>
        <div class="col-sm-9">
          <h2 class="text-uppercase">{{ $user->fullname }}</h2>
          <p>Successfully Graduated from <a href="https://womenindigital.net" class="text-danger" target="blank">Women In Digital</a></p>
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
            <p class="text-uppercase">Skills {{ $user->fullname }} Learned</p>
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
      <!-- Certificate End-->
    </div>
  </section>
  <!-- Students End -->
  <!-- Certificate -->
  <section class="certificate-bg">
    <div class="container">
      <div id="border-certificate" >
        <div class="d-flex justify-content-between">
          <div class="badge-1-wrap">
            <div class="badge1">
              <div class="mashtor-logo1 d-flex">
                <img src="{{ url('frontend/digital-skill-certificate/m-logo.png') }}" alt="">
                <h2 class="pt-2 pl-3" style="color: #C2000C;">Mashtor</h2>
              </div>
            </div>
            <div class="name-com-date">
              <span>September 6,2021</span>
              <h4 class="py-md-3 py-1 text-uppercase name">{{ $user->fullname }}</h4>
              <span>Has Successfully compleated a Mashtor workshop</span>
              <h4 class="py-md-3 py-1" style="color: #C2000C">Introducting To Codding</h4>
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
          <div class="badge-2-wrap">
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
            items:4,
            nav:false
        },
        600:{
            items:4,
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