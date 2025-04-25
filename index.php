<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JeDolo - Annonces rencontres Ndolo, Cameroun</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            -webkit-font-smoothing: antialiased;
            overscroll-behavior-y: none;
        }
        .logo-text {
            font-size: 2rem;
            font-weight: bold;
            color: #555;
        }
        .logo-text span {
            color: #dc3545;
        }
        .heart-icon {
            color: #dc3545;
            font-size: 1.5rem;
        }
        .search-area {
            background-color: #fff5f5;
            border-radius: 0;
            padding: 20px;
            margin: 20px 0;
        }
        .toggle-switch {
            position: relative;
            display: inline-block;
            width: 40px;
            height: 20px;
            /* Removed margin-right, use gap in flex container */
        }
        .toggle-switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }
        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 34px;
        }
        .slider:before {
            position: absolute;
            content: "";
            height: 16px;
            width: 16px;
            left: 2px;
            bottom: 2px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }
        input:checked + .slider {
            background-color: #dc3545;
        }
        input:checked + .slider:before {
            transform: translateX(20px);
        }
        .vip-badge {
            background-color: #dc3545;
            color: white;
            padding: 2px 8px;
            border-radius: 0;
            font-size: 12px;
        }
        .card {
            border: none;
            border-radius: 0;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }
        .card:hover, .card:focus {
            background: #f1f1f1;
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .certified-badge {
            color: #28a745;
            font-weight: bold;
        }
        .accent-color {
            color: #0d6efd;
        }
        .footer {
            background-color: #dc3545;
            color: white;
            padding: 10px 0;
            margin-top: 30px;
        }
        .section-title {
            color: #0d6efd;
            font-weight: bold;
            border-bottom: 1px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        .info-box {
            background-color: #e8f4f8;
            padding: 15px;
            border-radius: 0;
            margin: 15px 0;
        }
        .emoji {
            font-size: 1.2rem;
        }
        .btn-annonce {
            background-color: #0d6efd;
            color: white;
            border-radius: 0;
            padding: 8px 15px;
        }
        .disclaimer {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            padding: 15px;
            margin: 20px 0;
            font-size: 0.9rem;
            color: #666;
        }
        .btn-outline-primary {
            /* Remove default outline styles */
            border: none;
            color: #0d6efd; /* Keep blue color for links */
        }
        .btn-outline-primary:hover {
             background-color: transparent; /* Prevent background change on hover */
             text-decoration: underline; /* Add underline on hover like a link */
        }
        .btn-publish {
             background-color: #6c757d; /* Grey background from image */
             border-color: #6c757d;
             color: white; /* White text */
             border-radius: 0.25rem; /* Slight rounding like image */
        }
        .btn-publish:hover {
            background-color: #5a6268; /* Darker grey on hover */
            border-color: #545b62;
            color: white;
        }
        .header-icon {
             color: #0d6efd; /* Blue icon color for links */
             margin-right: 0.25rem;
        }
         .publish-icon {
             color: white; /* White icon for publish button */
             margin-right: 0.25rem;
         }
         .account-icon {
             color: #dc3545; /* Red icon for account */
             margin-right: 0.25rem;
         }
         .logo-img {
             height: 55px; /* Adjust height as needed */
             width: auto;
             margin-right: 5px;
         }
         .logo-text-custom {
             font-size: 2rem;
             font-weight: bold;
             color: #777; /* Grey color for 'Je' */
         }
         .logo-text-custom span {
             color: #dc3545; /* Red color for 'dolo' */
         }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="container-fluid bg-white py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <a href="#" class="text-decoration-none">
                        <div class="d-flex align-items-center">
                            <!-- Actual Logo Image -->
                            <img src="img/logo.png" alt="Jedolo Logo" class="logo-img">
                        </div>
                    </a>
                </div>
                <div class="col-md-8 text-end d-flex align-items-center justify-content-end">
                    <!-- "Plus..." link -->
                    <a href="#" class="btn btn-link text-decoration-none me-3">
                        <i class="fas fa-info-circle header-icon"></i> Plus...
                    </a>
                    <!-- "Mon compte" link/dropdown -->
                    <div class="dropdown me-3">
                         <a href="#" class="btn btn-link text-decoration-none dropdown-toggle" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                             <i class="fas fa-user-alt account-icon"></i> Mon compte
                         </a>
                         <!-- Dropdown menu items (optional) -->
                         <!-- <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink"> ... </ul> -->
                    </div>
                    <!-- "Publier une annonce" button -->
                    <a href="#" class="btn btn-publish">
                        <i class="fas fa-cloud-upload-alt publish-icon"></i> Publier une annonce
                    </a>
                </div>
            </div>
        </div>
    <main class="container">
        <!-- Search Area -->
         <section class="search-area">
            <div class="row">
                <div class="col-12 mb-3">
                    <!-- Search Title -->
                    <h2 class="mb-3">
                        <strong>3 424</strong> Annonces rencontres <strong>Ndolo, Cameroun</strong>
                    </h2>
                    <!-- Search Form Row -->
                    <div class="row g-2 align-items-center">
                        <div class="col-md-5">
                            <input type="text" class="form-control" placeholder="Que recherchez-vous?">
                        </div>
                        <div class="col-md-2">
                            <select class="form-select">
                                <option>- Toutes -</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-select">
                                <option>Tout Cameroun</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn search-button w-100">
                                <i class="fas fa-search"></i> Chercher
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Toggles Row -->
                <div class="col-12">
                    <div class="d-flex flex-wrap gap-3 align-items-center">
                        <div class="d-flex align-items-center">
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                            <span class="toggle-label urgent ms-1"><i class="fas fa-clock"></i> Urgent</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                            <span class="toggle-label ms-1">VIP</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                            <span class="toggle-label ms-1">TOP</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span class="slider"></span>
                            </label>
                            <span class="toggle-label ms-1">Premium</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

     

    </main>
    </header>

    <!-- Main Content -->
    <main class="container">
       
       

    <div class="container-xl bg-white border rounded">
       <div class="top-home-content">
           <h2 class="font-size-22 text-muted mt-4 mb-2">
               Le <strong>Nº1</strong> des annonces <strong>Ndolo, Rencontres</strong> et <strong>Massage</strong> au
               <strong>Cameroun</strong>
           </h2>
           <div class="row my-3 font-size-16">
               <div class="col-12 col-sm-3">
                   <a title="Annonces <strong>Douala</strong>" href="petites-annonces-rencontre-douala/">
                       <svg
                           class="bi bi-marker-freq mt-n1"
                           width="1.2em"
                           height="1.2em"
                           style="fill:#777;"
                           fill="currentColor"
                           viewBox="0 0 16 16"
                           xmlns="http://www.w3.org/2000/svg"
                       >
                           <path
                               fill-rule="evenodd"
                               d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                           ></path>
                           <path
                               fill-rule="evenodd"
                               d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                           ></path>
                       </svg>
                       <strong>Douala</strong>
                       <span class="small text-grey">(<small>1 998</small>)</span>
                   </a>
               </div>
               <div class="col-12 col-sm-3">
                   <a title="Annonces <strong>Yaoundé</strong>" href="petites-annonces-rencontre-yaounde/">
                       <svg
                           class="bi bi-marker-freq mt-n1"
                           width="1.2em"
                           height="1.2em"
                           style="fill:#777;"
                           fill="currentColor"
                           viewBox="0 0 16 16"
                           xmlns="http://www.w3.org/2000/svg"
                       >
                           <path
                               fill-rule="evenodd"
                               d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                           ></path>
                           <path
                               fill-rule="evenodd"
                               d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                           ></path>
                       </svg>
                       <strong>Yaoundé</strong>
                       <span class="small text-grey">(<small>1 245</small>)</span>
                   </a>
               </div>
               <div class="col-12 col-sm-3">
                   <a title="Annonces Bafoussam" href="petites-annonces-rencontre-bafoussam/">
                       <svg
                           class="bi bi-marker-freq mt-n1"
                           width="1.2em"
                           height="1.2em"
                           style="fill:#777;"
                           fill="currentColor"
                           viewBox="0 0 16 16"
                           xmlns="http://www.w3.org/2000/svg"
                       >
                           <path
                               fill-rule="evenodd"
                               d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                           ></path>
                           <path
                               fill-rule="evenodd"
                               d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                           ></path>
                       </svg>
                       Bafoussam
                       <span class="small text-grey">(<small>118</small>)</span>
                   </a>
               </div>
               <div class="col-12 col-sm-3">
                   <a href="https://cm.jedolo.com/all-1/rencontres-massages-amour">
                       <svg
                           class="bi bi-marker-freq mt-n1"
                           width="1.2em"
                           height="1.2em"
                           style="fill:#777;"
                           fill="currentColor"
                           viewBox="0 0 16 16"
                           xmlns="http://www.w3.org/2000/svg"
                       >
                           <path
                               fill-rule="evenodd"
                               d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"
                           ></path>
                           <path
                               fill-rule="evenodd"
                               d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"
                           ></path>
                       </svg>
                       Plus de villes...
                   </a>
               </div>
           </div>
       </div>


       
        <hr class="text-secondary">
        <div class="row main-home-content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12 col-sm-6 col-md-4">
                    <ul class="list-unstyled ul_cat">
                    <li class="border shadow p-2 imgcat_fr2">
                        <h3 class="h6 cat cat-2-fr text-truncate my-1">
                        <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/" title="Rencontres - Escortes Cameroun">
                            <svg class="bi bi-massage_plus soft mb-n3 " width="2.6em" height="2.6em" style="fill:#d31f38;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 35.3 35.3">
                            <path d="M5.5 23.2l-1.3-0.4L0 25.2l2.4 0.8 -0.5 2.5 4.2-2.4 0.3-1.3 2.7-1.6c-0.4-0.4-0.8-0.9-1.2-1.3L5.5 23.2z"></path>
                            <path d="M26.6 8.5l1.4 1.2 -0.6 0.3c-2.3-3.2-7.5-2.6-10.3-0.1C13.6 6.8 6.3 6.7 5.6 13.2c-0.9 8.4 11.5 14.9 11.5 14.9S29.5 21.6 28.6 13.2c0-0.3-0.1-0.6-0.1-0.8l0.8-0.5 0.3 1.9 5.7-6.8L26.6 8.5zM29.6 11.2l-12.5 7.2v-2l11.6-6.7 -1.2-1 6.7-1.2 -4.4 5.2L29.6 11.2z"></path>
                            </svg>
                            <span class="ml-1 font-weight-bold">Rencontres - Escortes</span>
                        </a>
                        <small class="count text-muted text-truncate mb-1 d-block">&nbsp;3 209 Annonces Cameroun</small>
                        </h3>
                        <ul class="list-unstyled font-weight-light subcat subcat2">
                        <li class="show_hide2 font-size-11 text-truncate">
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/cherche-homme/">Cherche Homme</a>...</span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/cherche-femme/">Cherche Femme</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/escort-girl/">Escort Girls</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/escortes-services-erotiques/">Escortes - Services érotiques</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/rencontre-occasionnelle/">Rencontre occasionnelle</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/escort-boy/">Escort Boys</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/rencontre-amoureuse-serieuse/">Rencontre Amoureuse &amp; Sérieuse</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/annonces-sexcam-webcam/">Sexcam - Webcam</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/rencontre-amicale-correspondance/">Amitié - Correspondance</a>, </span>
                        </li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/cherche-homme/" title="Cherche Homme">Cherche Homme</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/cherche-femme/" title="Cherche Femme">Cherche Femme</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/escort-girl/" title="Escort Girls">Escort Girls</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/escortes-services-erotiques/" title="Escortes - Services érotiques">Escortes - Services érotiques</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/rencontre-occasionnelle/" title="Rencontre occasionnelle">Rencontre occasionnelle</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/escort-boy/" title="Escort Boys">Escort Boys</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/rencontre-amoureuse-serieuse/" title="Rencontre Amoureuse &amp; Sérieuse">Rencontre Amoureuse &amp; Sérieuse</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/annonces-sexcam-webcam/" title="Sexcam - Webcam">Sexcam - Webcam</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide2" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-rencontres/rencontre-amicale-correspondance/" title="Amitié - Correspondance">Amitié - Correspondance</a></li>
                        <li class="source-closed font-weight-light font-size-11 li_more2 toggle_more_less">&nbsp;&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill mt-n1 text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg>&nbsp;Plus...
                        </li>
                        <li class="source-open font-weight-light font-size-11 li_less2 toggle_more_less" style="display:none;">&nbsp;&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle-fill mt-n1 text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"></path>
                            </svg>&nbsp;Moins de catégories
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4">
                    <ul class="list-unstyled ul_cat">
                    <li class="border shadow p-2 imgcat_fr1">
                        <h3 class="h6 cat cat-1-fr text-truncate my-1">
                        <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/" title="Massages - Service Massage Cameroun">
                            <svg class="bi bi-massage_plus hard mb-n3 " width="2.6em" height="2.6em" style="fill:#dc3545;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 193">
                            <path d="M24.5,146c12.4,0,22.5,10.1,22.5,22.5s-10.1,22.5-22.5,22.5S2,180.9,2,168.5S12.1,146,24.5,146z M150.2,3.6 C140,0.5,132.8,2,126.3,8.4c-8.7,8.6-8.7,22.6-0.1,31.3s22.1,8.3,31.3,0.1c11.7-10.4,14.4-26.2,11.8-36.7c0,0,0,0,0,0 C163.4,6.5,156.6,5.6,150.2,3.6z M248.5,165.6l-35.6-27.4c-4.6-3.6-11.7-3.9-16.7-0.9l-37.9,24.9c-0.5,0.3-1.1,0.5-1.6,0.5 c-1,0-2.1-0.6-2.6-1.6c-0.7-1.4-0.2-3.1,1.1-3.9l12-7.9c5.1-3.4,8.2-9.1,8.2-15.2V65.6c0-9.8-7.2-17.3-17.1-17.3 c-5.7,0-11.7,3.9-15.2,7.1c-6.6,6-11.7,16.8-11.7,25.8c0,4.5,0,24,0,24l-27.7,18.2c-4.5,3-5.8,9.1-2.8,13.6c1.9,2.9,5,4.4,8.2,4.4 c1.3,0,2.6-0.3,3.8-0.8l37.9-24.9V91.5c0-1.6,1.2-3,2.8-3.1c1.7-0.1,3.1,1.3,3.1,2.9v27.6l-43.8,28.9c-3.8-0.4-7.8-0.7-11.7-0.8 c-17.1-0.5-48.7,5.2-49.1,26.2C51.8,183,59.9,191,69.6,191h89c5.1,0,10.2-1.5,14.5-4.3l30.4-19.9l27.7,21.2c2.6,2,5.6,2.9,8.6,2.9 c4.2,0,8.4-1.9,11.2-5.5C255.8,179.2,254.7,170.4,248.5,165.6z"></path>
                            </svg>
                            <span class="ml-1 font-weight-bold">Massages - Service Massage</span>
                        </a>
                        <small class="count text-muted text-truncate mb-1 d-block">&nbsp;170 Annonces Cameroun</small>
                        </h3>
                        <ul class="list-unstyled font-weight-light subcat subcat1">
                        <li class="show_hide1 font-size-11 text-truncate">
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-sensuel-ou-erotique/">Massage sensuel ou érotique</a>...</span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/body-to-body-massage/">Massage corps à corps</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-relaxant/">Massage Relaxant</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-integral/">Massage Intégral</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-doux/">Massage Doux</a>, </span>
                        </li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide1" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-sensuel-ou-erotique/" title="Massage sensuel ou érotique">Massage sensuel ou érotique</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide1" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/body-to-body-massage/" title="Massage corps à corps">Massage corps à corps</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide1" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-relaxant/" title="Massage Relaxant">Massage Relaxant</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide1" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-integral/" title="Massage Intégral">Massage Intégral</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide1" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/annonces-massage/massage-doux/" title="Massage Doux">Massage Doux</a></li>
                        <!-- More massage types omitted for brevity - same pattern continues -->
                        <li class="source-closed font-weight-light font-size-11 li_more1 toggle_more_less">&nbsp;&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill mt-n1 text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg>&nbsp;Plus...
                        </li>
                        <li class="source-open font-weight-light font-size-11 li_less1 toggle_more_less" style="display:none;">&nbsp;&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle-fill mt-n1 text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"></path>
                            </svg>&nbsp;Moins de catégories
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                
                <div class="col-12 col-sm-6 col-md-4">
                    <ul class="list-unstyled ul_cat">
                    <li class="border shadow p-2 imgcat_fr3">
                        <h3 class="h6 cat cat-3-fr text-truncate my-1">
                        <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/" title="Produits adultes Cameroun">
                            <svg class="bi bi-sexual_products mb-n3 " width="2.6em" height="2.6em" style="fill:#d31f38;" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 253">
                            <path d="M153.336,113.747v9.358h14.098l-13.148,13.144c-5.034-4.124-11.464-6.603-18.464-6.603c-6.38,0-12.284,2.063-17.091,5.55 c-4.808-3.487-10.711-5.55-17.091-5.55c-16.091,0-29.182,13.091-29.182,29.182c0,14.585,10.755,26.706,24.751,28.846v11.073 l-11.168,0.005v10.133l11.168,0.005v10.981l10.137,0.005l0.005-10.986l10.749-0.004v-10.133h-10.753l0-11.306 c4.186-0.833,8.049-2.567,11.385-4.986c4.808,3.487,10.711,5.55,17.091,5.55c16.091,0,29.182-13.091,29.182-29.182 c0-5.714-1.657-11.046-4.508-15.552l13.683-13.683v14.355h9.364v-30.201H153.336z M116.313,158.827c0-3.402,0.88-6.601,2.417-9.389 c1.538,2.788,2.417,5.987,2.417,9.389s-0.88,6.601-2.417,9.389C117.192,165.428,116.313,162.229,116.313,158.827z M82.13,158.827 c0-10.757,8.752-19.509,19.509-19.509c3.741,0,7.227,1.077,10.199,2.91c-3.274,4.716-5.199,10.435-5.199,16.598 s1.926,11.882,5.199,16.598c-2.972,1.833-6.458,2.91-10.199,2.91C90.882,178.336,82.13,169.584,82.13,158.827z M135.821,178.336 c-3.741,0-7.227-1.077-10.199-2.91c3.274-4.716,5.199-10.435,5.199-16.598s-1.926-11.882-5.199-16.598 c2.972-1.833,6.458-2.91,10.199-2.91c10.757,0,19.509,8.752,19.509,19.509C155.33,169.584,146.578,178.336,135.821,178.336z M2,69 c0,13.678,9.625,25.302,22,29.576V233H2v18h252v-18h-22V98.554c12.89-3.945,21.699-15.396,22-29.554v-8H2V69z M65.29,68.346 c0,6.477,6.755,31.47,31.727,31.47c21.689,0,31.202-19.615,31.202-31.47c0,11.052,7.41,31.447,31.464,31.447 c21.733,0,31.363-20.999,31.363-31.447c0,14.425,9.726,26.416,22.954,30.154V233H42V98.594C55.402,94.966,65.29,82.895,65.29,68.346 z M254,54H2l32-32V2h189v20h-0.168L254,54z"></path>
                            </svg>
                            <span class="ml-1 font-weight-bold">Produits adultes</span>
                        </a>
                        <small class="count text-muted text-truncate mb-1 d-block">&nbsp;73 Annonces Cameroun</small>
                        </h3>
                        <ul class="list-unstyled font-weight-light subcat subcat3">
                        <li class="show_hide3 font-size-11 text-truncate">
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/sextoy-jouet-sexuel/">Sextoy - Jouet Sexuel</a>...</span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/aphrodisiaques-homme/">Aphrodisiaques homme</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/aphrodisiaques-femme/">Aphrodisiaques Femme</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/lubrifiants-huiles/">Lubrifiants – Huiles</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/huiles-et-produits-de-massage/">Huiles et produits de massage</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/lingerie-sexy/">Lingerie Sexy</a>, </span>
                            <span class="c-query-link"><a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/parfums-adultes/">Parfums adultes</a>, </span>
                        </li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide3" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/sextoy-jouet-sexuel/" title="Sextoy - Jouet Sexuel">Sextoy - Jouet Sexuel</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide3" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/aphrodisiaques-homme/" title="Aphrodisiaques homme">Aphrodisiaques homme</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide3" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/aphrodisiaques-femme/" title="Aphrodisiaques Femme">Aphrodisiaques Femme</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide3" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/lubrifiants-huiles/" title="Lubrifiants – Huiles">Lubrifiants – Huiles</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide3" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/huiles-et-produits-de-massage/" title="Huiles et produits de massage">Huiles et produits de massage</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide3" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/lingerie-sexy/" title="Lingerie Sexy">Lingerie Sexy</a></li>
                        <li class="query-link-li font-size-11 text-truncate js_more show_hide3" style="display:none">	» <a href="https://cm.jedolo.com/rencontres-massages-amour/produits-adultes/parfums-adultes/" title="Parfums adultes">Parfums adultes</a></li>
                        <li class="source-closed font-weight-light font-size-11 li_more3 toggle_more_less">&nbsp;&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-plus-circle-fill mt-n1 text-danger" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"></path>
                            </svg>&nbsp;Plus...
                        </li>
                        <li class="source-open font-weight-light font-size-11 li_less3 toggle_more_less" style="display:none;">&nbsp;&nbsp;
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-dash-circle-fill mt-n1 text-secondary" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"></path>
                            </svg>&nbsp;Moins de catégories
                        </li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
        </div>

        <hr class="text-secondary">
        <div class="border-bottom border-danger my-2 pb-2 text-truncate font-weight-bolder font-size-16">
	          <a href="https://cm.jedolo.com/annonces-hot-plan-sexy.html"><span data-container="body" data-toggle="popover" data-placement="right" data-trigger="hover focus" data-html="true" title="" data-content="Annonces <span class=&quot;badge badge-success&quot;>VIP</span> <hr/> Annonces <span class=&quot;badge badge-success&quot;>PREMIUM</span>" data-original-title=""><span class="mt-n2"><svg class="bi bi-vip" width="1.5em" height="1.5em" style="fill:#28a745;" fill="currentColor" viewBox="0 0 490.646 490.646" title="" data-toggle="tooltip" data-placement="bottom" xmlns="http://www.w3.org/2000/svg" data-original-title="VIP"><g> <g> <g> <path d="M245.216,224.096c-5.888,0-10.667,4.779-10.667,10.667v85.333c0,5.888,4.779,10.667,10.667,10.667 s10.667-4.779,10.667-10.667v-85.333C255.883,228.875,251.104,224.096,245.216,224.096z"></path> <path d="M216.971,224.779c-5.504-2.048-11.669,0.704-13.739,6.229l-22.016,58.709L159.2,231.03 c-2.069-5.504-8.256-8.256-13.739-6.229c-5.525,2.069-8.32,8.213-6.229,13.739l32,85.333c1.557,4.16,5.547,6.912,9.984,6.912 c4.437,0,8.427-2.752,9.984-6.912l32-85.333C225.291,232.992,222.496,226.87,216.971,224.779z"></path> <path d="M287.883,224.096L287.883,224.096c-5.888,0-10.667,4.779-10.667,10.667v85.333c0,5.888,4.779,10.667,10.667,10.667 s10.667-4.779,10.667-10.667v-32h10.667c17.643,0,32-14.357,32-32c0-17.643-14.357-32-32-32H287.883z M319.883,256.096 c0,5.888-4.8,10.667-10.667,10.667H298.55V245.43h10.667C315.083,245.43,319.883,250.208,319.883,256.096z"></path> <path d="M490.08,188.555c-1.301-3.84-4.693-6.613-8.704-7.147l-154.496-20.48L254.859,16.544 c-1.792-3.605-5.504-5.888-9.536-5.888s-7.723,2.304-9.536,5.909l-72.043,144.363L9.27,181.408 c-4.011,0.533-7.381,3.307-8.704,7.147c-1.301,3.84-0.32,8.085,2.56,10.965l113.301,113.301L85.558,467.211 c-0.789,4.011,0.768,8.107,3.989,10.581c3.243,2.496,7.637,2.88,11.243,1.067l144.555-72.277l144.555,72.277 c1.536,0.747,3.157,1.131,4.779,1.131c2.283,0,4.587-0.747,6.421-2.197c3.243-2.496,4.779-6.571,3.989-10.581l-30.869-154.389 L487.52,199.52C490.4,196.662,491.382,192.395,490.08,188.555z M355.147,301.771c-2.517,2.539-3.627,6.144-2.923,9.643 l27.733,138.624L250.123,385.12c-1.515-0.747-3.157-1.131-4.779-1.131s-3.264,0.363-4.779,1.131l-129.835,64.917l27.733-138.624 c0.704-3.499-0.405-7.125-2.923-9.643L33.483,199.712l138.688-18.389c3.52-0.469,6.571-2.645,8.149-5.803l65.024-130.304 l65.003,130.304c1.579,3.179,4.629,5.355,8.149,5.803l138.709,18.389L355.147,301.771z"></path> </g> </g> </g></svg></span> <strong>Rencontres hot, Ndolo et Escortes</strong></span></a>
	    </div>

        <!-- Changed from card-columns to row with columns -->
        <div class="featured_ads_box p-0 mx-n1 m-0">
            <div class="row p-0 m-0">
                <!-- First card - Added col-md-4 class to make it take 1/3 of the row -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow border rounded overflow-hidden border border-success ribbon-box border border-warning border border-danger h-100">
                        <span class="ribbon-vip"><span>VIP</span></span>
                        <div class="align-content-center text-center">
                            <img class="card-img-top ad-img-position shadow-sm" style="max-width:320px; max-height:240px" src="https://cdn.jedolo.com/cm/thumbs/tn_0cmfrwznjue8jedolo.jpg" alt="Baise  skinny  bio baby">
                            <div class="small text-dark relative-text-16 text-center"><em>4 photos</em></div>
                        </div>  
                        <div class="card-body text-muted pt-3 pl-3 pr-2 pb-1">
                            <h3 class="card-title font-size-12">
                                <a href="//cm.jedolo.com/rencontre-douala/baise-skinny-bio-baby-159532.html" class="stretched-link" title="Baise  skinny  bio baby">Baise  skinny  bio baby</a>
                            </h3>
                            <p class="card-text text-truncate m-0">
                                <small class="text-muted">
                                    <span class="no-stretched-link"><em>Par</em>&nbsp;<span class="badge badge-pill badge-secondary font-size-10" data-toggle="tooltip" data-placement="right" title="Particulier Habiba">P</span> Habiba&nbsp;</span>
                                </small>
                            </p>
                            <p class="card-text text-truncate mb-1">
                                <small class="text-muted">
                                    <strong><i class="icon16 bi-marker"></i><span>, <strong>Douala</strong></span></strong>
                                    <span class="no-stretched-link">  &nbsp;<span class="icon16 massage_plus_soft"></span> Cherche Homme</span>
                                </small>
                            </p>
                            <p class="card-text text-lowercase m-0 mb-1 font-size-11">
                                <span class="text-muted font-size-12">Âge: 21 ans Je suis: Une Femme  Clients acceptés: Hommes seulement  Déplacement: Se déplace  </span>Salut bb vient prendre du bon plaisir chez ta skinny bien propre je ...
                            </p>
                            <p class="card-text m-0">
                                <small class="text-muted"></small>
                            </p>
                        </div>
                        <div class="card-footer border-top-0 clearfix p-1 text-truncate">				    
                            <small class="text-muted float-left"> </small> <small class="text-muted float-right"><i class="icon16 bi-watch mt-n1"></i> Il ya 3mins</small>                    
                        </div>
                    </div>
                </div>
                
                <!-- Second card - Added col-md-4 class -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow border rounded overflow-hidden border border-success ribbon-box border border-warning border border-danger h-100">
                        <span class="ribbon-vip"><span>VIP</span></span>
                        <div class="align-content-center text-center">
                            <img class="card-img-top ad-img-position shadow-sm" style="max-width:320px; max-height:240px" src="https://cdn.jedolo.com/cm/thumbs/tn_0cmfrvqu4j6gjedolo.jpg" alt="Étoile d'or 🔥🔥🔥💋💋💋">
                            <div class="small text-dark relative-text-16 text-center"><em>4 photos</em></div>
                        </div>  
                        <div class="card-body text-muted pt-3 pl-3 pr-2 pb-1">
                            <h3 class="card-title font-size-12">
                                <a href="//cm.jedolo.com/rencontre-douala/etoile-d-or--160472.html" class="stretched-link" title="Étoile d'or 🔥🔥🔥💋💋💋">Étoile d'or 🔥🔥🔥💋💋💋</a>
                            </h3>
                            <p class="card-text text-truncate m-0">
                                <small class="text-muted">
                                    <span class="no-stretched-link"><em>Par</em>&nbsp;<span class="badge badge-success font-size-10" data-toggle="tooltip" data-placement="right" title="Professionnel Pro Rencontre">B</span> Pro Rencontre <strong class="text-success">(pro)</strong>&nbsp;</span>
                                </small>
                            </p>
                            <p class="card-text text-truncate mb-1">
                                <small class="text-muted">
                                    <strong><i class="icon16 bi-marker"></i><span>, <strong>Douala</strong></span></strong>
                                    <span class="no-stretched-link">  &nbsp;<span class="icon16 massage_plus_soft"></span> Cherche Homme</span>
                                </small>
                            </p>
                            <p class="card-text text-lowercase m-0 mb-1 font-size-11">
                                <span class="text-muted font-size-12">Âge: 21 ans Je suis: Une Femme  Clients acceptés: Tout le monde  Déplacement: Reçoit ou se déplace  </span>Coucou mes bébé je suis le nouveau bébé du cité ici pour ...
                            </p>
                            <p class="card-text m-0">
                                <small class="text-muted"></small>
                            </p>
                        </div>
                        <div class="card-footer border-top-0 clearfix p-1 text-truncate">				    
                            <small class="text-muted float-left"><strong class="text-success font-weight-bolder"><svg class="bi bi-certified  mt-n1 " width="1.2em" height="1.2em" style="fill:#168830;" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984a.5.5 0 0 0-.708-.708L7 8.793 5.854 7.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"></path></svg> CERTIFIÉ</strong>&nbsp; </small> <small class="text-muted float-right"><i class="icon16 bi-watch mt-n1"></i> Il ya 4mins</small>                    
                        </div>
                    </div>
                </div>
                
                <!-- Third card - Added col-md-4 class -->
                <div class="col-md-4 mb-3">
                    <div class="card shadow border rounded overflow-hidden border border-success ribbon-box border border-warning border border-danger h-100">
                        <span class="ribbon-vip"><span>VIP</span></span>
                        <div class="align-content-center text-center">
                            <img class="card-img-top ad-img-position shadow-sm" style="max-width:320px; max-height:240px" src="https://cdn.jedolo.com/cm/thumbs/tn_cmfrrghb2q9jedolo.jpg" alt="Ton mannequin sensuelle au sein débout">
                            <div class="small text-dark relative-text-16 text-center"><em>2 photos</em></div>
                        </div>  
                        <div class="card-body text-muted pt-3 pl-3 pr-2 pb-1">
                            <!-- Card body content would continue here -->
                        </div>
                        <div class="card-footer border-top-0 clearfix p-1 text-truncate">
                            <!-- Card footer content would continue here -->
                        </div>
                    </div>
                </div>
            </div>
        </div>


        
        <div class="container-fluid">
             <div class="alert alert-info my-3 text-muted" role="alert"> <i class="fas fa-check-square text-success" aria-hidden="true"></i> <span><strong>Escortes et Rencontres</strong> simples et rapides, Massages professionnels et Produits adultes en un seul clic.</span><br><span class="font-size-10">Faites de belles rencontres sérieuses en un clic à Cameroun et trouvez les meilleures escortes et produits pour adultes à Cameroun. Trouvez les meilleurs salons de massages et spas à Cameroun</span></div>
             <div class="my-3 text-end"><a class="font-weight-bolder h5" href="https://cm.jedolo.com/dernieres-annonces-rencontres.html"><svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-hourglass-split text-danger mt-n1" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13s-.866-1.299-3-1.48V8.35z"></path></svg>Dernières annonces <i class="icon24 bi-chevron-right"></i></a></div>
        </div>
   </div>

  
   
    <footer class="footer-content bg-footer mt-2 clearfix overflow-hidden">
        <div class="container-fluid px-0">
            <!-- Section principale d'annonce -->
            <div class="border p-4 mb-4 text-center">
                <h2 class="fs-4 mb-3">Vous avez un service adulte à offrir, un salon de massage, un spa, un produit (+18) à vendre, ou juste un massage ?</h2>
                <p class="fs-6">Ajoutez vos annonces ici et maintenant pour faire de bonnes affaires immédiates Cameroun</p>
                
                <div class="text-center mt-4">
                <a class="btn btn-outline-success btn-lg" href="https://cm.jedolo.com/post.php?post=new">
                    <svg class="bi bi-cloud-plus-fill" width="1.5em" height="1.5em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 2a5.53 5.53 0 0 0-3.594 1.342c-.766.66-1.321 1.52-1.464 2.383C1.266 6.095 0 7.555 0 9.318 0 11.366 1.708 13 3.781 13h8.906C14.502 13 16 11.57 16 9.773c0-1.636-1.242-2.969-2.834-3.194C12.923 3.999 10.69 2 8 2zm.5 4a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z"></path>
                    </svg> Déposer une annonce
                </a>
                </div>
            </div>

            <!-- Section des liens d'annonces -->
            <div class="mb-4">
                <p class="fw-bold text-primary mb-1">Annonces Cameroun</p>
                <p class="mb-3">
                <a href="#" class="text-decoration-none">Annonces Rencontres - Escortes Cameroun</a>, Annonces Cameroun 
                <a href="#" class="text-decoration-none">Annonces Massages - Service Massage Cameroun</a>, Annonces Cameroun 
                <a href="#" class="text-decoration-none">Annonces Produits adultes Cameroun</a>, Annonces Cameroun
                </p>
            </div>

            <!-- Avertissement -->
            <div class="border p-3 mb-4">
                <p class="text-muted mb-0">
                Le contenu de ce site est généré par les utilisateurs et ne reflète en aucun cas les opinions des propriétaires de ce site, qui déclinent toute responsabilité. L'utilisateur est le seul responsable des produits et services proposés dans ses annonces. Si vous êtes offensé par un contenu affiché, quittez le site immédiatement. En accédant au site, vous acceptez nos conditions générales.
                </p>
            </div>

            <!-- Section de partage -->
            <div class="text-center mb-4">
                <div class="d-inline-flex align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-share me-2" viewBox="0 0 16 16">
                    <path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5z"/>
                </svg>
                <span class="text-secondary">Partager</span>
                </div>
            </div>

            <!-- Liens internationaux -->
            <div class="text-center mb-4">
                <a href="#" class="text-decoration-none me-3">
                <img src="ivoire-flag.png" alt="Côte d'Ivoire" width="24" height="16" class="me-1">
                Annonces Bizi en Côte d'Ivoire
                </a>
                <a href="#" class="text-decoration-none">
                <img src="ivoire-flag.png" alt="Côte d'Ivoire" width="24" height="16" class="me-1">
                Rencontres en Côte d'Ivoire
                </a>
            </div>

            <!-- Footer -->
            <div class="bg-danger text-white p-2">
                <div class="container d-flex justify-content-between align-items-center">
                <div>© 2025 JeDolo.com</div>
                <div>
                    <a href="#" class="text-white text-decoration-none">Qu'est-ce que jedolo?</a> |
                    <a href="#" class="text-white text-decoration-none">Annuaire</a> |
                    <a href="#" class="text-white text-decoration-none">Conditions</a> |
                    <a href="#" class="text-white text-decoration-none">Confidentialité</a> |
                    <a href="#" class="text-white text-decoration-none">Plan du site</a>
                </div>
                </div>
            </div>
        </div>
    </footer>

  
</body>
</html>