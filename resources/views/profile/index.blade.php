@extends('layouts.main')

@section('container')
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img class="animate__animated animate__fadeIn" src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png" alt=""Photo Profil>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3>
                                        {{ auth()->user()->nama }}
                                    </h3>
                                    <br>
                            <div class="row">
                                <div class="col-md-1">
                                </div>
                                <div class="col-md-10">
                                    <div class="tab-content profile-tab" id="myTabContent">
                                        <div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>NIP</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>: {{ auth()->user()->nip }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Tempat, Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>: {{ auth()->user()->ttl }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Program Studi</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>: {{ auth()->user()->prodi }}</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Fakultas</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>: {{ auth()->user()->fakultas }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <form action="/gantipass" method="post">
                        @csrf
                        <button type="submit" class="profile-edit-btn">
                            Ganti Password
                        </button>
                        </form>
                    </div>
                </div>
            </form>           
        </div>
        
@endsection