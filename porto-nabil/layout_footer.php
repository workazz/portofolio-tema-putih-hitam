<footer class="site-footer">
  <div class="footer-container">
    <h2 class="footer-logo">NABIL.DEV</h2>
    <p class="footer-desc">
      Terima kasih telah mengunjungi portfolio saya ✨<br>
      Mari terhubung melalui sosial media berikut.
    </p>
    <div class="footer-socials">
      <a href="https://www.instagram.com/react.abiiil?igsh=dDR4YWx3MDA3ZHh0" target="_blank"><i class="fab fa-instagram"></i></a>
      <a href="https://www.tiktok.com/@workazzz.js?_t=ZS-8zhY9XxkhGc&_r=1" target="_blank"><i class="fab fa-tiktok"></i></a>
      <a href="https://www.linkedin.com/in/nabil-ridho-pratama-464598360?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" target="_blank"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://github.com/workazz" target="_blank"><i class="fab fa-github"></i></a>
    </div>
    <p class="footer-copy">&copy; <?php echo date("Y"); ?> Nabil Ridho Pratama. All Rights Reserved.</p>
  </div>
</footer>

<style>
  .site-footer {
    background: #111;
    color: #eee;
    padding: 60px 20px 30px;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  /* animasi background bulatan */
  .site-footer::before {
    content: "";
    position: absolute;
    top: -150px; left: -150px;
    width: 300px; height: 300px;
    background: rgba(255,255,255,0.05);
    border-radius: 50%;
    animation: float 12s infinite linear;
  }
  .site-footer::after {
    content: "";
    position: absolute;
    bottom: -120px; right: -120px;
    width: 250px; height: 250px;
    background: rgba(255,255,255,0.08);
    border-radius: 50%;
    animation: float 15s infinite linear reverse;
  }
  @keyframes float {
    0% { transform: translateY(0) rotate(0deg); }
    50% { transform: translateY(-20px) rotate(180deg); }
    100% { transform: translateY(0) rotate(360deg); }
  }

  .footer-container {
    position: relative;
    z-index: 2;
  }

  .footer-logo {
    font-size: 28px;
    font-weight: 800;
    margin-bottom: 12px;
    letter-spacing: 2px;
    color: #fff;
    animation: fadeInDown 1.5s ease;
  }

  .footer-desc {
    font-size: 16px;
    color: #bbb;
    margin-bottom: 25px;
    animation: fadeInUp 2s ease;
  }

  .footer-socials {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 25px;
  }

  .footer-socials a {
    font-size: 22px;
    color: #fff;
    width: 50px; height: 50px;
    border-radius: 50%;
    border: 2px solid #fff;
    display: flex; align-items: center; justify-content: center;
    transition: all 0.3s ease;
  }

  .footer-socials a:hover {
    background: #fff;
    color: #111;
    transform: translateY(-6px);
    box-shadow: 0 6px 18px rgba(255,255,255,0.3);
  }

  .footer-copy {
    font-size: 14px;
    color: #777;
    margin-top: 20px;
    animation: fadeIn 2.5s ease;
  }

  @keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  @keyframes fadeInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
  }
  @keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
  }
</style>
