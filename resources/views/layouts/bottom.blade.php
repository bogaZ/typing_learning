<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function(){
            $(this).remove(); 
        });
    }, 4000);

    $(document).ready(function(){
        $('#bahasaindonesia').click(function () {
            $('#content').load('/menu')
        })
        $('#bahasainggris').click(function () {
            $('#content').load('/menu')
        })
    })
</script>
<script>
    $(document).ready(function(){
        $('nav div a').click(function () {
            $('div a').removeClass('aktif-link');
            $(this).addClass('aktif-link');
        })
    })
</script>

<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('bagus/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('bagus/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('bagus/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('bagus/lib/counterup/counterup.min.js')}}"></script>
<script src="{{asset('bagus/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('bagus/js/main.js')}}"></script>