
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Learning Platform</title>
</head>
  
<body>

<header>
  <h1>Welcome to the Leading Learning Platform</h1>
</header>
<p class="p1">
    <span class="K">K</span>
    <span class="I">I</span>
    <span class="D">D</span>
    <span class="O">O</span>
    <span class="S">S</span></p>
  <?php
include 'nav.php';
?>
   <main>
    <section class="intro-section">
      <div class="intro-content">
        <h2>Interactive Learning for Kids</h2>
        <p>Engaging and fun educational content for kindergarten kids.</p>
      </div>
      <img src="Nimg/study.gif" alt="Kids Learning" class="intro-image">
    </section>
  </main>
  <footer>
    <p>&copy; 2023 Learning Platform</p>
    <h6>A project by Gausiya Farheen</h6>
  </footer>
  <style>
    html {
  box-sizing: border-box;
  display:flex;
  flex-wrap: wrap;
  flex-direction: column;
}
*, *:before, *:after {
  box-sizing:inherit;
}
body::-webkit-scrollbar{
  display: none;
}
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

header {
  background-color: #48A1DD;
  color: #FFF;
  text-align: center;
  padding: 20px;
}

main {
  position: relative;
  overflow: hidden;
}

.intro-section {
  position: relative;
  height: 80vh;
  background-color: #F1F1F1;
  display: flex;
  justify-content: center;
  align-items: center;
}

.intro-content {
  text-align: center;
}

.intro-content h2 {
  font-size: 2.5rem;
  color: #333;
}

.intro-content p {
  font-size: 1.2rem;
  color: #555;
}

.btn-start {
  display: inline-block;
  position: absolute;
  top:400px;
  left: 650px;
  z-index: 1;
  margin-top: 120px;
  padding: 12px 20px;
  background-color: #48A1DD;
  color: #FFF;
  text-decoration: none;
  font-size: 1.2rem;
  border-radius: 5px;
  transition: background-color 0.3s ease;
}

.btn-start:hover {
  background-color: #2F7FBA;
}

.intro-image {
  position: absolute;
  /* bottom: -3%; */
  /* right: 5%; */
  top:10%;
  right:5%;
  max-height: 70%;
  animation: floatImage 2s infinite alternate;
}

@keyframes floatImage {
  0% {
    transform: translateY(0);
  }
  100% {
    transform: translateY(-20px);
  }
}

footer {
  background-color: #48A1DD;
  color: #FFF;
  text-align: center;
  padding: 10px;
  position: fixed;
  bottom: 0;
  left: 0;
  width: 100%;
}
.nav{
    background-color:rgba(0,0,0,0.1);
    height: 60px;

  }
  .nav-items{
    font-size: 20px;
    color:darkred;
  text-decoration: none;
    margin-left: 80px;
   
  }
  .nav-items:hover{
    color: rgb(240, 75, 75);
  }
  .p1{font-family: 'Delicious Handrawn', cursive;
     font-size: 170px;
    text-align: center;
    font-weight: 800;
    margin-top:50px;
    position: absolute;
    top:150px;
    z-index: 1;
    left: 500px;
   
  }
  .K{
    
    -webkit-text-fill-color: crimson;
-webkit-text-stroke-width: 3px;
-webkit-text-stroke-color:black;
 text-shadow: 1px 1px 2px rgba(250, 82, 4, 0.671);
  }
  .I{
   
    margin-left:-45px;
    position:relative;
    top:-25px;
    left:-50px;
    -webkit-text-fill-color: coral;
-webkit-text-stroke-width: 3px;
-webkit-text-stroke-color:black;
 text-shadow: 1px 1px 2px rgba(250, 82, 4, 0.671);
    
  }
  .D{
    margin-left:-45px;
    position:relative;
    top:-5px;
    left:-90px;
    -webkit-text-fill-color:rgb(84, 211, 211) ;
-webkit-text-stroke-width: 3px;
-webkit-text-stroke-color:black;
 text-shadow: 1px 1px 2px rgba(250, 82, 4, 0.671);
  }
  .O{
   
    margin-left:-45px;
    position:relative;
    top:-25px;
    left:-130px;
    -webkit-text-fill-color:rgb(120, 65, 172);
    -webkit-text-stroke-width: 3px;
    -webkit-text-stroke-color:black;
    text-shadow: 1px 1px 2px rgba(250, 82, 4, 0.671);
    
  }
  .S{
    
    margin-left:-110px;
    position:relative;
    top:25px;
    left:-125px;
    -webkit-text-fill-color:rgb(162, 245, 94);
    -webkit-text-stroke-width: 3px;
    -webkit-text-stroke-color:black;
    text-shadow: 1px 1px 1px rgba(250, 82, 4, 0.671);
    
    
  }
  </style>
</body>
</html>

