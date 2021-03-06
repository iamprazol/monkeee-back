@extends('layouts.app')

@section('content')

        <div class="col-md-10 m-auto">

            <div class="card sm-hidden">

                <div class="card-header"><h4>{{ __('Add a Club') }}</h4></div>

                <div class="card-body">
                    <form method="post" action="{{ route('club.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input type="text" name="name"  class="form-control d-flex ml-auto mr-auto {{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" placeholder="Enter Club name" value="{{ old('name') }}" required>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('name') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="suburb_id" class="col-md-4 col-form-label text-md-right">{{ __('Suburb') }}</label>

                            <div class="col-md-6">
                                <select name="suburb_id" class="custom-select" id="suburb_id" required>
                                    <option value="" selected="">Choose One</option>
                                    @foreach($suburbs as $suburb)
                                    <option value="{{ $suburb->id }}">{{ $suburb->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-sm-6">
                                <input id="address" type="text" class="form-control {{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" placeholder="Enter the club's address" value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('address') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-sm-7">
                                <textarea rows="5" cols="40" type="text" id="description" class="form-control" name="description" placeholder="Write something about the club" required autofocus>{{ old('description') }}</textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="order" class="col-md-4 col-form-label text-md-right">{{ __('Order') }}</label>

                            <div class="col-sm-7">
                                <input type="text" id="order" class="form-control{{ $errors->has('order') ? ' is-invalid' : '' }}" name="order" placeholder="Enter the order number" value="{{ old('order') }}" required>

                                @if ($errors->has('order'))
                                    <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('order') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-sm-7">
                                <input type="tel" id="phone" class="form-control" name="phone" placeholder="Enter the club's contact number " value="{{ old('phone') }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-sm-7">
                                <input type="text" id="email" class="form-control" name="email" placeholder="eg. club@gmail.com" value="{{ old('email') }}">

                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="days" class="col-md-4 col-form-label text-md-right">{{ __('Opening Days') }}</label>

                            <div class="col-sm-7">
                                <textarea rows="5" cols="40" type="text" id="days" class="form-control" name="days" placeholder="eg.  Sun from 4 am to 10 pm ,
                                                                                                                                      Mon from 5 am to 11 pm ,
                                                                                                                                      Tue from 4 am to 11 pm ,
                                                                                                                                      Wed from 6 am to 8 pm ,
                                                                                                                                      Thu from 8 am to 11 pm ,
                                                                                                                                      Fri fron 7 am to 11 pm ,
                                                                                                                                      Sat from 3 am to 11 pm "
                                          required autofocus>{{ old('days') }}</textarea>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="facebook" class="col-md-4 col-form-label text-md-right">{{ __('Facebook') }}</label>

                            <div class="col-sm-7">
                                <input type="text" id="facebook" class="form-control" name="facebook" placeholder="Enter the club's facebook link ( not mandatory ) " value="{{ old('facebook') }}" >
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="instagram" class="col-md-4 col-form-label text-md-right">{{ __('Instagram') }}</label>

                            <div class="col-sm-7">
                                <input type="text" id="instagram" class="form-control" name="instagram" placeholder="Enter club's instagram link ( not mandatory ) " value="{{ old('instagram') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="pic" class="col-md-4 col-form-label text-md-right" >{{ __('Upload a cover pic') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="pic" name="pic" class="form-control{{ $errors->has('pic') ? ' is-invalid' : '' }}" placeholder="Choose a event pic to upload" value="{{ old('pic') }}" required/>
                                @if ($errors->has('pic'))
                                    <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('pic', 'Image size must be less than 15 MB')}}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




@endsection
