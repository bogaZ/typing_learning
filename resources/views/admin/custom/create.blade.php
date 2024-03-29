@role('admin')
    @extends('layouts.master')

    @section('content')
    <div class="m-4">
        <div class="d-flex align-items-center">
            <div class="col-md-4 p-0">
                <button class="btn openbtn btn-primary open shadow" id="bukanav" type="button">
                    <span id="icbukanav" class="fa fa-bars"></span>
                </button>
            </div>
            <div class="d-flex align-items-center justify-content-center col-md-4 p-3 m-0">
                <h3 class="m-0 text-center">Menambah Karakter</h3>
            </div>
            <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
                <p class="m-0">
                    <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                    /
                    <a href="{{route('custom.index')}}" class="text-decoration-none">Karakter</a>
                    / Menambah Karakter
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        @if(session()->get('sukses'))
            <div class="alert alert-success mt-4 card shadow col-md-6 mx-4">
                {{session()->get('sukses')}}
            </div>
        @elseif(session()->get('gagal'))
            <div class="alert alert-danger mt-4 card shadow col-md-6 mx-4">
                {{session()->get('gagal')}}
            </div>
        @endif
    </div>
    <div class="d-flex justify-content-center">
        <div class="card p-5 shadow col-md-6 mx-4 mb-4">
            <form action="{{route('custom.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex justify-content-between">
                            <label for="">Teks</label>
                            <div>
                                minimal 400 karakter
                                <span name="jmlchars" id="jmlchars" hidden></span>
                                {{-- sisa karakter --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        @error('karakter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <textarea required onkeydown="if(event.keyCode===9){var v=this.value,s=this.selectionStart,e=this.selectionEnd;this.value=v.substring(0, s)+'\t'+v.substring(e);this.selectionStart=this.selectionEnd=s+1;return false;}" class="form-control @error('karakter') is-invalid @enderror" maxlength="1000" id="jmltextarea" name="karakter" placeholder="ketik disini karakter....." style="overflow: hidden; resize: none; height: 150px">{{Request::old('karakter')}}</textarea>
                        @error('karakter')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 d-grid">
                        <label for="">Judul Teks</label>
                    </div>
                    <div class="col-md-12 d-grid">
                        <input name="nama" required maxlength="25" value="{{ old('nama') }}" placeholder="nama karater yang dibuat" class="form-control @error('nama') is-invalid @enderror" style="width: auto" class="rounded">
                        @error('nama')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 d-grid">
                        <label for="">Tingkat Kesulitan</label>
                    </div>
                    <div class="col-md-12 d-grid">
                        <select name="typecharacter" id="selecttype" class="form-control @error('typecharacter') is-invalid @enderror">
                            <option value="" id="" hidden selected disabled class="">Pilih</option>
                            @foreach($typecharacter as $type)
                                <option value="{{$type->id}}" class="">{{$type->name}}</option>
                            @endforeach
                        </select>
                        @error('typecharacter')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 d-grid">
                        <label for="">Bahasa Karakter</label>
                    </div>
                    <div class="col-md-12 d-grid">
                        <select name="bahasa" id="selectbahasa" class="form-control @error('bahasa') is-invalid @enderror" disabled>
                            {{-- <option value="" id="" hidden selected disabled class="">Pilih Bahasa</option> --}}
                            @foreach($allbahasa as $row => $bahasa)
                                <option value="{{$bahasa->id}}" id="bahasa{{++$row}}" class="pilihbahasa">{{$bahasa->bahasa}}</option>
                            @endforeach
                        </select>
                        @error('bahasa')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 d-grid">
                        <label for="">Bahasa Pemrograman</label>
                    </div>
                    <div class="col-md-12 d-grid">
                        <select name="pemrograman" id="selectpemrograman" class="form-control" disabled>
                            {{-- <option value="" id="" hidden selected disabled class="">Pilih Bahasa Pemrograman</option> --}}
                            @foreach($allpemrograman as $bahasa)
                                <option value="{{$bahasa->id}}" class="pilihbahasa">{{$bahasa->bahasa}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                {{-- {{$coba->role}} --}}
                <div class="row">
                    <div class="col-md-6 d-grid">
                        <button type="reset" class="btn btn-danger">reset</button>
                    </div>
                    <div class="col-md-6 d-grid">
                        <button type="submit" class="btn btn-primary">submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        select[disabled]{
            color:#aaa;
        }
    </style>
    <script type="text/JavaScript">
        document.getElementById("charactertext").classList.add("aktif-link");
    </script>
    <script>
        var allbahasa = {!! json_encode($allbahasa) !!};
        var allbahasacount = {!! json_encode($allbahasa->count()) !!};

        // console.log(allbahasa.length);
        function chainSelect(current, target, bahasatarget){
            var value1 = $(current).on('change', function(){
                if($(this).find(':selected').val() != ''){
                    $(bahasatarget).removeAttr('disabled');
                    var value = $(this).find(':selected').text();
                    // $("#bahasa" + 1 + "").hide();
                    
                    if(value == 'pemrograman'){
                        $(target).removeAttr('disabled');
                        for (let i = 2; i <= allbahasa.length; i++) {
                            $("#bahasa" + i + "").hide();
                        }
                        // $("#bahasa" + 1 + "").show();
                        $('#selectbahasa option[value=1]').attr('selected','selected');
                    }else{
                        $(target).attr('disabled', 'disabled');
                        for (let i = 2; i <= allbahasa.length; i++) {
                            $("#bahasa" + i + "").show();
                        }
                        // $("#bahasa" + 1 + "").hide();
                    }
                }else{
                    $(target).prop('disabled', 'disabled').val(null);
                }
                return value;
            });
            return value1;
        }

        type = chainSelect('select#selecttype', '#selectpemrograman', '#selectbahasa');

        $(document).ready(function(){
            $('#kembali').click(function () {
                $('#content').load('/menucustom')
            })
        })
    
        $(document).ready(function(){
            var jumlahChars     = 1000; //Jumlah karakter yang diizinkan di textarea
            var countTextBox    = $('#jmltextarea') // Textarea input box
            var charsCountEl    = $('#jmlchars'); // Sisa karakter yang dihitung akan ditampilkan di sini
        
            charsCountEl.text(jumlahChars); //nilai awal elemen countchars
            countTextBox.keyup(function() { //pengguna melepaskan tombol pada keyboard
                var thisChars = this.value.replace(/{.*}/g, '').length; //get chars count di textarea
                if(thisChars > jumlahChars) //Jika melebihi karakter dari yang kita tentukan 
                {
                    var CharsToDel = (thisChars-jumlahChars); // delete kata yang melebihi batas
                    this.value = this.value.substring(0,this.value.length-CharsToDel); //menghilangkan kelebihan karakter pada textarea
                }else{ //jika tidak maka
                    charsCountEl.text( jumlahChars - thisChars ); //Jumlahkan sisa karakter
                }
            });
        });
        
    </script>
    @endsection
@endrole