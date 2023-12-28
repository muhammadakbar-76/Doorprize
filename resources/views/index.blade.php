@extends('layouts.master')

@section('content')
    <style>
        .pointer {
            cursor: pointer;
        }
    </style>
    <section
        style="background-image: url({{ asset('img/background.jpg') }}); background-repeat:no-repeat; background-size: cover; height: 100vh;width:100vw">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 d-flex" style="height: 100vh;">
                    {{-- <img src="{{ asset('img/logo.png') }}" alt="" style="height: 400px; width: 400px; margin:auto"> --}}
                </div>
                <div class="col-sm-5 d-flex">
                    <div class="card m-auto w-100">
                        <div class="card-header text-center">
                            Win Prizes🎉🎊
                        </div>
                        <div class="card-body"
                            style="background-image: url({{ asset('img/background_a.jpg') }}); border-radius:5%">
                            <form action="{{ url('/undi') }}" id="undi" method="post">
                                @csrf
                                <div class="form-group">
                                    <label class="form-label" for="" style="color:white">Hadiah</label>
                                    <select name="prize_id" id="basic-usage" class="form-select select2">
                                        @foreach ($prizes as $prize)
                                            <option value="{{ $prize->prize_id }}"
                                                {{ app('request')->input('prize_id') == $prize->prize_id ? 'selected' : '' }}>
                                                {{ $prize->prize_name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="form-label" style="color: white">Jumlah Hadiah</label>
                                    <input type="number" name="doorprize_count"
                                        value="{{ app('request')->input('doorprize_count') ?? 1 }}" id=""
                                        class="form-control">
                                </div>

                        </div>
                        <div class="card-footer text-center" id="btn_action">
                            <img src="{{ asset('img/start.png') }}" class="pointer" alt=""
                                style="height: 100px; width:100px;" onclick="playdrumroll()" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                            {{-- <audio src="{{ asset('sound/DRUMROLL.WAV') }}" id="MediaPlayer1" loop="loop"> --}}
                        </div>
                        <audio id="drumroll" hidden loop>
                            <source src="{{ asset('sound/DRUMROLL.WAV') }}" type="audio/wav">
                            Your browser does not support the audio element.
                        </audio>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Acak Pemenang 🙈</h5>
                    <button type="button" class="btn-close" onclick="show_start()" data-bs-dismiss="modal"
                        aria-label="Close"></button>
                </div>
                <div class="modal-body text-center">
                    <img src="{{ asset('img/acak.gif') }}" alt="">
                </div>
                <div class="modal-footer d-flex" id="btn_stop">
                    <img src="{{ asset('img/stop.png') }}" alt="" style="height: 100px; width:100px;"
                        onclick="submit_form()" class="m-auto pointer">
                </div>
            </div>
        </div>
    </div>
    <script>
        let drumroll = document.getElementById('drumroll');

        function playdrumroll() {
            $('#btn_action').html('');
            drumroll.play();
        }

        function submit_form() {
            $('form').submit();
            drumroll.pause();
            drumroll.currentTime = 0;
        }

        function show_start() {
            $('#btn_action').html(`<img src="{{ asset('img/start.png') }}" alt="" style="height: 100px; width:100px;"
                                onclick="playdrumroll()" data-bs-toggle="modal" data-bs-target="#exampleModal">`);
            drumroll.pause();
            drumroll.currentTime = 0;
        }
    </script>
@endsection
