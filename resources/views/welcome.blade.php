<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        <?php include 'css/login.css';?>
        <?php include 'css/vinyl.css';?>

    {{--
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/vinyl.css">
    --}}



        @media (min-width: 768px) {
            html {
                font-size: 22px;
            }
        }

        /*
        .ciao {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;

        }

        .ciao2 {
            color: white;
            animation: lorenzo 2.5s both;
        }

        @keyframes lorenzo {
            0%{
                opacity: 0;
                transform: scale(0.3) translate3d(0,0,0);
            }
            50%{
                opacity: 0.9;
                transform: scale(1.1);
            }
            80%{
                opacity: 1;
                transform: scale(0.89);
            }
            100%{
                opacity: 1;
                transform: scale(1) translate3d(0,0,0);
            }
        }
        */

        /* ! Medium */
        @media (max-width: 768px) {
            html {
                font-size: 16px;
            }
        }

        /* ! Small */
        @media (max-width: 450px) {
            html {
                font-size: 12px;
            }
        }

        body {
            overflow-x: hidden;
            font-family: 'Roboto', serif;
            /*background: linear-gradient(to right,rgb(67,124,205),rgb(69,214,202));;//linear-gradient(135deg, black, #220033);
            */width: 100vw;
            height: 100vh;
            min-height: 100vh;
            font-size: 3.75rem;
        }

        .lorenzo {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            animation: rainbow_color 8s ease infinite;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            width: 100vw;
            animation: rainbow_color 8s ease infinite;
            background: linear-gradient(-45deg, #ffeb3b, #74efff, #9c27b0);
            background-size: 300% 300%;
            -webkit-background-clip: text;
        }

        @keyframes rainbow_color {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        @keyframes lorenzo_1_6 {
            0%, 10% {
                transform: translateY(0) rotate(0deg);
            }
            50% {
                transform: translateY(-10vh) rotate(-360deg);
            }
            90%, 100% {
                transform: translateY(0vh) rotate(-0deg);
            }
        }

        @keyframes lorenzo_7_all {
            0%, 10% {
                transform: translateY(0vh) rotate(0deg);
            }
            50% {
                transform: translateY(10vh) rotate(360deg);
            }
            90%, 100% {
                transform: translateY(0vh) rotate(-0deg);
            }
        }

        @keyframes lorenzo_6 {
            0%, 10% {
                transform: rotate(0deg);
            }
            50% {
                transform: rotate(360deg);
            }
            90%, 100% {
                transform: rotate(-0deg);
            }
        }

        .lorenzo > .letter:nth-child(-n+6) {
            animation: lorenzo_1_6 4s infinite, rainbow_color 8s ease infinite;
            animation-delay: 1s;
        }

        .lorenzo > .letter:nth-child(6) {
            animation: lorenzo_6 4s infinite, rainbow_color 8s ease infinite;
            animation-delay: 1s;
        }

        .lorenzo > .letter:nth-child(n+7) {
            animation: lorenzo_7_all 4s infinite, rainbow_color 8s ease infinite;
            animation-delay: 1s;
        }

        .letter {
            animation: rainbow_color 8s ease infinite;
            background: linear-gradient(-45deg, #ffeb3b, #74efff, #9c27b0);
            background-size: 300% 300%;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            user-select: none;
            -moz-user-select: none;
            -webkit-user-select: none;
        }

        section{
            height: 100vh;
            min-height: 100vh;
            width:100vw;
            background-attachment: fixed;
        }
        section:nth-child(1){
            background-image : url('https://images.unsplash.com/photo-1684125224205-603f78e0fab8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1883&q=80');
        }
        section:nth-child(2){
            background-image : url('https://images.unsplash.com/photo-1684215075838-b68b7557ece0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=668&q=80');
        }
        section:nth-child(3){
            background-image : url('https://i.imgur.com/GL7igry.png');/*url('https://images.unsplash.com/photo-1684054835810-8ed5f6a1d003?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80');
        */}

    </style>
</head>
<body onload="enhance('lorenzo');">
{{--<div class="ciao">
    <div class="ciao2">ciao</div>
</div>--}}
<section><div class="lorenzo" id="lorenzo">STOCK&SHOES</div></section>
<section><div class="container">
        <div class="card-container">
            <div class="card">
                <div class=" login-key"><i class="fa fa-user" aria-hidden="true"></i></div>
                <div class=" login-title">
                    REGISTER
                </div>
                <div class=" login-form">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label">EMAIL</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">USERNAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" class="form-control">
                        </div>

                        <div class="loginbttm">
                            <div class="col-lg-6 login-btm login-text" style="float:left!important">
                                <button type="reset" onclick="slider()" class="btn btn-outline-primary">LOGIN</button>
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">REGISTRATI</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            <div class="card">
                <div class=" login-key"><i class="fa fa-key" aria-hidden="true"></i></div>
                <div class=" login-title">
                    LOGIN
                </div>
                <div class=" login-form">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label">USERNAME</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" class="form-control">
                        </div>

                        <div class="loginbttm">
                            <div class="col-lg-6 login-btm login-text" style="float:left!important">
                                <button type="reset" onclick="slider()" class="btn btn-outline-primary">REGISTRATI
                                </button>
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card card-slider left" id="slider">
                <div class="card-slider-header" style="margin:0">
                    <img src="http://localhost:8080/img/logo.svg"
                         alt="" class="w-100">
                </div>
                <!--<div class="card-body">
                    <h5 class="card-title">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in
                        to additional content.</p>

                </div>
                <div class="card-footer text-muted">
                    2 days ago
                </div>-->

            </div>
        </div>
    </div></section>

<section><div class="vinyl-container">
        <div class="vinyl-jacket">
            <div class="vinyl-wrapper">
                <div class="vinyl"></div>
            </div>
        </div>
    </div></section>
</body>
</html>
<script type="text/javascript">


    document.title = '| Stock & Shoes |';

    const enhance = id => {
        const element = document.getElementById(id),
            text = element.innerText.split("");
        element.innerText = "";
        text.forEach(letter => {
            const span = document.createElement("span");
            span.className = "letter";
            span.innerText = letter;
            element.appendChild(span);
        });
    }

    function slider() {
        if (document.getElementById('slider').classList.contains("right") == true) {
            document.getElementById('slider').classList.remove("right");
            document.getElementById('slider').classList.add("left");
        } else {
            if (document.getElementById('slider').classList.contains("left") == true) {
                document.getElementById('slider').classList.remove("left");
                document.getElementById('slider').classList.add("right");
            }
        }

    }
    document.getElementById('lorenzo').addEventListener("click",()=>{});

</script>
