<?php include 'layout_header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio - Projects</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(135deg, #ffffff, #f4f4f4);
      color: #111;
      overflow-x: hidden;
    }

    .project-title {
      text-align: center;
      font-size: 40px;
      font-weight: 800;
      margin: 60px 0 40px;
      position: relative;
      animation: fadeInDown 1.5s ease;
    }

    .project-title::after {
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

    .projects {
      max-width: 1200px;
      margin: auto;
      padding: 20px 40px 80px;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 30px;
    }

    .project-card {
      background: #fff;
      border: 2px solid #111;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 6px 18px rgba(0,0,0,0.1);
      transition: all 0.4s ease;
      display: flex;
      flex-direction: column;
      margin-bottom: 80px;
    }

    .project-card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .project-card:hover img {
      transform: scale(1.05);
    }

    .project-content {
      padding: 20px;
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
    }

    .project-content h3 {
      font-size: 20px;
      font-weight: 700;
      margin-bottom: 10px;
      color: #111;
    }

    .project-content p {
      font-size: 15px;
      color: #555;
      margin-bottom: 20px;
      line-height: 1.6;
    }

    .project-content a {
      text-decoration: none;
      padding: 10px 20px;
      background: #111;
      color: #fff;
      border-radius: 8px;
      font-size: 14px;
      font-weight: 600;
      align-self: flex-start;
      transition: all 0.3s ease;
    }

    .project-content a:hover {
      background: #fff;
      color: #111;
      border: 2px solid #111;
      transform: translateY(-3px);
      box-shadow: 0 5px 12px rgba(0,0,0,0.2);
    }
  </style>
</head>
<body>
  <h2 class="project-title">My Projects</h2>
  <section class="projects">
    <!-- Project 1 -->
    <div class="project-card">
      <img src="img/project/joki.jpg" alt="Project 1">
      <div class="project-content">
        <h3>Website Joki Dan TopUp</h3>
        <p>Website e-commerce (Mobile Legends) sederhana dengan fitur keranjang belanja dan checkout online.</p>
        <a href="https://link-ke-project1.com" target="_blank">View Project</a>
      </div>
    </div>

    <!-- Project 2 -->
    <div class="project-card">
      <img src="img/project/porto.jpg" alt="Project 2">
      <div class="project-content">
        <h3>Portfolio</h3>
        <p>Website portfolio personal dengan desain modern minimalis dan animasi interaktif.</p>
        <a href="https://link-ke-project2.com" target="_blank">View Project</a>
      </div>
    </div>

    <!-- Project 3 -->
    <div class="project-card">
      <img src="img/project/crud.jpg" alt="Project 3">
      <div class="project-content">
        <h3>Web Kasir</h3>
        <p>Aplikasi web untuk manajemen tugas harian dengan fitur CRUD dan filter.</p>
        <a href="https://link-ke-project3.com" target="_blank">View Project</a>
      </div>
    </div>
  </section>
</body>
</html>

<?php include 'layout_footer.php'; ?>
