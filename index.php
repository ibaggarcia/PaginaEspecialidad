<?php
session_start();
$host = $_SERVER['HTTP_HOST'];?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Inicio</title>
    <script src="https://kit.fontawesome.com/ca21a15e6d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./src/css/modal.css" media="screen">
    <link rel="stylesheet" href="./src/css/vista.css" media="screen">
    <link rel="stylesheet" href="./src/css/Casa.css" media="screen">
    <meta name="generator" content="Nicepage 5.4.4, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i|Roboto+Condensed:300,300i,400,400i,700,700i">
    <script class="u-script" type="text/javascript" src="./src/js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./src/js/psicologo.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="./src/js/loginRegistro.js" defer=""></script>
</head>

<body data-home-page="Casa.html" data-home-page-title="Casa" class="u-body u-xl-mode" data-lang="es">
    <header>
        <div class="header">
            <a href="./index.php" class="u-image u-logo u-image-1"><img src="./src/images/default-logo.png" class="u-logo-image u-logo-image-1"></a>
            <div class="u-nav-container">
            <?php if (isset($_SESSION['Usuario'])){
                echo $_SESSION['Usuario'];
                echo "<a href='./src/php/logout.php'>Cerrar Sesión</a>";
            }else{
                echo "<a data-target='modallogin' class='user fa-login'>Acceder</a>";
                echo "<a href='./registro_cliente.php'>Registrarse</a>";
            }?>
                <!--<a data-target="modallogin" class="user"><i style="color: black; font-size: 30px;" class="fa-solid fa-user"></i></a>-->
            </div>
        </div>
    </header>
    <section class="u-align-center u-clearfix u-image u-valign-top-lg u-valign-top-md u-valign-top-xl u-section-1"
        id="carousel_549e" data-image-width="1900" data-image-height="1086">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1">
            <div class="u-layout">
                <div class="u-layout-row">
                    <div
                        class="u-align-left u-container-style u-expand-resize u-layout-cell u-left-cell u-size-26-xl u-size-27-lg u-size-28-md u-size-28-sm u-size-28-xs u-layout-cell-1">
                        <div class="u-container-layout u-valign-middle u-container-layout-1">
                            <h5 class="u-custom-font u-font-ubuntu u-text u-text-1">Servicios medicos online</h5>
                            <h1 class="u-custom-font u-font-roboto-condensed u-text u-text-palette-1-base u-text-2">
                                Atiende tus necesidades desde tu casa</h1>
                            <p class="u-text u-text-3">Aqui encontraras una variedad de especialistas relacionados a la
                                salud y el desarrollo</p>
                            <a href="./registro_cliente.php"
                                class="u-btn u-button-style u-custom-font u-font-roboto-condensed u-text-body-alt-color u-btn-1">Registrate</a>
                        </div>
                    </div>
                    <div
                        class="u-container-style u-image u-layout-cell u-right-cell u-size-32-md u-size-32-sm u-size-32-xs u-size-33-lg u-size-34-xl u-image-1">
                        <div class="u-container-layout u-valign-bottom"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-2">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-20 u-layout-cell-3">
                        <div class="u-container-layout u-valign-top u-container-layout-3">
                            <span class="u-icon u-icon-circle u-text-palette-1-base u-white u-icon-1">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                    viewBox="0 0 512.002 512.002" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bc6e"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 512.002 512.002" id="svg-bc6e">
                                    <g>
                                        <path
                                            d="m246.993 3.007-241 181c-6.625 4.975-7.961 14.378-2.986 21.002 4.983 6.634 14.388 7.954 21.002 2.986l6.992-5.251v294.257c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15v-294.257l6.992 5.251c6.624 4.975 16.026 3.638 21.002-2.986 4.975-6.624 3.638-16.027-2.986-21.002l-55.008-41.313v-96.693c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v29.1l-95.992-72.094c-5.336-4.008-12.68-4.008-18.016 0zm144.009 57.994h30v59.162l-30-22.531zm60 119.212v301.788h-390v-301.788l195-146.452z">
                                        </path>
                                        <path
                                            d="m256.001 271.001c-41.355 0-75 33.645-75 75 0 8.284 6.716 15 15 15h120c8.284 0 15-6.716 15-15 .001-41.355-33.645-75-75-75zm-42.43 60c6.191-17.461 22.874-30 42.43-30 19.557 0 36.239 12.539 42.43 30z">
                                        </path>
                                        <path
                                            d="m301.002 226.001c0-24.813-20.188-45-45-45s-45 20.187-45 45 20.187 45 45 45 45-20.187 45-45zm-45.001 15c-8.271 0-15-6.729-15-15s6.729-15 15-15 15 6.729 15 15-6.728 15-15 15z">
                                        </path>
                                        <path
                                            d="m213.223 157.915c8.894-2.969 18.145-5.007 27.496-6.06 8.232-.926 14.155-8.35 13.229-16.583s-8.352-14.161-16.583-13.229c-11.438 1.287-22.756 3.781-33.641 7.415-7.858 2.623-12.102 11.12-9.479 18.978 2.624 7.86 11.122 12.101 18.978 9.479z">
                                        </path>
                                        <path
                                            d="m378.76 229.742c3.451 7.517 12.351 10.835 19.89 7.374 7.529-3.457 10.831-12.362 7.374-19.891-4.785-10.424-10.692-20.389-17.559-29.618-4.944-6.646-14.34-8.027-20.988-3.082-6.646 4.945-8.026 14.341-3.082 20.988 5.619 7.553 10.452 15.704 14.365 24.229z">
                                        </path>
                                        <path
                                            d="m298.028 414.336c-8.911 2.916-18.174 4.9-27.532 5.897-8.237.878-14.204 8.268-13.326 16.505.876 8.224 8.255 14.206 16.505 13.326 11.445-1.22 22.777-3.648 33.683-7.217 7.874-2.576 12.168-11.048 9.591-18.921-2.576-7.873-11.049-12.17-18.921-9.59z">
                                        </path>
                                        <path
                                            d="m296.529 157.186c8.952 2.813 17.643 6.588 25.83 11.219 7.165 4.054 16.337 1.583 20.44-5.671 4.079-7.211 1.54-16.363-5.671-20.441-10.016-5.665-20.649-10.284-31.605-13.727-7.904-2.483-16.324 1.91-18.807 9.813-2.484 7.903 1.91 16.323 9.813 18.807z">
                                        </path>
                                        <path
                                            d="m214.717 414.576c-8.935-2.867-17.603-6.693-25.764-11.373-7.186-4.121-16.353-1.636-20.474 5.551s-1.635 16.353 5.551 20.474c9.982 5.724 20.588 10.405 31.521 13.913 7.87 2.527 16.33-1.797 18.865-9.7 2.532-7.888-1.811-16.334-9.699-18.865z">
                                        </path>
                                        <path
                                            d="m405.817 269.237c-8.283.096-14.921 6.89-14.824 15.173.112 10.11-.879 20.038-2.903 29.625-1.711 8.106 3.473 16.064 11.579 17.775 8.121 1.711 16.067-3.487 17.774-11.579 2.577-12.207 3.69-24.463 3.548-36.17-.096-8.225-6.792-14.826-14.995-14.826-.06.001-.119.002-.179.002z">
                                        </path>
                                        <path
                                            d="m165.879 165.153c-5.589-6.113-15.079-6.537-21.192-.948-8.477 7.751-16.167 16.411-22.855 25.738-4.828 6.732-3.284 16.104 3.448 20.931 6.702 4.806 16.082 3.314 20.931-3.448 5.479-7.639 11.777-14.732 18.721-21.082 6.113-5.59 6.537-15.078.947-21.191z">
                                        </path>
                                        <path
                                            d="m345.414 407.376c5.555 6.147 15.04 6.625 21.187 1.072 8.521-7.702 16.262-16.316 23.005-25.604 4.867-6.704 3.378-16.084-3.326-20.951-6.707-4.868-16.085-3.376-20.951 3.326-5.522 7.607-11.861 14.663-18.843 20.971-6.147 5.555-6.627 15.04-1.072 21.186z">
                                        </path>
                                        <path
                                            d="m132.913 341.538c-3.412-7.549-12.297-10.903-19.847-7.49-7.549 3.412-10.902 12.298-7.49 19.847 4.724 10.452 10.573 20.451 17.384 29.72 4.881 6.642 14.262 8.134 20.97 3.205 6.676-4.905 8.111-14.294 3.205-20.97-5.573-7.584-10.358-15.764-14.222-24.312z">
                                        </path>
                                        <path
                                            d="m106.079 301.881c8.284-.042 14.966-6.791 14.925-15.075.04-.834-.356-12.917 2.748-28.065 1.664-8.116-3.567-16.043-11.683-17.706-8.117-1.664-16.043 3.567-17.706 11.683-3.727 18.182-3.337 33.782-3.359 34.239.042 8.259 6.749 14.925 14.999 14.925.024-.001.05-.001.076-.001z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                            <h2 class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-4">Psicologo
                            </h2>
                            <p class="u-align-center u-text u-text-5">Psicología clínica, cognitiva, conductual, del
                                desarrollo, social, del trabajo, animal, diferencial, experimental.</p>
                            <a href="#" class="u-btn u-button-style u-text-palette-1-base u-white u-btn-2">Agenda
                                Cita</a>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-layout-cell u-palette-4-base u-size-20 u-layout-cell-4">
                        <div class="u-container-layout u-valign-top u-container-layout-4">
                            <span class="u-icon u-icon-circle u-text-palette-4-base u-white u-icon-2">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                    viewBox="0 0 511.988 511.988" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e4e7"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 511.988 511.988" id="svg-e4e7">
                                    <g>
                                        <path
                                            d="m394.389 120.991c5.953 0 11.586-3.568 13.932-9.433 7.964-19.911 12.174-42.93 12.174-66.571 0-8.284-6.716-15-15-15s-15 6.716-15 15c0 19.861-3.468 39.028-10.027 55.429-3.949 9.869 3.359 20.575 13.921 20.575z">
                                        </path>
                                        <path
                                            d="m369.103 392.639c-7.374-3.778-16.412-.865-20.19 6.507-10.969 21.402-29.011 38.427-50.801 47.938-7.592 3.314-11.061 12.156-7.746 19.748 2.461 5.639 7.972 9.003 13.755 9.003 2.003 0 4.04-.404 5.993-1.257 28.118-12.273 51.378-34.203 65.496-61.75 3.778-7.371.865-16.411-6.507-20.189z">
                                        </path>
                                        <path
                                            d="m270.401 424.406c34.82-6.506 60.093-37.381 60.093-73.414v-5.005c0-8.284-6.716-15-15-15h-43.014c5.494-17.372 21.766-30 40.931-30h17.083c8.284 0 15-6.716 15-15v-15h15.001c5.55 0 10.646-3.064 13.249-7.967 2.603-4.902 2.285-10.84-.824-15.437-9.311-13.822-34.455-50.249-45.998-63.923 4.356-19.608 4.779-40.186.997-60.413 21.237-18.305 32.576-45.048 32.576-78.26 0-8.284-6.715-14.999-14.998-15-17.758-1.279-53.55 5.654-103.459-16.828-26.537-11.952-56.084-15.866-85.435-11.316-57.177 8.86-111.914 61.244-123.186 119.144-8.841 45.42 2.856 91.465 32.092 126.328 15.953 19.024 24.826 43.17 24.984 67.893 0 24.122-2.744 23.698-73.427 131.059-10.826 15.303-16.573 32.615-16.573 50.721 0 8.284 6.716 15 15 15h240c8.284 0 15-6.716 15-15 0-22.997-9.278-44.713-26.456-62.657 5.153-4.19 14.234-7.659 26.364-9.925zm-181.905-196.367c-23.393-27.896-32.735-64.825-25.632-101.32 8.854-45.48 52.966-88.2 98.332-95.23 23.603-3.658 47.295-.537 68.52 9.024 52.458 23.629 92.628 18.819 99.725 19.473-2.735 18.43-10.794 32.775-24.076 42.925-2.017.836-3.772 2.075-5.198 3.603-5.457 3.406-11.645 6.222-18.56 8.442-25.831 8.291-46.517 25.783-58.778 48.048-7.528-7.57-16.971-12.016-27.334-12.016-25.233 0-45 26.355-45 60 0 20.79 7.546 38.795 19.267 49.52l-10.479 10.48h-46.416c-5.426-15.574-13.65-30.165-24.371-42.949zm31.997 87.074c-.03-4.734-.309-9.449-.826-14.125h45.827c3.979 0 7.794-1.58 10.606-4.393l30-30c4.29-4.29 5.573-10.742 3.252-16.347-2.322-5.605-7.791-9.26-13.858-9.26-6.116 0-15-11.687-15-30s8.884-30 15-30 15 11.687 15 30v11.046c0 8.284 6.716 15 15 15s15-6.716 15-15v-11.046c0-30.702 20.206-57.814 50.28-67.467 3.181-1.021 6.249-2.156 9.226-3.381 1.367 15.262-.167 30.11-4.121 43.932-1.812 6.331.726 12.991 6.035 16.565 4.091 4.071 16.65 21.203 30.049 40.351h-1.471c-8.284 0-15 6.716-15 15v15h-2.083c-40.206 0-72.916 32.71-72.916 72.916v2.084c0 8.284 6.716 15 15 15h43.906c-3.8 17.094-17.153 30.686-34.51 33.929-20.306 3.794-35.164 10.605-44.439 20.328-39.787-25.022-92.803-29.403-136.686-15.34 32.215-48.802 36.729-58.515 36.729-84.792zm-87.861 166.875c1.674-5.798 4.323-11.42 7.87-16.769.012-.017.026-.032.037-.049.137-.209.271-.412.408-.62 31.835-46.796 119.085-57.689 170.399-19.202 13.823 10.367 23.078 23.027 27.009 36.64z">
                                        </path>
                                        <path
                                            d="m360.494 330.988c0 8.284 6.716 15 15 15h61c8.284 0 15-6.716 15-15s-6.716-15-15-15h-61c-8.284 0-15 6.715-15 15z">
                                        </path>
                                        <path
                                            d="m480.901 278.676c-3.502-21.349-22.081-37.689-44.406-37.689-24.813 0-45 20.187-45 45 0 8.284 6.716 15 15 15s15-6.716 15-15c0-8.271 6.729-15 15-15s15 6.729 15 15v2.561c0 6.357 4.008 12.024 10.001 14.143 11.962 4.228 19.999 15.6 19.999 28.297s-8.037 24.069-19.999 28.297c-5.993 2.118-10.001 7.785-10.001 14.143v2.561c0 8.271-6.729 15-15 15s-15-6.729-15-15c0-8.284-6.716-15-15-15s-15 6.716-15 15c0 24.813 20.187 45 45 45 22.325 0 40.904-16.34 44.406-37.689 18.638-10.492 30.594-30.417 30.594-52.311s-11.957-41.82-30.594-52.313z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                            <h2 class="u-custom-font u-font-roboto-condensed u-text u-text-6">Psiquiatra</h2>
                            <p class="u-text u-text-7">Profesionales de la medicina que se especializa en la prevención,
                                el diagnóstico y el tratamiento de trastornos mentales, emocionales y del
                                comportamiento.</p>
                            <a href="#" class="u-btn u-button-style u-text-palette-4-base u-white u-btn-3">Agenda
                                Cita</a>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-layout-cell u-palette-3-base u-right-cell u-size-20 u-layout-cell-5">
                        <div class="u-container-layout u-valign-top u-container-layout-5">
                            <span class="u-icon u-icon-circle u-text-palette-3-base u-white u-icon-3">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512"
                                    style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-34e4"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-34e4">
                                    <path
                                        d="m262.761 172h-159.534c-28.305 0-55.234 12.216-73.884 33.516-18.661 21.313-27.217 49.644-23.475 77.729l17.965 134.802c3.467 26.011 16.244 49.856 35.979 67.143 19.737 17.289 45.054 26.81 71.287 26.81h103.789c26.233 0 51.551-9.521 71.288-26.81 19.734-17.287 32.512-41.132 35.978-67.143l17.966-134.803c3.742-28.084-4.814-56.415-23.476-77.728-18.649-21.3-45.579-33.516-73.883-33.516zm57.709 105.96-17.966 134.803c-4.5 33.77-33.568 59.236-67.616 59.236h-103.789c-34.048 0-63.116-25.466-67.616-59.237l-17.965-134.801c-2.22-16.656 2.854-33.457 13.919-46.095 11.055-12.625 27.016-19.866 43.79-19.866h159.533c16.774 0 32.735 7.241 43.79 19.866 11.066 12.638 16.139 29.439 13.92 46.094zm116.732-203.97c-3.956 4.631-9.569 7.01-15.218 7.011-4.595 0-9.212-1.575-12.979-4.793l-22.92-19.577c-12.479-10.659-27.657-16.395-43.957-16.623l-79.887 8.669c-14.208 1.541-28.655 2.323-42.942 2.323h-15.305v41h46c11.046 0 20 8.954 20 20s-8.954 20-20 20h-132c-11.046 0-20-8.954-20-20s8.954-20 20-20h46v-41h-36c-11.046 0-20-8.954-20-20s8.954-20 20-20h91.305c12.851 0 25.847-.703 38.627-2.09l81.027-8.793c.717-.078 1.437-.117 2.158-.117 26.34 0 50.874 9.065 70.952 26.215l22.92 19.577c8.4 7.174 9.393 19.799 2.219 28.198zm-182.208 269.01c0 11.046-8.954 20-20 20h-30v30c0 11.046-8.954 20-20 20s-20-8.954-20-20v-30h-30c-11.046 0-20-8.954-20-20s8.954-20 20-20h30v-30c0-11.046 8.954-20 20-20s20 8.954 20 20v30h30c11.046 0 20 8.954 20 20zm252-150.447c0 33.331-26.916 60.447-60 60.447s-60-27.117-60-60.447c0-9.654 3.071-26.782 29.624-63.896 7.015-9.804 18.37-15.657 30.376-15.657s23.361 5.853 30.376 15.657c26.553 37.114 29.624 54.241 29.624 63.896zm-40 .013c-.01-.233-.615-9.886-20-37.588-19.526 27.905-19.998 37.495-20 37.592 0 11.257 8.972 20.43 20 20.43 11.024 0 19.993-9.165 20-20.434z">
                                    </path>
                                </svg>
                            </span>
                            <h2 class="u-custom-font u-font-roboto-condensed u-text u-text-body-alt-color u-text-8">
                                Terapeuta</h2>
                            <p class="u-text u-text-body-alt-color u-text-9">Profesional que se dedica a brindar
                                asistencia a pacientes que demandan atención por problemas físicos o mentales y cuya
                                misión es mejorar la calidad de vida.</p>
                            <a href="#" class="u-btn u-button-style u-text-palette-3-base u-white u-btn-4">Agenda
                                Cita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="u-clearfix u-gutter-0 u-layout-wrap u-layout-wrap-2">
            <div class="u-gutter-0 u-layout">
                <div class="u-layout-row">
                    <div class="u-container-style u-layout-cell u-left-cell u-palette-1-base u-size-20 u-layout-cell-3">
                        <div class="u-container-layout u-valign-top u-container-layout-3">
                            <span class="u-icon u-icon-circle u-text-palette-1-base u-white u-icon-1">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                    viewBox="0 0 512.002 512.002" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bc6e"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 512.002 512.002" id="svg-bc6e">
                                    <g>
                                        <path
                                            d="m246.993 3.007-241 181c-6.625 4.975-7.961 14.378-2.986 21.002 4.983 6.634 14.388 7.954 21.002 2.986l6.992-5.251v294.257c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15v-294.257l6.992 5.251c6.624 4.975 16.026 3.638 21.002-2.986 4.975-6.624 3.638-16.027-2.986-21.002l-55.008-41.313v-96.693c0-8.284-6.716-15-15-15h-60c-8.284 0-15 6.716-15 15v29.1l-95.992-72.094c-5.336-4.008-12.68-4.008-18.016 0zm144.009 57.994h30v59.162l-30-22.531zm60 119.212v301.788h-390v-301.788l195-146.452z">
                                        </path>
                                        <path
                                            d="m256.001 271.001c-41.355 0-75 33.645-75 75 0 8.284 6.716 15 15 15h120c8.284 0 15-6.716 15-15 .001-41.355-33.645-75-75-75zm-42.43 60c6.191-17.461 22.874-30 42.43-30 19.557 0 36.239 12.539 42.43 30z">
                                        </path>
                                        <path
                                            d="m301.002 226.001c0-24.813-20.188-45-45-45s-45 20.187-45 45 20.187 45 45 45 45-20.187 45-45zm-45.001 15c-8.271 0-15-6.729-15-15s6.729-15 15-15 15 6.729 15 15-6.728 15-15 15z">
                                        </path>
                                        <path
                                            d="m213.223 157.915c8.894-2.969 18.145-5.007 27.496-6.06 8.232-.926 14.155-8.35 13.229-16.583s-8.352-14.161-16.583-13.229c-11.438 1.287-22.756 3.781-33.641 7.415-7.858 2.623-12.102 11.12-9.479 18.978 2.624 7.86 11.122 12.101 18.978 9.479z">
                                        </path>
                                        <path
                                            d="m378.76 229.742c3.451 7.517 12.351 10.835 19.89 7.374 7.529-3.457 10.831-12.362 7.374-19.891-4.785-10.424-10.692-20.389-17.559-29.618-4.944-6.646-14.34-8.027-20.988-3.082-6.646 4.945-8.026 14.341-3.082 20.988 5.619 7.553 10.452 15.704 14.365 24.229z">
                                        </path>
                                        <path
                                            d="m298.028 414.336c-8.911 2.916-18.174 4.9-27.532 5.897-8.237.878-14.204 8.268-13.326 16.505.876 8.224 8.255 14.206 16.505 13.326 11.445-1.22 22.777-3.648 33.683-7.217 7.874-2.576 12.168-11.048 9.591-18.921-2.576-7.873-11.049-12.17-18.921-9.59z">
                                        </path>
                                        <path
                                            d="m296.529 157.186c8.952 2.813 17.643 6.588 25.83 11.219 7.165 4.054 16.337 1.583 20.44-5.671 4.079-7.211 1.54-16.363-5.671-20.441-10.016-5.665-20.649-10.284-31.605-13.727-7.904-2.483-16.324 1.91-18.807 9.813-2.484 7.903 1.91 16.323 9.813 18.807z">
                                        </path>
                                        <path
                                            d="m214.717 414.576c-8.935-2.867-17.603-6.693-25.764-11.373-7.186-4.121-16.353-1.636-20.474 5.551s-1.635 16.353 5.551 20.474c9.982 5.724 20.588 10.405 31.521 13.913 7.87 2.527 16.33-1.797 18.865-9.7 2.532-7.888-1.811-16.334-9.699-18.865z">
                                        </path>
                                        <path
                                            d="m405.817 269.237c-8.283.096-14.921 6.89-14.824 15.173.112 10.11-.879 20.038-2.903 29.625-1.711 8.106 3.473 16.064 11.579 17.775 8.121 1.711 16.067-3.487 17.774-11.579 2.577-12.207 3.69-24.463 3.548-36.17-.096-8.225-6.792-14.826-14.995-14.826-.06.001-.119.002-.179.002z">
                                        </path>
                                        <path
                                            d="m165.879 165.153c-5.589-6.113-15.079-6.537-21.192-.948-8.477 7.751-16.167 16.411-22.855 25.738-4.828 6.732-3.284 16.104 3.448 20.931 6.702 4.806 16.082 3.314 20.931-3.448 5.479-7.639 11.777-14.732 18.721-21.082 6.113-5.59 6.537-15.078.947-21.191z">
                                        </path>
                                        <path
                                            d="m345.414 407.376c5.555 6.147 15.04 6.625 21.187 1.072 8.521-7.702 16.262-16.316 23.005-25.604 4.867-6.704 3.378-16.084-3.326-20.951-6.707-4.868-16.085-3.376-20.951 3.326-5.522 7.607-11.861 14.663-18.843 20.971-6.147 5.555-6.627 15.04-1.072 21.186z">
                                        </path>
                                        <path
                                            d="m132.913 341.538c-3.412-7.549-12.297-10.903-19.847-7.49-7.549 3.412-10.902 12.298-7.49 19.847 4.724 10.452 10.573 20.451 17.384 29.72 4.881 6.642 14.262 8.134 20.97 3.205 6.676-4.905 8.111-14.294 3.205-20.97-5.573-7.584-10.358-15.764-14.222-24.312z">
                                        </path>
                                        <path
                                            d="m106.079 301.881c8.284-.042 14.966-6.791 14.925-15.075.04-.834-.356-12.917 2.748-28.065 1.664-8.116-3.567-16.043-11.683-17.706-8.117-1.664-16.043 3.567-17.706 11.683-3.727 18.182-3.337 33.782-3.359 34.239.042 8.259 6.749 14.925 14.999 14.925.024-.001.05-.001.076-.001z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                            <h2 class="u-align-center u-custom-font u-font-roboto-condensed u-text u-text-4">Coach</h2>
                            <p class="u-align-center u-text u-text-5">Profesional que ayuda a otras personas a conseguir
                                los objetivos que se han propuesto.</p>
                            <a href="#" class="u-btn u-button-style u-text-palette-1-base u-white u-btn-2">Agenda
                                Cita</a>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-layout-cell u-palette-4-base u-size-20 u-layout-cell-4">
                        <div class="u-container-layout u-valign-top u-container-layout-4">
                            <span class="u-icon u-icon-circle u-text-palette-4-base u-white u-icon-2">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice"
                                    viewBox="0 0 511.988 511.988" style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e4e7"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 511.988 511.988" id="svg-e4e7">
                                    <g>
                                        <path
                                            d="m394.389 120.991c5.953 0 11.586-3.568 13.932-9.433 7.964-19.911 12.174-42.93 12.174-66.571 0-8.284-6.716-15-15-15s-15 6.716-15 15c0 19.861-3.468 39.028-10.027 55.429-3.949 9.869 3.359 20.575 13.921 20.575z">
                                        </path>
                                        <path
                                            d="m369.103 392.639c-7.374-3.778-16.412-.865-20.19 6.507-10.969 21.402-29.011 38.427-50.801 47.938-7.592 3.314-11.061 12.156-7.746 19.748 2.461 5.639 7.972 9.003 13.755 9.003 2.003 0 4.04-.404 5.993-1.257 28.118-12.273 51.378-34.203 65.496-61.75 3.778-7.371.865-16.411-6.507-20.189z">
                                        </path>
                                        <path
                                            d="m270.401 424.406c34.82-6.506 60.093-37.381 60.093-73.414v-5.005c0-8.284-6.716-15-15-15h-43.014c5.494-17.372 21.766-30 40.931-30h17.083c8.284 0 15-6.716 15-15v-15h15.001c5.55 0 10.646-3.064 13.249-7.967 2.603-4.902 2.285-10.84-.824-15.437-9.311-13.822-34.455-50.249-45.998-63.923 4.356-19.608 4.779-40.186.997-60.413 21.237-18.305 32.576-45.048 32.576-78.26 0-8.284-6.715-14.999-14.998-15-17.758-1.279-53.55 5.654-103.459-16.828-26.537-11.952-56.084-15.866-85.435-11.316-57.177 8.86-111.914 61.244-123.186 119.144-8.841 45.42 2.856 91.465 32.092 126.328 15.953 19.024 24.826 43.17 24.984 67.893 0 24.122-2.744 23.698-73.427 131.059-10.826 15.303-16.573 32.615-16.573 50.721 0 8.284 6.716 15 15 15h240c8.284 0 15-6.716 15-15 0-22.997-9.278-44.713-26.456-62.657 5.153-4.19 14.234-7.659 26.364-9.925zm-181.905-196.367c-23.393-27.896-32.735-64.825-25.632-101.32 8.854-45.48 52.966-88.2 98.332-95.23 23.603-3.658 47.295-.537 68.52 9.024 52.458 23.629 92.628 18.819 99.725 19.473-2.735 18.43-10.794 32.775-24.076 42.925-2.017.836-3.772 2.075-5.198 3.603-5.457 3.406-11.645 6.222-18.56 8.442-25.831 8.291-46.517 25.783-58.778 48.048-7.528-7.57-16.971-12.016-27.334-12.016-25.233 0-45 26.355-45 60 0 20.79 7.546 38.795 19.267 49.52l-10.479 10.48h-46.416c-5.426-15.574-13.65-30.165-24.371-42.949zm31.997 87.074c-.03-4.734-.309-9.449-.826-14.125h45.827c3.979 0 7.794-1.58 10.606-4.393l30-30c4.29-4.29 5.573-10.742 3.252-16.347-2.322-5.605-7.791-9.26-13.858-9.26-6.116 0-15-11.687-15-30s8.884-30 15-30 15 11.687 15 30v11.046c0 8.284 6.716 15 15 15s15-6.716 15-15v-11.046c0-30.702 20.206-57.814 50.28-67.467 3.181-1.021 6.249-2.156 9.226-3.381 1.367 15.262-.167 30.11-4.121 43.932-1.812 6.331.726 12.991 6.035 16.565 4.091 4.071 16.65 21.203 30.049 40.351h-1.471c-8.284 0-15 6.716-15 15v15h-2.083c-40.206 0-72.916 32.71-72.916 72.916v2.084c0 8.284 6.716 15 15 15h43.906c-3.8 17.094-17.153 30.686-34.51 33.929-20.306 3.794-35.164 10.605-44.439 20.328-39.787-25.022-92.803-29.403-136.686-15.34 32.215-48.802 36.729-58.515 36.729-84.792zm-87.861 166.875c1.674-5.798 4.323-11.42 7.87-16.769.012-.017.026-.032.037-.049.137-.209.271-.412.408-.62 31.835-46.796 119.085-57.689 170.399-19.202 13.823 10.367 23.078 23.027 27.009 36.64z">
                                        </path>
                                        <path
                                            d="m360.494 330.988c0 8.284 6.716 15 15 15h61c8.284 0 15-6.716 15-15s-6.716-15-15-15h-61c-8.284 0-15 6.715-15 15z">
                                        </path>
                                        <path
                                            d="m480.901 278.676c-3.502-21.349-22.081-37.689-44.406-37.689-24.813 0-45 20.187-45 45 0 8.284 6.716 15 15 15s15-6.716 15-15c0-8.271 6.729-15 15-15s15 6.729 15 15v2.561c0 6.357 4.008 12.024 10.001 14.143 11.962 4.228 19.999 15.6 19.999 28.297s-8.037 24.069-19.999 28.297c-5.993 2.118-10.001 7.785-10.001 14.143v2.561c0 8.271-6.729 15-15 15s-15-6.729-15-15c0-8.284-6.716-15-15-15s-15 6.716-15 15c0 24.813 20.187 45 45 45 22.325 0 40.904-16.34 44.406-37.689 18.638-10.492 30.594-30.417 30.594-52.311s-11.957-41.82-30.594-52.313z">
                                        </path>
                                    </g>
                                </svg>
                            </span>
                            <h2 class="u-custom-font u-font-roboto-condensed u-text u-text-6">Mentor</h2>
                            <p class="u-text u-text-7">Profesional y competente que comparte su experiencia para ayudar
                                a los demás.</p>
                            <a href="#" class="u-btn u-button-style u-text-palette-4-base u-white u-btn-3">Agenda
                                Cita</a>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-layout-cell u-palette-3-base u-right-cell u-size-20 u-layout-cell-5">
                        <div class="u-container-layout u-valign-top u-container-layout-5">
                            <span class="u-icon u-icon-circle u-text-palette-3-base u-white u-icon-3">
                                <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 512 512"
                                    style="">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-34e4"></use>
                                </svg>
                                <svg class="u-svg-content" viewBox="0 0 512 512" id="svg-34e4">
                                    <path
                                        d="m262.761 172h-159.534c-28.305 0-55.234 12.216-73.884 33.516-18.661 21.313-27.217 49.644-23.475 77.729l17.965 134.802c3.467 26.011 16.244 49.856 35.979 67.143 19.737 17.289 45.054 26.81 71.287 26.81h103.789c26.233 0 51.551-9.521 71.288-26.81 19.734-17.287 32.512-41.132 35.978-67.143l17.966-134.803c3.742-28.084-4.814-56.415-23.476-77.728-18.649-21.3-45.579-33.516-73.883-33.516zm57.709 105.96-17.966 134.803c-4.5 33.77-33.568 59.236-67.616 59.236h-103.789c-34.048 0-63.116-25.466-67.616-59.237l-17.965-134.801c-2.22-16.656 2.854-33.457 13.919-46.095 11.055-12.625 27.016-19.866 43.79-19.866h159.533c16.774 0 32.735 7.241 43.79 19.866 11.066 12.638 16.139 29.439 13.92 46.094zm116.732-203.97c-3.956 4.631-9.569 7.01-15.218 7.011-4.595 0-9.212-1.575-12.979-4.793l-22.92-19.577c-12.479-10.659-27.657-16.395-43.957-16.623l-79.887 8.669c-14.208 1.541-28.655 2.323-42.942 2.323h-15.305v41h46c11.046 0 20 8.954 20 20s-8.954 20-20 20h-132c-11.046 0-20-8.954-20-20s8.954-20 20-20h46v-41h-36c-11.046 0-20-8.954-20-20s8.954-20 20-20h91.305c12.851 0 25.847-.703 38.627-2.09l81.027-8.793c.717-.078 1.437-.117 2.158-.117 26.34 0 50.874 9.065 70.952 26.215l22.92 19.577c8.4 7.174 9.393 19.799 2.219 28.198zm-182.208 269.01c0 11.046-8.954 20-20 20h-30v30c0 11.046-8.954 20-20 20s-20-8.954-20-20v-30h-30c-11.046 0-20-8.954-20-20s8.954-20 20-20h30v-30c0-11.046 8.954-20 20-20s20 8.954 20 20v30h30c11.046 0 20 8.954 20 20zm252-150.447c0 33.331-26.916 60.447-60 60.447s-60-27.117-60-60.447c0-9.654 3.071-26.782 29.624-63.896 7.015-9.804 18.37-15.657 30.376-15.657s23.361 5.853 30.376 15.657c26.553 37.114 29.624 54.241 29.624 63.896zm-40 .013c-.01-.233-.615-9.886-20-37.588-19.526 27.905-19.998 37.495-20 37.592 0 11.257 8.972 20.43 20 20.43 11.024 0 19.993-9.165 20-20.434z">
                                    </path>
                                </svg>
                            </span>
                            <h2 class="u-custom-font u-font-roboto-condensed u-text u-text-body-alt-color u-text-8">
                                Nutriologo</h2>
                            <p class="u-text u-text-body-alt-color u-text-9">Elabora guías de alimentación según los
                                requerimientos de los atletas o persona en general deacuerdo a sus necesidades.</p>
                            <a href="#" class="u-btn u-button-style u-text-palette-3-base u-white u-btn-4">Agenda
                                Cita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="u-backlink u-clearfix u-grey-80">
        <a class="u-link" href="index.html" target="_blank">
            <span>Psicologos.com</span>
        </a>
        <a class="u-link" href="index.html" target="_blank">
            <span>Inicio</span>
        </a>
    </section>

    <!--  Modales  -->
    <div id="modallogin" class="modal">
        <div class="contenedorModal">
                <div class="headModal">
                    <h1>Inicio de sesión</h1>
                    <span class="close">&times;</span>
                </div>
                <form class="formularioModal" action="./src/php/inicio_sesion.php" method="post">
                    <div class="tipoDeCuenta">
                        <input type="radio" value="cliente" id="cliente" name="cuenta"/>
                        <label class="bC" for="cliente"><i class="fa-regular fa-circle circleC"></i><i class="fa-solid fa-check checkC"></i> Cliente</label>
                    </div>
                    <div class="tipoDeCuenta">
                        <input type="radio" value="proveedor" id="proveedor" name="cuenta" />
                        <label class="bP" for="proveedor"><i class="fa-regular fa-circle circleP"></i><i class="fa-solid fa-check checkP"></i>Proveedor</label>
                    </div>
                        
                    <div class="login">
                        <div class="M-1">
                            <label id="icon" for="email"><i class="envelope-icon "><i class="fa-solid fa-envelope"></i></i></label>
                            <input type="email" name="email" placeholder="Email" required> 
                        </div>
                        <div class="M-2">
                            <label id="icon" for="contraseña"><i class="shield-icon"><i class="fa-solid fa-key"></i></i></label>
                            <input type="password" name="contraseña" placeholder="Contraseña" required>
                        </div>
                        <div class="M-3">
                            <input type="submit" value="Iniciar sesión" class="boton btnlog">
                            <a href="./registro_cliente.php" class="button btnlog">Registrate</a>
                        </div>
                        <div class="M-4">
                            <a href="./recuperacion.html" class="button btnlog">Olvidaste tu contraseña?</a>
                        </div>
                    </div>                    
                </form>
        </div>
    </div>
    <script>
        const cerrarLogin = document.querySelector(".close").addEventListener("click", () => {
            document.querySelector("#modallogin").style.display = "none"
        })
        const abrirLogin = document.querySelector(".fa-login").addEventListener("click", () => {
            document.querySelector("#modallogin").style.display = "grid"
        })
        const checkC = document.querySelector("#cliente").addEventListener("click", () => {
            document.querySelector(".checkC").style.display = "inline-block"
            document.querySelector(".checkP").style.display = "none"
            document.querySelector(".circleP").style.display = "inline-block"
            document.querySelector(".circleC").style.display = "none"
        })
        const checkP = document.querySelector("#proveedor").addEventListener("click", () => {
            document.querySelector(".checkP").style.display = "inline-block"
            document.querySelector(".checkC").style.display = "none"
            document.querySelector(".circleC").style.display = "inline-block"
            document.querySelector(".circleP").style.display = "none"
        })
    </script>
</body>

</html>