@extends('app')

@section('content')
<div class="section-header">
  <div class="container">
    <div class="row">

      <div class="col-lg-12">
        <h1 class="page-header" >Contact Us</h1>
      </div>

    </div>
  </div> <!-- /.container -->
</div> <!-- /.section-colored -->
<style media="screen">
  ul {
    list-style:none;
    padding-left:0;
  }​
</style>

<body>
  <div class="container container-int">
    <p class="text-center">
      We're excited to hear from you!
    </p>
    <hr>
    <div class="row">
      <div class="col-md-6">
        <p>
          <h4>Address:</h4>

          <ul>
            <li>Chicago Clearing Corporation</li>
            <li>404 South Wells Street, Suite 600</li>
            <li>Chicago, IL 60607</li>
          </ul>
        </p>
        <p>
          <h4>Call us:</h4> (312) 204-6970
        </p>
        <p>
          <h4>Email: clientservice@chicagoclearing.com</h4>
        </p>
        <p>
          <h4>Social:</h4>
          <a href="http://twitter.com/chicagoclearing" class="btn btn-social-icon btn-twitter">
            Follow CCC on Twitter <span class="fa fa-twitter"></span>
          </a>
        </p>
        <p>
          <a href="https://www.linkedin.com/company/chicago-clearing-corporation" class="btn btn-social-icon btn-twitter">
            Connect with CCC on LinkedIn <span class="fa fa-linkedin"></span>
          </a>
        </p>
        <p>
      </div>
      <div class="col-md-6">
        <h4>Contact</h4>
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Business Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">First Name</label>
            <input type="email" class="form-control" id="firstName" placeholder="First Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Last Name</label>
            <input type="password" class="form-control" id="password" placeholder="Last Name">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Business Phone</label>
            <input type="password" class="form-control" id="password" placeholder="Phone Number">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Company</label>
            <input type="password" class="form-control" id="company" placeholder="Company">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        {{!! Form::open() !!}}
        {{!! Form::close() !!}}
      </div>
    </div>


    </p>








  </div>



</body>

@stop
