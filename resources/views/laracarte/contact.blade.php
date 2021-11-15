@extends('layouts.master',['title' => 'Contact'])

@section('content')

    <div class="container">

        <div class="row">
            <div class="row justify-content-center align-items-end  text-md-left">
                <h2>Get In Touch</h2>
                <p class="text-muted">If you having trouble with this service, please ask for help.</p>

                <form action="#" method="POST">

                     <div class="form-group">
                         <label for="name" class="control-label">Name</label>
                         <input type="text" name="name" id="name" class="form-control" required>
                     </div>

                     <div class="form-group">
                         <label for="email" class="control-label">E-mail</label>
                         <input type="text" name="email" id="email" class="form-control" required>
                     </div><br>

                     <div class="form-group">
                        <label for="message" class="control-label sr-only">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="form-control" required></textarea>
                    </div><br>

                     <div class="form-group">
                       <button class="btn btn-primary btn-block" >Submit Enquiry &raquo;</button>
                    </div>






                </form>



            </div>
        </div>



    </div>





@stop
