@extends('layouts.app')

@section('content')
<div id="main">
    <div id="content" class="full">
        <div class="post manage_forms">
            <div class="content_header">
                <div class="content_header_title">
                    <div style="float: left">
                        <h2>Update Exam
                        </h2>
                        <p>Update this exams</p>
                    </div>
                    <div style="clear: both; height: 1px"></div>
                </div>
            </div>


            <div class="content_body">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <form method="POST" action="{{ url('/exams') }}/{{ $exam->id }}" class="create_form">
                                @csrf
                                @method('PUT')
                                <div class="form-group row">
                                    <label for="name" class="col-md-3 col-form-label text-md-right">{{ __('Name')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="name" type="text"
                                               class="form-control @error('name') is-invalid @enderror" name="name"
                                               value="{{ $exam->name }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="description" class="col-md-3 col-form-label text-md-right">{{
                                        __('Description') }}</label>
                                    <div class="col-md-7">
                                        <textarea id="description"
                                                  class="form-control @error('description') is-invalid @enderror"
                                                  name="description"
                                                  value="{{ old('description') }}" rows="4" cols="50"
                                                  autocomplete="description">{{ $exam->description }}</textarea>

                                        @error('description')
                                        <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="attempt_number" class="col-md-3 col-form-label text-md-right">{{ __('Attempt Number')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="attempt_number" type="number" min="1" max="10"
                                               class="form-control @error('attempt_number') is-invalid @enderror" name="attempt_number"
                                               value="{{ $exam->attempt_number }}" required autocomplete="attempt_number" autofocus>
                                        @error('attempt_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="passing_score" class="col-md-3 col-form-label text-md-right">{{ __('Passing Score')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="passing_score" type="number" min="1"
                                               class="form-control @error('passing_score') is-invalid @enderror" name="passing_score"
                                               value="{{ $exam->passing_score }}" required autocomplete="passing_score" autofocus>
                                        @error('passing_score')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update this exam') }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection