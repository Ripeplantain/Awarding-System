@props(['awards'])
<div class="mt-5 mb-3">
    <div class="row justify-content-center">

        <div class="col-md-8">

           <x-header/>

            <div class="filter-box">
              <div class="dropdown dashboard-session-box">
                <button class="dropbtn dashboard-session-button">Session</button>
                <div class="dropdown-content">
                  {{-- @foreach($awards as $award) --}}
                    <a href="/show/{{'all'}} ">All</a> 
                    <a href="/show/{{'1st'}} ">1st</a>
                    <a href="/show/{{'2nd'}} ">2nd</a>
                    <a href="/show/{{'3rd'}} ">3rd</a>
                  {{-- @endforeach --}}
                </div>
           
              </div>

              <x-search/>
              
            </div>

            <div>

                <table class="table">
                    <tr>
                        <th>Award Name</th>
                        <th>Congregation</th>
                        <th>Session</th>
                        <th>Year</th>
                        <th>Sponsor</th>
                        <th>Price</th>
                        <th>Student</th>
                        <th>Department</th>
                        <th>Edited</th>
                    </tr>

                    @foreach($awards as $award)
                    <tr>
                        <th>{{$award->award_name}}</th>
                        <th>{{$award->congregation}}</th>
                        <th>{{$award->session}}</th>
                        <th>{{$award->year}}</th>
                        <th>{{$award->sponsor}}</th>
                        <th>{{$award->price}}</th>
                        <th>{{$award->studid}}
                            @if ($award->studid == null )
                            {{"null"}}
                            @endif
                        </th>
                        <th>{{$award->department->long_name}}</th>
                        <th>
                            <div class="edit-container">
                                <div class="update-button">
                                    <form action="/award/{{$award->id}}/edit" method="get">
                                        @csrf
                                        <button class="btn btn-primary button">Edit</button>
                                    </form>
                                </div>
                                <div>
                                    <form action="/award/{{$award->id}}" method="post">
                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger button">Delete</button>
                                    </form>
                                </div>
                            </div>
            </div>
            </tr>
            @endforeach
            </table>


             {{$awards->links()}}


            <div class="special-button">
                <div>
                    <form action="/pdf" method="get">
                        @csrf

                        <button class="btn btn-outline-dark button">Pdf View</button>
                    </form>
                </div

                @cannot('user')
                <div>
                    <form action="{{route('special.index')}}" method="get">
                        @csrf

                        <button class="btn btn-outline-warning button ">Special Awards</button>
                    </form>
                </div
                @endcan

            </div>

        </div>
    </div>
</div>


</di