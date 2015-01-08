
<?php include 'head.php'; ?>
<script>
var _prum = [['id', '53d2af8dabe53d147ddc2bdd'],
             ['mark', 'firstbyte', (new Date()).getTime()]];
(function() {
    var s = document.getElementsByTagName('script')[0]
      , p = document.createElement('script');
    p.async = 'async';
    p.src = '//rum-static.pingdom.net/prum.min.js';
    s.parentNode.insertBefore(p, s);
})();
</script>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <?php include 'fbapi.php'; ?>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Nilesh Chakraborty</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">About</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#blog">Blog</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="page-scroll">
                        
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="brand-heading">Nilesh Chakraborty.</h2>
                        <p class="intro-text">Software Engineer, Experimenter, Traveller, Welcome to my webpage.</p>
                        <div class="fb-like" data-href="https://www.facebook.com/ChakrabortyNilesh" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                        <div class="fb-share" data-href="http://www.facebook.com/sharer.php?u=http://www.nileshchakraborty.com/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                        <div class="page-scroll">
                            <a href="#about" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>About Nilesh</h2>
                <p>Nilesh Chakraborty, a Software Engineer at an California based company. He is an enthusiastic programmer, he has worked on multiple project related to Java and Java technologies. He has knowledge of Springs - IOC and AOP, and also worked on Big Data framework like Hadoop.</p>
                <p>This webpage and <a href="http://blog.nileshchakraborty.com">blog</a> are developed to provide insight into the projects and share the works to the general public to help the open source community.</p>

            </div>
        </div>
    </section>

    <section id="blog" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Blog</h2>
                    <p>Please find the blog to get an insight of the works and projects of Nilesh Chakraborty.<br/>
     <br/>                  
<hr/>

                    <a href="http://blog.nileshchakraborty.com/" class="btn btn-default btn-lg">View Posts</a>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact Me @</h2>
                <p>Feel free to email me to provide some feedback on the page or for job related offers, give suggestions for new project ideas, or to just say hello!</p>
                <p><a href="mailto:mail@nileshchakraborty.com" class="text-success">mail@nileshchakraborty.com</a></p>
                
                <ul class="list-inline banner-social-buttons">
                    <li><a href="https://twitter.com/cnilesh90" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li><a href="https://github.com/nileshchakraborty" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li><a href="https://plus.google.com/+NileshChakraborty" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                    <li><a href="https://www.facebook.com/nileshchakraborty" class="btn btn-default btn-lg"><i class="fa fa-facebook fa-fw"></i><span class="network-name">Facebook</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    
    <div id="map"></div>
    <footer>
        <?php include 'foot.php'; ?>
    </footer>
</body>
</html>
