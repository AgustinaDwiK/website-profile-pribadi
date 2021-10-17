@extends('layouts.main')

@include('navbar.navbar')

<div class="hero" id="home">
            <div class="container-fluid">

            

<div class="contact wow fadeInUp" data-wow-delay="0.1s" id="contact">
            <div class="container-fluid">
                <div class="container">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                    {{ Session::get('success')}}
                    </div>
                @endif
                    <div class="row align-items-center">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                        <form action="add" method="post" >
                        @csrf
                            <div class="contact-form">
                            
                                <div id="success"></div>
                                <form name="sentMessage" id="contactForm" novalidate="novalidate">
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="name" placeholder="Nama" required="required" data-validation-required-message="Masukkan nama ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="email" class="form-control" name="email" placeholder="Email" required="required" data-validation-required-message="Masukkan email ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <input type="text" class="form-control" name="subject" placeholder="Subjek" required="required" data-validation-required-message="Masukkan subjek ..." />
                                        <p class="help-block"></p>
                                    </div>
                                    <div class="control-group">
                                        <textarea class="form-control" name="message" placeholder="Pesan" required="required" data-validation-required-message="tuliskan Pesan ..."></textarea>
                                        <p class="help-block"></p>
                                    </div>
                                    <div>
                                        <button class="btn" type="submit" name="sendMessageButton">Kirim</button>
                                    </div>
                                </form>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>