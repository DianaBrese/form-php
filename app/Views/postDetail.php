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
            <a href="http://localhost:8080/home"> <li>Home</li></a>   
            </button>
            <button type="button">
              <a href="http://localhost:8080/createPost"><li>Criar post</li></a>  
            </button>

        </ul>
    </nav>
    <section id="section">
        <div>
            <h3><?php echo $post['title'] ?></h3>
            <p><?php echo $post['content']?></p>
            <div id="post-informations">
                <h5><?php echo $post['author'] ?></h5>
                <h5><?php echo $post['date'] ?></h5>
               <a href="http://localhost:8080/editPost?id=<?php echo $post['id'] ?>"><button type="button">Editar postagem</button></a> 
               <form action="/post/delete" method="post" >
               <input type="submit" value="Excluir">
               <input type="hidden" value="<?php echo $post['id'] ?>" name="id">
               </form>
               
            </div>
        </div>


</html>