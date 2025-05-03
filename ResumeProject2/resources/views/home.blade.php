@extends('layouts.layout')
    @section('title')
        Home Page
    @endsection

    @section('content')
        <div>
            <div class="text-center mt-3">
                <img src="{{ asset('images/sideprofile.jpg')}}" alt="" class="img-thumbnail" height="150px" width="200px">
            </div>
            <div class="text-white mt-5 mx-4 text-justify">
                <h1 class="fw-bold my-name">Hello,</h1>
                <div class="px-4" style="line-height: 2rem;">
                    <p style="text-indent:100px;"> I am
                        <b class="text-warning">Splitzer Wellington</b>
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis deserunt officiis rem. Dolore nisi id autem nesciunt nemo sint eos provident soluta consequatur, aliquid sunt harum vitae error ad velit, repudiandae blanditiis et sed eaque at modi. Labore libero cum asperiores similique unde ea animi, reiciendis eaque voluptatibus, maiores laboriosam.
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui accusantium odio voluptatem doloremque dignissimos excepturi totam est consectetur incidunt, distinctio, molestiae nemo unde officiis dolore illo, eaque fuga velit. Tempora, repellendus? Expedita, sequi dolorem itaque repudiandae quis aspernatur architecto doloremque nobis tempora magnam ratione esse perspiciatis enim libero, sit placeat!</p>
                    </p>
                </div>
            </div>
            <div class="text-center">
                <a href="{{route('contact')}}" class="btn btn-outline-warning mx-5 my-3">Hire me</a>
                <a href="{{route('contact')}}" class="btn btn-outline-info mx-5 my-3">Connect with me</a>
            </div>
        </div>
    @endsection