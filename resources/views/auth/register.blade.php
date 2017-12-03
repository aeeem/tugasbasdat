@extends('layouts.app')
{{-- {{dd($kantor)}} --}}
@section('content')



<div class="container">
    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        
                        </div>
                        {{-- buatan aem bukan default laravel --}}
                         <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="alamat" class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                <textarea id="alamat" type="textarea" class="form-control" name="alamat" value="{{ old('alamat') }}" required autofocus></textarea>

                                @if ($errors->has('alamat'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" >
                          
                         <label for="sektor" class="col-md-4 control-label">Kantor Polisi Terdekat</label>
                            <div class="col-md-6">

                            <select class="form-control select2-multi" name="sektor" id="sektor" >
                                
                            @foreach ($kantor as $kantors)
                                <option value="{{$kantors->id}}"><p><i>kantor {{$kantors->nama}},{{$kantors->alamat}},{{$kantors->kota}},{{$kantors->provinsi}}</i></p></option>
                            @endforeach
                            </select>
                            
                            </div>

                        </div>
                          <div class="form-group" >
                          
                         <label for="sektor" class="col-md-4 control-label">Kantor Polisi Terdekat</label>
                            <div class="col-md-6">

                            <select class="form-control select2-multi" name="agama" id="agama" >
                            <option value="islam">Islam</option>
                            <option value="kristen">Kristen</option>
                            <option value="hindu"> Hindu</option>
                            <option value="katholik">Katolik</option>
                            <option value="konghuchu">KongHuChu</option>
                            </select>
                            
                            </div>

                        </div>

                      <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                        <label for="nomor_ktp" class="col-md-4 control-label">Nomor KTP</label>

                            <div class="col-md-6">
                                <input id="nomor_ktp" type="text" class="form-control" name="nomor_ktp" value="{{ old('nomor_ktp') }}" required autofocus></input>

                             @if ($errors->has('nomor_ktp'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nomor_ktp') }}</strong>
                                </span>
                             @endif
                            </div>
                    </div>
                             <div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                        <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir</label>

                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}" required autofocus></input>

                             @if ($errors->has('tempat_lahir'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('tempat_lahir') }}</strong>
                                </span>
                             @endif
                            </div>
                    </div>
                    <div class="form-group">
                         <label for="tempat_lahir" class="col-md-4 control-label">Tanggal Lahir</label>

                        <div class="col-md-6">
                            
                         <input type='date' name="tanggal_lahir" />



                        </div>


                    </div>


           <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
