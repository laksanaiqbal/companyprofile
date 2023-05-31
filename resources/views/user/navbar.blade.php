<nav data-aos="fade-down" data-aos-duration="1000">
    <div class="logo">
        <img src="assets/logo/logo.png" class="img-fluid">
        <!-- <h4><strong>lksn | DIGITAL</strong></h4> -->
    </div>
    <Ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#biodata">About</a></li>
        <li><a href="#resume">CV/Resume</a></li>
        <li><a href="#layanan">Portofolio</a></li>
    </Ul>
    <div class="menu-toggle">
        <input type="checkbox">
        <span></span>
        <span></span>
        <span></span>
    </div>
</nav>

<script>
    const menuToggle = document.querySelector(".menu-toggle input");
    const nav = document.querySelector("nav ul");

    menuToggle.addEventListener("click", function() {
        nav.classList.toggle("slide");
    });
</script>