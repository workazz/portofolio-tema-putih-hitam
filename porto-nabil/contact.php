<?php include 'layout_header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My Portfolio - Contact</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #fff;
      color: #111;
      overflow-x: hidden;
    }

    /* Header Judul */
    .contact-header {
      text-align: center;
      font-size: 42px;
      font-weight: 800;
      margin: 80px 0 20px;
      animation: fadeInDown 1.5s ease;
      letter-spacing: 2px;
      color: #111;
    }
    .contact-header::after {
      content: "";
      width: 120px;
      height: 4px;
      background: #111;
      display: block;
      margin: 15px auto 0;
      border-radius: 5px;
      animation: expand 1.5s ease;
    }
    @keyframes expand { from { width: 0; } to { width: 120px; } }
    @keyframes fadeInDown { from { opacity: 0; transform: translateY(-40px); } to { opacity: 1; transform: translateY(0); } }

    /* Deskripsi */
    .contact-description {
      text-align: center;
      font-size: 18px;
      max-width: 700px;
      margin: 20px auto 50px;
      color: #444;
      line-height: 1.8;
      animation: fadeIn 2s ease;
    }
    @keyframes fadeIn { from { opacity: 0; } to { opacity: 1; } }

    /* Card Form */
    .contact-form {
      max-width: 650px;
      margin: auto;
      padding: 40px;
      background: #fff;
      border: 2px solid #111;
      border-radius: 20px;
      box-shadow: 0 8px 30px rgba(0,0,0,0.1);
      animation: fadeInUp 1.5s ease;
    }
    @keyframes fadeInUp { from { opacity: 0; transform: translateY(30px); } to { opacity: 1; transform: translateY(0); } }

    .contact-form label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: #111;
    }
    .contact-form input,
    .contact-form textarea {
      width: 100%;
      padding: 14px;
      margin-bottom: 22px;
      border: 2px solid #ddd;
      border-radius: 10px;
      background: #f9f9f9;
      color: #111;
      font-size: 15px;
      transition: 0.3s;
    }
    .contact-form input:focus,
    .contact-form textarea:focus {
      border-color: #111;
      outline: none;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      background: #fff;
    }

    .contact-form button {
      background: #111;
      color: #fff;
      border: none;
      padding: 14px 28px;
      border-radius: 10px;
      font-weight: 700;
      cursor: pointer;
      transition: all 0.3s ease;
      font-size: 16px;
    }
    .contact-form button:hover {
      background: #444;
      transform: translateY(-4px);
      box-shadow: 0 5px 18px rgba(0,0,0,0.2);
    }

    /* Tombol WhatsApp langsung */
    .wa-direct {
      text-align: center;
      margin-top: 40px;
      animation: pulse 2s infinite;
      margin-bottom: 40px;
    }
    .wa-direct a {
      display: inline-flex;
      align-items: center;
      gap: 12px;
      text-decoration: none;
      font-weight: 700;
      color: #fff;
      background: #25D366;
      padding: 14px 28px;
      border-radius: 12px;
      font-size: 18px;
      transition: 0.3s;
    }
    .wa-direct a:hover {
      background: #128C7E;
      transform: scale(1.08);
    }
    @keyframes pulse {
      0% { transform: scale(1); }
      50% { transform: scale(1.05); }
      100% { transform: scale(1); }
    }

    /* ================== */
    /* RESPONSIVE DESIGN */
    /* ================== */
    @media (max-width: 768px) {
      .contact-header {
        font-size: 32px;
        margin-top: 60px;
      }
      .contact-description {
        font-size: 16px;
        padding: 0 15px;
      }
      .contact-form {
        padding: 25px;
        margin: 0 15px;
      }
      .contact-form button {
        width: 100%;
      }
      .wa-direct a {
        width: 100%;
        max-width: 350px;
        justify-content: center;
      }
    }

    @media (max-width: 480px) {
      .contact-header {
        font-size: 26px;
      }
      .contact-description {
        font-size: 15px;
      }
      .contact-form {
        padding: 20px;
      }
      .contact-form input,
      .contact-form textarea {
        font-size: 14px;
      }
      .wa-direct a {
        font-size: 16px;
        padding: 12px 20px;
      }
    }
  </style>
</head>
<body>
  <h2 class="contact-header">Contact Me</h2>
  <p class="contact-description">
    Ingin berdiskusi, berbagi ide, atau bekerja sama?  
    Hubungi saya langsung melalui WhatsApp atau isi form berikut ✨
  </p>

  <form class="contact-form" id="contactForm">
    <label for="name">Nama</label>
    <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required>

    <label for="message">Pesan</label>
    <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda..." required></textarea>

    <button type="submit"><i class="fab fa-whatsapp"></i> Kirim via WhatsApp</button>
  </form>

  <div class="wa-direct">
    <a href="https://wa.me/6283801768019" target="_blank">
      <i class="fab fa-whatsapp"></i> Chat Langsung
    </a>
  </div>

  <script>
    document.getElementById("contactForm").addEventListener("submit", function(e) {
      e.preventDefault();
      const name = document.getElementById("name").value;
      const email = document.getElementById("email").value;
      const message = document.getElementById("message").value;

      const phoneNumber = "6283801768019"; // ganti dengan nomor WA kamu
      const url = `https://wa.me/${phoneNumber}?text=Halo, saya ${name} (${email}):%0A${message}`;
      window.open(url, "_blank");
    });
  </script>
</body>
</html>

<?php include 'layout_footer.php'; ?>
