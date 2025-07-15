<html class="scroll-smooth" lang="id">
 <head>
  <meta charset="utf-8"/>
  <meta content="width=device-width, initial-scale=1" name="viewport"/>
  <title>
   Himpunan Organisasi - Aplikasi Web Interaktif
  </title>
  <script src="https://cdn.tailwindcss.com">
  </script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&amp;display=swap" rel="stylesheet"/>
  <style>
   body {
      font-family: "Poppins", sans-serif;
      scroll-behavior: smooth;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      min-height: 100vh;
      color: #2d3748;
    }
    /* Custom scrollbar for better UX */
    ::-webkit-scrollbar {
      width: 8px;
    }
    ::-webkit-scrollbar-track {
      background: #e2e8f0;
      border-radius: 10px;
    }
    ::-webkit-scrollbar-thumb {
      background: #667eea;
      border-radius: 10px;
    }
  </style>



 </head>
 <body class="flex flex-col min-h-screen">
  <!-- Navbar -->
  <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-lg border-b border-indigo-300">
   <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex justify-between items-center h-16">
    <a class="text-indigo-700 font-extrabold text-3xl tracking-wide hover:text-indigo-900 transition" href="#home">
     Himpunan
     <span class="text-pink-600">
      Organisasi
     </span>
    </a>
    <div class="hidden md:flex space-x-10 font-semibold text-gray-700">
     <a class="hover:text-indigo-600 transition duration-300 relative group" href="#home">
      Home
      <span class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 transition-all">
      </span>
     </a>
     <a class="hover:text-indigo-600 transition duration-300 relative group" href="#visi-misi">
      Visi &amp; Misi
      <span class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 transition-all">
      </span>
     </a>
     <a class="hover:text-indigo-600 transition duration-300 relative group" href="#kegiatan">
      Kegiatan
      <span class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 transition-all">
      </span>
     </a>
     <a class="hover:text-indigo-600 transition duration-300 relative group" href="#galeri">
      Galeri
      <span class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 transition-all">
      </span>
     </a>
     <a class="hover:text-indigo-600 transition duration-300 relative group" href="#kritik-saran">
      Kritik &amp; Saran
      <span class="absolute left-0 -bottom-1 w-0 group-hover:w-full h-0.5 bg-indigo-600 transition-all">
      </span>
     </a>
    </div>
    <button class="hidden md:inline-block bg-indigo-600 hover:bg-pink-600 text-white font-semibold px-5 py-2 rounded-full shadow-lg transition duration-300 focus:outline-none focus:ring-4 focus:ring-pink-400" id="btn-login">
     <i class="fas fa-sign-in-alt mr-2">
     </i>
     Login
    </button>
    <button aria-label="Toggle menu" class="md:hidden text-indigo-700 hover:text-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-400" id="btn-menu">
     <i class="fas fa-bars fa-lg">
     </i>
    </button>
   </div>
   <div class="md:hidden bg-white/95 backdrop-blur-md border-t border-indigo-300 hidden" id="mobile-menu">
    <a class="block px-6 py-3 border-b border-indigo-200 hover:bg-indigo-50 font-semibold text-indigo-700" href="#home">
     Home
    </a>
    <a class="block px-6 py-3 border-b border-indigo-200 hover:bg-indigo-50 font-semibold text-indigo-700" href="#visi-misi">
     Visi &amp; Misi
    </a>
    <a class="block px-6 py-3 border-b border-indigo-200 hover:bg-indigo-50 font-semibold text-indigo-700" href="#kegiatan">
     Kegiatan
    </a>
    <a class="block px-6 py-3 border-b border-indigo-200 hover:bg-indigo-50 font-semibold text-indigo-700" href="#galeri">
     Galeri
    </a>
    <a class="block px-6 py-3 border-b border-indigo-200 hover:bg-indigo-50 font-semibold text-indigo-700" href="#kritik-saran">
     Kritik &amp; Saran
    </a>
    <button class="w-full text-left px-6 py-3 font-semibold text-pink-600 hover:bg-pink-50 transition" id="btn-login-mobile">
     <i class="fas fa-sign-in-alt mr-2">
     </i>
     Login
    </button>
   </div>
  </nav>
  <!-- Hero Section -->
  <section class="pt-24 pb-20 bg-gradient-to-r from-indigo-700 via-pink-600 to-indigo-700 text-white" id="home">
   <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 flex flex-col-reverse md:flex-row items-center gap-12">
    <div class="md:w-1/2 space-y-6">
     <h1 class="text-5xl font-extrabold leading-tight drop-shadow-lg">
      Selamat Datang di
      <br/>
      <span class="text-pink-400">
       Himpunan Organisasi
      </span>
     </h1>
     <p class="text-lg md:text-xl font-light drop-shadow-md max-w-xl">
      Wadah kolaborasi, inovasi, dan pengembangan diri untuk kemajuan
          bersama. Bergabunglah dan jadilah bagian dari perubahan positif!
     </p>
     <a class="inline-block bg-pink-500 hover:bg-pink-600 transition rounded-full px-8 py-3 font-semibold shadow-lg drop-shadow-lg" href="#kritik-saran">
      Berikan Kritik &amp; Saran
     </a>
    </div>
    <div class="md:w-1/2 flex justify-center">
     <img alt="Gedung modern himpunan organisasi dengan bendera dan logo organisasi di depan, suasana cerah dan bersih" class="rounded-3xl shadow-2xl w-full max-w-md object-cover" height="400" loading="lazy" src="Universitas-Pelita-Bangsa-A-680x437.jpg" width="600"/>
    </div>
   </div>
  </section>
  <!-- Visi & Misi Section -->
  <section class="max-w-5xl mx-auto px-6 sm:px-8 lg:px-12 py-20 bg-white rounded-3xl shadow-2xl -mt-20 relative z-10" id="visi-misi">
   <h2 class="text-4xl font-extrabold text-indigo-700 mb-12 text-center">
    Visi &amp; Misi Kami
   </h2>
   <div class="grid md:grid-cols-2 gap-16">
    <div class="space-y-6">
     <h3 class="text-3xl font-bold text-pink-600 border-b-4 border-pink-400 inline-block pb-2">
      Visi
     </h3>
     <p class="text-gray-700 text-lg leading-relaxed">
      Menjadi himpunan organisasi terdepan yang inovatif, inklusif, dan
          berkontribusi nyata dalam pembangunan masyarakat yang berkelanjutan.
     </p>
    </div>
    <div class="space-y-6">
     <h3 class="text-3xl font-bold text-indigo-700 border-b-4 border-indigo-400 inline-block pb-2">
      Misi
     </h3>
     <ul class="list-disc list-inside text-gray-700 space-y-3 text-lg leading-relaxed">
      <li>
       Mendorong partisipasi aktif anggota dalam berbagai kegiatan sosial
            dan pengembangan diri.
      </li>
      <li>
       Membangun jaringan kerja sama yang kuat dengan berbagai pihak
            terkait.
      </li>
      <li>
       Menyelenggarakan program-program yang mendukung pengembangan
            kapasitas anggota.
      </li>
      <li>
       Mengembangkan budaya organisasi yang transparan, akuntabel, dan
            profesional.
      </li>
     </ul>
    </div>
   </div>
  </section>
  <!-- Kegiatan Section -->
  <section class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-20" id="kegiatan">
   <h2 class="text-4xl font-extrabold text-indigo-700 mb-12 text-center">
    Kegiatan Terbaru
   </h2>
   <div aria-label="Daftar kegiatan terbaru himpunan organisasi" class="grid grid-cols-1 md:grid-cols-3 gap-10">
    <article class="bg-white rounded-3xl shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" tabindex="0">
     <img alt="Peserta workshop pengembangan diri sedang mengikuti pelatihan dengan instruktur di depan kelas, suasana ceria dan interaktif" class="w-full h-56 object-cover" height="400" loading="lazy" src="OIP.jpeg" width="600"/>
     <div class="p-6">
      <h3 class="text-2xl font-semibold text-indigo-700 mb-3">
       Workshop Pengembangan Diri
      </h3>
      <p class="text-gray-700 mb-4">
       Workshop intensif untuk meningkatkan soft skills anggota dalam
            komunikasi dan kepemimpinan.
      </p>
      <time class="text-sm text-gray-400 font-mono tracking-wide" datetime="2024-05-10">
       10 Mei 2024
      </time>
     </div>
    </article>
    <article class="bg-white rounded-3xl shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" tabindex="0">
     <img alt="Anggota himpunan organisasi sedang melakukan kegiatan pengabdian masyarakat di desa dengan membagikan bantuan, suasana penuh semangat dan kebersamaan" class="w-full h-56 object-cover" height="400" loading="lazy" src="OIP.UVIdWKza-baXS20efj9TPAHaEK" width="600"/>
     <div class="p-6">
      <h3 class="text-2xl font-semibold text-indigo-700 mb-3">
       Pengabdian Masyarakat
      </h3>
      <p class="text-gray-700 mb-4">
       Program rutin membantu masyarakat sekitar dengan edukasi dan
            bantuan sosial.
      </p>
      <time class="text-sm text-gray-400 font-mono tracking-wide" datetime="2024-04-22">
       22 April 2024
      </time>
     </div>
    </article>
    <article class="bg-white rounded-3xl shadow-xl overflow-hidden transform hover:scale-105 transition-transform duration-300 cursor-pointer" tabindex="0">
     <img alt="Peserta seminar teknologi inovatif sedang mendengarkan pembicara di auditorium modern, suasana serius dan penuh antusiasme" class="w-full h-56 object-cover" height="400" loading="lazy" src="cewa.jpeg" width="600"/>
     <div class="p-6">
      <h3 class="text-2xl font-semibold text-indigo-700 mb-3">
       Seminar Teknologi Inovatif
      </h3>
      <p class="text-gray-700 mb-4">
       Seminar membahas tren teknologi terbaru dan peluang inovasi di era
            digital.
      </p>
      <time class="text-sm text-gray-400 font-mono tracking-wide" datetime="2024-03-15">
       15 Maret 2024
      </time>
     </div>
    </article>
   </div>
  </section>
  <!-- Galeri Section -->
  <section class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 py-20 bg-gradient-to-tr from-indigo-50 to-pink-50 rounded-3xl shadow-2xl" id="galeri">
   <h2 class="text-4xl font-extrabold text-indigo-700 mb-12 text-center">
    Galeri Foto &amp; Video
   </h2>
   <div aria-label="Galeri foto kegiatan himpunan organisasi" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
    <img alt="Foto close-up peserta workshop sedang berdiskusi dan mencatat materi di kelas, ekspresi serius dan fokus" class="rounded-3xl shadow-lg object-cover w-full h-56 cursor-pointer hover:scale-105 transition-transform duration-300" height="400" loading="lazy" src="kegiatan.jpeg" tabindex="0" width="600"/>
    <img alt="Foto anggota himpunan organisasi sedang membagikan bantuan sembako kepada warga desa, suasana penuh kebahagiaan dan gotong royong" class="rounded-3xl shadow-lg object-cover w-full h-56 cursor-pointer hover:scale-105 transition-transform duration-300" height="400" loading="lazy" src="cewa.jpeg" tabindex="0" width="600"/>
    <img alt="Foto suasana seminar teknologi inovatif dengan peserta dan pembicara di panggung, lighting modern dan profesional" class="rounded-3xl shadow-lg object-cover w-full h-56 cursor-pointer hover:scale-105 transition-transform duration-300" height="400" loading="lazy" src="01.jpg"tabindex="0" width="600"/>
    <img alt="Foto rapat pengurus himpunan organisasi sedang berdiskusi di ruang rapat modern, suasana serius dan kolaboratif" class="rounded-3xl shadow-lg object-cover w-full h-56 cursor-pointer hover:scale-105 transition-transform duration-300" height="400" loading="lazy" src="02 .jpg" tabindex="0" width="600"/>
    <img alt="Foto anggota himpunan organisasi sedang melakukan kegiatan outdoor di taman kota, suasana cerah dan penuh semangat" class="rounded-3xl shadow-lg object-cover w-full h-56 cursor-pointer hover:scale-105 transition-transform duration-300" height="400" loading="lazy" src="03 .jpg" tabindex="0" width="600"/>
    <img alt="Foto pelatihan kepemimpinan dengan peserta sedang berlatih simulasi di kelas, suasana interaktif dan penuh motivasi" class="rounded-3xl shadow-lg object-cover w-full h-56 cursor-pointer hover:scale-105 transition-transform duration-300" height="400" loading="lazy" src="04 .jpg" tabindex="0" width="600"/>
   </div>
   <div aria-label="Video dokumentasi kegiatan himpunan organisasi" class="mt-16 max-w-4xl mx-auto aspect-video rounded-3xl overflow-hidden shadow-2xl border-8 border-white">
    <iframe allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" class="w-full h-full" frameborder="0" src="vidio fb.mp4" title="Video dokumentasi kegiatan himpunan organisasi">
    </iframe>
   </div>
  </section>
  <!-- Kritik & Saran Section -->
  <section class="max-w-3xl mx-auto px-6 sm:px-8 lg:px-12 py-20 bg-white rounded-3xl shadow-2xl" id="kritik-saran">
   <h2 class="text-4xl font-extrabold text-indigo-700 mb-10 text-center">
    Kritik &amp; Saran
   </h2>
   <form action="simpan.php" class="space-y-8" id="feedback-form" >
    <div>
     <label class="block text-gray-700 font-semibold mb-2 text-lg" for="name">
      Nama 
     </label>
     <input class="w-full border border-indigo-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-4 focus:ring-pink-300 transition" id="name" name="nama" placeholder="Masukkan nama Anda" required="" type="text"/>
    </div>
    <div>
     <label class="block text-gray-700 font-semibold mb-2 text-lg" for="email">
      Email
     </label>
     <input class="w-full border border-indigo-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-4 focus:ring-pink-300 transition" id="email" name="email" placeholder="Masukkan email Anda" required="" type="email"/>
    </div>
    <div>
     <label class="block text-gray-700 font-semibold mb-2 text-lg" for="role">
      Peran Anda
     </label>
     <select class="w-full border border-indigo-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-4 focus:ring-pink-300 transition" id="role" name="peranan_anda" required="">
      <option disabled="" selected="" value="">
       Pilih peran Anda
      </option>
      <option value="anggota">
       Anggota
      </option>
      <option value="pengurus">  
       Pengurus
      </option>
      <option value="pengunjung">
       Pengunjung
      </option>
      <option value="lainnya">
       Lainnya
      </option>
     </select>
    </div>
    <div>
     <label class="block text-gray-700 font-semibold mb-2 text-lg" for="message">
      Kritik &amp; Saran
     </label>
     <textarea class="w-full border border-indigo-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-4 focus:ring-pink-300 transition resize-none" id="saran" name="saran" placeholder="Tuliskan kritik dan saran Anda untuk kemajuan organisasi" required="" rows="5"></textarea>
    </div>
    <button class="w-full bg-pink-600 hover:bg-pink-700 text-white font-extrabold py-4 rounded-full shadow-lg transition duration-300 focus:outline-none focus:ring-4 focus:ring-pink-400" type="submit">
     Kirim
    </button>
   </form>
   <div class="hidden mt-6 p-4 bg-green-100 text-green-800 rounded-xl font-semibold text-center text-lg" id="feedback-success" role="alert">
    Terima kasih atas kritik dan saran Anda!
   </div>
  </section>
  <!-- Footer -->
  <footer class="bg-indigo-900 text-indigo-200 py-8 mt-auto">
   <div class="max-w-7xl mx-auto px-6 sm:px-8 lg:px-12 text-center space-y-3">
    <p class="text-sm font-light select-none">
     © 2024 Himpunan Organisasi. All rights reserved.
    </p>
    <p class="text-xs font-light select-none">
     Dibuat dengan ❤️ oleh Tim Pengembang Himpunan Organisasi
    </p>
   </div>
  </footer>
  <!-- Login Modal -->
  <div aria-labelledby="login-modal-title" aria-modal="true" class="fixed inset-0 bg-black bg-opacity-70 flex items-center justify-center z-50 hidden" id="login-modal" role="dialog">
   <div class="bg-white rounded-3xl shadow-2xl max-w-md w-full p-8 relative" role="document">
    <button aria-label="Close login modal" class="absolute top-5 right-5 text-gray-500 hover:text-pink-600 focus:outline-none focus:ring-2 focus:ring-pink-400 rounded-full p-1 transition" id="btn-close-login">
     <i class="fas fa-times fa-lg">
     </i>
    </button>
    <h3 class="text-3xl font-extrabold text-indigo-700 mb-8 text-center" id="login-modal-title">
     Login Himpunan Organisasi
    </h3>
    <div class="mb-8 flex justify-center space-x-6">
     <button aria-pressed="true" class="px-6 py-3 rounded-full font-semibold shadow-lg bg-indigo-600 text-white hover:bg-pink-600 transition focus:outline-none focus:ring-4 focus:ring-pink-400" id="btn-login-admin">
      Admin
     </button>
     <button aria-pressed="false" class="px-6 py-3 rounded-full font-semibold shadow-lg bg-gray-300 text-gray-700 hover:bg-gray-400 transition focus:outline-none focus:ring-4 focus:ring-pink-400" id="btn-login-anggota">
      Anggota
     </button>
    </div>
    <form class="space-y-6" id="login-form" novalidate="">
     <div>
      <label class="block text-gray-700 font-semibold mb-2 text-lg" for="username">
       Username
      </label>
      <input autocomplete="username" class="w-full border border-indigo-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-4 focus:ring-pink-300 transition" id="username" name="username" placeholder="Masukkan username" required="" type="text"/>
     </div>
     <div>
      <label class="block text-gray-700 font-semibold mb-2 text-lg" for="password">
       Password
      </label>
      <input autocomplete="current-password" class="w-full border border-indigo-300 rounded-xl px-4 py-3 focus:outline-none focus:ring-4 focus:ring-pink-300 transition" id="password" name="password" placeholder="Masukkan password" required="" type="password"/>
     </div>
     <button class="w-full bg-pink-600 hover:bg-pink-700 text-white font-extrabold py-4 rounded-full shadow-lg transition duration-300 focus:outline-none focus:ring-4 focus:ring-pink-400" type="submit">
      Masuk
     </button>
    </form>
    <div class="hidden mt-6 text-red-600 font-semibold text-center text-lg" id="login-error" role="alert">
    </div>
   </div>
  </div>
  <script>
   // Navbar mobile menu toggle
    const btnMenu = document.getElementById("btn-menu");
    const mobileMenu = document.getElementById("mobile-menu");
    btnMenu.addEventListener("click", () => {
      mobileMenu.classList.toggle("hidden");
    });

    // Login modal toggle
    const btnLogin = document.getElementById("btn-login");
    const btnLoginMobile = document.getElementById("btn-login-mobile");
    const loginModal = document.getElementById("login-modal");
    const btnCloseLogin = document.getElementById("btn-close-login");
    const btnLoginAdmin = document.getElementById("btn-login-admin");
    const btnLoginAnggota = document.getElementById("btn-login-anggota");
    const loginForm = document.getElementById("login-form");
    const loginError = document.getElementById("login-error");
    let currentRole = "admin"; // default selected role

    function openLoginModal() {
      loginModal.classList.remove("hidden");
      loginError.classList.add("hidden");
      loginError.textContent = "";
      loginForm.reset();
      currentRole = "admin";
      btnLoginAdmin.setAttribute("aria-pressed", "true");
      btnLoginAdmin.classList.add("bg-indigo-600", "text-white");
      btnLoginAdmin.classList.remove("bg-gray-300", "text-gray-800");
      btnLoginAnggota.setAttribute("aria-pressed", "false");
      btnLoginAnggota.classList.remove("bg-indigo-600", "text-white");
      btnLoginAnggota.classList.add("bg-gray-300", "text-gray-800");
    }

    btnLogin.addEventListener("click", openLoginModal);
    btnLoginMobile.addEventListener("click", () => {
      mobileMenu.classList.add("hidden");
      openLoginModal();
    });
    btnCloseLogin.addEventListener("click", () => {
      loginModal.classList.add("hidden");
    });

    btnLoginAdmin.addEventListener("click", () => {
      currentRole = "admin";
      btnLoginAdmin.setAttribute("aria-pressed", "true");
      btnLoginAdmin.classList.add("bg-indigo-600", "text-white");
      btnLoginAdmin.classList.remove("bg-gray-300", "text-gray-800");
      btnLoginAnggota.setAttribute("aria-pressed", "false");
      btnLoginAnggota.classList.remove("bg-indigo-600", "text-white");
      btnLoginAnggota.classList.add("bg-gray-300", "text-gray-800");
    });

    btnLoginAnggota.addEventListener("click", () => {
      currentRole = "anggota";
      btnLoginAnggota.setAttribute("aria-pressed", "true");
      btnLoginAnggota.classList.add("bg-indigo-600", "text-white");
      btnLoginAnggota.classList.remove("bg-gray-300", "text-gray-800");
      btnLoginAdmin.setAttribute("aria-pressed", "false");
      btnLoginAdmin.classList.remove("bg-indigo-600", "text-white");
      btnLoginAdmin.classList.add("bg-gray-300", "text-gray-800");
    });

    // Simulated database for demo purposes
    const usersDB = {
      admin: [
        { username: "admin1", password: "adminpass1" },
        { username: "admin2", password: "adminpass2" },
      ],
      anggota: [
        { username: "user1", password: "userpass1" },
        { username: "user2", password: "userpass2" },
        { username: "user3", password: "userpass3" },
      ],
    };

    loginForm.addEventListener("submit", (e) => {
      e.preventDefault();
      loginError.classList.add("hidden");
      loginError.textContent = "";

      if (!currentRole) {
        loginError.textContent = "Silakan pilih peran login: Admin atau Anggota.";
        loginError.classList.remove("hidden");
        return;
      }

      const username = loginForm.username.value.trim();
      const password = loginForm.password.value.trim();

      if (!username || !password) {
        loginError.textContent = "Username dan password wajib diisi.";
        loginError.classList.remove("hidden");
        return;
      }

      // Check credentials in simulated DB
      const userList = usersDB[currentRole];
      const userFound = userList.find(
        (user) => user.username === username && user.password === password
      );

      if (userFound) {
        loginModal.classList.add("hidden");
        alert(
          `Login berhasil sebagai ${currentRole.toUpperCase()} dengan username: ${username}`
        );
        // Here you can redirect or load admin/anggota dashboard or connect to real DB
      } else {
        loginError.textContent = "Username atau password salah.";
        loginError.classList.remove("hidden");
      }
    });

    // Kritik & Saran form handling
    const feedbackForm = document.getElementById("feedback-form");
    const feedbackSuccess = document.getElementById("feedback-success");

    feedbackForm.addEventListener("submit", (e) => {
      e.preventDefault();

      const name = feedbackForm.name.value.trim();
      const email = feedbackForm.email.value.trim();
      const role = feedbackForm.role.value;
      const message = feedbackForm.message.value.trim();

      if (!name || !email || !role || !message) {
        alert("Mohon lengkapi semua field sebelum mengirim.");
        return;
      }

      // Simple email validation 
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        alert("Format email tidak valid.");
        return;
      } 

      // Simulate sending data to server  
      setTimeout(() => {
        feedbackForm.reset();
        feedbackSuccess.classList.remove("hidden");
        setTimeout(() => {
          feedbackSuccess.classList.add("hidden");
        }, 6000);
      }, 700);
    });
  </script>
 </body>
</html>
