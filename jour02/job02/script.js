function showhide() {
    var content = document.getElementById('content');
    var button = document.getElementById('button');
  
    if (content.style.display === 'none') {
      content.style.display = 'block';
      content.innerHTML = '<article>L\'important n\'est pas la chute, mais l\'atterrissage.</article>';
    } else {
      content.style.display = 'none';
      content.innerHTML = '';
    }
  }
  
  var button = document.getElementById('button');
  button.addEventListener('click', showhide);