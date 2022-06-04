

<script type="text/javascript">
  const hamburger = document.querySelector('.hamburger');
  const times = document.querySelector('.times');
  const navBar = document.querySelector('.nav-a');

  hamburger.addEventListener('click', (e) => {

    navBar.style.display = 'block';
    hamburger.style.display = 'none';
    times.style.display = 'block';

  });

  times.addEventListener('click', (e) => {
    e.preventDefault();
    navBar.style.display = 'none';
    times.style.display = 'none';
    hamburger.style.display = 'block';

  });
</script>