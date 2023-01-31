<?php
include "conexion.php";

// session_start();



?>




    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <img class="img-fluid" src="images/devchallenges.svg" alt="" />

            <ul class="nav margen">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" color="gray" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                </svg>
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-dark" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"> <?php echo $_SESSION["name"]; ?></a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="d-flex mx-3 bkg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" color="gray" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                            </svg>
                            <a class="mx-1 mt-1 profile" href="consultar.php">My Profile</a>
                            </div>
                            
                        </li>
                        <li>
                            <div class="d-flex mx-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" color="gray" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
                            <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                            </svg>
                            <a class="dropdown-item mx-1" href="#">Chat Group</a>
                            </div>
                            
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <div class="d-flex mx-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" color="red" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                            <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                            </svg>
                            <a class="dropdown-item mx-1 text-danger" href="salir.php">Logout</a>
                            </div>
                            
                        </li>
                        
                    </ul>
                </li>
            </ul>

        </div>
        </div>
        </div>
    </nav>
    
