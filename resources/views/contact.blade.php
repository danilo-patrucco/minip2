@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">contact</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="form">
                            <form role="form" id="contact-form" class="contact-form" method="POST"
                                  action="{{route('contact.store')}}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input name="email" type="email" class="form-control" id="exampleFormControlInput1"
                                           placeholder="youremail@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="Name">Name</label>
                                    <input name="name" type="name" class="form-control" id="exampleFormControlInput1"
                                           placeholder="Rod Example">
                                </div>
                                <div class="form-group">
                                    <label for="Message">Type in your message</label>
                                    <textarea name="message" class="form-control" id="message" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
