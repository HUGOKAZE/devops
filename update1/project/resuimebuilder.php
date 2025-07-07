<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/resume.css">
    <title>Online Resume Builder</title>
</head>
<body>
    <h1>Online Resume Builder</h1>

    <form action="generate_resume.php" method="POST" enctype="multipart/form-data">
        <label for="name">Full Name</label>
        <input type="text" id="name" name="name" required>

        <label for="name">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" id="phone" required>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" required>

        <label for="summary">Profile Summary</label>
        <textarea type="text" name="summary" id="summary" placeholder="what about your self" required></textarea>

        <label for="education">Education</label>
        <textarea type="text" name="education" id="education" placeholder="what is your education background" required></textarea>

        <label for="experience">Work Experience</label>
        <textarea type="text" name="experience" id="experience" placeholder="describe your work experince" required></textarea>

        <label for="skills">Skills</label>
        <textarea type="text" name="skills" id="skills" placeholder="list your skills...." required></textarea>

        <label for="Profile_Picture">Upload Profile Picture</label>
        <input type="file" name="Profile_Picture" id="Profile_Picture" required>

        <button type="submit">Generate Resume</button>
    </form>
</body>
</html>