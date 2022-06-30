{{-- <form action="{{route('menucustom.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <h6 class="fw-bold text-center">Membuat Karakter</h6>
        </div>
        <div class="my-3 mx-1 d-flex justify-content-between">
            <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
            <div>
                <span name="jmlchars" id="jmlchars"></span> sisa karakter
            </div>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" maxlength="1000" id="jmltextarea" name="karakter" placeholder="ketik disini karakter....." style="overflow: hidden; resize: none; height: 150px"></textarea>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-12 d-grid">
            <input name="nama" maxlength="25" placeholder="nama karater yang dibuat" class="form-control text-center" style="width: auto" class="rounded">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-grid">
            <button type="reset" class="btn btn-danger">reset</button>
        </div>
        <div class="col-md-6 d-grid">
            <button type="submit" class="btn btn-primary">submit</button>
        </div>
    </div>
</form>
<script>
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
    
</script> --}}
@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="shadow p-3 mb-5 rounded border border-dark bg-white">
                <div class="card-body">
                    <div class="my-5 mx-5" id="content">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="mx-auto">
                                    <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <h6 class="fw-bold text-center">Custom Mode</h6>
                            </div>
                            <div>
                                <h6 class="fw-bold text-center border">{{$karakter->karakter}}</h6>
                                <div class="d-flex justify-content-between">
                                    <p>Jumlah kata: </p>
                                    <p>Waktu sisa: </p>
                                </div>
                            </div>
                            <div class="col-md-10 border">
                                <textarea id="mengetikkata" class="form-control" placeholder="ketik disini....." style="overflow: hidden; resize: none; height: 150px"></textarea>
                            </div>
                            <div class="col-md-2 d-grid">
                                <span>Score: </span>
                            </div>
                            <script type="text/javaScript">
                                var indexcustom = '{{route('indexplay')}}';
                                $(document).ready(function(){
                                    $('#kembali').click(function () {
                                        $('#content').load(indexcustom)
                                    })
                                })
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/JavaScript">
    var mengetikkata = CodeMirror.fromTextArea(
        document.getElementById('mengetikkata'),{
            mode: "xml",
            theme: "dracula",
            lineNumbers: true,
            autoCloseTags: true
        }
    )
</script>
@endsection