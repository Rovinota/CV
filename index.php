<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flutter Developer CV</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            text-align: center;
            padding: 20px;
            background-color: white;
            color: black;
        }
        .profile-photo {
            width: 150px;
            height: 150px;
            border-radius: 50%;
        }
        .navbar {
            background-color: black;
            color: white;
        }
        .navbar ul {
            padding: 0;
            margin: 0;
            list-style: none;
            text-align: center;
        }
        .navbar li {
            display: inline;
            padding: 20px;
        }
        .navbar a {
            color: black;
            text-decoration: none;
            padding: 14px 20px;
            display: inline-block;
        }
        .navbar a:hover {
            background-color: #ddd;
            /* color: black; */
        }
        section {
            padding: 20px;
            background-color: white;
            margin: 10px;
        }
        h2 {
            border-bottom: 2px solid #333;
            padding-bottom: 5px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #333;
            color: white;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            background-color: #f9f9f9;
            margin: 5px 0;
            padding: 10px;
            border-left: 5px solid #333;
        }
        form {
            display: grid;
            gap: 10px;
        }
        textarea {
            resize: vertical;
            height: 100px;
        }
        footer {
            text-align: center;
            padding: 20px;
            background-color: #333;
            color: white;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <div class="header-content">
            <img src="profile.jpg" alt="Profile Photo" class="profile-photo">
            <h1><?php echo "Flutter Developer"; ?></h1>
            <h2><?php echo "Mobile App Developer"; ?></h2>
            <p>Email: <?php echo "flutter.dev@gmail.com"; ?> | Phone: <?php echo "+8801755901554"; ?></p>
            <p>Address: <?php echo "Dept of CSE, University of Barishal"; ?></p>
        </div>
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="#about">About Me</a></li>
            <li><a href="#skills">Skills</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#education">Education</a></li>
            <li><a href="#achievements">Achievements</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>

    <section id="about">
        <h2>About Me</h2>
        <p><?php echo "I am a passionate Flutter developer with experience in building high-performance mobile applications. I enjoy working with new technologies and creating smooth, user-friendly experiences for end-users."; ?></p>
    </section>

    <section id="skills">
        <h2>Skills</h2>
        <ul>
            <li><?php echo "Flutter & Dart"; ?></li>
            <li><?php echo "Firebase Integration"; ?></li>
            <li><?php echo "State Management (Provider, Riverpod, Bloc)"; ?></li>
            <li><?php echo "RESTful APIs & JSON"; ?></li>
            <li><?php echo "UI/UX Design"; ?></li>
        </ul>
    </section>

    <section id="experience">
        <h2>Experience</h2>
        
        <div class="experience-item">
            <h3><?php echo "Worked on various Flutter projects, gaining experience in developing feature-rich applications and handling third-party API integration."; ?></h3>
        </div>
    </section>

    <section id="education">
        <h2>Education</h2>
        <table>
            <tr>
                <th>Degree</th>
                <th>Institution</th>
                <th>Passing Year</th>
                <th>CGPA</th>
            </tr>
            <tr>
                <td><?php echo "Bachelor of Science in Computer Science & Engineering"; ?></td>
                <td><?php echo "University of Barishal"; ?></td>
                <td><?php echo "2026"; ?></td>
                <td><?php echo "3.6"; ?></td>
            </tr>
        </table>
    </section>

    <section id="achievements">
        <h2>Achievements and Awards</h2>
        <ul>
            <li><?php echo "I have no Achievements and Awards Yet."; ?></li>
            
        </ul>
    </section>

    <section id="contact">
        <h2>Contact Me</h2>
        <form>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required><br>
            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea><br>
            <button type="submit">Send Message</button>
        </form>
    </section>

    <footer>
        <p>© 2024 Flutter Dev - All Rights Reserved</p>
    </footer>
</body>
</html>
