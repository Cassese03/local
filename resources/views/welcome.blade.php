<html lang="it">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        ::-webkit-scrollbar {
            width: 4px;
        }

        ::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: transparent;
        }

        ::-webkit-scrollbar-thumb {
            background: red;
            border-radius: 10px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #b30000;
        }

        <?php include 'css/lorenzo.css';?>
        <?php include 'css/login.css';?>
        <?php include 'css/vinyl.css';?>
        <?php include 'css/progress.css';?>
        <?php include 'css/carousel.css';?>
        <?php include 'css/netflix.css';?>

        section {
            background-size: cover;
            background-position: center;
            width: 100%;
            height: 100vh;
            background-attachment: fixed;
        }

        section:nth-child(1) {
            background-image: url('https://cdn.pixabay.com/photo/2019/09/19/09/44/street-art-4488744_1280.jpg') !important;
        }

        section:nth-child(2) {
            background-image: url("https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_1280.jpg");
        }

        section:nth-child(3) {
            background-image: url('https://cdn.pixabay.com/photo/2014/06/22/05/49/red-374318_1280.jpg') !important;
            /* background-image: url('http://localhost/rose.jpg') !important;*/
        }

        section:nth-child(4) {
            position: relative;
            overflow: hidden;
            background-image: url("https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_1280.jpg");
        }

        section:nth-child(5) {
            background-image: url("https://www.giuseppecaprotti.it/2019/wp-content/uploads/Netflix-Logo.png");
        }

        /* ! Big */
        @media (min-width: 768px) {
            section:nth-child(1) {
                background-image: url('https://cdn.pixabay.com/photo/2019/09/19/09/44/street-art-4488744_1280.jpg') !important;
            }

            section:nth-child(2) {
                background-image: url("https://cdn.pixabay.com/photo/2017/08/30/01/05/milky-way-2695569_1280.jpg");
            }

            section:nth-child(3) {
                background-image: url('https://cdn.pixabay.com/photo/2014/06/22/05/49/red-374318_1280.jpg') !important;
            }

            html {
                font-size: 22px;
            }
        }

        /* ! Medium */
        @media (max-width: 768px) {
            /*
                        section:nth-child(1) {
                            background-image: url('https://images.pexels.com/photos/965622/pexels-photo-965622.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
                        }

                        section:nth-child(2) {
                            background-image: url('https://images.unsplash.com/photo-1684215075838-b68b7557ece0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=668&q=80');
                        }

                        section:nth-child(3) {
                            background-image: url('https://cdn.pixabay.com/photo/2014/06/22/05/49/red-374318_1280.jpg')!important;
                        }
                        */
            /*section:nth-child(3) {
                background-image: url('https://media.istockphoto.com/id/1481315149/it/foto/nike-air-jordan-1-mid-lakers-top-3-sneaker-isolata-su-sfondo-bianco.jpg?s=1024x1024&w=is&k=20&c=_xPAEtRLkoBD8i3q7sAm7GX3V4aCRX-eLL5ZQgxa_mY=');
                url('https://images.unsplash.com/photo-1684054835810-8ed5f6a1d003?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80');

            }*/
            html {
                font-size: 16px;
            }
        }

        /* ! Small */
        @media (max-width: 450px) {
            /*
                        section:nth-child(1) {
                            background-image: url('https://images.pexels.com/photos/965622/pexels-photo-965622.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2');
                        }

                        section:nth-child(2) {
                            background-image: url('https://images.unsplash.com/photo-1684215075838-b68b7557ece0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=668&q=80');
                        }
                        section:nth-child(3) {
                            background-image: url('https://cdn.pixabay.com/photo/2014/06/22/05/49/red-374318_1280.jpg')!important;
                        }
                        *//*
                        section:nth-child(3) {
                            background-image: url('https://media.istockphoto.com/id/1481315149/it/foto/nike-air-jordan-1-mid-lakers-top-3-sneaker-isolata-su-sfondo-bianco.jpg?s=1024x1024&w=is&k=20&c=_xPAEtRLkoBD8i3q7sAm7GX3V4aCRX-eLL5ZQgxa_mY=');
                           url('https://images.unsplash.com/photo-1684054835810-8ed5f6a1d003?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80');

                        }*/
            html {
                font-size: 12px;
            }
        }

        body {
            overflow-x: hidden;
            font-family: 'Roboto', serif;
            /*background: linear-gradient(to right,rgb(67,124,205),rgb(69,214,202));;//linear-gradient(135deg, black, #220033);
            */
            width: 100vw;
            min-height: 100vh;
            font-size: 3.75rem;
            margin: 0;
            padding: 0;
        }
    </style>
    <title>Lorenzo WOW</title>
</head>

<body onload="enhance('lorenzo');">

<progress max="100" value="0"></progress>

<div class="container">
    <section>
        <div class="lorenzo" id="lorenzo">STOCK&SHOES</div>
    </section>
    <section>
        <iframe style="border:transparent;max-height: 25vh;height: 25vh;min-width: 100%;"
                src="https://my.spline.design/untitledcopy-71d4a915b4f230e8597434461287c128/"></iframe>
        <div class="container_2" style="max-height: 70vh!important">
            <div class="card-container" style="max-height: 70vh!important">
                <div class="card" style="max-height: 70vh!important">
                    <div class=" login-key"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <div class=" login-title">
                        REGISTER
                    </div>
                    <div class=" login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">EMAIL
                                    <input type="text" class="form-control"></label>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME
                                    <input type="text" class="form-control">
                                </label>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD
                                    <input type="password" class="form-control">
                                </label>
                            </div>

                            <div class="login-btn-lorenzo">
                                <div class="col-lg-6 login-btm login-text" style="float:left!important">
                                    <button type="reset" onclick="slider()" class="btn btn-outline-primary">LOGIN
                                    </button>
                                </div>
                                <div class="col-lg-6 login-btm login-button">
                                    <button type="submit" class="btn btn-outline-primary">REGISTRATI</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="card" style="max-height: 70vh!important">
                    <div class=" login-key"><i class="fa fa-key" aria-hidden="true"></i></div>
                    <div class=" login-title">
                        LOGIN
                    </div>
                    <div class=" login-form">
                        <form>
                            <div class="form-group">
                                <label class="form-control-label">USERNAME
                                    <input type="text" class="form-control"></label>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">PASSWORD
                                    <input type="password" class="form-control"></label>
                            </div>

                            <div class="login-btn-lorenzo">
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
                <div class="card card-slider left" id="slider" style="max-height: 70vh!important">
                    <div class="card-slider-header" style="margin:0">
                        <img src="http://localhost/img/logo.svg"
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
        </div>
    </section>
    <section>
        <div class="vinyl-container">
            <div class="vinyl-jacket audio-button">
                <div class="vinyl-wrapper ">
                    <div class="vinyl"></div>
                </div>
                <audio id="audio-player" src="https://ia800207.us.archive.org/23/items/Jovanotti-ATe/Jovanotti-ATe.mp3"
                       style="padding-top: 100%"
                       controls></audio>
            </div>
        </div>
    </section>
    <section>
        <div class="body_carousel">
            <div class="container_carousel">
                <div class="carousel_carousel">
                    <div class="image_carousel"><span class="span_carousel">Simple</span></div>
                    <div class="image_carousel"><span class="span_carousel">Carousel</span></div>
                    <div class="image_carousel"><span class="span_carousel">Animation</span></div>
                    <div class="image_carousel"><span class="span_carousel">With</span></div>
                    <div class="image_carousel"><span class="span_carousel">Beautiful</span></div>
                    <div class="image_carousel"><span class="span_carousel">Landscapes</span></div>
                    <div class="image_carousel"><span class="span_carousel">Follow</span></div>
                    <div class="image_carousel"><span class="span_carousel">Like</span></div>
                    <div class="image_carousel"><span class="span_carousel">Comment</span></div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container_netflix snaps-inline">
            <div class="image_netflix">
                <img alt="img"
                     src="https://plus.unsplash.com/premium_photo-1684338795288-097525d127f0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1684581789611-0e2f91826b46?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1074&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1684530535738-49239ce8cd29?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=764&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1684167932618-7521c17a8857?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1035&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1684350773533-689f34efa3f4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1684804330388-9f2768c5a3ea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=996&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1684803975492-3025a51d60fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=798&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1684780451370-388a23a7902f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80">
                <label style="font-size: 1rem;">Titolo del Film</label>
            </div>
            <div class="image_netflix">
                <img alt="img"
                     src="https://images.unsplash.com/photo-1679513048495-9c8ab7a774b9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=735&q=80">
                <label>Titolo del Film</label>
            </div>
        </div>
    </section>
</div>
</body>

</html>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
<script type="text/javascript">

    gsap.registerPlugin(
        ScrollTrigger
    );

    gsap.to("progress", {
        value: 100,
        scrollTrigger: {
            scrub: 0.5,
        },
    })

    const audioPlayer = document.getElementById('audio-player');
    const audioButton = document.querySelector('.audio-button');

    audioButton.addEventListener('click', () => {
        if (audioPlayer.paused === true)
            audioPlayer.play();
        else
            audioPlayer.pause();
    });

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
        if (document.getElementById('slider').classList.contains("right") === true) {
            document.getElementById('slider').classList.remove("right");
            document.getElementById('slider').classList.add("left");
        } else {
            if (document.getElementById('slider').classList.contains("left") === true) {
                document.getElementById('slider').classList.remove("left");
                document.getElementById('slider').classList.add("right");
            }
        }

    }

    document.getElementById('lorenzo').addEventListener("click", () => {
    });

</script>

<?php /*
  background-image: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg')!important;
background: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fgiphy.com%2Fexplore%2Fearth-explorere&psig=AOvVaw2x_00HlA24WiPYwYD36Brb&ust=1685048798192000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMC2qIrujv8CFQAAAAAdAAAAABAN')!important;
background-image: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg')!important;
background: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fgiphy.com%2Fexplore%2Fearth-explorere&psig=AOvVaw2x_00HlA24WiPYwYD36Brb&ust=1685048798192000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMC2qIrujv8CFQAAAAAdAAAAABAN')!important;
background-image: url('https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg')!important;
background: url('https://www.google.com/url?sa=i&url=https%3A%2F%2Fgiphy.com%2Fexplore%2Fearth-explorere&psig=AOvVaw2x_00HlA24WiPYwYD36Brb&ust=1685048798192000&source=images&cd=vfe&ved=0CBEQjRxqFwoTCMC2qIrujv8CFQAAAAAdAAAAABAN')!important;

<section>
    <div class="player">
        <div class="album-art">
            <!-- Immagine dell'album -->
        </div>
        <div class="song-info">
            <h3 class="song-title">Titolo della canzone</h3>
            <p class="artist-name">Nome dell'artista</p>
        </div>
        <div class="controls">
            <button class="play-button">Play</button>
            <button class="next-button">Successivo</button>
        </div>
    </div>

</section>
<section>
    <div class="player">
        <img src="http://localhost/lolloepatata.jpg" alt="Immagine dell'album" class="album-art">
        <div class="controls">
            <button class="play-button">Play</button>
            <button class="pause-button">Pausa</button>
        </div>
    </div>


</section> */ /*
{{--
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/vinyl.css">
    --}}

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

?>
