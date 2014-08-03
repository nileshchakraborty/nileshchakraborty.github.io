﻿
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
                        <p class="intro-text">I am a Software Developer, Engineer, Social Entrepreneur and a total Geek and this is my page.</p>
                        <div class="fb-like" data-href="https://www.facebook.com/ChakrabortyNilesh" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
                        <div class="fb-share" data-href="https://www.facebook.com/l/e9bf8;nileshchakraborty.com" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>
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
                <h2>About Me</h2>
                <p>I am Nilesh Chakraborty, a Software Developer.I am a enthuastic developer and programmer, I have worked on many languages such as: JAVA, PERL, PYTHON, C, C++, C#, SCALA, JSF, HTML5, CSS3, etc. and Java technologies known includes J2EE, Springs, Struts2, Hibernate, JSF. Database Softwares includes PostgreSQL, MS-SQL T-SQL, Oracle PL/SQL, MySQL, No-SQL - MongoDB and Big Data frameworks such as Hadoop.</p>
                <p>I was driven into the world of programming by the interest in computers from the day I first received my first new computer. I was amazed by the power of creating stuffs that did not exist in the real world but did exist in the virtual reality, now my imagination could be expressed by the means of an app or a web blog. This became a motivational factor for me to learn how to create the applications.</p>

            </div>
        </div>
    </section>

    <section id="blog" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Blog</h2>
                    <p>To get the insights of my skills and also to learns some tricks and new tools, you can always take a step inside my blog. Please feel free to contact me for any requirement. For my project works and tutorials : <br/>
                       


<h2><?php _e('BLOG'); ?></h2>
<?php // Get RSS Feed(s)
  include_once(ABSPATH . WPINC . '/rss.php');
  $rss = fetch_rss('http://blog.nileshchakraborty.com/feed/');
  $maxitems = 5;
  $items = array_slice($rss->items, 0, $maxitems);
?>

<ul>
  <?php if (empty($items)): ?>
    <li>No items</li>
  <?php else:
      foreach ( $items as $item ):
        ?>
        <li>
          <a href='<?php echo $item['link']; ?>' title='<?php echo $item['title']; ?>'>
            <?php echo $item['title']; ?>
          </a>
        </li>
        <?php
      endforeach;
    endif;
  ?>
</ul>
     <br/>                  
<hr/>

                    <a href="http://blog.nileshchakraborty.com/" class="btn btn-default btn-lg">View All Posts</a>
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