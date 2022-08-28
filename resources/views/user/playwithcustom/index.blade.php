<div class="row">
    <div class="col-md-4">
        <div class="mx-auto">
            <a id="kembali" href="#" class="text-decoration-none fw-bold">Kembali</a>
        </div>
    </div>
    <div class="col-md-4">
        <h6 class="fw-bold text-center">Pilih yang akan dimainkan</h6>
    </div>
</div>
<br>
<div class="row">
    <div>
        <table>
            <thead>
                <tr>
                    <th>no</th>
                    <th>nama karakter</th>
                    <th>jumlah karakter</th>
                    <th>action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>coba</td>
                    <td>192</td>
                    <td>play</td>
                </tr>
                @foreach($dataall as $i => $text)
                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$text->nama}}</td>
                    <td>{{$text->id}}</td>
                    <td><a href="{{route('custom.show', $text->id)}}">play</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<script>
    var indexplay = '{{route('indexplay')}}';
    var indexplaykesulitan = '{{route('tingkatkesulitan')}}';
    var indexplaycustom = '{{route('indexplaycustom')}}';
    $(document).ready(function(){
        $('#kembali').click(function () {
            $('#content').load(indexplay)
        })
        $('#mulai').click(function () {
            $('#content').load(indexplaykesulitan)
        })
        $('#custom').click(function () {
            $('#content').load(indexplaycustom)
        })
    })
</script>