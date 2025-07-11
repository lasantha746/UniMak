<style>
  .page-loader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: white;
    z-index: 9999;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
     opacity: 1;
  transition: opacity 0.5s ease;
  }

  /* Centered GIF */
  .page-loader::before {
    content: "";
    width: 200px;
    height: 200px;
    background: url('./images/new.gif') no-repeat center/contain;
    display: block;
  animation: gifBlink 1.5s ease-in-out infinite;
  }

  /* Loading bar container */
  .page-loader-bar {
    position: relative;
    width: 160px;
    height: 8px;
    margin-top: 20px;
    border-radius: 4px;
    background: #eee;
    overflow: hidden;
  }

  /* Actual animated fill bar */
  .page-loader-bar::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 0%;
    background: #4fc3f7;
    animation: fillLoop 6s linear infinite;
  }

  /* Looping gif opacity flicker */
@keyframes gifBlink {
  0% { opacity: 0.6; }
  50% { opacity: 1; }
  100% { opacity: 0.6; }
}

/* Looping bar fill */
@keyframes fillLoop {
  0% { width: 0%; }
  100% { width: 100%; }
}

</style>

<!-- HTML STRUCTURE -->
<div class="page-loader">
  <div class="page-loader-bar"></div>
</div>
