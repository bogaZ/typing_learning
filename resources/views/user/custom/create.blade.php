<form action="{{route('menucustom.store')}}" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-12">
            <h6 class="fw-bold text-center">Membuat Karakte</h6>
        </div>
        <div class="my-3 mx-1 d-flex justify-content-between">
            <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
            <div>
                <span name="jmlchars" id="jmlchars"></span> sisa karakter
            </div>
        </div>
        <div class="col-md-12">
            <textarea class="form-control" maxlength="1000" id="jmltextarea" name="jmltextarea" placeholder="ketik disini karakter....." style="overflow: hidden; resize: none; height: 150px"></textarea>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-md-12 d-grid">
            <input name="nama" placeholder="nama karater yang dibuat" class="form-control text-center" style="width: auto" class="rounded">
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 d-grid">
            <button id="reset" class="btn btn-danger">reset</button>
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

    // $('textarea').maxlength({
    //     alwaysShow: true,
    //     threshold: 10,
    //     warningClass: "label label-success",
    //     limitReachedClass: "label label-danger",
    //     separator: ' out of ',
    //     preText: 'You write ',
    //     postText: ' chars.',
    //     validate: true
    // });

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