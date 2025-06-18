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
    animation: loaderFadeOut 0.5s ease 6s forwards;
  }

  /* Centered GIF */
  .page-loader::before {
    content: "";
    width: 200px;
    height: 200px;
    background: url('./images/new.gif') no-repeat center/contain;
    display: block;
    opacity: 0;
    animation: gifFadeIn 0.5s ease forwards, gifFadeOut 0.5s ease 5.5s forwards;
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
    animation: fillSmooth 6s linear forwards;
  }

  /* Fade animations */
  @keyframes gifFadeIn {
    0% { opacity: 0; }
    100% { opacity: 1; }
  }

  @keyframes gifFadeOut {
    0% { opacity: 1; }
    100% { opacity: 0; }
  }

  @keyframes loaderFadeOut {
    to {
      opacity: 0;
      visibility: hidden;
    }
  }

  @keyframes fillSmooth {
    0%   { width: 0%; }
    100% { width: 100%; }
  }
</style>

<!-- HTML STRUCTURE -->
<div class="page-loader">
  <div class="page-loader-bar"></div>
</div>
