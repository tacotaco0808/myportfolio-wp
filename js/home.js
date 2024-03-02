  window.addEventListener("load",()=>{/*画像読み込み後のアニメーション */
    gsap.from(".mycontent-images", {
        delay:1,
        y: 10,
        autoAlpha: 0,
        duration: 1,
        ease: "power4.out",
        stagger: 0.3, // 0.02秒ごとに出現
      });
  });