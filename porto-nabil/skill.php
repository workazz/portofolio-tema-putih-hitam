<?php include 'layout_header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio - Skills</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #fff;
      color: #111;
      overflow-x: hidden;
    }

    .skills-header {
      text-align: center;
      font-size: 42px;
      font-weight: 800;
      margin: 60px 0 70px;
      animation: fadeInDown 1.5s ease;
    }

    .skills-header::after {
      content: "";
      width: 100px;
      height: 3px;
      background: #111;
      display: block;
      margin: 15px auto 0;
      border-radius: 5px;
      animation: expand 1.5s ease;
    }

    @keyframes expand {
      from { width: 0; }
      to { width: 100px; }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-40px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .skills-description {
      text-align: center;
      font-size: 18px;
      max-width: 700px;
      margin: 20px auto 50px;
      color: #555;
      line-height: 1.7;
      animation: fadeIn 2s ease;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    .skills-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
      gap: 40px;
      max-width: 1000px;
      margin: auto;
      padding: 20px 40px 80px;
    }

    .skill-card {
      background: #111;
      color: #fff;
      border-radius: 15px;
      padding: 30px 20px;
      text-align: center;
      box-shadow: 0 6px 20px rgba(0,0,0,0.3);
      transition: all 0.5s ease;
      cursor: pointer;
      position: relative;
      overflow: hidden;
    }

    .skill-card:hover {
      transform: translateY(-10px) scale(1.05) rotate(-1deg);
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }

    .skill-card i,
    .skill-card img {
      font-size: 40px;
      margin-bottom: 15px;
      transition: all 0.4s ease;
      width: 40px;
      height: 40px;
    }

    .skill-card:hover i,
    .skill-card:hover img {
      transform: rotate(15deg) scale(1.2);
      filter: drop-shadow(0 0 10px #ffdd57);
    }

    .skill-card h4 {
      font-size: 18px;
      font-weight: 600;
      margin: 0;
    }

    /* Glow effect on hover */
    .skill-card::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.2), transparent 70%);
      transform: scale(0);
      transition: transform 0.6s ease;
      border-radius: 50%;
    }

    .skill-card:hover::before {
      transform: scale(1);
    }
  </style>
</head>
<body>
  <h2 class="skills-header">My Skills</h2>
  <p class="skills-description">
    Berikut adalah beberapa skill utama saya dalam pengembangan web dan mobile.  
    Dengan pengalaman di berbagai bahasa pemrograman, framework, dan tools,  
    saya mampu membangun project modern, cepat, dan responsif.
  </p>

  <section class="skills-grid">
    <div class="skill-card"><i class="fab fa-js"></i><h4>JavaScript</h4></div>
    
    <div class="skill-card">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/dart/dart-original.svg" alt="Dart"/>
      <h4>Dart</h4>
    </div>
    
    <div class="skill-card"><i class="fab fa-php"></i><h4>PHP</h4></div>
    
    <div class="skill-card"><i class="fab fa-css3-alt"></i><h4>CSS</h4></div>
    
    <div class="skill-card"><i class="fab fa-html5"></i><h4>HTML</h4></div>
    
    <div class="skill-card"><i class="fa-brands fa-angular"></i><h4>Angular</h4></div>
    
    <div class="skill-card"><i class="fa-solid fa-gem"></i><h4>Ruby</h4></div>
    
    <div class="skill-card">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript"/>
      <h4>TypeScript</h4>
    </div>
    
    <div class="skill-card">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/swift/swift-original.svg" alt="Swift"/>
      <h4>Swift</h4>
    </div>
    
    <div class="skill-card">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" alt="React"/>
      <h4>React JS</h4>
    </div>
    
    <div class="skill-card">
      <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/kotlin/kotlin-original.svg" alt="Kotlin"/>
      <h4>Kotlin</h4>
    </div>
  </section>
</body>
</html>

<?php include 'layout_footer.php'; ?>