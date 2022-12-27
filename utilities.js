const btn = document.getElementById("login-btn");
btn.addEventListener('click', updateSubs);

function updateSubs() {
  if (btn.textContent.includes('SUBSCRIBE')) {
    btn.textContent = "SUBSCRIBED";
  } else if (btn.textContent.includes('SUBSCRIBED')) {
    btn.textContent = "SUBSCRIBE";
  }
}
