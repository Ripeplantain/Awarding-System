@extends('layouts.app')

@section('content')

<x-data />

<div class="create-box">

    <form action="/special/{{$special->id}}" method="post">
        @csrf
        @method('PUT')

        <div class="create-body">

            <div class="image-box">
                <img src="/image/award-svgrepo-com.svg" alt="" class="image-style">
            </div>

            <div class="create-list">
                <div class="create-item">
                    <label for="award_name">{{__('Award Name')}}</label>
                </div>
                <div class="create-input">
                    <input id="name" class="create-field" type="text" @error('name') is-invalid @enderror"
                        name="name" value="{{$special->name}}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="create-list">
                <div class="create-item">
                    <label for="description">{{__('Award description') }}</label>
                </div>
                <div class="create-input">
                    <textarea name="description" id="description" value="{{$special->description}}" cols="36" rows="6"
                        required>{{$special->description}}</textarea>
                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="create-list">
                <div class="create-item">
                    <label for="sponsor">{{__('Sponsor')}}</label>
                </div>
                <div class="create-input">
                    <input id="sponsor" class="create-field" type="text" @error('sponsor') is-invalid @enderror"
                        name="sponsor" value="{{$special->sponsor}}" required autocomplete="sponsor" autofocus>

                    @error('sponsor')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="create-list">
                <div class="create-item">
                    <label for="congregation">{{__('Congregation')}}</label>
                </div>
                <div class="create-input">
                    <input id="congregation" class="create-field" type="text" @error('congregation') is-invalid
                        @enderror" name="congregation" value="{{$special->congregation}}" required
                        autocomplete="congregation" autofocus>
                    @error('congregation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="create-list">
                <div class="create-item">
                    <label for="session">{{__('Session')}}</label>
                </div>
                <div class="create-input">
                    <input id="session" class="create-field" type="text" @error('session') is-invalid @enderror"
                        name="session" value="{{$special->session }}" required autocomplete="session" autofocus>

                    @error('session')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="create-list">
                <div class="create-item">
                    <label for="winner">{{__('Winner')}}</label>
                </div>
                <div class="create-input">
                    @foreach($special->winner as $win)
                        <input id="winner" class="create-field special-field" type="text" @error('winner') is-invalid
                        @enderror" name="winner[]" value="{{$win}}"><br>
                    @endforeach
                    @error('winner')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="create-list">
                <div class="create-item">
                    <label for="cgpa">{{__('CGPA')}}</label>
                </div>
                <div class="create-input">
                    @foreach($special->cgpa as $gpa)
                        <input id="cgpa" class="create-field special-field" type="text" @error('cgpa') is-invalid
                        @enderror" name="cgpa[]" value="{{$gpa}}"><br>
                    @endforeach
                    @error('cgpa')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="create-list">
                <div class="create-item">
                    <label for="program">{{__('program')}}</label>
                </div>
                <div class="create-input">
                    @foreach($special->program as $dep)
                        <input id="program" class="create-field special-field" type="text" @error('program') is-invalid
                        @enderror" name="program[]" value="{{$dep}}"><br>
                    @endforeach
                    @error('program')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="create-list">
                <div class="create-item">
                    <label for="price">{{__('Price')}}</label>
                </div>
                <div class="create-input">
                   
                    @foreach($special->price as $pr)
                        <input id="price" class="create-field special-field" type="text" @error('price') is-invalid
                        @enderror" name="price[]" value="{{$pr}}"><br>
                    @endforeach

                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>



            <button type="submit" class="btn btn-primary button-center">
                {{ __('Submit') }}
            </button> <br>

        </div>
    </form>

</div>

@endsection