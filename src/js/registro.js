const checkC = document.querySelector("#cliente").addEventListener("click", () => {
    document.querySelector(".checkC").style.display = "inline-block"
    document.querySelector(".checkP").style.display = "none"
    document.querySelector(".circleP").style.display = "inline-block"
    document.querySelector(".circleC").style.display = "none"
  })

  const checkP = document.querySelector("#proveedor").addEventListener("click", () => {
    document.querySelector(".checkP").style.display = "inline-block"
    document.querySelector(".checkC").style.display = "none"
    document.querySelector(".circleC").style.display = "inline-block"
    document.querySelector(".circleP").style.display = "none"
  })