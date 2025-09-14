<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Keren</title>
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #111;
      color: #fff;
    }

    /* Navbar */
    nav {
      background: #000;
      padding: 15px 50px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 10px rgba(0,0,0,0.6);
    }

    .logo {
      font-size: 20px;
      font-weight: bold;
      color: #fff;
      letter-spacing: 2px;
      cursor: pointer;
    }

    .nav-links {
      list-style: none;
      display: flex;
      gap: 30px;
    }

    .nav-links li {
      position: relative;
    }

    .nav-links a {
      text-decoration: none;
      color: #fff;
      font-size: 16px;
      font-weight: 500;
      padding: 5px 0;
      transition: color 0.3s ease;
    }

    /* Hover effect */
    .nav-links a:hover {
      color: #00bcd4;
    }

    /* Underline animasi */
    .nav-links a::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: -5px;
      width: 0%;
      height: 2px;
      background: #00bcd4;
      transition: width 0.3s ease;
    }

    .nav-links a:hover::after {
      width: 100%;
    }

    /* Active link */
    .nav-links a.active {
      color: #00bcd4;
    }
    .nav-links a.active::after {
      width: 100%;
    }
  </style>
</head>
<body>
  <nav>
    <div class="logo">NABIL.DEV</div>
    <ul class="nav-links">
      <li><a href="index.php" class="nav-item">Home</a></li>
      <li><a href="about.php" class="nav-item">About</a></li>
      <li><a href="project.php" class="nav-item">Project</a></li>
      <li><a href="skill.php" class="nav-item">Skill</a></li>
      <li><a href="contact.php" class="nav-item">Contact</a></li>
    </ul>
  </nav>

  <script>
    // Highlight active link otomatis
    const currentLocation = location.href;
    const menuItem = document.querySelectorAll('.nav-item');
    const menuLength = menuItem.length;
    for (let i = 0; i < menuLength; i++) {
      if (menuItem[i].href === currentLocation) {
        menuItem[i].classList.add("active");
      }
    }
  </script>
</body>
</html>
