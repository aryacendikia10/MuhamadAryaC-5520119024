@extends('layouts.app')
@section('title', 'Halaman Contact')
@section('content')
<section class="contact" id="contact">
    <div class="container">
        <div class="row pt-5 mb-4" style="margin-top: 10px;">
            <div class="col text-center">
                <h2>Contact</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card bg-info text-white mb-4 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Me</h5>
                        <p class="card-text">Isi kolom pesan <br> 
                        untuk mengisi kritik dan saran</p>
                    </div>
                </div>

                <ul class="list-group mb-4">
                    <li class="list-group-item "><h3>Social Media</h3></li>
                    <li class="list-group-item fa fa-instagram"> Aryaa</li>
                    <li class="list-group-item fa fa-facebook"> Aryaa </li>
                </ul>
            </div>

        <div class="col-lg-5">
            <form>
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Nomor Handphone</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-dark btn-round">Send Message</button>
                    
                </div>
            </form>
        </div>
        </div>
    </div>
</section>
@endsection