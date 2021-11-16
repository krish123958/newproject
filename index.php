<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HTML5 Starter Template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://kit.fontawesome.com/42deadbeef.js"></script>
  <link rel="stylesheet" href="nav.css">
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  <nav>
    <div id="toggle"></div>
    <div class="logo">KnowIt</div>
    <div>
    <ul id="sidebar">
        <li><a href="#">Home</a></li>
        <li><a href="#">contact us</a></li>
        <li><a href="#">lastest jobs</a></li>

    </ul>
  </div>
  </nav>
  <script>
  const toggle=document.getElementById('toggle');
  const sidebar=document.getElementById('sidebar');

  document.onclick=function(e){
    if(e.target.id!== 'sidebar' && e.target.id!== 'toggle'){
        toggle.classList.remove('active');
        sidebar.classList.remove('active')
    }
  }


  toggle.onclick=function(){
    toggle.classList.toggle('active');
    sidebar.classList.toggle('active')
  }

  </script>
  <script src="js/scripts.js"></script>
</body>
</html>