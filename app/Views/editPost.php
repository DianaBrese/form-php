<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/assets/style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>My blog</title>

</head>

<body>
    <header>
        <img src="/assets/banner.jpg" alt="banner" id="banner">
    </header>

    <nav id="nav-bar">
        <ul>
            <button type="button">
                <a href="http://localhost:8080/home">
                    <li>Home</li>
                </a>
            </button>
            <button type="button">
                <a href="http://localhost:8080/createPost">
                    <li>Criar post</li>
                </a>
            </button>

        </ul>
    </nav>
    <section id="section">
        <div>
            <form action="/post/edit" method="POST">
                <label for="title">Title</label><br>
                <input type="hidden" value="<?php echo $post['id'] ?>" name="id">
                <input type="text" id="'title" name="title" value="<?php echo $post['title']?>"><br>
                <label for="content">Content</label><br>
            
                <input type="text" name="content" id="content" value="<?php echo $post['content']?>"><br>
                <label for="author">Author</label><br>
                <input type="text" id="author" name="author" value="<?php echo $post['author']?>"><br>
                <label for="date">Date</label><br>
                <input type="date" id="date" name="date" value="<?php echo $post['date']?>"><br>
                <input type="submit" value="submit">
            </form>

        </div>

    </section>

</body>

</html>