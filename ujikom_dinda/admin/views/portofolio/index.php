<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <!-- CSS Bootsrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="<?= BASEURL; ?>asset/css/style.css">
  </head>
  <body id=home>
    <!--- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Ndaaa</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" >
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
                <li class="nav-item">
                  <a class="nav-link" href="#projects">Project</a></li>
                <li class="nav-item">
                  <a class="nav-link" href="#contact">Contact</a></li>
              </ul>
            </li>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->
    <!--jumbotron-->
    <div class="jumbotron text-center">
      <img src="<?= BASEURL; ?>asset/dindaa/why.jpg" alt="" width="200" height="200" class="rounded-circle img-thumbnail"./>
      <h1 class="display-4">Dindaa Nely</h1>
      <p class="lead"> Student | SMKN 4 TASIKMALAYA</p>
     <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,192L9.2,186.7C18.5,181,37,171,55,181.3C73.8,192,92,224,111,229.3C129.2,235,148,213,166,213.3C184.6,213,203,235,222,250.7C240,267,258,277,277,288C295.4,299,314,309,332,309.3C350.8,309,369,299,388,293.3C406.2,288,425,288,443,277.3C461.5,267,480,245,498,213.3C516.9,181,535,139,554,106.7C572.3,75,591,53,609,58.7C627.7,64,646,96,665,96C683.1,96,702,64,720,74.7C738.5,85,757,139,775,170.7C793.8,203,812,213,831,218.7C849.2,224,868,224,886,224C904.6,224,923,224,942,218.7C960,213,978,203,997,213.3C1015.4,224,1034,256,1052,261.3C1070.8,267,1089,245,1108,229.3C1126.2,213,1145,203,1163,186.7C1181.5,171,1200,149,1218,165.3C1236.9,181,1255,235,1274,213.3C1292.3,192,1311,96,1329,64C1347.7,32,1366,64,1385,106.7C1403.1,149,1422,203,1431,229.3L1440,256L1440,320L1430.8,320C1421.5,320,1403,320,1385,320C1366.2,320,1348,320,1329,320C1310.8,320,1292,320,1274,320C1255.4,320,1237,320,1218,320C1200,320,1182,320,1163,320C1144.6,320,1126,320,1108,320C1089.2,320,1071,320,1052,320C1033.8,320,1015,320,997,320C978.5,320,960,320,942,320C923.1,320,905,320,886,320C867.7,320,849,320,831,320C812.3,320,794,320,775,320C756.9,320,738,320,720,320C701.5,320,683,320,665,320C646.2,320,628,320,609,320C590.8,320,572,320,554,320C535.4,320,517,320,498,320C480,320,462,320,443,320C424.6,320,406,320,388,320C369.2,320,351,320,332,320C313.8,320,295,320,277,320C258.5,320,240,320,222,320C203.1,320,185,320,166,320C147.7,320,129,320,111,320C92.3,320,74,320,55,320C36.9,320,18,320,9,320L0,320Z"></path></svg>
    </div>
    <!-- akhir jumbotron -->
    <!-- About -->
    <section id="about">
      <div class="row text-center mb-3">
        <div class="col">
         <h2>About Me</h2>
        </div>
      </div>
      <div class="row justify-content-center fs-5 text-center">
          <div class="col-md-4">
            <p>Sukses Bukanlah Final,Kegagalan Tidak Fatal: Keberanian Untuk Melanjutkan Yang Diperhitungkan.</p>
          </div>
          <div class="col-md-4">
            <p>Ada Kalanya Seseorang Harus Angkat Bicara Ketika Impian Sahabatnya Ditertawakan.</p>
          </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ccccff" fill-opacity="1" d="M0,64L20,80C40,96,80,128,120,149.3C160,171,200,181,240,170.7C280,160,320,128,360,144C400,160,440,224,480,256C520,288,560,288,600,250.7C640,213,680,139,720,96C760,53,800,43,840,80C880,117,920,203,960,234.7C1000,267,1040,245,1080,224C1120,203,1160,181,1200,192C1240,203,1280,245,1320,245.3C1360,245,1400,203,1420,181.3L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir About -->
    <!-- Projects -->
    <section id="projects">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2> My projects </h2>
           </div>
          </div>
        </div>
        <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 mb-3">
        <div class="card">
          <img src="dindaa/aaa.jpg" class="card-img-top" alt="projects 1">
          <div class="card-body">
          <p class="card-text"> The danger is not that computers will start thinking like men, but humans will start thinking like computers — Sydney J. Harri.</p>
           </div>
          </div>
        </div>
   <div class="col-md-4 mb-3">
        <div class="card">
          <img src="dindaa/dd.jpg" class="card-img-top" alt="projects 2">
          <div class="card-body">
          <p class="card-text">Computers were born to solve problems that didn't exist before - Bill Gates.</p>
           </div>
          </div>
        </div>
   <div class="col-md-4 mb-3">
        <div class="card">
          <img src="dindaa/ii.jpg" class="card-img-top" alt="projects 3">
          <div class="card-body">
          <p class="card-text">Don't let the computer know you're in a hurry.</p>
           </div>
          </div>
        </div>
   <div class="col-md-4 mb-3">
        <div class="card">
          <img src="dindaa/ddd.jpg" class="card-img-top" alt="projects 4">
          <div class="card-body">
          <p class="card-text">Do files get embarrassed when unzipped?.</p>
           </div>
          </div>
  </div class="col-md-4 mb-">
        <div class="card">
          <img src="dindaa/dind.jpg" class="card-img-top" alt="projects 5">
          <div class="card-body">
          <p class="card-text">If the plan doesn't work, change the plan but never the goal.</p>
           </div>
          </div>
 </div>
        </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffff" fill-opacity="1" d="M0,192L9.2,186.7C18.5,181,37,171,55,181.3C73.8,192,92,224,111,229.3C129.2,235,148,213,166,213.3C184.6,213,203,235,222,250.7C240,267,258,277,277,288C295.4,299,314,309,332,309.3C350.8,309,369,299,388,293.3C406.2,288,425,288,443,277.3C461.5,267,480,245,498,213.3C516.9,181,535,139,554,106.7C572.3,75,591,53,609,58.7C627.7,64,646,96,665,96C683.1,96,702,64,720,74.7C738.5,85,757,139,775,170.7C793.8,203,812,213,831,218.7C849.2,224,868,224,886,224C904.6,224,923,224,942,218.7C960,213,978,203,997,213.3C1015.4,224,1034,256,1052,261.3C1070.8,267,1089,245,1108,229.3C1126.2,213,1145,203,1163,186.7C1181.5,171,1200,149,1218,165.3C1236.9,181,1255,235,1274,213.3C1292.3,192,1311,96,1329,64C1347.7,32,1366,64,1385,106.7C1403.1,149,1422,203,1431,229.3L1440,256L1440,320L1430.8,320C1421.5,320,1403,320,1385,320C1366.2,320,1348,320,1329,320C1310.8,320,1292,320,1274,320C1255.4,320,1237,320,1218,320C1200,320,1182,320,1163,320C1144.6,320,1126,320,1108,320C1089.2,320,1071,320,1052,320C1033.8,320,1015,320,997,320C978.5,320,960,320,942,320C923.1,320,905,320,886,320C867.7,320,849,320,831,320C812.3,320,794,320,775,320C756.9,320,738,320,720,320C701.5,320,683,320,665,320C646.2,320,628,320,609,320C590.8,320,572,320,554,320C535.4,320,517,320,498,320C480,320,462,320,443,320C424.6,320,406,320,388,320C369.2,320,351,320,332,320C313.8,320,295,320,277,320C258.5,320,240,320,222,320C203.1,320,185,320,166,320C147.7,320,129,320,111,320C92.3,320,74,320,55,320C36.9,320,18,320,9,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Projects -->
    
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center mb-3">
          <div class="col">
            <h2>Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-6">
          <form>
           <div class="mb-3">
            <label for="name" class="form-label">Nama Lengkap</label>
           <input type="text" class="form-control" id="name" aria-describedby="name"/>
           </div>
           <div class="mb-3">
            <label for="email" class="form-label">Email</label>
           <input type="email" class="form-control" id="email" aria-describedby="email"/>
           </div>
         <div class="mb-3">
           <label for="pesan" class="form-label">Pesan</label>
          <textarea class="form-control" id="pesan" rows="3"></textarea>
         </div>
         <button type="submit" class="btn btn-primary">Kirim</button>
          </form>
          </div>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#000000" fill-opacity="1" d="M0,192L20,165.3C40,139,80,85,120,90.7C160,96,200,160,240,181.3C280,203,320,181,360,192C400,203,440,245,480,224C520,203,560,117,600,80C640,43,680,53,720,96C760,139,800,213,840,202.7C880,192,920,96,960,64C1000,32,1040,64,1080,64C1120,64,1160,32,1200,64C1240,96,1280,192,1320,218.7C1360,245,1400,203,1420,181.3L1440,160L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z"></path></svg>
    </section>
    <!-- Akhir Contact -->
    
    <!-- Footer -->
    <footer class="bg-black text-white text-center pb-4">
      <p>Created with <i class="bi bi-heart-half text-danger"></i> by <a href="https://www.instragram.com /dindaa824.net/" class="text-white fw-bold">Dinda Nely</a></p>
    </footer>
    <!-- Akhir Footer -->
    <!-- JavaScript-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>