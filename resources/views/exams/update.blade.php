@extends('layouts.app')

@section('content')
<div id="main">
    <div id="content" class="full">
        <div class="post manage_forms">
            <div class="content_header">
                <div class="content_header_title">
                    <div style="float: left">
                        <h2>Quiz Properties
                        </h2>
                        <p>Update quiz properties</p>
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
                                <div class="form-group row">
                                    <label for="screen_height" class="col-md-3 col-form-label text-md-right">{{ __('Screen Height')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="screen_height" type="number" min="1"
                                               class="form-control @error('screen_height') is-invalid @enderror" name="screen_height"
                                               value="{{ $exam->screen_height }}" required autocomplete="screen_height" autofocus>
                                        @error('screen_height')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="screen_width" class="col-md-3 col-form-label text-md-right">{{ __('Screen Width')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="screen_width" type="number" min="1"
                                               class="form-control @error('screen_width') is-invalid @enderror" name="screen_width"
                                               value="{{ $exam->screen_width }}" required autocomplete="screen_width" autofocus>
                                        @error('screen_width')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="stuff_emails" class="col-md-3 col-form-label text-md-right">{{ __('Staff Emails')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="stuff_emails" type="text"
                                               class="form-control @error('stuff_emails') is-invalid @enderror" name="stuff_emails"
                                               value="{{ $exam->stuff_emails }}" autocomplete="stuff_emails" autofocus>
                                        @error('stuff_emails')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_from" class="col-md-3 col-form-label text-md-right">{{ __('From')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="email_from" type="text" value="{{ $exam->email_from }}"
                                               class="form-control @error('email_from') is-invalid @enderror" name="email_from"
                                               autocomplete="email_from" autofocus>
                                        @error('email_from')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <label for="email_subject" class="col-md-3 col-form-label text-md-right">{{ __('Subject')
                                        }}</label>
                                    <div class="col-md-7">
                                        <input id="email_subject" type="text" value='{{ $exam->email_subject }}'
                                               class="form-control @error('email_subject') is-invalid @enderror" name="email_subject"
                                               autocomplete="email_subject" autofocus>
                                        @error('email_subject')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email_comment" class="col-md-3 col-form-label text-md-right">{{ __('Comment') }}</label>
                                    <div class="col-md-7">
                                        <textarea id="email_comment"
                                                  class="form-control @error('email_comment') is-invalid @enderror"
                                                  name="email_comment"
                                                  value="{{ old('email_comment') }}" rows="4" cols="50"
                                                  autocomplete="email_comment">{{ $exam->email_comment }}</textarea>

                                        @error('email_comment')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="exam_icon" class="col-md-3 col-form-label text-md-right">{{ __('Exam Icon')}}</label>
                                    <div class="col-md-7">
                                        <input id="upload_exam_icon" type="file" accept="image/*"
                                               class="form-control @error('upload_exam_icon') is-invalid @enderror" name="upload_exam_icon" autofocus hidden>
                                        <input id="exam_icon" type="text" value='{{ $exam->exam_icon }}' class="form-control @error('exam_icon') is-invalid @enderror" name="exam_icon" autocomplete="exam_icon" autofocus>
                                        <button id="upload_exam_icon_btn" type="button" class="btn btn-primary" style="margin-top: 10px;">
                                            {{ __('Upload Exam Icon') }}
                                        </button>
                                        @error('exam_icon')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Apply') }}
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
