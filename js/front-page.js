/*animation */
gsap.from(".wp-contents", {
    x: -500, // 100px右に移動
    duration:2,
    onToggle: (self) => console.log("toggled, isActive:", self.isActive)
  });

gsap.from(".view-down-mark",{
    y: 100,
    delay: 1,
    repeat: 2,
    repeatDelay:1.5
});

gsap.to(".top-menu-about",{
    x: -100,
    scrollTrigger: {
        trigger: ".top-menu-about", // アニメーションが始まるトリガーとなる要素
        start: "top 20%", // アニメーションが始まる位置
        end: "bottom 10%", // アニメーションが終わる位置
        scrub: true, // スクロール量に合わせてアニメーション
    },
});

gsap.to(".top-menu-illust",{
    onStart:()=>{
        document.querySelector('.top-menu-illust').src= wp_path +"/images/dot_illust-2.png";
    },
    scrollTrigger: {
        trigger: ".top-menu-illust", // アニメーションが始まるトリガーとなる要素
        start: "top -100px", // アニメーションが始まる位置
        end: "bottom -100px", // アニメーションが終わる位置
        
    }
   
});
