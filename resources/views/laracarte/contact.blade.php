@extends('layouts.master',['title' => 'Contact'])

@section('content')

    <div class="container">

        <div class="row">
            <div class="col-md-8 col-sm-10 mx-auto">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service, please ask for help.</p>

                <form action="{{ route('contact.store') }}" method="POST" >
                    @csrf

                    <div class="form-group">
                         <label for="name" class="control-label">Name</label>
                         <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
                     </div>
                     {!!$errors->first('name','<span class="help-block">:message</span>')!!}

                     <div class="form-group">
                         <label for="email" class="control-label">E-mail</label>
                         <input type="text" name="email" id="email" class="form-control"  value="{{ old('email') }}" required>
                     </div><br>
                     {!!$errors->first('email','<span class="help-block">:message</span>')!!}

                     <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" required>{{ old('message') }}</textarea>
                    </div><br>
                    {!!$errors->first('message','<span class="help-block">:message</span>')!!}

                    <div class="d-grid gap-2">
                       <button class="btn btn-primary" type="submit" >Submit Enquiry &raquo;</button>
                    </div>






                </form>



            </div>
        </div>



    </div>





@stop
