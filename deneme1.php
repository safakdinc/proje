<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="deneme1.css" rel="stylesheet" type="text/css" />
   
  </head>
  <body style="  background-color: rgb(27, 28, 28);">
  <?php 
   include 'comment.php';
   ?>
    <div class="container-fluid g-0" style="color: aliceblue;">
      <div class="row no-gutters fixed-top index1">
        <div class="col-3 p-0 width1 transition" id="bos_head"></div>
        <div class="col-12 p-0 transition" id="head_col">
          <div class="head">
            <div>
              <span class="menu_btn show" id="open_btn" onclick="toggle()">☰</span>
              <div class="progress-container"id="progress_bar">
                <div class="progress-bar" id="myBar"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row no-gutters fixed index2" style="--bs-gutter-x: 0rem">
        <div class="width0 col-3 p-0 fixed transition sınır" id="sidemenu">
          <div class="kutu">
            <div class="closenav">
              <span class="menu_btn show" id="close_btn" onclick="toggle()">&times</span>
            </div>
          
          
            <header><h1>Örnek</h1></header>
            <div class="kapsayıcı">
              <nav class="kutu2" >
                <ul>
                  <li>
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                  </li>
                  <li><a href="#">Link 1</a></li>
                  <li><a href="#">Link 1</a></li>
                </ul>
                <button class="dropdown" type="button" onclick="dropdown()">
                  Dropdown &#8595
                </button>
                <div class="dropdown-sc">
                  <ul id="ul">
                    <li>
                      <a href="#">Link 1</a>
                    </li>
                    <li><a href="#">Link 2</a></li>
                    <li><a href="#">Link 3</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-3 m-l-0 p-0 width1 transition" id="bos"></div>
        <div
          class="col-12 m-l-0 p-0 scrollit transition"
          id="main"
          style="transition: all 0.7s ease-in-out"
        >
          <div class="main reveal">
            <div class="row no-gutters">
              <div class="col-12">
                <div class="banner">
                  <div class="row"style="height:25%">
                    <div class="col-sm-12"></div>
                  </div>
                  <div class="row no-gutters"style="top:60%">
                    <div class="col-12">
                      <div class="metin">
                          Bir Yerlerde İnanılmaz Bir Şey Keşfedilmeyi Bekliyor
                      </div>
                    </div>
                  </div>
                  <div class="row no-gutters">
                    <div class="col-12">
                      <div class="metin2">
                          -Carl Sagan
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>  
          </div>  
          <div class="row no-gutters reveal">
            <div class="col-sm-3 p-0">
              <div class="textarea" id="textarea">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid
                nulla vel quas explicabo, sit iusto. Nesciunt nulla quia sequi error
                totam! Molestias earum vitae, eos culpa cum eveniet voluptas!
              </div>
            </div>
            <!--Carousel-->
            <div class="col-sm-6 ">
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="foto.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="indir.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="indir2.jpg" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="textarea" id="textarea">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid
                nulla vel quas explicabo, sit iusto. Nesciunt nulla quia sequi error
                totam! Molestias earum vitae, eos culpa cum eveniet voluptas!
              </div>
            </div>
          </div>
           <!--Kategoriler Başlığı-->
          <div class="row no-gutters reveal">
           <div class="col-3"></div>
           <div class="col-sm-6 kategori_baslık">
              Kategoriler
           </div>
            <div class="col-3"></div>
          </div>
          <!--Kategoriler-->
            <div class="row no-gutters reveal" id="a">
              <div class="blur-wrap">
                <div class="blur">
                  <div class="kategori astronomi">
                    <div class="baslık"><a href="#">Astronomi</a></div>
                  </div>
                </div>
                <div class="blur">
                  <div class="kategori kimya">
                    <div class="baslık"><a href="#">Kimya</a></div>
                  </div>
                </div>
                <div class="blur">
                  <div class="kategori biyoloji">
                    <div class="baslık"><a href="#">Biyoloji</a></div>
                  </div>
                </div>
                <div class="blur">
                  <div class="kategori fizik">
                    <div class="baslık"><a href="#">Fizik</a></div>
                  </div>
                </div>
                <div class="blur">
                  <div class="kategori felsefe">
                    <div class="baslık"><a href="#">felsefe</a></div>
                  </div>
                </div>
                <div class="blur">
                  <div class="kategori teknoloji">
                    <div class="baslık"><a href="#">Teknoloji</a></div>
                  </div>
                </div>
              </div>
            </div>

            <!--Yeni İçerik Başlığı-->
            <div class="row no-gutters reveal">
              <div class="col-3"></div>
              <div class="col-sm-6 kategori_baslık">
                 Son İçerikler
              </div>
               <div class="col-3"></div>
             </div>

             <!--Yeni İçerikler-->
          <div class="row no-gutters reveal">
            <!-- Solda herhangi bir şey olabilir-->
            <div class="col-sm-3">
              <div id="fixedscroll">
                <div class="textarea" id="textarea">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid
                  nulla vel quas explicabo, sit iusto. Nesciunt nulla quia sequi error
                  totam! Molestias earum vitae, eos culpa cum eveniet voluptas!
                </div>
              </div>
            </div>
            <!--
              Yeni içerikler sütunu-->
            <div class="col-sm-6"id="col-fixed">
              <div class="row no-gutters">
                <div class="col-sm-12">
                    <div class="son_icerik">
                      <div class="row no-gutters">
                        <div class="col-sm-6">
                        </div>
                        <div class="col-sm-6">
                        </div>
                      </div>
                      <div class="row no-gutters">
                        <div class="col-sm-12">
                          <?php 
                          foreach($result as $row){
                            echo $row['yorum']."<br>";
                          }
                          ?>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
              <div class="row no-gutters">
                <div class="col-sm-12">
                    <div class="son_icerik"></div>
                </div>
              </div>
              <div class="row no-gutters">
                <div class="col-sm-12">
                    <div class="son_icerik"></div>
                </div>
              </div>
              <div class="row no-gutters">
                <div class="col-sm-12">
                    <div class="son_icerik"></div>
                </div>
              </div>
            </div>
            <!--Sağda herhangi bir şey olabilir-->
            <div class="col-sm-3" id="col-fixed">
              <div id="fixedscroll">
                <div class="textarea" id="textarea">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio aliquid
                  nulla vel quas explicabo, sit iusto. Nesciunt nulla quia sequi error
                  totam! Molestias earum vitae, eos culpa cum eveniet voluptas!
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
    <script type="text/javascript">
      //Side Bar toggle
      let progress_bar=document.getElementById("progress_bar")
      let btn = document.getElementById("menu_btn");
      let sidemenu = document.getElementById("sidemenu");
      let bos = document.getElementById("bos");
      let bos_head = document.getElementById("bos_head");
      let head_col = document.getElementById("head_col");
      let main = document.getElementById("main");
      let open_btn=document.getElementById("open_btn");
      let close_btn=document.getElementById("close_btn");
      function toggle() {
        progress_bar.classList.toggle("progress_margin");
        open_btn.classList.toggle("hide");
        sidemenu.classList.toggle("width0");
        main.classList.toggle("col-12");
        main.classList.toggle("col-9");
        head_col.classList.toggle("col-12");
        head_col.classList.toggle("col-9");
        head_col.style.opacity.toggle="0.5"
        bos.classList.toggle("width1");
        bos_head.classList.toggle("width1");
      }

      window.onscroll = function() {myFunction()};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

      
      window.addEventListener("scroll", reveal);
      function reveal() {
        var reveals = document.querySelectorAll(".reveal");

        for (var i = 0; i < reveals.length; i++) {
          var windowheight = window.innerHeight;
          var revealtop = reveals[i].getBoundingClientRect().top;
          var revealpoint = 150;

          if (revealtop < windowheight - revealpoint) {
            reveals[i].classList.add("active");
            reveals[i].classList.remove("passive");
          } else {
            reveals[i].classList.remove("active");
            reveals[i].classList.add("passive");
          }
        }
      }

    
      var ul = document.getElementById("ul");
      function dropdown() {
        if (ul.style.height === "300px") {
          ul.style.height = "0px";
        } else {
          ul.style.height = "300px";
        }
      }
    </script>


  </body>
</html>
