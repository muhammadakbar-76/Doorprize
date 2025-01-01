@extends('layouts.master')

@section('content')
    <style>
        .zoom-in-out-box {
            animation: zoom-in-zoom-out 1s ease;
        }

        .zoom-in-out-infinite {
            animation: zoom-in-zoom-out 1s ease infinite;
        }

        @keyframes zoom-in-zoom-out {
            0% {
                transform: scale(1, 1);
            }

            50% {
                transform: scale(1.5, 1.5);
            }

            100% {
                transform: scale(1, 1);
            }
        }
    </style>
    <section
        style="background-image: url({{ asset('img/background_undi.jpeg') }}); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="container">
            <div class="d-flex" style="height: 100vh">
                <div class="m-auto">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <img src="{{ asset('img/congrats_old.png') }}" alt="" class="img-fluid zoom-in-out-box"
                                style="height: 200px">
                        </div>
                    </div>
                    <div class="row mt-2 px-5 kejutan" style="visibility: hidden;">
                        <div class="d-inline p-0 ms-5"
                            style="background-color: white; border-radius: 20px 0px 0px 20px; height: 50vh; width: 35vw;">
                            <h5 class="text-center mt-5"
                                style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Selamat
                                Kepada :
                            </h5>
                            <div class="mt-3 mx-3">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">NIK</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">Department</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <form action="{{ url('/save_undi') }}" method="post">
                                            @csrf
                                            <input type="hidden" name="prize_id" value="{{ $prize_id }}">
                                            <input type="hidden" name="doorprize_count" value="{{ $doorprize_count }}">
                                            @foreach ($list_pemenang as $key => $value)
                                                <input type="hidden" name="employee_id[]"
                                                    value="{{ $value->employee_id }}">
                                                <tr>
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td class="text-center">{{ $value->employee_nik }}</td>
                                                    <td class="text-center">{{ $value->employee_name }}</td>
                                                    <td class="text-center">{{ $value->real_dept }}</td>
                                                </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-inline p-0 text-center"
                            style="background-image: url({{ asset('img/recta_green.jpeg') }}); height: 50vh; width: 35vw; margin-left: -17px; background-size: cover; background-position: center; background-repeat: no-repeat;">
                            <h4 class="text-center mt-4"
                                style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; color: white">
                                Mendapatkan
                                🎊
                            </h4>
                            <img src="{{ asset('img') . '/' . $prize->prize_foto }}" alt=""
                                class="img-fluid zoom-in-out-infinite my-5" style="height: 150px; width: 150px">
                            <h4
                                style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif; color: white">
                                {{ strtoupper($prize->prize_name) }}</h4>
                            </h4>
                        </div>
                    </div>
                    <div class="col-xs-12 mt-3 text-center kejutan" style="visibility: hidden">
                        <button type="submit" onclick="add_spinner()" id="save_btn" class="btn btn-lg btn-success">Save
                            Pemenang</button>&nbsp;&nbsp;
                        </form>
                        <a href="{{ url('?prize_id=') . $prize_id . '&doorprize_count=' . $doorprize_count }}"
                            class="btn btn-lg btn-primary">&#8678; Undi
                            Ulang</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="kejutan" style="position: absolute; top: 30px; right: 30px; visibility: hidden">
            <div class="card">
                <div class="card-body">
                    Sisa Hadiah : {{ $sisa_hadiah }}
                </div>
            </div>
        </div>
        <audio style="display: none" autoPlay>
            <source src="{{ asset('sound/yeay.mp3') }}" type="audio/mpeg">
        </audio>
    </section>
    <script>
        setTimeout(() => {
            $('.kejutan').css({
                visibility: 'visible'
            });
        }, 1000);

        function add_spinner() {
            $('#save_btn').html(`<div class="spinner-border text-primary" role="status">
                                    <span class="visually-hidden">Loading...</span>
                                </div>`);
            $('#save_btn').attr('disabled', true);
            $('form').submit();
        }
    </script>
@endsection
