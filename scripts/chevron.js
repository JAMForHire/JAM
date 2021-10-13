var down = true;

window.onload = () => {
  document.getElementById('chevron').src = down ? "./Resources/assets/chevron_down.svg" : "./Resources/assets/chevron_right.svg"
  
  document.getElementById('chevron').onclick = () => {
    down = !down;
    document.getElementById('chevron').src = down ? "./Resources/assets/chevron_down.svg" : "./Resources/assets/chevron_right.svg"
  }
}