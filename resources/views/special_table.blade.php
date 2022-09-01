@extends('layouts.app')

@section('content')

<div class="mt-5 mb-3">
    <div class="row justify-content-center">

        <div class="col-md-8">

            <x-header/>

            <div class="filter-box">
             <div class="dropdown dashboard-session-box">
                <button class="dropbtn dashboard-session-button">Session</button>
                <div class="dropdown-content">
                  
                    <a href="/special/{{'all'}} ">All</a> 
                    <a href="/special/{{'1st'}} ">1st</a>
                    <a href="/special/{{'2nd'}} ">2nd</a>
                    <a href="/special/{{'3rd'}} ">3rd</a>
                  
                </div>
           
              </div>

              <x-search/>

            </div>

            <table class="table">
                <tr>
                    <th>Award Name</th>
                    <th>Congregation</th>
                    <th>Session</th>
                    <th>Year</th>
                    <th>Sponsor</th>
                    <th>Edited</th>
                </tr>

                @foreach($specials as $special)
                <tr>

                    <th>{{$special->name}}</th>
                    <th>{{$special->congregation}}</th>
                    <th>{{$special->session}}</th>
                    <th>{{$special->year}}</th>
                    <th>{{$special->sponsor}}</th>
                    <th>
                        <div class="edit-container">
                            <div class="update-button">
                                <form action="/special/{{$special->id}}/edit" method="get">
                                    @csrf
                                    <button class="btn btn-primary button">Edit</button>
                                </form>
                            </div>
                            <div>
                                <form action="/special/{{$special->id}}" method="post">
                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger button">Delete</button>
                                </form>
                            </div>
                        </div>
                    </th>

        </div>
        </tr>
        @endforeach
        </table>

            {{$specials->links()}}

            <div class="special-button">
                @cannot('user')
                <div>
                    <form action="/document" method="get">
                        @csrf

                        <button class="btn btn-outline-dark button">Pdf View</button>
                    </form>
                </div
                @endcannot
        
                <div>
                    <form action="{{route('home')}}" method="get">
                        @csrf

                        <button class="btn btn-outline-info button">Regular Awards</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection