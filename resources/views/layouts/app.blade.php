<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="Labuan Bajo 2.jpeg" />
    <title>Labuan Bajo</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
</head>

<body>
    @include('partials.sidebar')
    <section class="home-section">
    <nav>
        <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        </div>
        <div class="profile-details">
        <span class="admin_name">Admin Labuan Bajo</span>
        </div>
    </nav>

    <div class="home-content">
        @yield('content')
    </div>
    </section>

    <script>
    let sidebar = document.querySelector(".sidebar");
			let sidebarBtn = document.querySelector(".sidebarBtn");
			sidebarBtn.onclick = function () {
				sidebar.classList.toggle("active");
				if (sidebar.classList.contains("active")) {
					sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
				} else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
			};
            function showDetails(alamat, nama, destinasi, price) {
        let nomorhp = event.target.getAttribute('data-nomorhp');
        alert(`Alamat: ${alamat}\nNama: ${nama}\nDestinasi: ${destinasi}\nHarga: ${price}\nNomor HP: ${nomorhp}`);

    </script>
</body>

</html>
