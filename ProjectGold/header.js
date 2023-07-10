const textElement = document.getElementById('headtitle');
const textToType = 'CS Dept. Library';
let index = 0;

function typeText() {
  textElement.textContent = textToType.slice(0, index);
  index++;

  if (index > textToType.length) {
    clearInterval(typingInterval);
  }
}

const typingInterval = setInterval(typeText, 200);
