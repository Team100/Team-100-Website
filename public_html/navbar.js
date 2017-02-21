var wrap = document.getElementById('wrapper');
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var header = document.createElement('div');
header.setAttribute('id', 'header');
header.style.width = '100%';
header.style.height = '85px';
header.style.backgroundColor = '#f49207';
header.style.position = 'fixed';
header.style.top = '0px';
wrap.appendChild(header);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var team100pic = new Image();
team100pic.style.width = '158px';
team100pic.src = 'assets/img/t100-logo.png';
team100pic.style.position = 'fixed';
team100pic.style.left = '12%';
header.appendChild(team100pic);
var firstpic = new Image();
firstpic.style.width = '172px';
firstpic.src = 'assets/img/firstLogos/first-horizontal.png';
firstpic.style.position = 'fixed';
firstpic.style.left = '64.5%';
header.appendChild(firstpic);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
var navbar = document.createElement('div');
navbar.setAttribute('id', 'navbar');
navbar.style.width = '100%';
navbar.style.height = '40px';
navbar.style.backgroundColor = '#2c2c2c';
navbar.style.borderRadius = '4px';
navbar.style.position = 'fixed';
navbar.style.top = '45px';
header.appendChild(navbar);
//++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++s
