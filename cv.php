<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <title>CV</title>
       <link rel="stylesheet" href="./css/style_cv.css">
       <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
       <script src="./js/script_cv.js" defer></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>
           
   <body>
        <header class="mobile-header">            
            <h1 class="second-title">
            Sitara Liang
            </h1>
        </header>
        <header class="web-header">
            <h1 class="title">
                Sitara Liang
            </h1>
            <section class="skill-bar-container">
                <h3>Tech Skills</h3>
            <span class="skill-bar">
            <span class="skills c">C</span>
            </span>
            <span class="skill-bar">
            <span class="skills java">Java</span>
            </span>
            <span class="skill-bar">
            <span class="skills python">Python</span>
            </span>
            <span class="skill-bar">
            <span class="skills html">HTML</span>
            </span>
            <span class="skill-bar">
            <span class="skills css">CSS</span>
            </span>
            <span class="skill-bar">
            <span class="skills js">Javascript</span>
            </span>
            <span class="skill-bar">
            <span class="skills rsicv">RSIC-V</span>
            </span>
            <span class="skill-bar">
            <span class="skills haskell">Haskell</span>
            </span>
        </section>
            
            <section class="language-skill">
                <h3>Language Skills</h3>
                <canvas id="language-chart"></canvas>
            </section>
        </header>
        <article class="main">
        <section class="timeline">
            <section class="container left">
                <section class="content">
                    <h3>Sep 2022-Now</h3>
                    <h4>Université de Strasbourg - Computer Science Major</h4>
                    <p>📍Strasbourg, France
                    </p>
                    <button id="myBtn0"><span>read more</span></button>
                </section>
            </section>
            <section id="myModal0" class="modal">
                <article class="modal-content">
                    <span class="close">&times;</span>
                    <p>
                        Thrilled to share that I've successfully obtained a new certification: AWS Certified Cloud Practitioner from Amazon Web Services (AWS)! 🔥 👩‍🎓 
                        <br>
                        As a penultimate-year student pursuing a major in computer science, I maintain an interest in diverse fields within the discipline. Prior to my encounter with AWS, I had yet to find a definite favorite among them. It appears that I have now determined my preferred field and direction. ✊ 🚀 
                        <br>
                        I extend my gratitude to my instructors, Blaine Sundrud, Morgan Willis and Rudy Chetty, for their insightful explanations. Additionally, I'd like to express my appreciation to AWS. 🥇 🌐 
                        <br>
                        Throughout the course of my study and exam preparation, I acquired a comprehensive understanding of the key aspects of AWS Cloud Computing, and a solid foundation in AWS network, storage, database, etc. At the same time, I dove deep into various fundamental skills and AWS services. I would like to say that this experience has had a transformative impact on my life. 🎉 ✨ 
                        <br>
                        I will persist in drawing inspiration from Cloud Computing, and be excited for more opportunities. I'm enthusiastic about applying the acquired knowledge into practices! 🙋‍♀️ 💪
                    <p> 
                        <img class="model-img" src="./assets/AWS Certified Cloud Practitioner certificate.png" style="width: 80%;" alt="">
                    </p>
                </article>
            </section>
        
            <section class="container right">
                <section class="content">
                    <h3>2020-2021</h3>
                    <h4>Gap Year</h4>
                    <p>📍Dalian, China</p>
                    <button id="myBtn1"><span>read more</span></button>
                </section>
            </section>
            <section id="myModal1" class="modal">
                <article class="modal-content">
                    <span class="close">&times;</span>
                    <p>I used my time at home to learn French by myself, obtained the DELF B2 level certificate, and learned various computer basics in advance on online learning platforms such as edx and coursera. I have always been passionate about learning new knowledge and skills. During this year, I obtained certificates of computer science-related courses from Harvard, Stanford, MIT and other universities. These studies gave me a solid foundation in computer science-related knowledge before entering university.</p>
                    <p> 
                        <img class="model-img" src="./assets/Algorithms Design and Analysis.jpg" alt="">
                        <img class="model-img" src="./assets/CS50 Introduction to Computer Science.jpg" alt="">
                        <img class="model-img" src="./assets/CS50's Introduction to Artificial Intelligence.jpg" alt="">
                        <img class="model-img" src="./assets/Python avancés.jpg" alt="">
                        <img class="model-img" src="./assets/DELF B2.JPG" alt="">
                    </p>
                </article>
            </section>

        
            <section class="container left">
                <section class="content">
                    <h3>Feb 2018-Dec 2019</h3>
                    <h4>Burwood Girls High School</h4>
                    <p>📍Sydney, Australia</p>
                    <button id="myBtn2"><span>read more</span></button>
                </section>
            </section>
            <section id="myModal2" class="modal">
                <article class="modal-content">
                    <span class="close">&times;</span>
                    <p style="display: block;">
                        The two years at BGHS were precious to me. After graduation, I got an offer from the University of Sydney with excellent results, but due to various reasons, I finally chose to study in France.
                        During my high school, I also worked as a tutor at 
                        <a href="https://www.wesleymission.org.au/">
                            Wesley Mission
                        </a> 
                        (School for Seniors). This experience allowed me to improve and enhance my collaboration and communication skills.
                    </p>
                    <p> 
                        <img class="model-img" src="./assets/usyd1.png" alt="">
                        <img class="model-img" src="./assets/usyd2.png" alt="">           
                        <img class="model-img" src="./assets/usyd3.JPG" alt="">
                    </p>
                </article>
            </section>

        
            <section class="container right">
                <section class="content">
                    <h3>2016-2017</h3>
                    <h4>Dalian No.12 High School</h4>
                    <p>📍Dalian, China</p>
                </section>
            </section>
        </section>

    </article>

    <script>


var ctx = document.getElementById("language-chart");

new Chart(ctx, {
    type: 'polarArea',
    data: {
      labels: ["English: C2", "French: C1", "Mandarin: C2", "German: A2"],
      datasets: [{
        label: '',
        data: [9, 7.5,10, 3],
        borderWidth: 1,
        backgroundColor: ["#bf97c9","#97a5c9","#b3ace8","#f7cbf4"]
      }]
    }
  });

  Chart.defaults.color = '#FFF';
    </script>

 
   </body>
           
</html>