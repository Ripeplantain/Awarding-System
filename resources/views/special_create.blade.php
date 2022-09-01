@extends('layouts.app')

@section('content')

<x-data />

<div class="create-box">

    <form action="{{route('special.store')}}" method="post">
        @csrf

        <div class="create-body">

            <div class="image-box">
                <img src="/image/award-svgrepo-com.svg" alt="" class="image-style">
            </div>

            <div class="create-list">
                <div class="create-item">
                    <label for="award_name">{{__('Award Name')}}</label>
                </div>
                <div class="create-input">
                    <input id="name" class="create-field" type="text" @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                    <textarea name="description" id="description" value="{{ old('description') }}" cols="36" rows="6"
                        required></textarea>
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
                        name="sponsor" value="{{ old('sponsor') }}" required autocomplete="sponsor" autofocus>

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
                        @enderror" name="congregation" value="{{ old('congregation') }}" required
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
                        name="session" value="{{ old('session') }}" required autocomplete="session" autofocus>

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

                    <input id="winner" class="create-field special-field" type="text" @error('winner') is-invalid
                        @enderror" name="winner[]" value="{{old('winner[$loop->index]','')}}"><br>

                    <input id="winner" class="create-field special-field" type="text" @error('winner') is-invalid
                        @enderror" name="winner[]" value="{{old('winner[$loop->index]','')}}"><br>

                    <input id="winner" class="create-field special-field" type="text" @error('winner') is-invalid
                        @enderror" name="winner[]" value="{{old('winner[$loop->index]','')}}"><br>

                    <input id="winner" class="create-field special-field" type="text" @error('winner') is-invalid
                        @enderror" name="winner[]" value="{{old('winner[$loop->index]','')}}"><br>

                    <input id="winner" class="create-field special-field" type="text" @error('winner') is-invalid
                        @enderror" name="winner[]" value="{{old('winner[$loop->index]','')}}">

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

                    <input id="cgpa" class="create-field special-field" type="text" @error('cgpa') is-invalid
                        @enderror" name="cgpa[]" value="{{old('cgpa[$loop->index]','')}}"><br>

                    <input id="cgpa" class="create-field special-field" type="text" @error('cgpa') is-invalid
                        @enderror" name="cgpa[]" value="{{old('cgpa[$loop->index]','')}}"><br>

                    <input id="cgpa" class="create-field special-field" type="text" @error('cgpa') is-invalid
                        @enderror" name="cgpa[]" value="{{old('cgpa[$loop->index]','')}}"><br>

                    <input id="cgpa" class="create-field special-field" type="text" @error('cgpa') is-invalid
                        @enderror" name="cgpa[]" value="{{old('cgpa[$loop->index]','')}}"><br>

                    <input id="cgpa" class="create-field special-field" type="text" @error('cgpa') is-invalid
                        @enderror" name="cgpa[]" value="{{old('cgpa[$loop->index]','')}}">

                    @error('cgpa')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="create-list">
                <div class="create-item">
                    <label for="winner">{{__('program')}}</label>
                </div>
                <div class="create-input">
                    <input id="program" class="create-field special-field" type="text" @error('program')
                        is-invalid @enderror" name="program[]" value="{{old('program[$loop->index]','')}}"><br>

                    <input id="program" class="create-field special-field" type="text" @error('program')
                        is-invalid @enderror" name="program[]" value="{{old('program[$loop->index]','')}}"><br>

                    <input id="program" class="create-field special-field" type="text" @error('program')
                        is-invalid @enderror" name="program[]" value="{{old('program[$loop->index]','')}}"><br>

                    <input id="program" class="create-field special-field" type="text" @error('program')
                        is-invalid @enderror" name="program[]" value="{{old('program[$loop->index]','')}}"><br>

                    <input id="program" class="create-field special-field" type="text" @error('program')
                        is-invalid @enderror" name="program[]" value="{{old('program[$loop->index]','')}}"><br>


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
                    <input id="price" class="create-field special-field" type="text" @error('price') is-invalid
                        @enderror" name="price[]" value="{{ old('price[$loop->index]','') }}" autocomplete="price"
                        <autofocus><br>

                    <input id="price" class="create-field special-field" type="text" @error('price') is-invalid
                        @enderror" name="price[]" value="{{ old('price[$loop->index]','') }}" autocomplete="price"
                        <autofocus><br>

                    <input id="price" class="create-field special-field" type="text" @error('price') is-invalid
                        @enderror" name="price[]" value="{{ old('price[$loop->index]','') }}" autocomplete="price"
                        <autofocus><br>

                    <input id="price" class="create-field special-field" type="text" @error('price') is-invalid
                        @enderror" name="price[]" value="{{ old('price[$loop->index]','') }}" autocomplete="price"
                        <autofocus><br>

                    <input id="price" class="create-field special-field" type="text" @error('price') is-invalid
                        @enderror" name="price[]" value="{{ old('price[$loop->index]','') }}" autocomplete="price"
                        <autofocus><br>


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