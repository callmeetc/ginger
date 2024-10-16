<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css & icons -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <!--  -->
    <!-- static css -->
     <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Login Card</title>
  
</head>
<body>
    <div class="card" id="draggableForm">
        <div class="card-body">
            <!-- Pills navs -->
            <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="tab-login" data-toggle="pill" href="#voter-login" role="tab" aria-controls="voter-login" aria-selected="true">Login</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="tab-register" data-toggle="pill" href="#voter-register" role="tab" aria-controls="voter-register" aria-selected="false">Register</a>
                </li>
            </ul>
            <!-- Pills content -->
            <div class="tab-content">
                <div class="tab-pane fade show active" id="voter-login" role="tabpanel" aria-labelledby="tab-login">
                    <form method="POST" action="login.php">
                        <div class="text-center mb-3">
                            <p>Sign in with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                        <p class="text-center">or:</p>
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="loginName" name="name" class="form-control" required />
                            <label class="form-label" for="loginName">Username</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="loginPassword" name="password" class="form-control" required />
                            <label class="form-label" for="loginPassword">Password</label>
                        </div>
                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex justify-content-center">
                                <div class="form-check mb-3 mb-md-0">
                                    <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                    <label class="form-check-label" for="loginCheck"> Remember me </label>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex justify-content-center">
                                <a href="#!">Forgot password?</a>
                            </div>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
                        <!-- Register buttons -->
                        <div class="text-center">
                            <p>Not a member? <a href="#voter-register">Register</a></p>
                        </div>
                    </form>
                </div>

                <div class="tab-pane fade" id="voter-register" role="tabpanel" aria-labelledby="tab-register">

                    <!-- registration start -->
                    <form method="POST" action="register.php">
                        <div class="text-center mb-3">
                            <p>Sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-facebook-f"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-google"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                                <i class="fab fa-github"></i>
                            </button>
                        </div>
                        <p class="text-center">or:</p>

                        <!-- Username input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="registerUsername" name="name" class="form-control" required />
                            <label class="form-label" for="registerUsername">Username</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" id="registerPassword" name="password" class="form-control" required />
                            <label class="form-label" for="registerPassword">Password</label>
                        </div>
                        <!-- Repeat Password input -->
                        <div class="form-outline mb-4">
                            <input type="password" name="retype_password" id="registerRepeatPassword" class="form-control" required />
                            <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                        </div>
                        <!-- Checkbox -->
                        <div class="form-check d-flex justify-content-left mb-4">
                            <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked />
                            <label class="form-check-label" for="registerCheck">
                                I have read and agree to the <a href="#policy">terms</a>
                            </label>
                        </div>
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary btn-block mb-3">Sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- scritps start -->
    <script>
        const form = document.getElementById('draggableForm');
        let offsetX, offsetY;

        form.addEventListener('mousedown', (e) => {
            offsetX = e.clientX - form.getBoundingClientRect().left;
            offsetY = e.clientY - form.getBoundingClientRect().top;
            document.addEventListener('mousemove', mouseMoveHandler);
            document.addEventListener('mouseup', mouseUpHandler);
        });

        function mouseMoveHandler(e) {
            form.style.left = `${e.clientX - offsetX}px`;
            form.style.top = `${e.clientY - offsetY}px`;
            form.style.position = 'absolute';
        }

        function mouseUpHandler() {
            document.removeEventListener('mousemove', mouseMoveHandler);
            document.removeEventListener('mouseup', mouseUpHandler);
        }
    </script>

    <!-- DraggableformEnd -->
     <!-- mouse Effect -->
     <script>
        const circle = document.createElement('div');
        circle.className = 'circle';
        document.body.appendChild(circle);

        document.addEventListener('mousemove', function(event) {
            // Move the circle to the mouse position
            circle.style.left = `${event.clientX}px`;
            circle.style.top = `${event.clientY}px`;

            // Create a fading trail
            const trail = document.createElement('div');
            trail.className = 'circle';
            trail.style.left = `${event.clientX}px`;
            trail.style.top = `${event.clientY}px`;
            trail.style.opacity = '1';
            document.body.appendChild(trail);

            // Fade out and remove the trail after 500ms
            setTimeout(() => {
                trail.style.opacity = '0';
                setTimeout(() => trail.remove(), 300);
            }, 0);
        });
    </script>
    <!-- end circle -->

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>