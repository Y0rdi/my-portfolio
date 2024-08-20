<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css"> 
    <link rel="stylesheet" href="sweetalert2.min.css">
<body>
    <header class="bg-dark text-white py-3">
        <nav class="container">
            <ul class="nav justify-content-center">
                <li class="nav-item"><a href="#home" class="nav-link text-white">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link text-white">About</a></li>
                <li class="nav-item"><a href="#services" class="nav-link text-white">Services</a></li>
                <li class="nav-item"><a href="#projects" class="nav-link text-white">Projects</a></li>
                <li class="nav-item"><a href="#contact" class="nav-link text-white">Contact</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#loginModal">Login</a></li>
                <li class="nav-item"><a href="#" class="nav-link text-white" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a></li>
            </ul>
        </nav>
    </header>
   
    <section id="home" class="section py-5">
        <div class="container text-center">
            <h1>Welcome to My Portfolio</h1>
            <p>Developing With a Passion While Exploring The World.</p>
        </div>
    </section>

    <section id="about" class="section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h2>From Code to Clicks: Crafting Seamless Web Experiences</h2>
                    <p>With a meticulous approach to coding and design, I strive to create web experiences that seamlessly blend functionality and aesthetics. Each line of code is crafted with precision, ensuring robust performance and smooth navigation for users.</p>
                    <p>Beyond technical proficiency, I prioritize understanding user behaviors and needs, leveraging insights to optimize every aspect of the user journey. This holistic approach allows me to design interfaces that not only meet but exceed expectations, fostering engagement and satisfaction.</p>
                    <p>I aim to deliver web solutions that not only impress visually but also provide meaningful value to users and businesses.</p>
                    <button class="btn btn-primary">Contact Me</button>
                </div>
                <div class="col-md-6 text-center">
                    <img src="Screenshot (42).png" alt="About Me Image" class="img-fluid rounded">
                </div>
            </div>
        </div>
    </section>

    <section id="services" class="section py-5 bg-light">
        <div class="container text-center">
            <h2>Services I Am Providing</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="card p-3 mb-4">
                        <img src="ui icon.png" alt="UI/UX Design Icon" class="card-img-top mx-auto" style="max-width: 100px;">
                        <div class="card-body">
                            <h3 class="card-title">UI/UX Design</h3>
                            <p class="card-text">Ensuring that every aspect of a website or application is intuitive, visually appealing, and optimized for user interaction.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 mb-4">
                        <img src="dm icon.png" alt="Digital Marketing Icon" class="card-img-top mx-auto" style="max-width: 100px;">
                        <div class="card-body">
                            <h3 class="card-title">Digital Marketing</h3>
                            <p class="card-text">Strategic digital marketing services, including SEO, content creation, and social media management, to boost brand visibility and drive conversions effectively.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-3 mb-4">
                        <img src="web icon.jpg" alt="Web Development Icon" class="card-img-top mx-auto" style="max-width: 100px;">
                        <div class="card-body">
                            <h3 class="card-title">Web Development</h3>
                            <p class="card-text">Custom web development solutions that enhance online presence and user engagement through intuitive design and robust functionality.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="section py-5">
        <div class="container text-center">
            <h2>My Portfolio</h2>
            <p>These are some of my previous works</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="images nw.jfif" alt="Project 1" class="card-img-top">
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Screenshot (45).png" alt="Project 2" class="card-img-top">
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="Screenshot (46).png" alt="Project 3" class="card-img-top">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="section py-5 bg-light">
        <div class="container">
            <h2 class="text-center">Contact Me</h2>
            <form action="" method="post" class="w-75 mx-auto mt-4">
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message:</label>
                    <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send</button>
            </form>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2024 My Portfolio. All rights reserved.</p>
    </footer>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="login_handler.php" method="post">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Login</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="text-center w-100">
                        <p>Don't have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="register_handler.php" method="post">
                        <div class="mb-3">
                            <label for="reg_username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="reg_username" name="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="reg_email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="reg_email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="reg_password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="reg_password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Register</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="text-center w-100">
                        <p>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

   
    
    
    
</body>
</html>