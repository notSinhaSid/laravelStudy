@extends('layouts.layout')
    @section('title')
        Contact
    @endsection

    @section('content')
        <div class="container mt-5">
            <h1 class="text-warning border-bottom">Contact Us</h1>
            <div class="row text-white mb-5">
                <p class="mx-auto mb-5">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet expedita obcaecati totam unde dolores quod fuga asperiores et ratione modi.
                </p>
                <div class="col-sm-9 mb-5">
                    <form action="" method="post">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="inputName">Your Name</label>
                                <input type="text" name="" id="inputName" class="form-control mt-2" />
                            </div>
                            <div class="col-md-6">
                                <label for="inputEmail">Your Email</label>
                                <input type="email" name="" id="inputEmail" class="form-control mt-2" required/>
                            </div>

                            <div class="col-mg-12">
                                <label for="inputSubject">Your Subject</label>
                                <input type="text" name="" id="inputSubject" class="form-control mt-2" />
                            </div>
                            <div class="col-mg-12 mb-3">
                                <label for="inputTextarea">Your Message</label>
                                <textarea name="" id="" cols="25" rows="10" class="form-control mt-2" required></textarea>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </form>
                </div>
                <div class="col-sm-3 text-center">
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa-solid fa-location-dot fa-2x i-color"></i>
                            <p>Noida, Greater Noida , India</p>
                        </li>
                        <li><i class="fas fa-phone mt-4 fa-2x i-color"></i>
                            <p>+91 XXXXXXXXX</p>
                        </li>
                        <li>
                            <i class="fas fa-envelope mt-4 fa-2x i-color"></i>
                            <p>contact@emai.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" target="_blank"><i class="fab fa-twitter i-color"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram i-color mx-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-facebook i-color mx-3"></i></a>
            <a href="#" target="_blank"><i class="fab fa-discord i-color mx-3"></i></a>
        </div>
    @endsection