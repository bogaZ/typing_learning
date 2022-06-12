<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beta</title>
    <link rel="stylesheet" href="{{asset('bagus/beta/style.css')}}">
    {{-- <script src="{{asset('bagus/beta/script.js')}}"></script>
    <script src="{{asset('bagus/beta/paragraphs.js')}}"></script> --}}
</head>
<body>
    <div class="wrapper">
        <input type="text" class="input-field">
        <div class="content-box">
            <div class="typing-text">
                <p></p>
            </div>
            <div class="content">
                <ul class="result-details">
                    <li class="time">
                        <p>Time left:</p>
                        <span><b>60</b>s</span>
                    </li>
                    <li class="mistake">
                        <p>Mistakes:</p>
                        <span>0</span>
                    </li>
                    <li class="wpm">
                        <p>WPM:</p>
                        <span>0</span>
                    </li>
                    <li class="cpm">
                        <p>CPM:</p>
                        <span>0</span>
                    </li>
                </ul>
                <button>Try</button>
            </div>
        </div>
    </div>
    <script src="{{asset('bagus/beta/paragraphs.js')}}"></script>
    <script src="{{asset('bagus/beta/script.js')}}"></script>
</body>
</html>