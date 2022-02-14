<div class="row">
    {{-- <div>
        <h6 class="fw-bold text-center">{{$kata}}</h6>
        <p>jumlah kata: {{$jumlahkata}}</p>
    </div> --}}
    <div class="my-3 mx-1">
        <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
    </div>
    <div>
        <h6 class="fw-bold text-center">{{$kata}}</h6>
        <p>jumlah kata: {{$jumlahkata}}</p>
    </div>
    <div class="col-md-10">
        <textarea class="form-control" placeholder="ketik disini....." style="overflow: hidden; resize: none; height: 150px"></textarea>
    </div>
    <div class="col-md-2 d-grid">
        {{-- <button type="submit" class="btn btn-primary">simpan</button>
        <button type="submit" class="btn btn-primary my-3">reset</button>
        <button type="submit" class="btn btn-danger">hapus</button> --}}
    </div>
</div>
{{-- <script>
    $('textarea').maxlength({
        alwaysShow: true,
        threshold: 10,
        warningClass: "label label-success",
        limitReachedClass: "label label-danger",
        separator: ' out of ',
        preText: 'You write ',
        postText: ' chars.',
        validate: true
     });
</script> --}}