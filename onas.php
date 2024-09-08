<!doctype html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./src/output.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-custom">

<header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center py-3">
        <!-- Logo -->
        <div class="flex">
          <img src="Images/logo/logo.png" class="h-[30px] w-[30px]">
          <div class="pl-2 text-3xl font-italic font-semibold text-black">Rautia</div>

        </div>
        <!-- Navigation Links -->
        <div class="hidden md:flex space-x-8 items-center">
          <a href="hlavni-stranka" class="text-black hover:text-gray-700">Domů</a>
          <a href="o-nas" class="text-black hover:text-gray-700">O nás</a>
          <a href="kontakt" class="text-black hover:text-gray-700">Kontakt</a>
          <a href="prodej" class="text-white bg-orange-400 hover:bg-yellow-500 px-4 py-2 rounded-full">Koťátka na
            prodej</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
          <button id="menu-btn" class="focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
              xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden">
      <a href="hlavni-stranka" class="block text-black hover:bg-gray-200 px-4 py-2">Domů</a>
      <a href="o-nas" class="block text-black hover:bg-gray-200 px-4 py-2">O nás</a>
      <a href="kontakt" class="block text-black hover:bg-gray-200 px-4 py-2">Kontakt</a>
      <a href="prodej" class="block text-white bg-orange-400 hover:bg-yellow-500 px-4 py-2 rounded-m">Koťátka na
        prodej</a>
    </div>
  </header>


  <script>
    const menuBtn = document.getElementById('menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    menuBtn.addEventListener('click', () => {
      mobileMenu.classList.toggle('hidden');
    });
  </script>

  <div class="relative w-full h-[250px] md:h-[350px] overflow-hidden">
    <img class="object-top" src="Images/background_photos/thumb-1920-1178141.jpg" alt="background-banner-catonthehands"
      class="w-full h-full object-cover">
    <div
      class="absolute inset-0 flex flex-col items-start justify-center text-center text-white bg-black bg-opacity-50 p-4 sm:pl-14 md:pl-28">
      <h2 class="text-3xl md:text-5xl px-3 font-semibold text-white drop-shadow-lg text-start">
      Náš příběh</h2>
      <h1 class="text-lg md:text-2xl px-3 text-orange-300 font-medium drop-shadow-lg text-start md:pt-2">
      Přečtěte si, jak jsme našli lásku<br>k hadrovým panenkám</h1>
    </div>
  </div>



  <div class="flex flex-col sm:flex-row-reverse items-center justify-center m-5">
    <div class="h-[400px] w-[300px] sm:h-[400px] sm:w-[300px] md:h-[450px] md:w-[350px] ">
      <img src="Images/background_photos/IMG_3163 2.JPG" alt="Koťata" class="h-full w-full object-cover rounded-3xl">
    </div>
    <div class="sm:w-1/2 px-6 sm:p-6 flex flex-col justify-center pt-7 sm:pt-0">
      <h2 class="text-2xl font-bold mb-2 text-[20px] sm:text-[25px] md:text-2xl ">Náš začátek</h2>
      <p class="text-gray-700 mb-2 text-[15px] sm:text-[20px] md:text-1xl">
        Začalo to tím že jsme synovi pořídili Ragdolla Zachariáše. Toto plemeno nás tak uchvátilo, že jsme mu za
        nedlouho
        pořídili kamarádku Xenu (Claudii). Po čase přibyli další Kočičky (Sofie, Ela (Ema), Tea (Thea) a Rumia.
        Po určité době jsme se rozhodli kočičky chovat, pro jejich skvělou povahu.
        Klademe důraz na kvalitní stravu, krmíme syrovým masem, granulemi Ontario, N&D, konzervami Cosma, Brit. </p>
      </p>
    </div>
  </div>

  <div class="flex flex-col sm:flex-row-reverse items-center justify-center py-10 bg-zinc-200">
    <div class="sm:w-3/4 px-6 sm:p-6 flex flex-col justify-center pt-7 sm:pt-0">
      <p class="text-gray-700 mb-2 text-[15px] sm:text-[20px] md:text-1xl">Patříme pod BOHEMIA CAT CLUB
      BCC byl založen v roce 1992 a téhož roku byl přijat za právoplatného 
      člena mezinárodní organizace chovatelů koček – World Cat Federation – WCF. 
      Klub sdružující chovatele koček sídlí na adrese Flájská 1872/3 v Praze a je právním 
      subjektem s působností v České republice.</p>
    </div>
  </div>

  <div class="flex flex-col sm:flex-row-reverse items-center justify-center py-10">
    <div class="sm:w-3/4 flex flex-col justify-center">
      <div class="h-[150px] w-180 sm:h-[200px] md:h-[300px]">
        <img src="Images/background_photos/c704ede6b781c12acc5de582b1fb62b7.jpeg" alt="Koťata"
          class="h-full w-full object-cover rounded-3xl">
      </div>
    </div>
  </div>


  <div>
    <!-- Bílá část pozadí -->
    <div class="bg-white"></div>

    <!-- Vlnovka a přechod na světle hnědou -->
    <div class="inset-0 bg-white">
      <svg class="" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#f1e4d3" fill-opacity="1"
          d="M0,256L48,229.3C96,203,192,149,288,160C384,171,480,245,576,256C672,267,768,213,864,181.3C960,149,1056,139,1152,149.3C1248,160,1344,192,1392,208L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
        </path>
      </svg>



      <!-- Sekce s častými dotazy -->
      <div class="relative pt-20 pb-32 bg-bgbrown">

      <div class="container mx-auto p-4 flex-col flex sm:flex-row justify-center items-center">
  <?php
  $servername = "md412.wedos.net"; 
  $username = "w357777_cats"; 
  $password = "BuHJB8gq"; 
  $dbname = "d357777_cats"; 
  $conn = new mysqli($servername, $username, $password, $dbname);

$conn->set_charset("utf8");
$sql = "SELECT jmeno, pohlavi, datum_narozeni, zbarveni, info, fotka FROM cats";
$result = $conn->query($sql);

  // Pokud existují nějaké výsledky z databáze, zobrazíme je
  if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
          // Každá kočka bude mít svůj vlastní "card"
          echo "<div class='bg-white rounded-lg shadow-lg m-4 p-6 max-w-xs text-center w-80'>";
          echo "<img src='data:image/jpeg;base64," . base64_encode($row['fotka']) . "' alt='" . $row['jmeno'] . "' class='w-full object-scale-down fit h-[200px] rounded-t-lg'>";
          echo "<h2 class='text-2xl font-bold mt-4 font-custom'>" . $row['jmeno'] . "</h2>";
          echo "<p class='text-gray-700 font-custom'>" . $row['pohlavi'] . "</p>";
          echo "<p class='text-gray-500 font-custom'>" . date("d.m.Y", strtotime($row['datum_narozeni'])) . "</p>";
          echo "<p class='text-blue-500 font-semibold font-custom'>" . $row['zbarveni'] . "</p>";
          echo "<p class='mt-4 text-gray-600 font-custom'>" . $row['info'] . "</p>";
          echo "</div>";
      }
  } else {
      echo "<p class='text-gray-500'>Žádné kočky nebyly nalezeny.</p>";
  }
  
  // Zavření připojení
  $conn->close();
  ?>
</div>
      </div>
    </div>
  </div>
<div>
  
</div>



<footer class="bg-gradient-to-r from-green-600 via-green-700 to-green-800 w-full font-custom text-white">
    <div class="p-2 pb-20">
      <h1 class="text-center font-bold text-[20px] md:text-4xl p-4 pb-10">Ragdoll-Rautia.cz</h1>
      <div class="flex flex-row justify-around">
        <div class="flex items-center">
          <img src="Images/logo/logo.png" class="h-[50px] w-[50px] md:h-[90px] md:w-[90px]">
          <a href="#" class="text-xl md:text-3xl font-bold pl-2">Rodinná chovatelská <br> stanice Rautia.</a>
        </div>
  
        <div class="text-right">
          <a href="#" class="text-xl md:text-2xl pb-3 font-bold">Stránky, které doporučujeme</a>
          <div>
            <a href="https://www.felinoterapie-nchk.cz/clanky/nezavisly-chovatelsky-klub/klubove-dokumenty/nove-metody-testovani-tymu-pro-aat-a-aaa.html"
              class="pages-link" target="_blank">Nezávislý chovatelský klub<br></a>
            <a href="https://www.zoohit.cz/" class="pages-link" target="_blank">Zoohit<br></a>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-black font-thin flex justify-around"><p>Copyright © 2024 Rautia</p><p>Create by <a href="https://www.thomastomanec.cz/">@ThomasTomanec</a></p>   </div>
  </footer>
</body>

</html>