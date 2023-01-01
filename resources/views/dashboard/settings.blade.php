@extends('dashboard.layouts.layout')

@section('body')
    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">{{ __('words.dashboard') }}</li>
        <li class="breadcrumb-item"><a href="#">{{ __('words.dashboard') }}</a>
        </li>
        <li class="breadcrumb-item active">داشبرد</li>


    </ol>


    {{-- {{dd($setting)}} --}}

    <div class="container-fluid">

        <div class="animated fadeIn">

            <form action="{{ Route('dashboard.settings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <strong>{{ __('words.settings') }}</strong>
                    </div>
                    <div class="card-block">

                        <div class="form-group col-md-6">
                            <label>{{ __('words.logo') }}</label>
                            <input type="file" name="logo" class="form-control" placeholder="Enter Email..">

                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __('words.favicon') }}</label>
                            <input type="file" name="logo" class="form-control" placeholder="Enter Email..">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __('words.logo') }}</label>
                            <input type="file" name="logo" class="form-control" placeholder="Enter Email..">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __('words.favicon') }}</label>
                            <input type="file" name="favicon" class="form-control"
                                placeholder="{{ __('words.favicon') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __('words.facebook') }}</label>
                            <input type="text" name="facebook" class="form-control"
                                placeholder="{{ __('words.facebook') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __('words.instagram') }}</label>
                            <input type="text" name="instagram" class="form-control"
                                placeholder="{{ __('words.instagram') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __('words.phone') }}</label>
                            <input type="text" name="phone" class="form-control"
                                placeholder="{{ __('words.phone') }}">
                        </div>
                        <div class="form-group col-md-6">
                            <label>{{ __('words.email') }}</label>
                            <input type="text" name="email" class="form-control"
                                placeholder="{{ __('words.email') }}">
                        </div>

                    </div>





                </div>
                <div class="card">
                    <div class="card-header">
                        <strong>{{ __('words.translations') }}</strong>
                    </div>
                    <div class="card-block">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">

                            @foreach (config('app.languages') as $key => $lang)
                                <li class="nav-item">
                                    <a class="nav-link @if ($loop->index == 0) active @endif " id="home-tab"
                                        data-toggle="tab" href="#{{ $key }}" role="tab" aria-controls="home"
                                        aria-selected="true">{{ $lang }}</a>
                                </li>
                            @endforeach



                        </ul>


                        <div class="tab-content" id="myTabContent">
                            @foreach (config('app.languages') as $key => $lang)
                                <div class="tab-pane mt-3 fade  @if ($loop->index == 0) show active in @endif  "
                                    id="{{ $key }}" role="tabpanel" aria-labelledby="home-tab">
                                    <br>
                                    <div class="form-group mt-3 col-md-12">
                                        <label>{{ __('words.email') }} - {{ $lang }}</label>
                                        <input type="text" name="[title] {{ $key }}" class="form-control"
                                            placeholder="{{ __('words.email') }}">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>{{ __('words.content') }}</label>
                                        <textarea name="[content] {{ $key }} " class="form-control" cols="30" rows="10"></textarea>
                                    </div>


                                    <div class="form-group col-md-12">
                                        <label>{{ __('words.address') }}</label>
                                        <input type="text"name="[address] {{ $key }} " class="form-control">
                                    </div>

                                </div>
                            @endforeach


                        </div>



                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-dot-circle-o"></i>
                        Submit</button>
                    <button type="reset" class="btn btn-sm btn-danger"><i class="fa fa-ban"></i>
                        Reset</button>
                </div>
            </form>

        </div>
    </div>
@endsection
