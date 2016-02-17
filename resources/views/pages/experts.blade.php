

@extends('app')

@section('content')
    <div class="section-header">
      <div class="container">
        <div class="row">

          <div class="col-lg-12">
            <h1 class="page-header" >Meet the Team</h1>
            <p>Certificate Clearing is the nation's premier coupon settlement administrator and market maker thanks to a blend of legal an financial expertise.</p>

          </div>

        </div>
      </div> <!-- /.container -->
    </div> <!-- /.section-colored -->

    <div class="container container-int">


        <!-- Jim Tharin -->
        <div class="row">
            <div class="col-md-3">
                <a href="{{url('james-tharin')}}">
                    <img src="{{ asset('images/jim.jpg') }}" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-md-9">
                <h3>James Tharin</h3>
                <h4>CEO</h4>
                <p>
                  Office Tel: (312) 204-6970 <br>
                  Email: jtharin@chicagoclearing.com
                </p>

                <p>In 1993, Jim founded Certificate Clearing Corporation (“CCC”), and under his leadership the firm has become the preeminent class action coupon market-maker in the United States. Over the course of twenty years, CCC has recovered over $200 million dollars for harmed class members in 20 (25?) unique class action settlements.</p>

                </p>
                <a class="btn btn-danger" href="{{url('james-tharin')}}">Learn more <span></span></a>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Brian Blockovich -->
        <div class="row">
            <div class="col-md-3">
                <a href="{{ url('brian-blockovich')}}">
                    <img src="{{ asset('images/blockovich.jpg') }}" alt="" class="img-responsive">
                </a>
            </div>
            <div class="col-md-9">
                <h3>Brian Blockovich</h3>
                <h4>President and General Counsel</h4>
                <p>
                  Office Tel: (312)204-6970 <br>
                  Email: bblockovich@chicagoclearing.com
                </p>

                <p>
                  Brian joined CCC in 1995 and has served as President and General Counsel since 2002. He leads sale and business development at the firm, and oversees all legal matters. Brian has been instrumental in CCC’s growth as the leading coupon market maker in the United States.
                </p>
                <a class="btn btn-danger" href="{{ url('brian-blockovich')}}">Learn more <span></span></a>

        </div>
      </div>
        <!-- /.row -->

        <hr>
        <!-- Brian Butler -->
        <div class="row">
            <div class="col-md-3">
                <a href="{{url('brian-butler')}}">
                    <img src="{{ asset('images/brian.jpg') }}" class="img-responsive">
                </a>
            </div>
            <div class="col-md-9">
                <h3>Brian Butler</h3>
                <h4>Chief Information Officer</h4>
                <p>
                  Office Tel: (312)204-6970 <br>
                  Email: bbutler@chicagoclearing.com

                </p>

                <p>
                  Brian joined CCC in 1995 and has served as President and General Counsel since 2002. He leads sale and business development at the firm, and oversees all legal matters. Brian has been instrumental in CCC’s growth as the leading coupon market maker in the United States.
                </p>



                </p>

                <a class="btn btn-danger" href="{{url('brian-butler')}}">Learn more <span></span></a>
            </div>
        </div>
        <!-- /.row -->


      </div>

        <!-- /.row -->
      </div>
    </div>
</body>


@stop
