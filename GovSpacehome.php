<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GovSpace</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header class="navbar">
        <div class="logo">
            <img src="GovSpace_Inverted_2-BGRemove (2).png" alt="GovSpace Logo">
        </div>
        <div class="nav-icons">
            <a href="#" class="nav-item">
                <i class="fa-solid fa-house"></i>
                <span>Home</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-briefcase"></i>
                <span>Jobs</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-comment-dots"></i>
                <span>Messages</span>
            </a>
            <a href="#" class="nav-item">
                <i class="fa-solid fa-bell"></i>
                <span>Notifications</span>
            </a>
        </div>
    </header>

    <div class="main-content-wrapper">
        <div class="page-container">
            <div class="sidebar">
                <img src="SheenaMae PROFILE PICTURE.jpeg" alt="Profile">
                <h3>Sheena Mae Catacutan</h3>
                <div class="menu">
                    <a class="item" href="#"><i class="fas fa-inbox"></i><span>Inbox</span></a>
                    <a class="item" href="#"><i class="fas fa-envelope"></i><span>Mail</span></a>
                    <a class="item" href="#"><i class="fas fa-cog"></i><span>Settings</span></a>
                    <a class="item" href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
                </div>
                <button class="logout-btn">Log Out</button>
            </div>

            <div class="main-container">
                <div class="main-section">
                    <img class="main-image" src="Bacolod City NGC (2).jpg" alt="NGC">
                    <div class="welcome-text">
                        <span>WELCOME TO</span><br>
                        <span class="gov">GOV</span><span class="space">SPACE</span>
                    </div>
                </div>
            </div>
            
            <div class="news-section">
                <h2 id="news-date">NEWS UPDATE August 19, 2025</h2>
                <div class="news-ad">
                    <img src="JobAd1.jpeg" alt="DILG Hiring">
                </div>
                <div class="news-ad">
                    <img src="JobAd2.jpeg" alt="Urgent Hiring">
                </div>
            </div>
        </div>
    </div>

    <script>
        function updateNewsDate() {
            const now = new Date();
            const options = { year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('news-date').textContent = "NEWS UPDATE " + now.toLocaleDateString('en-US', options);
        }
        updateNewsDate();
    </script>
</body>
</html>
