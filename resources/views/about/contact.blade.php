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
  <div class="container container-int">
    <div class="col-lg-8 ">
      <p class="hidden">
        <b>Call Us:</b>  (312) 204-6970
      </p>
      <p class="hidden">
        <b>Our Address:</b> 404 S Wells St #600, Chicago, IL 60607
      </p>
      <!-- Jim Tharin -->
      <div class="row">
        <div class="col-md-3">
          <br>
          <a href="http://192.168.0.17/certificate-clearing-corp/public/pages/James%20Tharin">
            <img src="http://192.168.0.17/certificate-clearing-corp/public/images/jim.jpg" alt="" class="img-responsive">
          </a>
        </div>
        <div class="col-md-9">
          <a href="http://192.168.0.17/certificate-clearing-corp/public/pages/James%20Tharin">
          <h3><span style="color: inherit; line-height: 1.1;">James Tharin</span><br></h3>
          <h4>Founder and CEO</h4>
        </a>
          <p>
            Office Tel: (312) 204-6970
            <br> Email: jtharin@chicagoclearing.com.</p>

          <p></p>
          <span></span>
        </div>
      </div>
      <!-- /.row -->

      <hr>

      <!-- Brian Blockovich -->
      <div class="row">
        <div class="col-md-3">
          <br>
          <a href="http://192.168.0.17/certificate-clearing-corp/public/pages/Brian-Blockovich">
            <img src="http://192.168.0.17/certificate-clearing-corp/public/images/blockovich.jpg" alt="" class="img-responsive">
          </a>
        </div>
        <div class="col-md-9">
          <a href="http://192.168.0.17/certificate-clearing-corp/public/pages/Brian-Blockovich">
          <h3><span style="color: inherit; line-height: 1.1;">Brian Blockovich</span><br></h3>
          <h4>President and General Counsel</h4>
        </a>
          <p>
            Office Tel: (312) 204-6970
            <br> Email: bblockovich@chicagoclearing.com</p>
            <span></span>

        </div>
      </div>
      <!-- /.row -->

      <hr>
      <!-- Brian Butler -->
      <div class="row">
        <div class="col-md-3">
          <br>
          <a href="http://192.168.0.17/certificate-clearing-corp/public/pages/Brian-Butler">
            <img src="http://192.168.0.17/certificate-clearing-corp/public/images/brian.jpg" class="img-responsive">
          </a>
        </div>
        <div class="col-md-9">
          <a href="http://192.168.0.17/certificate-clearing-corp/public/pages/Brian-Butler">
          <h3><span style="color: inherit; line-height: 1.1;">Brian Butler</span><br></h3>
          <h4>Chief Information Officer</h4>
          </a>
          <p>
            Office Tel: (312) 204-6970
            <br> Email: bbutler@chicagoclearing.com</p>

          <p></p>
          <span></span>
        </div>
      </div>
      <!-- /.row -->




      <!-- /.row -->
    </div>
    <div class="col-lg-4">
      <ul>
          @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>

      {!! Form::open(array('route' => 'contact_store', 'class' => 'form')) !!}

      <div class="form-group">
          {!! Form::label('Your Full Name') !!}
          {!! Form::text('name', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'i.e. James Tharin')) !!}
      </div>

      <div class="form-group">
          {!! Form::label('Your Business E-mail Address') !!}
          {!! Form::text('email', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'i.e. jtharin@chicagoclearing.com')) !!}
      </div>

      <div class="form-group">
          {!! Form::label('Your Message') !!}
          {!! Form::textarea('message', null,
              array('required',
                    'class'=>'form-control',
                    'placeholder'=>'Your message')) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('Contact Us!',
            array('class'=>'btn btn-primary')) !!}
      </div>
      {!! Form::close() !!}

    </div>

  </div>




@stop
