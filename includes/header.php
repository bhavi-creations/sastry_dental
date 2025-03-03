<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Revansh Dental & physiotherapy</title>
    <link href="assets/img/logo/logo.png" rel="icon">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style1.css" rel="stylesheet">


    <!-- animation  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"> -->













</head>

<body>
    <!-- Spinner Start -->
    <!-- <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div> -->
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid  pe-0 d-none d-lg-block first_nav px-5">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2 small_text"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - sat : 10.00 am - 8.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2  text-white ">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>revanshdentalphysiotherapy@gmail.com</p>
                    </div>
                    <div class="py-2  text-white ">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+91-9493346026</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0 my-2">
        <a href="index.php" class="navbar-brand p-0 d-none d-md-block ">
            <img src="assets/img/logo/logo.png" alt="" class="img-fluid my-1 ">
        </a>


        <a href="index.php" class="navbar-brand p-0 d-md-none ">
            <img src="assets/img/logo/logo.png" alt="" class="img-fluid my-1 " style="width: 200px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link active">About</a>

                <!-- Service Dropdown -->
                <div class="nav-item dropdown">
                    <a href="service.php" class="nav-link dropdown-toggle" id="serviceMenu">Service</a>
                    <div class="dropdown-menu rounded-0 m-0 header_nav" id="serviceDropdown">
                        <a href="dental_implants.php" class="dropdown-item">Dental Implants</a>
                        <a href="smile_designing.php" class="dropdown-item">Smile Designing</a>
                        <a href="laser_treatment.php" class="dropdown-item">Laser Dental Treatment</a>
                        <a href="invisible_aligners.php" class="dropdown-item">Invisible Aligners</a>
                        <a href="teeth_whitening.php" class="dropdown-item">Teeth Whitening</a>
                        <a href="teeth_cleaning.php" class="dropdown-item">Teeth Cleaning</a>
                        <a href="teeth_jewellery.php" class="dropdown-item">Teeth Jewellery</a>
                        <a href="root_canal.php" class="dropdown-item">Root Canal</a>
                    </div>
                </div>

                <a href="blogs.php" class="nav-item nav-link">Blogs</a>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>

            <a href="appointment.php" class="btn btn-primary py-2 px-4 ms-3 mt-3">Appointment</a>
        </div>
    </nav>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Get elements
            const serviceMenu = document.getElementById("serviceMenu");
            const serviceDropdown = document.getElementById("serviceDropdown");

            // Check for small screen size
            function isMobileView() {
                return window.innerWidth <= 991;
            }

            // Toggle dropdown on click in mobile view
            serviceMenu.addEventListener("click", function(event) {
                if (isMobileView()) {
                    event.preventDefault(); // Prevent default link behavior
                    serviceDropdown.classList.toggle("show"); // Toggle dropdown visibility
                }
            });

            // Close the dropdown when clicking outside
            document.addEventListener("click", function(event) {
                if (!serviceMenu.contains(event.target) && !serviceDropdown.contains(event.target)) {
                    serviceDropdown.classList.remove("show");
                }
            });
        });
    </script>








    <style>
        .chat-container {
            width: 350px;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            position: fixed;
            bottom: 80px;
            right: 20px;
            display: none;
            z-index: 99999;
        }

        .chat-box {
            height: 400px;
            overflow-y: auto;
            padding: 10px;
            display: flex;
            flex-direction: column;
        }

        .chat-box div {
            margin: 5px 0;
            padding: 10px;
            border-radius: 10px;
            max-width: 80%;
        }

        .bot-message {
            background: #e0e0e0;
            align-self: flex-start;
        }

        .user-message {
            background: #4caf50;
            color: white;
            align-self: flex-end;
        }

        .chat-input {
            display: flex;
            padding: 10px;
            border-top: 1px solid #ddd;
        }

        .chat-input input {
            flex: 1;
            padding: 8px;
            border: none;
            border-radius: 5px;
            outline: none;
        }

        .chat-input button {
            padding: 8px 12px;
            border: none;
            background: #4caf50;
            color: white;
            cursor: pointer;
            border-radius: 5px;
        }

        .whatsapp-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            background: #25D366;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            margin: 10px;
            cursor: pointer;
            font-size: 14px;
            text-decoration: none;
        }

        .whatsapp-btn img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .chat-icon {
            z-index: 9999;
            position: fixed;
            bottom: 110px;
            right: 20px;
            background: #4caf50;
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .chat-icon img {
            width: 40px;
            height: 40px;
        }
    </style>

    <div class="chat-icon" id="chat-icon">
        <img src="assets/img/icons/bot12.png" alt="Chat Icon">
    </div>

    <div class="chat-container" id="chat-container">
        <div class="chat-box" id="chat-box">
            <div class="bot-message">👋 Welcome! Type "hai" to see available dental services.</div>
        </div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type your message..." />
            <button id="send-btn">Send</button>
        </div>
        <!-- WhatsApp Button -->
        <a href="https://wa.me/919493346026? " target="_blank" class="whatsapp-btn">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Logo"> Continue with WhatsApp
        </a>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let chatBox = document.getElementById("chat-box");
            let userInput = document.getElementById("user-input");
            let sendButton = document.getElementById("send-btn");
            let chatIcon = document.getElementById("chat-icon");
            let chatContainer = document.getElementById("chat-container");

            chatIcon.addEventListener("click", function() {
                chatContainer.style.display = chatContainer.style.display === "none" ? "block" : "none";
            });

            function addBotMessage(message) {
                let botMessage = document.createElement("div");
                botMessage.className = "bot-message";
                botMessage.textContent = message;
                chatBox.appendChild(botMessage);
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            function addUserMessage(message) {
                let userMessage = document.createElement("div");
                userMessage.className = "user-message";
                userMessage.textContent = message;
                chatBox.appendChild(userMessage);
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            function showDropdown() {
                let dropdownContainer = document.createElement("div");
                dropdownContainer.className = "bot-message";

                let select = document.createElement("select");
                select.innerHTML = `
                           <option value="" disabled selected>Select a dental service</option>
                <option value="Dental implants">🦷 Dental implants</option>
                <option value="Smile designing">🦷 Smile designing</option>
                <option value="Laser Dental Treatment">🦷 Laser Dental Treatment</option>
                <option value="Invisible aligners">🦷 Invisible aligners</option>
                <option value="Teeth whitening">🦷 Teeth whitening</option>
                <option value="Teeth cleaning">🦷 Teeth cleaning</option>
                <option value="Teeth jewellery">🦷 Teeth jewellery</option>
                <option value="root canal">🦷 root cana</option>`;

                select.addEventListener("change", function() {
                    let userChoice = select.options[select.selectedIndex].text;
                    addUserMessage(userChoice);

                    const serviceResponses = {
                        "Dental implants": "🦷 Dental implants are permanent, natural-looking replacements for missing teeth, restoring function and aesthetics.    any information Call us 📞 +91-9493346026.  ",
                        "Smile designing": "🦷 Smile designing is a cosmetic dental procedure that enhances the appearance of your smile through customized treatments..   any information Call us 📞 +91-9493346026. ",
                        "Laser Dental Treatment": "🦷 Laser dental treatment offers a painless, precise, and minimally invasive solution for various dental procedures, ensuring faster healing and reduced discomfort.    any information Call us 📞 +91-9493346026. ",
                        "Invisible aligners": "🦷 Invisible aligners are clear, removable trays that straighten teeth discreetly and comfortably without the need for traditional braces.    any information Call us 📞 +91-9493346026. ",
                        "Teeth whitening": "🦷 Teeth whitening is a cosmetic procedure that removes stains and brightens teeth for a whiter, more radiant smile.    any information Call us 📞 +91-9493346026. ",
                        "Teeth cleaning": "🦷Teeth cleaning is a professional dental procedure that removes plaque, tartar, and stains to maintain oral health and prevent gum disease.   any information Call us 📞 +91-9493346026. ",
                        "Teeth jewellery": "🦷Teeth jewellery is a cosmetic dental accessory where small gems or crystals are bonded to the teeth for a stylish and unique smile enhancement.   any information Call us 📞 +91-9493346026. ",
                        "root canal": "🦷A root canal is a dental procedure that treats infected or damaged tooth pulp, relieving pain and saving the natural tooth.   any information Call us 📞 +91-9493346026. ",
                    };

                    setTimeout(() => {
                        addBotMessage(serviceResponses[select.value] || "I don't have information on that.");
                    }, 1000);

                    dropdownContainer.remove();
                });

                dropdownContainer.appendChild(select);
                chatBox.appendChild(dropdownContainer);
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            function sendMessage() {
                let input = userInput.value.toLowerCase().trim();
                if (!input) return;

                addUserMessage(input);
                userInput.value = "";

                setTimeout(() => {
                    if (input === "hai") {
                        showDropdown();
                    } else {
                        addBotMessage("I'm not sure how to respond to that. Try asking something else! 🤖");
                    }
                }, 1000);
            }

            sendButton.addEventListener("click", sendMessage);
            userInput.addEventListener("keypress", function(event) {
                if (event.key === "Enter") sendMessage();
            });
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let chatBox = document.getElementById("chat-box");
            let userInput = document.getElementById("user-input");
            let sendButton = document.getElementById("send-btn");
            let chatIcon = document.getElementById("chat-icon");
            let chatContainer = document.getElementById("chat-container");

            chatIcon.addEventListener("click", function(event) {
                chatContainer.style.display = "block";
                event.stopPropagation(); // Prevents event from bubbling up
            });

            document.addEventListener("click", function(event) {
                if (!chatContainer.contains(event.target) && event.target !== chatIcon) {
                    chatContainer.style.display = "none";
                }
            });

            function addBotMessage(message) {
                let botMessage = document.createElement("div");
                botMessage.className = "bot-message";
                botMessage.textContent = message;
                chatBox.appendChild(botMessage);
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            function addUserMessage(message) {
                let userMessage = document.createElement("div");
                userMessage.className = "user-message";
                userMessage.textContent = message;
                chatBox.appendChild(userMessage);
                chatBox.scrollTop = chatBox.scrollHeight;
            }

            function sendMessage() {
                let input = userInput.value.toLowerCase().trim();
                if (!input) return;

                addUserMessage(input);
                userInput.value = "";

                setTimeout(() => {
                    if (input === "hai") {
                        addBotMessage("Here are the available dental services:");
                    } else {
                        addBotMessage("I'm not sure how to respond to that. Try asking something else! 🤖");
                    }
                }, 1000);
            }

            sendButton.addEventListener("click", sendMessage);
            userInput.addEventListener("keypress", function(event) {
                if (event.key === "Enter") sendMessage();
            });
        });
    </script>