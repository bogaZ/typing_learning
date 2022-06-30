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
                <h3 class="m-0">Create Character</h3>
            </div>
            <div class="d-flex align-items-center flex-row-reverse col-md-4 p-0">
                <p class="m-0">
                    <a href="{{route('home')}}" class="text-decoration-none">Dashboard</a>
                    /
                    <a href="{{route('custom.index')}}" class="text-decoration-none">Character</a>
                    / Create Character
                </p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card p-5 shadow col-md-6 mx-4">
            <form action="{{route('custom.update', $karakter->id)}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <span name="jmlchars" id="jmlchars"></span> sisa karakter
                        </div>
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" maxlength="1000" id="jmltextarea" name="karakter" placeholder="ketik disini karakter....." style="overflow: hidden; resize: none; height: 150px">{{$karakter->karakter}}</textarea>
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 d-grid">
                        <input name="nama" maxlength="25" placeholder="nama karater yang dibuat" class="form-control" style="width: auto" class="rounded" value="{{$karakter->nama}}">
                    </div>
                </div>
                <div class="row my-3">
                    <div class="col-md-12 d-grid">
                        <select name="typecharacter" id="" class="form-control">
                            {{-- <option value="" hidden selected disabled class="">Pilih Type</option> --}}
                            @foreach($typecharacter as $type)
                                <option value={{$type->id}}
                                    @if($karakter->type_id == $type->id)
                                    selected
                                    @endif
                                    class="">{{$type->name}}
                                </option>
                            @endforeach
                        </select>
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
        </div>
    </div>
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
        
    </script>
    @endsection
@endrole