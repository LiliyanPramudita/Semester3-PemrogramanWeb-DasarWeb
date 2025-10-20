//Efek Fade-In Saat Scroll
const faders = document.querySelectorAll('.fade-in');

const appearOptions = {
  threshold: 0.2,
  rootMargin: "0px 0px -50px 0px"
};

const appearOnScroll = new IntersectionObserver(function(entries, observer) {
  entries.forEach(entry => {
    if (!entry.isIntersecting) return;
    entry.target.classList.add('show');
    observer.unobserve(entry.target); //Berhenti memantau elemen itu supaya animasinya tidak diulang-ulang.
  });
}, appearOptions);

faders.forEach(fader => {
  appearOnScroll.observe(fader);
});

//Efek Navbar Saat Scroll
window.addEventListener("scroll", () => {
  const navbar = document.querySelector(".navbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");//Kalau posisi scroll kembali ke atas,hapus class scrolled
  }
});
