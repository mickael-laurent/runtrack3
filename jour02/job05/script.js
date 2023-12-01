window.addEventListener('scroll', function() {
    var scrollableHeight = document.documentElement.scrollHeight - window.innerHeight;
    var scrolled = (window.scrollY / scrollableHeight) * 100;
    var footer = document.getElementById('footer');
    footer.style.backgroundColor = `hsl(${scrolled}, 70%, 50%)`;
    footer.style.width= `${scrolled}%`
  });