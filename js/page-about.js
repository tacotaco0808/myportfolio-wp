ScrollTrigger.batch(".about-para",{
    start:"top center",
    onEnter:batch => gsap.to(batch,{autoAlpha: 1, stagger: 0.5,duration:3,}),
});