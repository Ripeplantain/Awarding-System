@props(['awards'])


<div class="mt-5 mb-3">
    <div class="row justify-content-center">

        <div class="col-md-8">

            {{-- <div class=" body-text fs-1"><h2>{{ auth()->user()->username }}'s Dashboard</h2></div> --}}

            <a href="{{route('print')}}" class="link-primary text-uppercase m-4 fs-4">Download</a>

            <div class="docement-body mt-4">
              @foreach($awards as $award)
                <h2 class="title">{{$award->award_description}}</h2>
                <div class="document-details">
                  <p>{{$award->student->fname}} {{$award->student->lname}}</p>
                  <p><b>CGPA :</b>  <span>{{$award->student->cgpa}}</span></p>
                  <p>{{$award->student->program->short_name}}</p>
                  <p><b>Price:</b> <span>{{$award->price}}</span></p>
                </div>
              @endforeach
            </div>

                

            {{$awards->links()}}


            {{-- <div class="special-button">

              <div class="edit-container">
                  <div class="document-button">
                      <a href="{{route('home')}}">Table View</a>
                  </div>
              </div>

              @can('college')
                  <div class="edit-container">
                      <div class="award-button">
                          <a href="{{route('special.index')}}">Special Awards</a>
                      </div>
                  </div>
              @endcan

            </div> --}}

        </div>
    </div>
</div>
</div>