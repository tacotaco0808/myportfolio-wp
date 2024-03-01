/*スマホ読み込みのみ */
function isSmartPhone() {
  if (window.matchMedia && window.matchMedia('(max-device-width: 640px)').matches) {
    
  } else {
    alert("スマホ、またはスマホ表示で見てね");
  }
}
isSmartPhone()
/*loading */
const images = document.getElementsByTagName('img'); //サイト内画像
const loadingArea = document.getElementById('bl_loading'); // ローディング画面全体
const percentIcon_1 = document.getElementById('bl_loadingIcon-1'); 
const percentIcon_2 = document.getElementById('bl_loadingIcon-2');
const percentIcon_3 = document.getElementById('bl_loadingIcon-3');
const loadingGauge = document.getElementById('bl_loadingGaugeMeter'); //読み込みゲージ
let imgCounting = 0;
let baseCounting = 0;
const gaugeWidth = 100; // ゲージの全体幅
let current;

// 画像の読み込み
for (let i = 0; i < images.length; i++) {
  const img = new Image(); 
  img.onload = function() {
    imgCounting += 1;
  }
  img.onerror = function() {
    imgCounting += 1;
  }
  img.src = images[i].src; // ソースのパスを設定
};
/*ローディングアニメーション */
gsap.to(".loading-circle",{
  backgroundColor: 'green',
  repeat: 2,

});

const nowLoading = setInterval(function () {//アニメーションレンダリング
  if(baseCounting <= imgCounting) {//即ローディングを終わらせない
    current = Math.floor(baseCounting / images.length * 100);//読み込み完了割合
    console.log(current);
    // ●%の●部分に数字を置き換える
    if(current <= 33 ){
      percentIcon_1.style.display = 'inline-block';
    }else if(current <= 66 ){
      percentIcon_2.style.display = 'inline-block';
    }else if(current <= 99){
      percentIcon_3.style.display = 'inline-block';
    }
    // リアルタイムで読み込まれるゲージ部分を反映させる
    loadingGauge.style.width = Math.floor(gaugeWidth / 100 * current) + '%';
    baseCounting += 1;

    if (baseCounting === images.length) {//読み込み完了
      setTimeout(function() {
        loadingArea.style.display = 'none';
        clearInterval(nowLoading);
      }, 300);
    }
  }
}, 50);

/*ハンバーガーメニュー */
document.querySelector(".hamburger").addEventListener("click", function () {
  this.classList.toggle("active");
  document.querySelector(".hamburger-menu").classList.toggle("active");
});


