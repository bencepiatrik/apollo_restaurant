window.addEventListener("DOMContentLoaded", function () {
  const welcomeTo = document.querySelector(".welcome");
  const restaurantName = document.querySelector(".restaurant-name");
  const arrow = document.querySelector(".arrow");

  const tl = new TimelineMax();
  // hero animation ******************************************************
  tl.fromTo(
    welcomeTo,
    1,
    { width: "0px" },
    { width: "100%", ease: Power2.easeInOut }
  )
    .fromTo(
      welcomeTo,
      1.5,
      { fontSize: "0px" },
      { fontSize: "68px", ease: Power2.easeInOut },
      "-=0.7"
    )
    .fromTo(restaurantName, 1, { opacity: 0, y: -20 }, { opacity: 1, y: 0 })
    .fromTo(arrow, 2, { opacity: 0 }, { opacity: 1, ease: Power2.easeInOut });

  // scroll animation ******************************************************
  function scrollAppear1() {
    const articleText = document.querySelector(".article-text-1");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.add("appear");
    }
  }
  window.addEventListener("scroll", scrollAppear1);

  function scrollAppear1_1() {
    const articleText = document.querySelector("#order");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.remove("hide");
      articleText.classList.add("appear");
    }
  }
  window.addEventListener("scroll", scrollAppear1_1);

  function scrollAppear2() {
    const articleText = document.querySelector(".article-text-2");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.add("appear");
    }
  }
  window.addEventListener("scroll", scrollAppear2);

  function scrollAppear2_2() {
    const articleText = document.querySelector("#weekly");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.remove("hide");
      articleText.classList.add("appear");
    }
  }
  window.addEventListener("scroll", scrollAppear2_2);

  function scrollAppear3() {
    const articleText = document.querySelector(".article-text-3");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.add("appear");
    }
  }
  window.addEventListener("scroll", scrollAppear3);

  function scrollAppear3_3() {
    const articleText = document.querySelector("#full-menu");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.remove("hide");

      articleText.classList.add("appear");
    }
  }
  window.addEventListener("scroll", scrollAppear3_3);

  function scrollAppear4() {
    const articleText = document.querySelector(".article-text-4");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.add("appear");
    }
  }

  window.addEventListener("scroll", scrollAppear4);

  function scrollAppear4_4() {
    const articleText = document.querySelector("#contact");
    let introPosition = articleText.getBoundingClientRect().top;
    // changing the distance by changing the num 1.5
    let screenPosition = window.innerHeight / 1.25;

    if (introPosition < screenPosition) {
      articleText.classList.remove("hide");
      articleText.classList.add("appear");
    }
  }

  window.addEventListener("scroll", scrollAppear4_4);
});
