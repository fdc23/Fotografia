<!-- Video y carruseles Bloque 1 -->
<div class="video-wrapper">
  <iframe 
    src="https://www.youtube.com/embed/mUyOrGxf93o?modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&controls=1" 
    title="YouTube video player" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    allowfullscreen
    frameborder="0"
  ></iframe>
</div>

<!-- Controles video -->
<div class="video-controls-below raid-controls-below d-flex align-items-center justify-content-between mt-3 position-relative" 
     style="flex-basis: 100%; height: 60px; padding: 0 5%; max-width: 320px; margin: 0 auto;">
  <button id="btn-prev-video" class="btn-slide-control" type="button" aria-label="Anterior video" disabled>
    ‹
  </button>
  <div id="video-counter" class="img-counter d-flex align-items-center justify-content-center gap-2" aria-live="polite">
    <input id="video-input" class="img-input" type="number" min="1" max="1" value="1" aria-label="Número de video editable" disabled />
    <span class="img-total">/ 1</span>
  </div>
  <button id="btn-next-video" class="btn-slide-control" type="button" aria-label="Siguiente video" disabled>
    ›
  </button>
</div>

<!-- Video Bloque 2 -->
<div class="video-wrapper">
  <iframe 
    id="video-player-2"
    src="https://www.youtube.com/embed/WBFXOKliuSM?modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&controls=1" 
    title="YouTube video player" 
    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
    allowfullscreen
    frameborder="0"
  ></iframe>
</div>

<!-- Controles video Bloque 2 -->
<div class="video-controls-below raid-controls-below d-flex align-items-center justify-content-between mt-3 position-relative" 
     style="flex-basis: 100%; height: 60px; padding: 0 5%; max-width: 320px; margin: 0 auto;">
  <button id="btn-prev-video-2" class="btn-slide-control" type="button" aria-label="Anterior video">
    ‹
  </button>
  <div id="video-counter-2" class="img-counter d-flex align-items-center justify-content-center gap-2" aria-live="polite">
    <input id="video-input-2" class="img-input" type="number" min="1" max="2" value="1" aria-label="Número de video editable" />
    <span class="img-total">/ 2</span>
  </div>
  <button id="btn-next-video-2" class="btn-slide-control" type="button" aria-label="Siguiente video">
    ›
  </button>
</div>

<!--// Script para control de videos Bloque 2-->
<script>
document.addEventListener('DOMContentLoaded', () => {
  const videos2 = [
    "https://www.youtube.com/embed/WBFXOKliuSM?modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&controls=1",
    "https://www.youtube.com/embed/3EBacbLU-Nk?modestbranding=1&rel=0&showinfo=0&iv_load_policy=3&controls=1"
  ];

  const videoPlayer2 = document.getElementById('video-player-2');
  const input2 = document.getElementById('video-input-2');
  const btnPrev2 = document.getElementById('btn-prev-video-2');
  const btnNext2 = document.getElementById('btn-next-video-2');

  function updateVideo2(index) {
    videoPlayer2.src = videos2[index];
    input2.value = index + 1;
    btnPrev2.disabled = index === 0;
    btnNext2.disabled = index === videos2.length - 1;
  }

  btnPrev2.addEventListener('click', () => {
    let currentIndex = parseInt(input2.value) - 1;
    if (currentIndex > 0) updateVideo2(currentIndex - 1);
  });

  btnNext2.addEventListener('click', () => {
    let currentIndex = parseInt(input2.value) - 1;
    if (currentIndex < videos2.length - 1) updateVideo2(currentIndex + 1);
  });

  input2.addEventListener('change', () => {
    let val = parseInt(input2.value);
    if (val >= 1 && val <= videos2.length) {
      updateVideo2(val - 1);
    } else {
      updateVideo2(0);
    }
  });

  updateVideo2(0);
});
</script>

<!-- CSS de video wrapper -->
.video-wrapper {
  position: relative;
  width: 100%;
  max-width: 100%;
  aspect-ratio: 16 / 9;
  overflow: visible;
  border-radius: 6px;
  background: linear-gradient(135deg, #0a0f2c 0%, #1a264d 100%);
  padding: 6px;
  box-sizing: border-box;
  border: 1.5px solid rgba(58, 123, 215, 0.5);
  animation: borderFlow 10s linear infinite;
  box-shadow: 0 0 12px rgba(58, 123, 215, 0.2), 
              inset 0 0 12px rgba(30, 60, 120, 0.4);
  transition: box-shadow 0.3s ease;
  z-index: 1;
  margin-top: 20px;
}

.video-wrapper:hover {
  box-shadow: 0 0 24px rgba(58, 123, 215, 0.45), 
              inset 0 0 25px rgba(50, 100, 180, 0.5);
}

.video-wrapper iframe {
  position: absolute;
  top: 0;
  left: 0;
  width: 100% !important;
  height: 100% !important;
  border: 0;
  border-radius: 4px;
  box-sizing: border-box;
  z-index: 2;
}

.video-controls-below {
  position: relative;
  z-index: 2;
  overflow: visible;
  display: flex;
  flex-wrap: nowrap;
  gap: 12px;
  flex-basis: 100%;
  height: 60px;
  padding: 0 5%;
  max-width: 320px;
  margin: 0 auto 24px auto;
  justify-content: center;
  align-items: center;
}

.video-controls-below button,
.btn-slide-control {
  width: 48px;
  height: 48px;
  font-size: 1.8rem;
  color: #1a2a6c;
  border: 2px solid #3a7bd7;
  background: #f0f4ff;
  border-radius: 50%;
  transition: background-color 0.25s ease, color 0.25s ease, box-shadow 0.25s ease;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  box-shadow: 0 2px 6px rgba(58, 123, 215, 0.3), 
              inset 0 -2px 5px rgba(58, 123, 215, 0.15);
  user-select: none;
  flex-shrink: 0;
  z-index: 15;
  margin: 0 5px;
}

.btn-slide-control:hover:not(:disabled) {
  background-color: #3a7bd7;
  color: #fff;
  box-shadow: 0 4px 12px rgba(58, 123, 215, 0.7), 
              inset 0 -2px 8px rgba(58, 123, 215, 0.35);
}

.btn-slide-control:active:not(:disabled) {
  background-color: #2c60b5;
  box-shadow: 0 2px 8px rgba(45, 95, 166, 0.8), 
              inset 0 2px 6px rgba(45, 95, 166, 0.5);
  color: #dce6f8;
}

.btn-slide-control:disabled {
  background-color: #d6d9e6;
  color: #a0a4b7;
  border-color: #b0b4cd;
  cursor: not-allowed;
  box-shadow: none;
  opacity: 0.6;
}

.video-controls-below .img-counter {
  background: #f0f4ff;
  padding: 8px 18px;
  border-radius: 14px;
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-size: 1.1rem;
  font-weight: 600;
  user-select: none;
  box-shadow: 0 2px 10px rgba(58, 123, 215, 0.2);
  color: #1a2a6c;
  display: flex;
  align-items: center;
  gap: 8px;
  width: 120px;
  justify-content: center;
  transition: box-shadow 0.3s ease;
  position: relative;
  margin: 0 auto;
  flex-shrink: 1;
  min-width: 70px;
}

.video-controls-below .img-counter:hover {
  box-shadow: 0 4px 16px rgba(58, 123, 215, 0.4);
}

.video-controls-below .img-input {
  width: 56px;
  font-family: monospace;
  font-size: 1.2rem;
  border: 1.5px solid #3a7bd7;
  outline: none;
  text-align: center;
  background: #fff;
  cursor: text;
  user-select: text;
  border-radius: 6px;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.video-controls-below .img-input:focus {
  border-color: #2a56a0;
  box-shadow: 0 0 6px rgba(58, 123, 215, 0.7);
}

/* Evitar spinners en input number */
.video-controls-below input[type="number"] {
  -moz-appearance: textfield;
}

.video-controls-below input::-webkit-inner-spin-button,
.video-controls-below input::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

.video-controls-below .img-input {
  width: 56px;
  font-family: monospace;
  font-size: 1.2rem;
  border: 1.5px solid #3a7bd7;
  outline: none;
  text-align: center;
  background: #fff;
  cursor: text;
  user-select: text;
  border-radius: 6px;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.video-controls-below .img-input:focus {
  border-color: #2a56a0;
  box-shadow: 0 0 6px rgba(58, 123, 215, 0.7);
}

/* Evitar spinners en input number */
.video-controls-below input[type="number"] {
  -moz-appearance: textfield;
}

.video-controls-below input::-webkit-inner-spin-button,
.video-controls-below input::-webkit-outer-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

@keyframes borderFlow {
  0% { background-position: 0% 50%, 0% 50%; }
  50% { background-position: 100% 50%, 100% 50%; }
  100% { background-position: 0% 50%, 0% 50%; }
}

@keyframes glowWave {
  0%, 100% { transform: scale(1); opacity: 0.4; }
  50% { transform: scale(1.08); opacity: 0.65; }
}