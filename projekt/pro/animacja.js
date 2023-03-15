

function reveal() {
    var reveals = document.querySelectorAll(".oferta");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 350;
  
      if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }
  window.addEventListener("scroll", reveal);
  
  function reveal1() {
      var reveals1 = document.querySelectorAll("#left");
    
      for (var i = 0; i < reveals1.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals1[i].getBoundingClientRect().top;
        var elementVisible = 350;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals1[i].classList.add("active");
        } else {
          reveals1[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", reveal1);
  
    function bg() {
      var reveals2 = document.querySelectorAll("#right");
    
      for (var i = 0; i < reveals2.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals2[i].getBoundingClientRect().top;
        var elementVisible = 350;
    
        if (elementTop < windowHeight - elementVisible) {
          reveals2[i].classList.add("active");
        } else {
          reveals2[i].classList.remove("active");
        }
      }
    }
    window.addEventListener("scroll", bg);


    function bg2() {
        var reveals2 = document.querySelectorAll("#mid");
      
        for (var i = 0; i < reveals2.length; i++) {
          var windowHeight = window.innerHeight;
          var elementTop = reveals2[i].getBoundingClientRect().top;
          var elementVisible = 350;
      
          if (elementTop < windowHeight - elementVisible) {
            reveals2[i].classList.add("active");
          } else {
            reveals2[i].classList.remove("active");
          }
        }
      }
      window.addEventListener("scroll", bg2);
    
    
  
  
  
  
  
  