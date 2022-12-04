// // header

// const menu_btn_check = document.getElementById('menu_btn_check');
// const menu_list = document.getElementById('menu_list');
// const mask = document.getElementById('mask');
// const input = document.querySelectorAll('input');

// menu_btn_check.addEventListener('click', function (e) {
//   if (input) {
//     mask.style.display = 'block';
//     menu_list.style.left = '0';
//   } else {
//     mask.style.display = 'none';
//     menu_list.style.left = '-300px';
//   }
// }, false);



window.addEventListener('DOMContentLoaded', function () {

  const menu_btn_check = document.getElementById('menu_btn_check');

  menu_btn_check.addEventListener('change', function () {
    if (this.checked) { // ←重要なポイント！
      mask.style.display = 'block';
      menu_list.style.left = '0';
    } else {
      mask.style.display = 'none';
      menu_list.style.left = '-300px';
    }
  });
});

// 参考にしたサイト　→　https://web-engineer-wiki.com/javascript/checkbox-checked/#1



// 省略形

// const menu_btn_check = document.getElementById('menu_btn_check').addEventListener('click',function(e){
//   const mask = document.getElementById('mask').style.display='block';
//   const menu_list =document.getElementById('menu_list').style.left='0';
// },false);