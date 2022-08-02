<div class="container py-5">
    <div class="text-danger text-center">
        daftar akun <a href="{{route('register')}}" class="text-decoration-none">disini</a>, untuk membuka fitur lain
    </div>
    <div class="row" id="content">
        <div class="col-md-12 menu">
            <div class="shadow p-3 mb-5 rounded border-none bg-white">
                <div class="card-body">
                    <div class="my-5 mx-5">
                        <div class="">
                            <h6 class="text-center fw-bold">Pilih</h6>
                            <br>
                            <div class="row">
                                <div class="d-grid mx-auto">
                                    <button id="mulai" class="btn btn-primary block fw-bold">Mulai</button>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="d-grid mx-auto">
                                    <a href="" class="btn btn-primary fw-bold disabled"><i class="bi bi-lock-fill"></i> Custom</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="d-grid mx-auto">
                                    <a href="" class="btn btn-primary fw-bold disabled"><i class="bi bi-lock-fill"></i> Statistik</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('user.guest.menu')
    </div>
</div>
@include('edit')
<script type="text/javaScript">
    $('.menu').show();
    $('.mulai').hide();
    $('.kesulitan').hide();
    $('.pemrograman').hide();

    $(document).ready(function(){
        $('.kembali').click(function () {
            $('.menu').show()
            $('.kesulitan').hide();
            $('.pemrograman').hide();
            $('.mulai').hide()
        })

        $('#mulai').click(function () {
            $('.menu').hide()
            $('.kesulitan').show()
        })
        $('.kembalimulai').click(function () {
            $('.menu').show()
            $('.kesulitan').hide();
            $('.pemrograman').hide();
            $('.mulai').hide()
        })

        $('#kesulitan').click(function () {
            $('.mulai').hide()
            $('.kesulitan').show()
        })
        $('.kembalikesulitan').click(function () {
            $('.mulai').hide()
            $('.menu').hide();
            $('.pemrograman').hide();
            $('.kesulitan').show()
        })

        $('#pemrograman').click(function () {
            $('.kesulitan').hide()
            $('.pemrograman').show()
        })
        $('#kembalipemrograman').click(function () {
            $('.kesulitan').hide()
            $('.menu').hide();
            $('.mulai').hide();
            $('.pemrograman').show()
        })

        $('.dashboard').click(function () {
            $('.mulai').hide()
            $('.kesulitan').hide()
            $('.menu').show()
        })
    })
</script>