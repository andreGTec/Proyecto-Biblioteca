@extends('adminlte::page')

@section('title', 'Dashboard')
@section( 'plugins.Sweetalert2',true)
@section('content_header')

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="./resources/views/Perfiles/style/style.css">


<section style="background-color: #ccc;">
    <div id="imageni" class="container profile-page">
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="https://picsum.photos/301/301" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Luis</strong> Gutierrez</h4>
                                <span class="job_post">Diseño y desarrollo de software</span>
                                <p>luis.gutierrez.m@tecsup.edu.pe</p>
                                <div>
                                    <button class="btn btn-primary btn-round"><a id="boton" href="https://jesus8556.github.io/">Ver Mas</a></button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="https://picsum.photos/302/302" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Aaron</strong> Apaza</h4>
                                <span class="job_post">Diseño y desarrollo de software</span>
                                <p>aaron.apaza@tecsup.edu.pe</p>
                                <div>
                                    <button class="btn btn-primary btn-round"><a id="boton" href="https://aaron040998.github.io/">Ver Mas</a></button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="https://picsum.photos/303/303" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Dante</strong> Rodriguez</h4>
                                <span class="job_post">Diseño y desarrollo de software</span>
                                <p>dante.rodriguez@tecsup.edu.pe</p>
                                <div>
                                    <button class="btn btn-primary btn-round"><a id="boton" href="https://github.com/danterodriguezchambi">Ver Mas</a></button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="https://picsum.photos/304/304" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Alfredo</strong> Mescco </h4>
                                <span class="job_post">Diseño y desarrollo de software</span>
                                <p>rosendo.mescco@tecsup.edu.pe</p>
                                <div>
                                    <button class="btn btn-primary btn-round"><a id="boton" href="https://alfredomesccotecsup.github.io/">Ver Mas</a></button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="https://picsum.photos/305/305" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Andre</strong> Garcia</h4>
                                <span class="job_post">Diseño y desarrollo de software</span>
                                <p> andre.garcia@tecsup.edu.pe</p>
                                <div>
                                    <button class="btn btn-primary btn-round"><a id="boton" href="https://andregtec.github.io/">Ver Mas</a></button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="https://picsum.photos/306/306" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Patricio</strong> Venero</h4>
                                <span class="job_post">Diseño y desarrollo de software</span>
                                <p>patricio.venero@tecsup.edu.pe</p>
                                <div>
                                    <button class="btn btn-primary btn-round"><a id="boton" href="https://github.com/patriciovenero">Ver Mas</a></button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-7 col-md-12">
                <div class="card profile-header">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12">
                                <div class="profile-image float-md-right"> <img src="https://picsum.photos/307/307" alt=""> </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-12">
                                <h4 class="m-t-0 m-b-0"><strong>Yerfersson</strong> Zuñiga</h4>
                                <span class="job_post">Diseño y desarrollo de software</span>
                                <p>yefersson.zuniga@tecsup.edu.pe</p>
                                <div>
                                    <button class="btn btn-primary btn-round"><a id="boton" href="https://github.com/YeferssonZ">Ver Mas</a></button>
                                    <button class="btn btn-primary btn-round btn-simple">Message</button>
                                </div>
                                <p class="social-icon m-t-5 m-b-0">
                                    <a title="Twitter" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Facebook" href="javascript:void(0);"><i class="fa fa-facebook"></i></a>
                                    <a title="Google-plus" href="javascript:void(0);"><i class="fa fa-twitter"></i></a>
                                    <a title="Behance" href="javascript:void(0);"><i class="fa fa-behance"></i></a>
                                    <a title="Instagram" href="javascript:void(0);"><i class="fa fa-instagram "></i></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@stop

@section('content')
@stop

@section('css')
<style>
    section {
        background-image: url('https://i.pinimg.com/originals/35/00/4e/35004e944240eadcaa8e2ea131fdef14.gif');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center;
    }

    a {
        color: #f96332;
    }

    #boton {
        color: #e0e0e0;
    }

    .m-t-5 {
        margin-top: 5px;
    }

    .card {
        background: #fff;
        margin-bottom: 30px;
        transition: .5s;
        border: 0;
        border-radius: .1875rem;
        display: inline-block;
        position: relative;
        width: 100%;
        box-shadow: none;
    }

    .card .body {
        font-size: 14px;
        color: #424242;
        padding: 20px;
        font-weight: 400;
    }

    .profile-page .profile-header {
        position: relative
    }

    .profile-page .profile-header .profile-image img {
        border-radius: 50%;
        width: 140px;
        border: 3px solid #fff;
        box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23)
    }

    .profile-page .profile-header .social-icon a {
        margin: 0 5px
    }

    .profile-page .profile-sub-header {
        min-height: 60px;
        width: 100%
    }

    .profile-page .profile-sub-header ul.box-list {
        display: inline-table;
        table-layout: fixed;
        width: 100%;
        background: #eee
    }

    .profile-page .profile-sub-header ul.box-list li {
        border-right: 1px solid #e0e0e0;
        display: table-cell;
        list-style: none
    }

    .profile-page .profile-sub-header ul.box-list li:last-child {
        border-right: none
    }

    .profile-page .profile-sub-header ul.box-list li a {
        display: block;
        padding: 15px 0;
        color: #424242
    }
</style>
@stop

@section('js')
<script>
    
</script>
@stop