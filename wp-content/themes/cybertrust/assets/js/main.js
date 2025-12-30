(function(){
  const nav = document.querySelector('.navbar');
  if (nav) {
    const toggleShadow = () => {
      if (window.scrollY > 10) {
        nav.style.boxShadow = '0 4px 20px rgba(15, 42, 79, 0.08)';
      } else {
        nav.style.boxShadow = '0 1px 0 rgba(12, 35, 67, 0.06)';
      }
    };
    window.addEventListener('scroll', toggleShadow);
    toggleShadow();
  }
})();
