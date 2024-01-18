@extends('layouts.main')
@section('content')
    <aside>
        <div class="container contact-division p-5">
            <div class="contact-image">
                <img src="{{ asset('storage/images/' . $contact) }}" class="img-thumbnai" alt="">
            </div>
            <div class="container contactus-text">
                <h2 style="color:#9F0909">Contact Us</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aperiam vitae ullam sequi obcaecati asperiores ipsa expedita inventore laboriosam perferendis ad. Enim necessitatibus ratione repudiandae recusandae dolorum provident quasi quas itaque!</p>
            </div>
        </div>
    </aside>
<style>
    .contact-division{
        display: grid;
        grid-template-columns: repeat(2,1fr);
    }
    .contactus-text{
        margin: 50px;
    }
    .contactus-text h2{
        text-align: center;
    }
    .contactus-text p{
        text-align: center;
    }
    @media(max-width:700px){
        .contact-division{
        display: grid;
        grid-template-columns: repeat(1,1fr);
    }
    }
</style>
@endsection
