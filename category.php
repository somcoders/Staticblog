<!doctype html>
<html>
    <head>
        <title>BoggaHore</title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <link href="naqshad.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
    
     
    <header class="header clearfix">

        <img class="logo" src="images/logo.png" alt="">
        <nav class="navbar" id="nav">
            <span class="gear right" onclick=showMenu();>&#9776;</span>
            <a href="index.php">Home</a>
            
                            <a href="category.php">Technology</a>
                            <a href="category.php">Programming</a>
                            <a href="category.php">Security</a>
                            <a href="category.php">Tutorials</a>
                    </nav>
    </header>

                  <div class="cat-head">
                        <p>Browsing category</p> 
            <h2><b style="color:red">technology</b></h2>
                     </div>
        <main class="main">
            <section class="section">
                        <article class="article clearfix">
                <a href="single.php">
                    <img src="images/image2.jpg" class="post-image" />
                </a>
                <div class="content">
                <a href="single.php">
                    <h2>Microsoft Office 365 Is Now Available On Apple’s Mac Store</h2>
                    <p>Last year at WWDC Apple promised to launch Microsoft Office 365. Apple has finally announced on Thursday that Microsoft Office 365 is now available on....</p>
                    <hr>
                    <h4>Posted on 2019-11-01 16:05:41| technology</h4>
                </a>
                </div>
            </article>
                        <article class="article clearfix">
                <a href="single.php">
                    <img src="images/image3.jpg" class="post-image" />
                </a>
                <div class="content">
                <a href="single.php">
                    <h2>Best IOS System Repaire Tool To Get You Out Of All Kinds Of IPhone </h2>
                    <p>Tenorshare ReiBoot is a wonderful iOS devices boot repair tool which enables you to fix various issues such as recovery mode, white Apple logo, black ....</p>
                    <hr>
                    <h4>Posted on 2019-11-01 16:16:16| technology</h4>
                </a>
                </div>
            </article>
                            
             
                
                
        </section>
             
        <aside class="aside">
            <div class="inner">
            <h2><b style="color:red">TECHNOLOGY</b> posts</h2>
                                <a href="single.php">Microsoft Office 365 Is Now Available On Apple’s Mac Store&nbsp;<b style="color:red">More..</b>  </a>
                                    <a href="single.php">Best IOS System Repaire Tool To Get You Out Of All Kinds Of IPhone &nbsp;<b style="color:red">More..</b>  </a>
                
            </div>
        </aside>
                
        </main>
       
      
        <footer class="footer">
            <h2>&copy;copyright Somcoders Designed by Abdifatah Abdilahi</h2>
        </footer>
    
    </body>
        <script>
            function showMenu(){
               var nav = document.getElementById("nav");
                if(nav.className === "navbar" ){
                    nav.className += " responsive";
                }else{
                    nav.className = "navbar";
                }
            }
        </script>
</html>
