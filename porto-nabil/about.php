<?php include 'layout_header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio - About</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #f4f4f4);
      color: #111;
      overflow-x: hidden;
    }

    .about {
      max-width: 1100px;
      margin: auto;
      padding: 100px 20px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 50px;
      align-items: center;
    }

    .about-title {
      text-align: center;
      font-size: 40px;
      font-weight: 800;
      margin-bottom: 50px;
      position: relative;
      animation: fadeInDown 1.5s ease;
      margin-top: 50px;
    }

    .about-title::after {
      content: "";
      width: 80px;
      height: 3px;
      background: #111;
      display: block;
      margin: 10px auto 0;
      border-radius: 5px;
      animation: expand 1.5s ease;
    }

    @keyframes expand {
      from { width: 0; }
      to { width: 80px; }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .about img {
      width: 100%;
      max-width: 400px;
      border-radius: 15px;
      border: 5px solid #111;
      box-shadow: 0 8px 25px rgba(0,0,0,0.2);
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .about img:hover {
      transform: scale(1.05) rotate(2deg);
      box-shadow: 0 12px 30px rgba(0,0,0,0.4);
    }

    .about-text {
      font-size: 19px;
      line-height: 1.8;
      color: #333;
      opacity: 0;
      animation: fadeInUp 1.8s ease forwards;
      animation-delay: 0.5s;
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    /* Card section */
    .about-cards {
      margin-top: 60px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      margin-bottom: 60px;
      padding: 0 20px;
    }

    .card {
      background: #fff;
      border: 2px solid #111;
      border-radius: 15px;
      padding: 25px;
      text-align: center;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .card i {
      font-size: 40px;
      margin-bottom: 15px;
      color: #111;
    }

    .card h3 {
      margin: 10px 0;
      font-size: 20px;
      font-weight: 700;
    }

    .card p {
      font-size: 15px;
      color: #555;
      line-height: 1.6;
    }

    .card::before {
      content: "";
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 100%;
      background: #111;
      z-index: -1;
      transition: top 0.4s ease;
    }

    .card:hover::before {
      top: 0;
    }

    .card:hover {
      color: #fff;
      transform: translateY(-10px);
      box-shadow: 0 8px 20px rgba(0,0,0,0.3);
    }

    .card:hover i {
      color: #fff;
    }

    /* RESPONSIVE DESIGN */
    @media (max-width: 992px) {
      .about {
        grid-template-columns: 1fr;
        text-align: center;
        gap: 30px;
        padding: 70px 20px;
      }
      .about img {
        margin: 0 auto;
      }
      .about-text {
        font-size: 18px;
      }
    }

    @media (max-width: 576px) {
      .about-title {
        font-size: 32px;
      }
      .about-text {
        font-size: 16px;
        line-height: 1.6;
      }
      .card h3 {
        font-size: 18px;
      }
      .card p {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <h2 class="about-title">About Me</h2>
  <section class="about">
    <div class="about-image">
      <img src="img/saya.jpg" alt="Foto Saya">
    </div>
    <div class="about-text">
       <p>
  Saya adalah seorang <strong>Junior Web & Mobile Developer</strong> yang sedang membangun pengalaman dalam dunia pengembangan website dan aplikasi mobile. 
  Saat ini saya berada di tahap awal karir, di mana saya terus belajar, berlatih, dan berkontribusi dalam berbagai project untuk meningkatkan keterampilan saya.
</p>

<p>
  Dalam pengembangan web, saya terbiasa menggunakan <strong>HTML, CSS, dan JavaScript</strong> untuk membuat tampilan yang responsif dan menarik. 
  Saya juga mulai mendalami backend menggunakan <strong>PHP</strong> dan <strong>Node.js</strong>, serta mempelajari framework mobile seperti <strong>Flutter</strong> dan <strong>React Native</strong> 
  agar bisa mengembangkan aplikasi lintas platform.
</p>

<p>
  Beberapa tugas yang saya kerjakan biasanya meliputi pembuatan fitur dasar seperti halaman login, form input, integrasi API, dan koneksi ke database. 
  Saya juga terbiasa menggunakan <strong>Git/GitHub</strong> untuk version control agar workflow project lebih teratur dan kolaboratif.
</p>
    </div>
  </section>

  <section class="about-cards">
    <div class="card">
      <i class="fas fa-briefcase"></i>
      <h3>Experience</h3>
      <p>Pernah mengerjakan berbagai project freelance seperti website bisnis, portfolio, dan e-commerce.</p>
    </div>
    <div class="card">
      <i class="fas fa-graduation-cap"></i>
      <h3>Education</h3>
      <p>Latar belakang pendidikan di bidang Informatika dengan fokus pada pengembangan aplikasi web modern.</p>
    </div>
    <div class="card">
      <i class="fas fa-gamepad"></i>
      <h3>Hobbies</h3>
      <p>Di luar coding, saya suka bermain game, mendengarkan musik, dan belajar teknologi baru.</p>
    </div>
  </section>
</body>
</html>

<?php include 'layout_footer.php'; ?>
