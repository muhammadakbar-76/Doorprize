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
        style="background-image: url({{ asset('img/background.jpg') }}); background-repeat: no-repeat; background-size: cover; height: 100vh;width:100vw;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <img src="{{ asset('img/congrats.png') }}" alt="" class="img-fluid zoom-in-out-box"
                        style="height: 250px">
                </div>
            </div>
            <div class="row mt-2 px-5 kejutan" style="visibility: hidden">
                <div class="d-inline p-0 ms-5"
                    style="background-color: white; border-radius: 20px 0px 0px 20px; height: 50vh; width: 35vw;">
                    <h5 class="text-center mt-5"
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Selamat Kepada :
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
                                @foreach ($list_pemenang as $key => $value)
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
                    style="background-image: url({{ asset('img/rect.png') }}); height: 50vh; width: 35vw; margin-left: -17px">
                    <h4 class="text-center mt-4"
                        style="font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif">Mendapatkan 🎊
                    </h4>
                    <img src="{{ asset('img') . '/' . $prize->prize_foto }}" alt=""
                        class="img-fluid zoom-in-out-infinite my-5" style="height: 150px; width: 150px">
                    <h4 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif">
                        {{ strtoupper($prize->prize_name) }}</h4>
                    </h4>
                </div>
            </div>
            <div class="col-xs-12 mt-3 text-center kejutan" style="visibility: hidden">
                <a href="{{ url('?prize_id=') . $prize_id . '&doorprize_count=' . $doorprize_count }}"
                    class="btn btn-lg btn-primary">&#8678; Undi
                    Lagi</a>
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
    </script>
@endsection
