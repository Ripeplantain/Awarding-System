@extends('layouts.app')

@section('content')





<div class="mt-5 mb-3">
    <div class="row justify-content-center">

        <div class="col-md-8">

            {{-- <div class=" body-text fs-1"><h2>{{ auth()->user()->username }}'s Dashboard</h2></div> --}}

            <a href="/print" class="link-primary text-uppercase m-4 fs-4">Download</a>


            <div class="special-body mt-3">
              @foreach($specials as $special)
                <h2 class="title">{{$special->description}}</h2>
                  <div class="special-details">
                    <div class="special-loop">
                    @foreach($special->winner as $win)  
                        <p>{{$win}}</p>                         
                    @endforeach
                    </div>
                    <div class="special-loop">
                    @foreach($special->cgpa as $gpa)
                        <p>{{$gpa}}</p>        
                    @endforeach
                    </div>
                    <div class="special-loop">
                    @foreach($special->program as $dep)
                      <p>{{$dep}}</p>        
                    @endforeach
                    </div>
                  </div>
                  <h2>Price</h2>
                  @foreach($special->price as $pri)
                    <p>{{$pri}}</p>
                  @endforeach
              @endforeach
            </div>

                

            {{-- {{$specials->links()}} --}}


            {{-- <div class="special-button">

              <div class="edit-container">
                  <div class="document-button">
                      <a href="{{route('show-table')}}">Table View</a>
                  </div>
              </div>

            </div> --}}

        </div>
    </div>
</div>
</div>


@endsection