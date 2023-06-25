<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud php y mysql</title>
    <link rel="stylesheet" href="css/logIn-singUp.css">
    <script src="bootstrap/js/bootstrap.min.js" defer></script>
    <script src="https://kit.fontawesome.com/676eaf438a.js" defer crossorigin="anonymous"></script>
    <script src="jquery/jquery-3.3.1.min.js" defer></script>
    <script src="view/password.js" defer></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
        <!-- Main Section -->
        <div class="container-fluid px-0 mx-0 main_section">
        <!-- Navbar Section  -->
        <div class="container-fluid px-0 mx-0 navbar_section mb-5">
            <div class="container col-lg-10">
                <nav class="navbar navbar-expand-lg">
                    <div class="container-fluid">
                        <a class="navbar-brand btn me-5" href="./index.html">
                            <img src="./img/g-tech.jpg" alt="Logo" class="logo">
                        </a>
                        <button class="btn navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa-solid fa-bars-staggered secondary"></i>
                        </button>
                        <div class="collapse navbar-collapse mx-sm-3 mx-3" id="navbarSupportedContent">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">#</a>
                                </li>
                            </ul>
                            <form class="d-flex search_section">
                                <input class="form-control me-0" type="search" placeholder="Search here..."
                                    aria-label="Search">
                                <button class="btn search_btn" type="submit">Search</button>
                            </form>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Hero section/ login register section -->
        <div class="container col-lg-9 col-md-10 col-sm-11 col-11 px-lg-5 px-md-2 px-sm-0 px-0">
            <div class="authentication_section px-4 py-5">
                <div class="info_section">
                    <p class="greeting_title mb-3">Hey, Camper or Trainer !</p>
                    <h3 class="title mb-3">Welcome to
                        <span class="g_tech_official">Oficial Center of Campers And Trainers </span>
                        the name is Campus!
                    </h3>
                    <p class="desc mb-4">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum dolores sit deserunt at optio
                        impedit neque modi accusamus alias corrupti?
                    </p>
                    <div class="social_account_section">
                        <a href="#" class="">
                            <i class="fa-brands fa-github"></i>
                        </a>
                        <a href="#" class="">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                    </div>
                </div>
                <div class="form_section p-4">
                    <div class="toggle_button p-2 mb-4">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="btn nav-link active" id="pills-signin-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-signin" type="button" role="tab" aria-controls="pills-signin"
                                    aria-selected="true">log in</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="btn nav-link" id="pills-signup-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-signup" type="button" role="tab" aria-controls="pills-signup"
                                    aria-selected="false">Sign Up</button>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-signin" role="tabpanel"
                            aria-labelledby="pills-signin-tab">
                            <h5 class="authentication_title secondary mb-3">log In</h5>
                            <form method="post">
                                <div class="mb-4">
                                    <div class="prefix_icon_input_section px-3 mb-1">
                                        <i class="fa-solid fa-envelope tertiary"></i>
                                        <input type="email" class="form-control" placeholder="Email Address..."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="prefix_icon_input_section px-3 mb-1">
                                        <i class="fa-solid fa-lock tertiary"></i>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password..." required>
                                        <i class="fa-solid fa-eye tertiary visibility" toggle="#password"></i>
                                    </div>
                                </div>
                                <div class="remember_forgot_password_section mb-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label secondary" for="rememberMe">
                                            Remember me
                                        </label>
                                    </div>
                                    <div class="forgot_section">
                                        <a href="#" class="forgot_password_btn">Forgot Password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn submit_btn w-100 mb-4">Sign In</button>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="pills-signup" role="tabpanel" aria-labelledby="pills-signup-tab">
                            <h5 class="authentication_title secondary mb-3">Sign Up</h5>
                            <form method="post">
                                <div class="mb-3">
                                    <div class="prefix_icon_input_section px-3">
                                        <i class="fa-solid fa-user tertiary"></i>
                                        <input type="text" class="form-control" placeholder="Fullname..."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="prefix_icon_input_section px-3">
                                        <i class="fa-solid fa-phone tertiary"></i>
                                        <input type="text" class="form-control" placeholder="Contact no..."
                                            required>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <div class="prefix_icon_input_section px-3">
                                        <i class="fa-solid fa-envelope tertiary"></i>
                                        <input type="email" class="form-control" placeholder="Email Address..."
                                            required>
                                    </div>
                                </div>
                                

                                <div class="mb-3">
                                        <div class="prefix_icon_input_section px-3">
                                            <i class="fa-solid fa-user tertiary"></i>
                                            <select class="form-control" required>
                                                <option value="" disabled selected>Select role</option>
                                                <option value="camper">Camper</option>
                                                <option value="trainer">Trainer</option>
                                            </select>
                                        </div>
                                    </div>

                                
                                <div class="mb-3">
                                    <div class="prefix_icon_input_section px-3 mb-1">
                                        <i class="fa-solid fa-lock tertiary"></i>
                                        <input type="password" class="form-control" id="password"
                                            placeholder="Password..." required>
                                        <i class="fa-solid fa-eye tertiary visibility" toggle="#password"></i>
                                    </div>
                                    <small class="d-block message_box">
                                        Password must include at least one special character, uppercase number.
                                    </small>
                                </div>
                                <div class="form-check mb-4">
                                    <input class="form-check-input" type="checkbox" value="" id="termsAndConditions">
                                    <label class="form-check-label secondary" for="termsAndConditions">
                                        Accept our terms and conditions.
                                    </label>
                                </div>
                                <button type="submit" class="btn submit_btn w-100 mb-4">Sign Up</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>