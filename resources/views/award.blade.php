@extends('layouts.app')

@section('content')

<x-data />

<div class="create-box">

    <form action="{{route('award.store')}}" method="post">
        @csrf

        <div class="create-body">

            <div class="image-box">
                <img src="/image/graduate-student-svgrepo-com.svg" alt="" class="image-style">
            </div>

            <div class="create-list">
                <div class="create-item">
                    <label for="award_name">{{__('Award Name')}}</label>
                </div>
                <div class="create-input">
                    <input id="award_name" class="create-field" type="text" @error('award_name') is-invalid @enderror"
                        name="award_name" value="{{ old('award_name') }}" required autocomplete="award_name" autofocus>
                    @error('award_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            <div class="create-list">
                <div class="create-item">
                    <label for="award_description">{{__('Award Description') }}</label>
                </div>
                <div class="create-input">
                    <textarea name="award_description" id="award_description" value="{{ old('award_description') }}" cols="36" rows="6" required></textarea>
                    @error('award_description')
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
                        name="sponsor" value="{{ old('sponsor') }}" autocomplete="sponsor" autofocus>

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
                    <input id="congregation" class="create-field" type="text" @error('congregation') is-invalid @enderror"
                        name="congregation" value="{{ old('congregation') }}" autocomplete="congregation" autofocus>
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
                    <label for="price">{{__('Price')}}</label>
                </div>
                <div class="create-input">
                    <input id="price" class="create-field" type="text" @error('price') is-invalid @enderror"
                        name="price" value="{{ old('price') }}" autocomplete="price" autofocus>
                    @error('price')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>
            
            <div class="create-list">
                <div class="create-item">
                    <label for="index_number">{{__('Index Number')}}</label>
                </div>
                <div class="create-input">
                    <input id="index_number" class="create-field" type="text" @error('index_number') is-invalid @enderror"
                        name="index_number" value="{{ old('index_number') }}" autocomplete="index_number" autofocus>

                    @error('index_number')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            @can('admin')
                <div class="create-list">
                    <div class="create-item">
                        <label for="department">{{__('Department')}}</label>
                    </div>
                    <div class="create-input">
                        <select class="create-option" name="deptid" id="department" class="form-control">

                            @foreach($departments as $department)
                            <option value="{{$department->deptid}}"
                                {{-- {{old('department_id') === $department->id ? 'selected' : ''}} --}}>
                                {{ucwords($department->long_name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endcan

            <button type="submit" class="btn btn-primary button-center">
                {{ __('Submit') }}
            </button> <br>

        </div>
    </form>

</div>

@endsection