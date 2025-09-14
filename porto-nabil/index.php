<?php include 'layout_header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio - Home</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #f4f4f4);
      color: #111;
      overflow-x: hidden;
    }

    .hero {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 100px 20px;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    /* Background animasi */
    .hero::before {
      content: "";
      position: absolute;
      top: -100px;
      left: -100px;
      width: 300px;
      height: 300px;
      background: rgba(0, 0, 0, 0.08);
      border-radius: 50%;
      animation: float 6s ease-in-out infinite;
      z-index: -1;
    }
    .hero::after {
      content: "";
      position: absolute;
      bottom: -120px;
      right: -100px;
      width: 350px;
      height: 350px;
      background: rgba(0, 0, 0, 0.05);
      border-radius: 50%;
      animation: float 8s ease-in-out infinite reverse;
      z-index: -1;
    }

    @keyframes float {
      0%, 100% { transform: translateY(0) scale(1); }
      50% { transform: translateY(-20px) scale(1.05); }
    }

    /* Foto profil */
    .hero img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      object-fit: cover;
      border: 5px solid #111;
      box-shadow: 0 0 25px rgba(0,0,0,0.3);
      margin-bottom: 25px;
      transition: transform 0.5s ease, box-shadow 0.5s ease;
    }

    .hero img:hover {
      transform: scale(1.08) rotate(3deg);
      box-shadow: 0 0 35px rgba(0,0,0,0.6);
    }

    /* Typing effect */
    .typing {
      font-size: 32px;
      font-weight: 700;
      margin-bottom: 20px;
      color: #000;
      min-height: 45px;
      position: relative;
      display: inline-block;
    }

    .typing::after {
      content: "|";
      position: absolute;
      right: -10px;
      color: #111;
      animation: blink 0.7s infinite;
    }

    @keyframes blink {
      0%, 50%, 100% { opacity: 1; }
      25%, 75% { opacity: 0; }
    }

    /* Deskripsi */
    .description {
      max-width: 700px;
      font-size: 22px;
      line-height: 1.8;
      margin-bottom: 20px;
      color: #333;
      opacity: 0;
      animation: fadeInUp 1.5s ease forwards;
      animation-delay: 1s;
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(40px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    /* Tombol Download */
    .download-btn {
      display: inline-block;
      margin: 20px auto 40px;
      padding: 12px 30px;
      font-size: 16px;
      font-weight: 600;
      color: #fff;
      background: #111;
      border-radius: 50px;
      text-decoration: none;
      box-shadow: 0 6px 15px rgba(0,0,0,0.25);
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .download-btn::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: linear-gradient(120deg, rgba(255,255,255,0.4), transparent, rgba(255,255,255,0.4));
      transition: 0.5s;
    }

    .download-btn:hover::before {
      left: 100%;
    }

    .download-btn:hover {
      transform: translateY(-5px) scale(1.05);
      background: #222;
    }

    /* Sosial Media */
    .social-icons {
      display: flex;
      gap: 25px;
      justify-content: center;
    }

    .social-icons a {
      text-decoration: none;
      font-size: 22px;
      color: #111;
      width: 55px;
      height: 55px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid #111;
      transition: all 0.4s ease;
      position: relative;
      overflow: hidden;
    }

    .social-icons a::before {
      content: "";
      position: absolute;
      top: 100%;
      left: 0;
      width: 100%;
      height: 100%;
      background: #111;
      transition: 0.4s;
      z-index: -1;
    }

    .social-icons a:hover::before {
      top: 0;
    }

    .social-icons a:hover {
      color: #fff;
      transform: translateY(-8px) scale(1.1);
      box-shadow: 0 6px 15px rgba(0,0,0,0.3);
    }
  </style>
</head>
<body>
  <section class="hero">
    <img src="img/saya.jpg" alt="Foto Saya">
    <div class="typing" id="typing"></div>
    <p class="description">
      Halo, saya adalah seorang web developer yang suka membuat website modern dengan tampilan minimalis namun elegan. 
      Saya memiliki minat besar di bidang teknologi dan desain, serta selalu berusaha untuk mengembangkan kemampuan saya.
    </p>

    <!-- Tombol Download CV -->
    <a href="cv.pdf" class="download-btn" download>
      <i class="fa-solid fa-download"></i> Download CV
    </a>

    <div class="social-icons">
      <a href="https://www.instagram.com/react.abiiil?igsh=dDR4YWx3MDA3ZHh0" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@workazzz.js?_t=ZS-8zhY9XxkhGc&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a>
      <a href="https://www.linkedin.com/in/nabil-ridho-pratama-464598360?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://github.com/workazz" target="_blank"><i class="fab fa-github"></i></a>
    </div>
  </section>

  <script>
    // Typing effect
    const texts = ["Hi, I'm Nabil Ridho Pratama", "Web Developer", "UI/UX Enthusiast", "Mobile Developer"];
    let count = 0;
    let index = 0;
    let currentText = '';
    let letter = '';

    (function type() {
      if (count === texts.length) {
        count = 0;
      }
      currentText = texts[count];
      letter = currentText.slice(0, ++index);

      document.getElementById('typing').textContent = letter;
      if (letter.length === currentText.length) {
        count++;
        index = 0;
        setTimeout(type, 1200); // jeda antar kalimat
      } else {
        setTimeout(type, 120); // kecepatan ketik
      }
    })();
  </script>
</body>
</html>

<?php include 'layout_footer.php'; ?>
