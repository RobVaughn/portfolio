<?php
  require_once("gallery.php");
  readfile('header.html');
?>
<body id="top">
<div id="preloader"></div>
<?php readfile('menu.html'); ?>

  <!-- Main -->
  <section id="home" class="home">
    <div class="container">
      <div class="content">
        <div class="row">
          <div class="col-md-12 text-right navicon">
            <a id="nav-toggle" class="nav_slide_button" href="/index.php#"><span></span></a>
          </div>
        </div>
        <div class="row">
          <div class="col inner">
            <h1 class="animated fadeInDown">Rob Vaughn</h1>
            <h2>Portfolio</h2>
            <h3>Experienced technology professional specializing in software development, web technologies, QA, and technical management across diverse platforms.</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="intro text-center section-padding color-bg" id="about">
    <div class="container">
      <div class="row">
        <div class="col wp1">
          <h1 class="arrow"><span>about</span> me</h1>
          <p>I am a seasoned professional with advanced degrees in computer science and a strong background in development and management. My expertise spans software and web development, design, optimization, security, technical and team management, product and project development, quality assurance, testing, and security audits, including penetration testing (CISSP-certified, 2007&ndash;2014). I have experience across a wide range of platforms and operating systems.</p>
          <p>As a tech generalist, I focus on leveraging the best tools and methodologies to deliver cost-efficient, high-quality solutions. My skills encompass software architecture, full-stack development, system optimization, cybersecurity, and process automation. I have extensive experience with programming languages such as PHP, Python, JavaScript, and SQL, as well as designing and implementing scalable, secure, and maintainable solutions across various domains.</p>
          <p>I'm available to work in the Portland, Oregon metro area as well as remote.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="text-center section-padding contact-wrap" id="contact">
    <div class="container">
      <div class="row">
        <div class="col mx-auto">
          <h1 class="arrow-dark">Drop <span>me</span> a <span>line</span></h1>
        </div>
      </div>
      <div class="row contact-details">
        <div class="col-4 wider-on-phone">
          <div class="dark-box box-hover">
            <h2><i class="fa-solid fa-envelope"></i><span>Email</span></h2>
            <p><a href="mailto:RobVaughn@gmail.com">RobVaughn@&#8203;gmail.com</a><br>
            Portland, Oregon</p>
          </div>
        </div>
        <div class="col-4 wider-on-phone">
          <div class="dark-box box-hover">
            <h2><i class="fa-solid fa-mobile"></i><span>Phone</span></h2>
            <p>971-413-0528<br>(please leave a message)</p>
          </div>
        </div>
        <div class="col-4 hide-on-phone">
          <div class="dark-box box-hover">
            <h2><i class="fa-solid fa-address-card"></i><span>VCard</span></h2>
            <p>
              <img id="enlarge" class="small" src="/assets/img/qr-vcard.png" alt="Rob Vaughn VCard" title="Rob Vaughn VCard">
              <br><span id="hide-on-enlarge">click to enlarge</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- Social Media -->
    <div id="socials" class="container">
      <div class="row">
        <div class="col-12">
          <h1 class="diamond-dark">Online <span>&amp;</span> Social <span>Media</span></h1>
        </div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-6 col-sm-6 col-md-4 col-lg-4 col-xl-4 social-section">
          <ul class="social-buttons">
            <li><a href="https://www.linkedin.com/in/RobVaughn" target="_blank" class="social-btn" title="LinkedIn"><i class="fa fab fa-brands fa-linkedin"></i></a></li>
            <li><a href="https://github.com/RobVaughn" target="_blank" class="social-btn" title="Github"><i class="fa fab fa-brands fa-github"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Sites -->
  <section id="websites" class="websites text-center" id="service">
    <div class="container">
      <div class="row">
        <div class="col mx-auto">
          <h1 class="arrow-dark"><span>Web</span>sites</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-8 offset-2 d-flex justify-content-center">
          <p class="last">All websites are mobile-forward &amp; dynamically generated, based on Linux, PHP, jQuery &amp; MySQL, with Bootstrap and custom CSS. Includes full Google &amp; Cloudflare analytics and Cloudflare h-Captcha integration.</p>
        </div>
      </div>

      <div class="row website-icons text-center">
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
          <div class="card">
            <div class="icon animate fadeInRight delay-05s">
              <a href="https://liamgrant.sound-o-mat.com" target="_blank">
                <img src="/assets/img/grant-logo-2025-400x400-72dpi.png" />
              </a>
            </div>
            <div class="card-body">
              <h2>Liam Grant</h2>
              <p>Redesigned, rebuilt and optimized a website for guitarist <a href="https://liamgrant.sound-o-mat.com" target="_blank">Liam Grant</a> on Linux with Bootstrap 5.0 / HTML5 / CSS3, using PHP, MySQL and jQuery/JavaScript while following 2025 best practices for security, performance, accessibility, and UX. Integrated Google Analytics, hCaptcha and a custom font created by the artist.</p>
              <p class="last">Main focus is now <a href="https://liamgrant.sound-o-mat.com/live.php" target="_blank">upcoming shows</a> with gigs happening in the next two weeks dynamically listed on the <a href="https://liamgrant.sound-o-mat.com" target="_blank">main page</a> along with basic <a href="https://liamgrant.sound-o-mat.com/contact.php" target="_blank">contact</a> and <a href="https://liamgrant.sound-o-mat.com/about.php" target="_blank">biographical information</a>.</p>
            </div>
          </div>
        </div>
        
        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
          <div class="card">
            <div class="icon animate fadeInRight delay-1s">
              <a href="https://sound-o-mat.com" target="_blank">
                <img src="/assets/img/som-logo-2025-400x400-72dpi.png">
              </a>
            </div>
            <div class="card-body">
              <h2>The Sound-O-Mat</h2>
              <p class="last">Home page for <a href="https://sound-o-mat.com" target="_blank">The Sound-O-Mat</a> audio studio and record label. Responsible for all front- and backend work: custom design and layout, HTML5 / CSS3 / PHP / Javascript/jQuery, graphics, icons &amp; logos, photographs, domain name registration and hosting, etc. Includes standard faire such as a <a href="https://sound-o-mat.com/faq.php" target="_blank">FAQ</a> with drop-down answers, regularly updated <a href="https://sound-o-mat.com/news.php" target="_blank">news</a> and an integrated Mailchimp-based <a href="https://sound-o-mat.com" target="_blank">mailing list subscription</a> form.</p>
            </div>
          </div>
        </div>

        <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
          <div class="card">
            <div class="icon animate fadeInRight delay-2s">
              <a href="https://austere.xyz" target="_blank"><img src="/assets/img/austere-logo-2025-400x400-72dpi.png">
              </a>
            </div>
            <div class="card-body">
              <h2>Austere</h2>
              <p class="last">A custom <a href="https://austere.xyz" target="_blank">band website</a> designed from the artist's concepts and built as a fully responsive, mobile-friendly platform. Departing from typical music website designs, the site's navigation encourages exploration and discovery, reflecting the band's anonymous persona. Visitors are invited to uncover their <a href="https://austere.xyz/about.php" target="_blank">bio</a>, news, and <a href="https://austere.xyz/listen.php" target="_blank">artistic influences</a> in an organic way. Hidden Easter eggs, interactive elements, and unexpected surprises further immerse users, showcasing the band's <a href="https://www.mixcloud.com/rhythmatist/the-wisdom-of-austerity/" target="_blank">music</a> and creative projects in a uniquely engaging experience.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>

  <!-- Portfolio -->
	<section id="portfolio" class="portfolio text-center">
    <div class="container">
      <div class="row header-bg">
				<div class="col mx-auto">
          <h1 class="arrow-dark">Port<span>folio</span></h1>
				</div>
      </div>

      <div class="row flex body-bg">
        <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 offset-md-2 offset-lg-2 offset-xl-2">
          <?php generateGallery("gallery-data.txt", "/assets/img/gallery"); ?>
        </div>
      </div>
    </div>
  </section>

  <!-- Skillsets -->
  <section id="skillsets" class="skillsets">
    <div class="container-fluid">
      <div class="row">
        <div class="col mx-auto">
          <h1 class="arrow-dark"><span>Skill</span>sets</h1>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
              <div class="card-image">
                <img src="/assets/img/team-lead-400x400-72dpi.jpg" alt="Team Lead" title="Team Lead">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
              <div class="card-body">
                <h3 class="card-title">Team Lead</h3>
                <p>I have extensive experience leading teams, fostering collaboration, and keeping projects on track by ensuring clear goals, effective communication, and a productive work environment. I focus on removing roadblocks, keeping teams aligned, and making sure everyone has what they need to succeed. My leadership experience includes managing remote and distributed teams across multiple locations, such as Portland, San Francisco, Tokyo and Spain simultaneously.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
              <div class="card-image">
                <img src="/assets/img/system-design-etc-400x400-72dpi.jpg" alt="Team Lead" title="Team Lead">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
              <div class="card-body">
                <h3 class="card-title">Software Architect &amp; Developer</h3>
                <p class="card-text">I work across the entire software stack, from front-end design and layout to back-end development, system management, and security. My experience covers everything from UI/UX and graphics to coding, server administration, domain management, and optimizing performance. I take a holistic approach to development, ensuring every piece &mdash; whether it's the user experience, infrastructure, or security &mdash; works seamlessly together.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
              <div class="card-image">
                <img src="/assets/img/product-management-400x400-72dpi.jpg" alt="Project Management" title="Project Management">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
              <div class="card-body">
                <h3 class="card-title">Project Management</h3>
                <p class="card-text">I've managed software projects for a wide range of companies, from Fortune 50 giants (CDK Global (formerly ADP Dealer Services) and Kroger) to spinoffs (PassEdge, out of Intel) to startups I helped build from launch. I focus on keeping projects on track, balancing business and technical needs and costs, and making sure things get done right. I bring attention to detail, a solid technical background, and strong communication skills to every project.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <div class="row align-items-center">
            <div class="col-12 col-sm-12 col-md-2 col-lg-2 col-xl-2">
              <div class="card-image">
                <img src="/assets/img/computer-security.gif" alt="CISSP" title="CISSP">
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-10 col-lg-10 col-xl-10">
              <div class="card-body">
                <h3 class="card-title">Computer &amp; Network Security Specialist</h3>
                <p class="card-text">Held CISSP certification and memberships in ISSA and OWASP from 2007 to 2014, with expertise in security architecture, operations, and risk management. Member of ISSA from 2006 to 2014, participating in professional development and cybersecurity community events. Engaged with OWASP from 2008 to 2014, contributing to awareness and application of secure coding practices and web security standards.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
<?php readfile('footer.html'); ?>
</body>
</html>
