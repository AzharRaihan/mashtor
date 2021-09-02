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
</style>
@endsection
@section('frontend-content')
  <!-- Students -->
  <section class="pt-5">
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
      <div class="row">
        .
      </div>
      <!-- Certificate End-->

      
    </div>
  </section>
  <!-- Students End -->
@endsection
@section('frontend-scripts')

@endsection