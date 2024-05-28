<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TASK MASTER - Home</title>
  <link rel="stylesheet" href="{{asset('css/indexStyle.css')}}">
  <style>
    .task-master-logo{
        width:150px;
    }
  
  </style>
</head>
<body>
    <div class="container">

        <header class="header">
            <nav class="navbar">
                <div class="logo"><a href="{{ route('home')}}"><img src="{{asset('images/logo.png')}}" alt="Task Master Logo" srcset="" class="task-master-logo"></a></div>
                <div class="nav-buttons">
                    <button class="btn"><a href="{{ route('signIn') }}">Sign In</a></button>
                    <button class="btn"><a href="{{ route('signUp') }}">Sign Up</a></button>
                </div>
            </nav>
        </header>

        <section>

            <h1>Organisez enfin votre vie et votre travail.</h1>
            <h2>Gagnez en concentration, en organisation et en sérénité avec TASK MASTER. La 1ère application de gestion de tâches et de to do list.</h2>
            <div class="features">
                <div class="feature" id="feature1">
                    <div class="feature-content">
                        <h2>Facile à utiliser</h2>
                        <p>Notre interface intuitive vous permet de gérer vos tâches en toute simplicité.</p>
                    </div>
                </div>
                <div class="feature" id="feature2">
                    <div class="feature-content">    
                        <h2>Restez organisé</h2>
                        <p>Gardez une trace de toutes vos tâches et de tous vos projets en un seul endroit.</p>
                    </div>
                </div>
                <div class="feature" id="feature3">
                    <div class="feature-content">
                        <h2>Stimuler la productivité</h2>
                        <p>Donnez la priorité à vos tâches et faites-en plus en moins de temps.</p>
                    </div>
                </div>
            </div>
            <h3>+42 millions de personnes et d'équipe confient leur sérénité et leur productivité à TASK MASTER</h3>

        </section>

        <section>
            <div class="section-content">
                <div class="section-text">
                    <p>Videz votre esprit</p>
                    <h2>Le meilleur moyen d'avoir l'esprit libre.</h2>
                    <p>Notez simplement vos tâches comme elles viennent. La reconnaissance du langage naturel de TASK MASTER, unique en son genre, remplira instantanément votre liste de tâches.</p>
                
                </div>
                <img src="{{asset('images/welcome/image2.png')}}" alt="Image">
            </div>
            

        </section>

        <section>
            <div class="section-content">
                <img src="{{asset('images/welcome/image3.png')}}" alt="Image">

                <div class="section-text">
                    <p>Concentrez-vous sur les choses importantes</p>
                    <h2>La clarté mentale dont vous rêviez.</h2>
                    <p> Vos listes de tâches sont automatiquement triées dans les vues Aujourd'hui, Prochainement et les filtres personnalisés, pour mieux vous concentrer sur ce qui compte.</p>
                </div>    
        </section>

        <section>
            <blockquote>"TASK MASTER est un excellent moyen de garder la trace de toutes vos tâches, petites et grandes"</blockquote>
            

        </section>
        <img src="{{asset('images/welcome/image4.png')}}" alt="Image">
        <section>
            <!-- <h2>Explorez tout ce que TASK MASTER vous offre</h2> -->
            
            <img src="{{asset('images/welcome/image6.png')}}" alt="Image" id="id_offers">

            <blockquote>Gagnez en sérénité et en clarté avec l'application de productivité préférée des utilisateurs</blockquote>
        </section>
        <img src="{{asset('images/welcome/image5.png')}}" alt="Image">

        <footer class="footer">
            <p>© 2024 TaskMaster. All rights reserved.</p>
        </footer>
    </div>

</body>
</html>
